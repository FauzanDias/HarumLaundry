<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    // ==========================================
    // BAGIAN PELANGGAN
    // ==========================================
    
    // Menampilkan halaman form cek status
    public function formCek()
    {
        return view('laundry.cek-pesanan');
    }

    // Memproses pencarian resi
    public function cekStatus(Request $request)
    {
        $request->validate([
            'id_pesanan' => 'required|string'
        ]);

        $id_pesanan = $request->input('id_pesanan');
        $pesanan = Pesanan::find($id_pesanan);

        return view('laundry.cek-pesanan', compact('pesanan', 'id_pesanan'));
    }

    // ==========================================
    // BAGIAN ADMIN
    // ==========================================

    // Menampilkan semua daftar pesanan di halaman admin
    public function indexAdmin()
    {
        // Mengambil semua data pesanan, diurutkan dari yang terbaru
        $pesanans = Pesanan::latest()->get();
        return view('admin.index', compact('pesanans'));
    }

    // Menampilkan form tambah pesanan baru
    public function create()
    {
        return view('admin.create');
    }

    // Menyimpan data pesanan baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'id_pesanan' => 'required|string|unique:pesanans,id_pesanan',
            'nama_pelanggan' => 'required|string|max:255',
        ]);

        Pesanan::create([
            'id_pesanan' => $request->id_pesanan,
            'nama_pelanggan' => $request->nama_pelanggan,
            'status' => 'Belum' // Default saat pertama kali masuk
        ]);

        return redirect()->route('admin.index')->with('success', 'Pesanan baru berhasil ditambahkan!');
    }

    // Mengupdate status pesanan (Misal: dari Belum ke Dicuci)
    public function updateStatus(Request $request, $id_pesanan)
    {
        $request->validate([
            'status' => 'required|in:Belum,Dicuci,Selesai'
        ]);

        $pesanan = Pesanan::find($id_pesanan);
        
        if ($pesanan) {
            $pesanan->status = $request->status;
            $pesanan->save();
            return redirect()->route('admin.index')->with('success', 'Status pesanan ' . $id_pesanan . ' berhasil diperbarui!');
        }

        return redirect()->route('admin.index')->with('error', 'Pesanan tidak ditemukan.');
    }
}

