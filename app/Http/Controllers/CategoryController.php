<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('category.index', ['category' => Category::all()]);
    }


    public function create()
    {
        return view('category.create');
    }

    // store
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('category.index')
                        ->with('success', 'Category created successfully!');
    }


    public function edit(Category $category)
    {
        // $category is a single model thanks to route model binding
        return view('category.edit', compact('category'));
    }


    // update
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('category.index')
                        ->with('success', 'Category updated successfully!');
    }


    // ================================
    // DELETE CATEGORY
    // ================================
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()
            ->route('category.index')
            ->with('success', 'Category deleted successfully!');
    }

}
