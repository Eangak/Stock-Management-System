<x-app-layout>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-lg font-bold mb-4">Create Category</h2>

        <!-- Success Message -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Please fix the issues below.
                <ul class="mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('adjuststockin.store') }}" method="POST">
        @csrf

            <div class="mb-3">
                <label>Date</label>
                <input type="date" name="date" class="form-control" required value="{{ old('date') }}">
            </div>

            <div class="mb-3">
                <label>Product</label>
                <select name="product_id" class="form-control" required>
                    <option value="">-- Choose Product --</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Quantity</label>
                <input type="number" name="quantity" class="form-control" required min="1" value="{{ old('quantity') }}">
            </div>

            <div class="mb-3">
                <label>Unit Price</label>
                <input type="number" step="0.01" name="unit_price" class="form-control" value="{{ old('unit_price') }}">
            </div>

            <div class="mb-3">
                <label>Remark</label>
                <textarea name="remark" class="form-control" rows="3">{{ old('remark') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('adjuststockin.index') }}" class="btn btn-secondary">Cancel</a>

        </form>
    </div>

</x-app-layout>
