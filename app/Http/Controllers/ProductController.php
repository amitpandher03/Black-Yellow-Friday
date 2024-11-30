<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller 
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Sanitize search input
        $search = strip_tags($request->search);
        $category = filter_var($request->category, FILTER_VALIDATE_INT);
        
        $query = Product::with(['category', 'user']);
        
        if ($category) {
            $query->where('category_id', $category);
        }

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Sorting logic
        switch ($request->sort) {
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'name_asc':
                $query->orderBy('name', 'asc');
                break;
            case 'newest':
                $query->latest();
                break;
            default:
                $query->latest(); 
        }

        // Use a constant for pagination
        $perPage = config('app.pagination.products', 9);
        $products = $query->paginate($perPage)->withQueryString();
        $categories = Category::all();

        return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0|max:999999.99',
            'category_id' => 'required|exists:categories,id',
            'image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
                'dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
            ],
            'discount_percentage' => 'nullable|numeric|min:0|max:100',
            'is_featured' => 'nullable|boolean'
        ]);

        try {
            \DB::beginTransaction();

            if ($request->hasFile('image')) {
                $validated['image'] = $request->file('image')->store('products', 'public');
            }

            // Calculate discounted price
            $validated['discounted_price'] = !empty($validated['discount_percentage']) 
                ? $validated['price'] * (1 - $validated['discount_percentage'] / 100)
                : $validated['price'];

            $validated['stock'] = 100; 
            $validated['user_id'] = auth()->id();

            $product = Product::create($validated);

            \DB::commit();
            return redirect()->route('products.index')
                ->with('success', 'Product created successfully');

        } catch (\Exception $e) {
            \DB::rollBack();
            // Log the error
            \Log::error('Product creation failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to create product. Please try again.')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        if ($product->user_id !== auth()->user()->id) {
            return redirect()->route('products.index');
        }
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        // Authorization check
        if ($product->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif',
                'max:2048',
                'dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'
            ],
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0|max:999999.99',
            'discount_percentage' => 'nullable|numeric|min:0|max:100',
        ]);

        try {
            \DB::beginTransaction();

            if ($request->hasFile('image')) {
                // Delete old image
                if ($product->image) {
                    Storage::disk('public')->delete($product->image);
                }
                $validated['image'] = $request->file('image')->store('products', 'public');
            }

            // Calculate discounted price
            if (isset($validated['discount_percentage'])) {
                $validated['discounted_price'] = $validated['price'] * 
                    (1 - $validated['discount_percentage'] / 100);
            }

            $product->update($validated);

            \DB::commit();
            return redirect()->route('products.index')
                ->with('success', 'Product updated successfully');

        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error('Product update failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to update product. Please try again.')
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        try {
            \DB::beginTransaction();

            // Delete associated image
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $product->delete();

            \DB::commit();
            return redirect()->route('products.index')
                ->with('success', 'Product deleted successfully');

        } catch (\Exception $e) {
            \DB::rollBack();
            \Log::error('Product deletion failed: ' . $e->getMessage());
            return back()->with('error', 'Failed to delete product. Please try again.');
        }
    }
}
