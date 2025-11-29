<x-app-layout>

    <div class="bg-white p-6 shadow rounded-lg">

        <h2 class="text-lg font-bold mb-4">Edit Product</h2>

        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $product->name }}" class="w-full border p-2 rounded">
            </div>

            <div class="mb-3">
                <label>Unit</label>
                <select name="unit_id" class="w-full border p-2 rounded">
                    @foreach($unit as $u)
                        <option value="{{ $u->id }}" {{ $u->id == $product->unit_id ? 'selected' : '' }}>
                            {{ $u->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="w-full border p-2 rounded">
                    @foreach($category as $c)
                        <option value="{{ $c->id }}" {{ $c->id == $product->category_id ? 'selected' : '' }}>
                            {{ $c->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Remark</label>
                <textarea name="remark" class="w-full border p-2 rounded">{{ $product->remark }}</textarea>
            </div>

            <div class="mb-3">
                <label>Image</label><br>

                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-20 h-20 mb-2">
                @endif

                <input type="file" name="image">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>

        </form>

    </div>

</x-app-layout>
