<?php

namespace App\Http\Controllers;

use App\Models\AdjustStockIn;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\AdjustStockInRequest;

class AdjustStockInController extends Controller
{
    // Show list
    public function index()
    {
        $adjustStockIns = AdjustStockIn::with('product')->latest()->get();
        return view('adjuststockin.index', compact('adjustStockIns'));
    }

    // Show create form
    public function create()
    {
        $products = Product::all();
        return view('adjuststockin.create', compact('products'));
    }

    // Store new stock in
    public function store(AdjustStockInRequest $request)
    {
        AdjustStockIn::create($request->validated());

        return redirect()->route('adjuststockin.index')
            ->with('success', 'Adjust stock in created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        $adjust = AdjustStockIn::findOrFail($id);
        $products = Product::all();

        return view('adjuststockin.edit', compact('adjust', 'products'));
    }

    // Update stock in
    public function update(AdjustStockInRequest $request, $id)
    {
        $adjust = AdjustStockIn::findOrFail($id);

        $adjust->update($request->validated());

        return redirect()->route('adjuststockin.index')
            ->with('success', 'Adjust stock in updated successfully!');
    }

    // Delete stock in
    public function destroy($id)
    {
        $adjust = AdjustStockIn::findOrFail($id);
        $adjust->delete();

        return redirect()->route('adjuststockin.index')
            ->with('success', 'Adjust stock in deleted successfully!');
    }

}
