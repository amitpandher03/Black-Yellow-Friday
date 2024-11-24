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
                        <span class="label-text text-primary">Product Images</span>
                    </label>
                    <input type="file" 
                           name="images[]" 
                           multiple 
                           accept="image/*"
                           class="file-input file-input-bordered w-full @error('images') file-input-error @enderror" />
                    <div class="mt-2 grid grid-cols-3 gap-4">
                        @foreach($product->images as $image)
                            <div class="relative group">
                                <img src="{{ Storage::url($image->path) }}" 
                                     alt="Product Image" 
                                     class="w-full h-32 object-cover rounded-lg" />
                                {{-- Optional: Add delete image functionality --}}
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 
                                            transition-opacity flex items-center justify-center">
                                    <button type="button" 
                                            class="btn btn-sm btn-error"
                                            onclick="deleteImage({{ $image->id }})">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        @endforeach
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

{{-- Optional: Add JavaScript for image deletion --}}
<script>
function deleteImage(imageId) {
    if (confirm('Are you sure you want to delete this image?')) {
        // Add AJAX call to delete image
        fetch(`/product-images/${imageId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            }
        }).then(response => {
            if (response.ok) {
                // Refresh the page or remove the image element
                location.reload();
            }
        });
    }
}

// Optional: Add live calculation of discounted price
document.addEventListener('DOMContentLoaded', function() {
    const priceInput = document.querySelector('input[name="price"]');
    const discountInput = document.querySelector('input[name="discount_percentage"]');
    const discountedPriceInput = document.getElementById('discounted_price');

    function calculateDiscountedPrice() {
        const price = parseFloat(priceInput.value) || 0;
        const discount = parseFloat(discountInput.value) || 0;
        const discountedPrice = price - (price * discount / 100);
        discountedPriceInput.value = discountedPrice.toFixed(2);
    }

    priceInput.addEventListener('input', calculateDiscountedPrice);
    discountInput.addEventListener('input', calculateDiscountedPrice);
});
</script>
