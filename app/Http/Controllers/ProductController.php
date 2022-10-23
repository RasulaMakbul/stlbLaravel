<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $requestData = ([
            'name' => $request->name,
            'code' => $request->code,
            'origin' => $request->origin,
            'stock' => $request->stock,
            'costing' => $request->costing,
            'price' => $request->price
        ]);
        $product = Product::create($requestData);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $requestData = ([
            'name' => $request->name,
            'code' => $request->code,
            'origin' => $request->origin,
            'stock' => $request->stock,
            'costing' => $request->costing,
            'price' => $request->price
        ]);
        $product->update($requestData);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        return view('product.trash', compact('products'));
    }
    public function restore($id)
    {
        $products = Product::onlyTrashed()->find($id);
        $products->restore();
        return redirect()->route('product.trash');
    }
    public function delete($id)
    {
        try {
            $products = Product::onlyTrashed()->find($id);
            $products->forceDelete();
            return redirect()->route('product.trash')->withMessage('Successfully Deleted');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
