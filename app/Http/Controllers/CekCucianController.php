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

        // Mengubah dari pencarian 'like' menjadi pencarian '=' (exact match)
        $orders = \App\Models\Order::with('pelanggan')
            ->where('kode_order', $keyword)
            ->orWhereHas('pelanggan', function ($query) use ($keyword) {
                $query->where('nama', $keyword)
                      ->orWhere('telepon', $keyword);
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('cek-cucian', compact('orders', 'keyword'));
    }
}