<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $jmlProduct = Product::count();

        $inHand = Product::sum('initial_quantity');

        $lowStock = DB::table('products')->where('initial_quantity', '<=', 30)->get();

        $jmlLow = count($lowStock);

        return view('components.dashboard', [
            'jmlProduct' => $jmlProduct,
            'inHand' => $inHand,
            'lowStock' => $jmlLow,
        ]);
    }

    public function lowProduct()
    {
        $inHand = Product::sum('initial_quantity');

        // dd($name);

        return view('components.dashboard')->with('inHand', $inHand);
        // return view('components.dashboard', ['inHand' => $inHand]);
    }
}
