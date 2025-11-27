<x-app-layout>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-bold mb-4">Category</h2>

        <div class="flex gap-2 mb-4">
            <button 
                onclick="window.location='{{ route('category.create') }}'" 
                class="bg-green-600 text-white px-4 py-2 rounded">
                + Add New Category
            </button>
        </div>


        <table class="w-full border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2">No</th>
                    <th class="p-2">Name</th>
                    <th class="p-2">Remark</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($category as $rowcat)
                <tr class="border">
                    <td class="p-2">{{ $loop->iteration }}</td> <!-- auto numbering -->
                    <td class="p-2">{{ $rowcat->name }}</td>
                    <td class="p-2">{{ $rowcat->remark }}</td>
                    <td class="p-2">
                        <div class="flex items-center space-x-3">
                            <!-- Edit -->
                            <a href="{{ route('category.edit', $rowcat->id) }}">
                                <i class="fa-solid fa-pen-to-square text-blue-600 text-lg"></i>
                            </a>

                            <!-- Delete -->
                            <form action="{{ route('category.destroy', $rowcat->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 text-lg">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>


        </table>
    </div>

</x-app-layout>
