<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Http\Requests\StoreBuyerRequest;
use App\Http\Requests\UpdateBuyerRequest;
use Illuminate\Database\QueryException;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $buyers = Buyer::latest()->paginate(10);
        //dd($buyers);
        return view('buyer.index', compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBuyerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuyerRequest $request)
    {
        $requestData = ([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone
        ]);


        $buyer = Buyer::create($requestData);
        return redirect()->route('buyer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('buyer.show', compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        return view('buyer.edit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuyerRequest  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuyerRequest $request, Buyer $buyer)
    {
        $requestData = ([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone
        ]);


        $buyer->update($requestData);
        return redirect()->route('buyer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
        return redirect()->route('buyer.index');
    }
    public function trash()
    {
        $buyers = Buyer::onlyTrashed()->get();

        return view('buyer.trash', compact('buyers'));
    }
    public function restore($id)
    {
        $buyers = Buyer::onlyTrashed()->find($id);
        $buyers->restore();
        return redirect()->route('buyer.trash');
    }
    public function delete($id)
    {
        try {
            $buyers = Buyer::onlyTrashed()->find($id);
            $buyers->forceDelete();
            return redirect()->route('buyer.trash')->withMessage('Successfully Deleted');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
