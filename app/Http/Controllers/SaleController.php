<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaleRequest;
use App\Models\Buyer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::latest()->paginate(15);
        return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyers = Buyer::pluck('name', 'id');
        $products = Product::pluck('name', 'id');
        return view('sales.create', compact('buyers', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleRequest $request)
    {
        #dd($request->unitPrice);
        $requestData = ([
            'buyer_id' => $request->buyer,
            'date' => $request->date,
            'address' => $request->address,
            'phone' => $request->phone,
            'subTotal' => $request->subTotal,
        ]);
        $sale = Sale::create($requestData);
        #$sale->product()->attach([$request->productName, $request->quantity, $request->unitPrice, $request->price]);

        $saleData = [];
        for ($i = 0; $i < count($request->product_id); $i++) {
            $saleData[$request->product_id[$i]] = [
                'quantity' => $request->quantity[$i],
                'unitPrice' => $request->unitPrice[$i],
                'price' => $request->price[$i],
            ];
        }

        $sale->products()->attach($saleData);

        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        #dd($sale);
        //$sales = Sale::latest()->paginate(15);
        return view('sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        $buyers = Buyer::pluck('name', 'id');
        $products = Product::pluck('name', 'id');
        return view('sales.edit', compact('sale', 'buyers', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        #dd($request);
        $requestData = ([
            'buyer_id' => $request->buyer,
            'date' => $request->date,
            'address' => $request->address,
            'phone' => $request->phone,
            'subTotal' => $request->subTotal,
        ]);
        $sale->update($requestData);

        #$sale->product()->attach([$request->productName, $request->quantity, $request->unitPrice, $request->price]);

        $saleData = [];
        for ($i = 0; $i < count($request->product_id); $i++) {
            $saleData[$request->product_id[$i]] = [
                'quantity' => $request->quantity[$i],
                'unitPrice' => $request->unitPrice[$i],
                'price' => $request->price[$i],
            ];
        }


        $sale->products()->sync($saleData);


        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
