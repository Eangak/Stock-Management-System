<x-app-layout>

    <div class="bg-white p-6 shadow rounded-lg">

        <h2 class="text-lg font-bold mb-4">Create Product</h2>

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="w-full border p-2 rounded" required>
            </div>

            <div class="mb-3">
                <label>Unit</label>
                <select name="unit_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Select --</option>
                    @foreach($unit as $u)
                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Category</label>
                <select name="category_id" class="w-full border p-2 rounded" required>
                    <option value="">-- Select --</option>
                    @foreach($category as $c)
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Remark</label>
                <textarea name="remark" class="w-full border p-2 rounded"></textarea>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="w-full">
            </div>

            <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>

        </form>

    </div>

</x-app-layout>
