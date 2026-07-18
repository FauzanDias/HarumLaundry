@extends('layouts.app')

@section('content')
<nav class="navbar">

    <div class="logo">
        <span class="blue">Harum</span>
        <span class="gray">Laundry</span>
    </div>

    <ul>

        <li><a href="{{ url('/home') }}" class="active">Home</a></li>

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
                placeholder="Masukkan No Invoice Disini"
                required>

            <button type="submit">

                Lacak Status Cucian

            </button>

        </form>

    </div>


    @isset($data)

    <div class="hasil">

        <h3>Hasil Pencarian</h3>

        <table>

            <tr>
                <th>No Invoice</th>
                <td>{{ $data->invoice }}</td>
            </tr>

            <tr>
                <th>Nama Pelanggan</th>
                <td>{{ $data->nama }}</td>
            </tr>

            <tr>
                <th>Status</th>

                <td>

                    <span class="status">

                        {{ $data->status }}

                    </span>

                </td>

            </tr>

            <tr>

                <th>Tanggal Masuk</th>

                <td>{{ $data->tanggal }}</td>

            </tr>

            <tr>

                <th>Estimasi Selesai</th>

                <td>{{ $data->estimasi }}</td>

            </tr>

        </table>

    </div>

    @endisset

</section>

@endsection