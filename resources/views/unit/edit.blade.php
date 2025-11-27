<x-app-layout>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-bold mb-4">Edit Unit</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('unit.update', $unit->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Name</label>
                <input type="text" name="name" class="w-full border rounded p-2"
                       value="{{ old('name', $unit->name) }}"
                       required>
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remark -->
            <div class="mb-4">
                <label class="block font-medium mb-1">Remark</label>
                <textarea name="remark" class="w-full border rounded p-2">{{ old('remark', $unit->remark) }}</textarea>
                @error('remark')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-4">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                    Update
                </button>

                <a href="{{ route('unit.index') }}"
                   class="text-gray-600 hover:underline">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</x-app-layout>
