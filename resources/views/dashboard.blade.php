<x-app-layout>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-bold mb-4">Outgoing List</h2>

        <div class="flex gap-2 mb-4">
            <button class="bg-green-600 text-white px-4 py-2 rounded">
                + Add New Outgoing Product
            </button>

            <button class="bg-red-500 text-white px-4 py-2 rounded">
                Export PDF
            </button>

            <button class="bg-blue-500 text-white px-4 py-2 rounded">
                Export Excel
            </button>
        </div>

        <table class="w-full border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2">ID</th>
                    <th class="p-2">Product</th>
                    <th class="p-2">Customer</th>
                    <th class="p-2">Qty</th>
                    <th class="p-2">Date</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border">
                    <td class="p-2">1</td>
                    <td class="p-2">Product One</td>
                    <td class="p-2">Christine</td>
                    <td class="p-2">5</td>
                    <td class="p-2">2023-11-29</td>
                    <td class="p-2">
                        <div style="display: flex; justify-content:space-between">
                            <a href=""><i class="fa-solid fa-eye" style="color: green"></i></a>
                            <a href=""><i class="fa-solid fa-pen-to-square" style="color: blue"></i></a>
                            <button style="color: red; border: none;"><i class="fa-solid fa-trash-can"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
