<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Unit;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the dashboard with totals and outgoing products.
     */
    public function index()
    {
        // Get totals
        $totalCategory = Category::count();
        $totalUnit = Unit::count();
        $totalProduct = Product::count();
        $totalUser = User::count();

        // Return view with data
        return view('dashboard', compact(
            'totalCategory',
            'totalUnit',
            'totalProduct',
            'totalUser',
        ));
    }
}
