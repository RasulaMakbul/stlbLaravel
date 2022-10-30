<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Payment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payment = Payment::all();
        return view('payments.index', compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyers = Buyer::pluck('name', 'id');
        return view('payments.create',compact('buyers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rg = new Payment();
        $rg->date = $request->date;
        $rg->buyer_id = $request->buyer_id;
        $rg->total_due = $request->total_due;
        $rg->amount = $request->amount;
        $rg->remainder = $request->remainder;
        $rg->method = $request->method;
        $rg->save();
        return redirect()->route('payment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        $buyers = Buyer::pluck('name', 'id');
        return view('payments.edit', compact('payment','buyers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        $requestData = ([
            'date' => $request->name,
            'buyer_id' => $request->buyer_id,
            'total_due' => $request->total_due,
            'amount' => $request->amount,
            'remainder' => $request->remainder,
            'method' => $request->method
        ]);
        $payment->update($requestData);
        return redirect()->route('payments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index');
    }
    public function trash()
    {
        $payments = Payment::onlyTrashed()->get();
        return view('payments.trash', compact('payments'));
    }
    public function restore($id)
    {
        $payments = Payment::onlyTrashed()->find($id);
        $payments->restore();
        return redirect()->route('payments.trash');
    }
    public function delete($id)
    {
        try {
            $payments = Payment::onlyTrashed()->find($id);
            $payments->forceDelete();
            return redirect()->route('payments.trash')->withMessage('Successfully Deleted');
        } catch (QueryException $e) {
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
