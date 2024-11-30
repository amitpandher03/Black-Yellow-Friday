<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            {{-- Header --}}
            <div class="mb-6">
                <div class="text-sm breadcrumbs mb-12">
                    <ul class="flex items-center space-x-2">
                        <li><a href="{{ route('products.index') }}" class="text-primary hover:text-primary-focus transition-colors duration-200">Products</a></li>
                        <li class="flex items-center before:content-['/'] before:mx-2 before:text-gray-400">Edit {{ $product->name }}</li>
                    </ul>
                </div>
                <h1 class="text-6xl font-bold text-base-content tracking-tight">
                    Edit Product
                </h1>
                <p class="text-gray-400 mt-2">Update the product information.</p>
            </div>

            {{-- Form --}}
            <form action="{{ route('products.update', $product->id) }}" 
                  method="POST" 
                  enctype="multipart/form-data" 
                  class="space-y-6">
                @csrf
                @method('PUT')
                
                {{-- Display validation errors if any --}}
                @if ($errors->any())
                    <div class="alert alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

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

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Features</span>
                    </label>
                    <textarea name="features" 
                              class="textarea textarea-bordered h-24" 
                              placeholder="Enter features, one per line">{{ old('features', $product->features) }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Price</span>
                        </label>
                        <input type="number" 
                               name="price" 
                               value="{{ old('price', $product->price) }}" 
                               step="0.01" 
                               class="input input-bordered @error('price') input-error @enderror" 
                               required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Category</span>
                        </label>
                        <select name="category_id" class="select select-bordered @error('category_id') select-error @enderror" required>
                            <option value="" disabled>Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Product Image</span>
                    </label>
                    <input type="file" 
                           name="image" 
                           accept="image/*"
                           class="file-input file-input-bordered w-full @error('image') file-input-error @enderror" />
                    <div class="mt-2">
                        @if($product->image && Storage::disk('public')->exists($product->image))
                            <div class="relative group card bg-base-100 shadow-2xl overflow-hidden rounded-3xl">
                                <img src="{{ Storage::url($product->image) }}" 
                                     alt="Product Image" 
                                     class="w-full h-64 object-cover transform hover:scale-110 transition duration-700 ease-in-out" />
                            </div>
                        @elseif($product->image)
                            <div class="relative group card bg-base-100 shadow-2xl overflow-hidden rounded-3xl">
                                <img src="{{ $product->image }}" 
                                     alt="Product Image" 
                                     class="w-full h-64 object-cover transform hover:scale-110 transition duration-700 ease-in-out" />
                            </div>
                        @else
                            <div class="text-center py-8 bg-base-200 rounded-xl">
                                <p class="text-gray-500">No image uploaded yet</p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Discount Percentage</span>
                        </label>
                        <input type="number" 
                               name="discount_percentage" 
                               value="{{ old('discount_percentage', $product->discount_percentage) }}"
                               min="0" 
                               max="100" 
                               step="0.01" 
                               class="input input-bordered @error('discount_percentage') input-error @enderror" />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Discounted Price</span>
                        </label>
                        <input type="number" 
                               id="discounted_price" 
                               value="{{ $product->discounted_price }}"
                               class="input input-bordered" 
                               disabled />
                    </div>
                </div>

                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text text-primary">Featured Product</span> 
                        <input type="checkbox" 
                               name="is_featured" 
                               value="1"
                               {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}
                               class="checkbox checkbox-primary" />
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
                <form action="{{ route('products.destroy', $product->id) }}" 
                      method="POST" 
                      onsubmit="return confirm('Are you sure you want to delete this product? This action cannot be undone.')">
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

