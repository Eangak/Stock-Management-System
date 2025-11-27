<x-app-layout>

    <div class="bg-white p-6 shadow rounded-lg">
        <h2 class="text-lg font-bold mb-4">Stock List</h2>
        
        <div class="flex gap-2 mb-4">
            <button 
                onclick="window.location='{{ route('adjuststockin.create') }}'" 
                class="bg-green-600 text-white px-4 py-2 rounded">
                + Add Stock In List
            </button>
        </div>

        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">Date</th>
                    <th class="p-2 border">Product Name</th>
                    <th class="p-2 border">Quantity</th>
                    <th class="p-2 border">Unit Price</th>
                    <th class="p-2 border">Total</th>
                    <th class="p-2 border">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($adjustStockIns as $item)
                <tr>
                    <td class="p-2 border">{{ $item->date }}</td>

                    <td class="p-2 border">
                        {{ $item->product->name ?? 'N/A' }}
                    </td>

                    <td class="p-2 border">{{ $item->quantity }}</td>

                    <td class="p-2 border">
                        {{ number_format($item->unit_price ?? 0, 2) }}
                    </td>

                    <td class="p-2 border">
                        {{ number_format(($item->quantity * ($item->unit_price ?? 0)), 2) }}
                    </td>

                    <td class="p-2 border">
                        <div class="flex gap-2">
                            <a href="{{ route('adjuststockin.edit', $item->id) }}" 
                               class="bg-blue-600 text-white px-3 py-1 rounded">
                                Edit
                            </a>

                            <form action="{{ route('adjuststockin.destroy', $item->id) }}" 
                                  method="POST" 
                                  onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button 
                                    class="bg-red-600 text-white px-3 py-1 rounded"
                                    type="submit">
                                    Delete
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
