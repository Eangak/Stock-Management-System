<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Unit;
use App\Models\Category;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ProductRequest;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // LIST ALL PRODUCTS
    public function index()
    {
        $product = Product::with(['unit', 'category'])->latest()->paginate(5);
        return view('product.index', compact('product'));
    }

    // CREATE FORM
    public function create()
    {
        $unit = Unit::all();        // table: unit
        $category = Category::all(); // table: category

        return view('product.create', compact('unit', 'category'));
    }


    // STORE PRODUCT
    public function store(ProductRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('product', 'public');
        }

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    // EDIT FORM
    public function edit(Product $product)
    {
        $unit = Unit::all();
        $category = Category::all();
        return view('product.edit', compact('product', 'unit', 'category'));
    }

    // UPDATE PRODUCT
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $data['image'] = $request->file('image')->store('product', 'public');
        }

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product updated successfully!');
    }

    // DELETE PRODUCT
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }
}
