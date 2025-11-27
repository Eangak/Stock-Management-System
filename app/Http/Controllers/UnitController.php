<?php

namespace App\Http\Controllers;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\UnitRequest;

class UnitController extends Controller
{
    //
    public function index()
    {
        return view('unit.index', ['unit' => Unit::all()]);
    }


    public function create()
    {
        return view('unit.create');
    }

    // store
    public function store(UnitRequest $request)
    {
        Unit::create($request->validated());

        return redirect()->route('unit.index')
                        ->with('success', 'Unit created successfully!');
    }


    public function edit(Unit $unit)
    {
        // $unit is a single model thanks to route model binding
        return view('unit.edit', compact('unit'));
    }


    // update
    public function update(UnitRequest $request, Unit $unit)
    {
        $unit->update($request->validated());

        return redirect()->route('unit.index')
                        ->with('success', 'Unit updated successfully!');
    }


    // ================================
    // DELETE
    // ================================
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()
            ->route('unit.index')
            ->with('success', 'Unit deleted successfully!');
    }
}
