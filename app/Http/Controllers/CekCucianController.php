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
        // Contoh data sementara
        $data = (object)[
            'invoice' => $request->invoice,
            'nama' => 'Agil',
            'status' => 'Sedang Dicuci',
            'tanggal' => '06 Juli 2026',
            'estimasi' => '07 Juli 2026'
        ];

        return view('cek-cucian', compact('data'));
    }
}