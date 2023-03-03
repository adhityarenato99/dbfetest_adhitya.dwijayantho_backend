<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use DB;

class TransactionController extends Controller
{
    function index(Request $request) {

        $query = DB::table('transactions')
            ->join('merchants', 'merchants.Merchant_ID', '=', 'transactions.Merchant_ID')
            ->select('transactions.*', 'merchants.Merchant_name', 'merchants.Merchant_address');

        if ($s = $request->input('s')) {
            $query->whereRaw("Merchant_name LIKE '%" . $s . "%'");
        }

        if ($sort = $request->input('sort')) {
            $query->orderBy('amount', $sort);
        }

        if ($perPage = intval($request->input('limit')) ? $perPage = intval($request->input('limit')) : 3);

        // $perPage = 10;
        $page = $request->input('page', 1);
        $total = $query->count();

        $result = $query->offset(($page - 1) * $perPage)->limit($perPage)->get();

        return [
            'data' => $result,
            'total' => $total,
            'page' => $page,
            'limit' => $perPage,
            'last_page' => ceil($total / $perPage)
        ];

    }
}
