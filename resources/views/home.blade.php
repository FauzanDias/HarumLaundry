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

        <li><a href="{{ url('/cek-cucian') }}">Cek Cucian</a></li>

    </ul>

</nav>


<section class="hero">

    <div class="hero-image">

        <img src="{{ asset('images/washingMachine.png') }}" alt="Laundry">

    </div>

    <div class="hero-content">

        <h2 class="cozy">#1 Laundry di kotamu</h2>

        <h1>
            Bersih, Harum, dan Rapi Seketika
        </h1>

        <h3>
            Solusi Tepat untuk Pakaianmu
        </h3>

        <p>
            Cuci Bersih hingga seperti baru ⭐
        </p>

        <div style="display: flex; gap: 20px;">
        <a href="{{ url('/hubungi') }}" class="btn">
            Laundry Sekarang
        </a>    
        <a href="https://wa.me/6285183754455" class="btn">
            Hubungi Kami
        </a>
        </div>
    </div>
</section>

<section class="hero">
        <img src="{{ asset('images/alasan.jpg') }}" alt="Laundry">
</section>

<section class="layanan-page">

    <div class="layanan-header">

        <h1>BUKA SETIAP HARI</h1>

        <div class="subtitle">
            Mulai Pukul 08.00 - 22.00 WITA
        </div>

        <h3>
            Cuci Satuan & Laundry Kiloan
        </h3>

        <p>
            Terdapat 3 Cabang diseluruh Kota Tarakan
        </p>

    </div>

<section class="unggulan">

        <h2>Jenis Layanan</h2>

        <div class="card-container">

            <div class="card">

                <div class="icon">👕</div>

                <h3>Cuci Kiloan</h3>

                <p>
                    Harga ekonomis dan kualitas terbaik. Cocok untuk pakaian sehari-hari

                </p>

            </div>

            <div class="card">

                <div class="icon">🧸</div>

                <h3>Cuci Satuan</h3>

                <p>
                    Cocok untuk barang seperti Bed Cover, Selimut, Gorden, dan lainnya.
                </p>

            </div>

            <div class="card">

                <div class="icon">⚡</div>

                <h3>Paket Express</h3>

                <p>
                    Proses cepat dan hasil terbaik. Cuci hari ini, besok sudah seperti baru.
                </p>

            </div>

        </div>

    </section>


@endsection