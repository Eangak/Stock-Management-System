<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdjustStockIn;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class StockInReportController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all(); // for filter dropdown
        $product_id = $request->product_id;
        $from = $request->from;
        $to = $request->to;

        $query = AdjustStockIn::select(
                'product_id',
                DB::raw('date'),
                DB::raw('SUM(quantity) as total_quantity'),
                DB::raw('SUM(quantity * unit_price) as total_amount')
            )
            ->groupBy('product_id', 'date')
            ->orderBy('product_id')
            ->orderBy('date', 'asc');

        if ($product_id) {
            $query->where('product_id', $product_id);
        }

        if ($from) {
            $query->where('date', '>=', $from);
        }

        if ($to) {
            $query->where('date', '<=', $to);
        }

        $reports = $query->with('product')->get();

        // Calculate total quantity and amount per product
        $totals = [];
        if ($product_id) {
            $totals = AdjustStockIn::where('product_id', $product_id)
                        ->when($from, fn($q) => $q->where('date','>=',$from))
                        ->when($to, fn($q) => $q->where('date','<=',$to))
                        ->select(DB::raw('SUM(quantity) as total_qty, SUM(quantity*unit_price) as total_amt'))
                        ->first();
        }

        return view('report.stockin', compact('reports', 'products', 'product_id', 'from', 'to', 'totals'));
    }
}
