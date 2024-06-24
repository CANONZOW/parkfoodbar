<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $memberships = Membership::with('member')->simplePaginate(4);

        $product = Product::with('galleries', 'category')->get();

        $category = ProductCategory::all();
        return view('pages.dashboard.index', compact(
            'memberships',
            'product',
            'category',

        ));
    }
}
