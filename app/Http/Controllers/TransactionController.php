<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::orderByDesc('id')->limit(5)->get();
        $transactionsResources = TransactionResource::collection(
            $transactions
        )->toArray(null);


        return view('pages.transactions.index', [
            'response' => [
                'entities' => [
                    'transactions' => $transactionsResources
                ]
            ]
        ]);
    }
}
