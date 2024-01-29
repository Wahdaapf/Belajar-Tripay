<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Payment\TripayController;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request) {
        //kirim ke tripay
        $tripay = new TripayController();
        $transaction = $tripay->requestTransaction($request->method, $request->qty);

        //kirim ke db
        Transaction::create([
            'user_id' => '1',
            'produk' => 'testing',
            'reference' => $transaction->reference,
            'merchant_ref' => $transaction->merchant_ref,
            'total_amount' => $transaction->amount,
            'status' => $transaction->status
        ]);

        return redirect()->route('transaction.detail', ['reference'=>$transaction->reference]);
    }

    public function detail($reference) {
        $tripay = new TripayController();
        $detail = $tripay->detailTransaction($reference);
        return view('tripay.detail', ['detail'=>$detail]);
    }

    public function index() {
        $transactions = Transaction::latest()->get();
        return view('tripay.index', ['transactions'=>$transactions]);
    }
}
