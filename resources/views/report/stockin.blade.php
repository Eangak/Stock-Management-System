<x-app-layout>
    <div class="bg-white p-6 shadow rounded-lg">
        <h2 class="text-lg font-bold mb-4">Stock In Report</h2>

        <!-- Filter Form -->
        <form method="GET" action="{{ route('report.stockin') }}" class="flex gap-2 mb-4 items-end">
            <div>
                <label>Product</label>
                <select name="product_id" class="form-control">
                    <option value="">-- All Products --</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $product_id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>From</label>
                <input type="date" name="from" class="form-control" value="{{ $from }}">
            </div>
            <div>
                <label>To</label>
                <input type="date" name="to" class="form-control" value="{{ $to }}">
            </div>
            <div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Filter</button>
            </div>
        </form>

        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">Date</th>
                    <th class="p-2 border">Product</th>
                    <th class="p-2 border">Quantity</th>
                    <th class="p-2 border">Amount</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reports as $report)
                    <tr>
                        <td class="p-2 border">{{ $report->date }}</td>
                        <td class="p-2 border">{{ $report->product->name ?? 'N/A' }}</td>
                        <td class="p-2 border">{{ $report->total_quantity }}</td>
                        <td class="p-2 border">{{ number_format($report->total_amount, 2) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-2 border text-center">No records found.</td>
                    </tr>
                @endforelse
            </tbody>
            @if($totals)
            <tfoot>
                <tr class="bg-gray-200 font-bold">
                    <td colspan="2" class="p-2 border text-right">Total</td>
                    <td class="p-2 border">{{ $totals->total_qty }}</td>
                    <td class="p-2 border">{{ number_format($totals->total_amt, 2) }}</td>
                </tr>
            </tfoot>
            @endif
        </table>
    </div>
</x-app-layout>
