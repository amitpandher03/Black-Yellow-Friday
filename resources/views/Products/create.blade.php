<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            {{-- Header --}}
            <div class="mb-6">
                <h1 class="text-3xl font-bold">
                    <span class="text-primary">Add New</span> Product
                </h1>
                <p class="text-gray-400 mt-2">Fill in the details for the new product.</p>
            </div>

            {{-- Form --}}
            <form action="{{ route('products.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data" 
                  class="space-y-6 product-form">
                @csrf

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
                    <input type="text" 
                           name="name" 
                           value="{{ old('name') }}"
                           class="input input-bordered @error('name') input-error @enderror" 
                           required />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Description</span>
                    </label>
                    <textarea name="description" 
                              class="textarea textarea-bordered h-24 @error('description') textarea-error @enderror" 
                              required>{{ old('description') }}</textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Price</span>
                        </label>
                        <input type="number" 
                               name="price" 
                               value="{{ old('price') }}"
                               step="0.01" 
                               class="input input-bordered @error('price') input-error @enderror" 
                               required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Category</span>
                        </label>
                        <select name="category_id" 
                                class="select select-bordered @error('category_id') select-error @enderror" 
                                required>
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" 
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Discount Percentage</span>
                        </label>
                        <input type="number" 
                               name="discount_percentage" 
                               value="{{ old('discount_percentage') }}"
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
                               class="input input-bordered" 
                               disabled />
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Product Image</span>
                    </label>
                    <input type="file" 
                           name="image" 
                           accept="image/*"
                           class="file-input file-input-bordered w-full @error('image') file-input-error @enderror" 
                           required />
                    <div class="mt-2 grid grid-cols-3 gap-4" id="imagePreviewContainer">
                        {{-- Preview images will be inserted here by JavaScript --}}
                    </div>
                </div>

                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text text-primary">Featured Product</span> 
                        <input type="checkbox" 
                               name="is_featured" 
                               value="1"
                               {{ old('is_featured') ? 'checked' : '' }}
                               class="checkbox checkbox-primary" />
                    </label>
                </div>

                <div class="flex justify-end gap-4 mt-8">
                    <a href="{{ route('products.index') }}" class="btn">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Create Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
