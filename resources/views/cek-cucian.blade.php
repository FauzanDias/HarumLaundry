@extends('layouts.app')

@section('content')
<nav class="navbar">

    <div class="logo">
        <span class="blue">Harum</span>
        <span class="gray">Laundry</span>
    </div>

    <ul>

        <li><a href="{{ url('/home') }}">Home</a></li>

        <li><a href="{{ url('/profil') }}">Profil Laundry</a></li>

        <li><a href="{{ url('/layanan') }}">Layanan</a></li>

        <li><a href="{{ url('/cabang') }}">Lokasi Cabang</a></li>

        <li><a href="{{ url('/hubungi') }}">Hubungi Kami</a></li>

        <li><a href="{{ url('/cek-cucian') }}" class="active">Cek Cucian</a></li>

    </ul>

</nav>

<section class="cek-cucian">

    <div class="banner">

        <h1>Cek Status Cucianmu</h1>

    </div>

    <div class="cek-box">

        <h2>Cek Status Cucianmu</h2>

        <form action="{{ route('cek.cucian') }}" method="POST">
            @csrf
            <input
                type="text"
                name="invoice"
                placeholder="Masukkan No Invoice, Nama, atau No HP"
                value="{{ $keyword ?? '' }}"
                required>

            <button type="submit">
                Lacak Status Cucian
            </button>
        </form>
    </div>

    @isset($orders)
    <div class="hasil">
        <h3>Hasil Pencarian untuk "{{ $keyword }}"</h3>
        
        @if($orders->isEmpty())
            <p style="text-align: center; color: #666; margin-top: 20px;">Pencarian tidak ditemukan. Silakan cek kembali nomor invoice, nama, atau no telepon Anda.</p>
        @else
            @foreach($orders as $order)
                <div class="order-card">
                    <table>
                        <tr>
                            <th>No Invoice</th>
                            <td style="font-weight: bold; color: #2c3e50;">{{ $order->kode_order }}</td>
                        </tr>
                        <tr>
                            <th>Nama Pelanggan</th>
                            <td>{{ $order->pelanggan->nama }}</td>
                        </tr>
                        <tr>
                            <th>No Telepon</th>
                            <td>{{ $order->pelanggan->telepon }}</td>
                        </tr>
                        <tr>
                            <th>Status Cucian</th>
                            <td>
                                <span class="badge bg-{{ $order->status_badge }}-lt">
                                    {{ $order->status_label }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Status Pembayaran</th>
                            <td>
                                @if($order->status_bayar === 'lunas')
                                    <span class="badge bg-success-lt">Lunas</span>
                                @else
                                    <span class="badge bg-danger-lt">Belum Bayar</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>{{ $order->tgl_masuk->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th>Estimasi Selesai</th>
                            <td>{{ $order->estimasi_selesai->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <th>Total Tagihan</th>
                            <td style="font-weight: bold;">{{ $order->total_formatted }}</td>
                        </tr>
                    </table>
                </div>
            @endforeach
        @endif
    </div>
    @endisset

</section>

@endsection