<x-app-layout>

    <div class="bg-white p-6 shadow rounded-lg">
        <h2 class="text-lg font-bold mb-4">Product List</h2>

        <div class="mb-3">
            <a href="{{ route('product.create') }}" 
               class="bg-green-600 text-white px-4 py-2 rounded">
               + Add Product
            </a>
        </div>

        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">Image</th>
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Unit</th>
                    <th class="p-2 border">Category</th>
                    <th class="p-2 border">Remark</th>
                    <th class="p-2 border">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($product as $p)
                <tr>
                    <td class="p-2 border">
                        @if($p->image)
                            <img src="{{ asset('storage/' . $p->image) }}" class="w-16 h-16 object-cover">
                        @else
                            <span>No Image</span>
                        @endif
                    </td>

                    <td class="p-2 border">{{ $p->name }}</td>
                    <td class="p-2 border">{{ $p->unit->name }}</td>
                    <td class="p-2 border">{{ $p->category->name }}</td>
                    <td class="p-2 border">{{ $p->remark }}</td>

                    <td class="p-2 border flex space-x-3">
                        <a href="{{ route('product.edit', $p->id) }}" class="text-blue-600">Edit</a>

                        <form action="{{ route('product.destroy', $p->id) }}" method="POST"
                              onsubmit="return confirm('Delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">Delete</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
