<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            {{-- Header --}}
            <div class="mb-6">
                <h1 class="text-3xl font-bold">
                    <span class="text-primary">Edit</span> Product
                </h1>
                <p class="text-gray-400 mt-2">Update the product information.</p>
            </div>

            {{-- Form --}}
            <form action="{{ route('products.update', $product->id) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')
                
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Product Name</span>
                    </label>
                    <input type="text" name="name" value="{{ $product->name }}" class="input input-bordered" required />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Description</span>
                    </label>
                    <textarea name="description" class="textarea textarea-bordered h-24" required>{{ $product->description }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Price</span>
                        </label>
                        <input type="number" name="price" value="{{ $product->price }}" step="0.01" class="input input-bordered" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Discount Percentage</span>
                        </label>
                        <input type="number" name="discount_percentage" value="{{ $product->discount_percentage }}" 
                               min="0" max="100" step="0.01" class="input input-bordered" />
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Discounted Price</span>
                    </label>
                    <input type="number" id="discounted_price" value="{{ $product->discounted_price }}" 
                           class="input input-bordered" disabled />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Category</span>
                    </label>
                    <select name="category" class="select select-bordered" required>
                        <option value="" disabled >Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Product Image</span>
                    </label>
                    <input type="file" class="file-input file-input-bordered w-full" />
                    <div class="mt-2">
                        <img src="https://placehold.co/300x200" alt="Current Image" class="w-32 rounded-lg" />
                    </div>
                </div>

                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text text-primary">Featured Product</span> 
                        <input type="checkbox" name="featured" class="checkbox checkbox-primary" checked />
                    </label>
                </div>

                <div class="flex justify-end gap-4 mt-8">
                    <a href="{{ route('products.index') }}" class="btn">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Update Product
                    </button>
                </div>
            </form>

            {{-- Delete Button --}}
            <div class="mt-12 border-t border-primary/20 pt-6">
                <form action="{{ route('products.destroy', 1) }}" method="POST" 
                      onsubmit="return confirm('Are you sure you want to delete this product?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-error w-full">
                        Delete Product
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
