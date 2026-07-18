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

        {{-- <li><a href="#">Hubungi Kami</a></li> --}}

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

        <a href="#" class="btn">
            Laundry Sekarang
        </a>
    </div>
</section>
@endsection