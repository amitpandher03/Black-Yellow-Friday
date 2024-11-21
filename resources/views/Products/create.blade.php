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
            <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Product Name</span>
                    </label>
                    <input type="text" name="name" class="input input-bordered" required />
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Description</span>
                    </label>
                    <textarea name="description" class="textarea textarea-bordered h-24" required></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Price</span>
                        </label>
                        <input type="number" name="price" step="0.01" class="input input-bordered" required />
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text text-primary">Category</span>
                        </label>
                        <select name="category" class="select select-bordered" required>
                            <option value="">Select Category</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="home">Home</option>
                        </select>
                    </div>
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-primary">Product Image</span>
                    </label>
                    <input type="file" class="file-input file-input-bordered w-full" />
                </div>

                <div class="form-control">
                    <label class="label cursor-pointer">
                        <span class="label-text text-primary">Featured Product</span> 
                        <input type="checkbox" name="featured" class="checkbox checkbox-primary" />
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
