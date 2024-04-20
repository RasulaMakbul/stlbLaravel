<?php

namespace App\Http\Controllers;

use App\Models\AshuliaStock;
use App\Models\Product;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = AshuliaStock::all();
        $products = Product::all();
        $lastStock = AshuliaStock::latest()->first();
        return view('stock.index', compact('stocks', 'products', 'lastStock'));
    }

    public function destroy()
    {
        //
    }
}
