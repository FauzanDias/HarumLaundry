<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekCucianController extends Controller
{
    public function index()
    {
        return view('cek-cucian');
    }

    public function cek(Request $request)
    {
        $keyword = $request->invoice;

        $orders = \App\Models\Order::with('pelanggan')
            ->where('kode_order', 'like', "%{$keyword}%")
            ->orWhereHas('pelanggan', function ($query) use ($keyword) {
                $query->where('nama', 'like', "%{$keyword}%")
                      ->orWhere('telepon', 'like', "%{$keyword}%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('cek-cucian', compact('orders', 'keyword'));
    }
}