<x-app-layout>

    <!-- Dashboard Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <!-- Total Categories -->
        <div class="bg-blue-500 text-white p-6 rounded-lg shadow flex flex-col items-center">
            <h3 class="text-lg font-semibold">Total Categories</h3>
            <span class="text-3xl font-bold mt-2">{{ $totalCategory }}</span>
        </div>

        <!-- Total Units -->
        <div class="bg-green-500 text-white p-6 rounded-lg shadow flex flex-col items-center">
            <h3 class="text-lg font-semibold">Total Units</h3>
            <span class="text-3xl font-bold mt-2">{{ $totalUnit }}</span>
        </div>

        <!-- Total Products -->
        <div class="bg-yellow-500 text-white p-6 rounded-lg shadow flex flex-col items-center">
            <h3 class="text-lg font-semibold">Total Products</h3>
            <span class="text-3xl font-bold mt-2">{{ $totalProduct }}</span>
        </div>

        <!-- Total Users -->
        <div class="bg-purple-500 text-white p-6 rounded-lg shadow flex flex-col items-center">
            <h3 class="text-lg font-semibold">Total Users</h3>
            <span class="text-3xl font-bold mt-2">{{ $totalUser }}</span>
        </div>
    </div>

</x-app-layout>
