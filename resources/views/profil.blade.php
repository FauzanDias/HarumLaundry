@extends('layouts.app')

@section('content')

<nav class="navbar">

    <div class="logo">
        <span class="blue">Harum</span>
        <span class="gray">Laundry</span>
    </div>

    <ul>

        <li><a href="{{ url('/home') }}">Home</a></li>

        <li><a href="{{ url('/profil') }}" class="active">Profil Laundry</a></li>

        <li><a href="{{ url('/layanan') }}">Layanan</a></li>

        <li><a href="{{ url('/cabang') }}">Lokasi Cabang</a></li>

        <li><a href="{{ url('/hubungi') }}">Hubungi Kami</a></li>

        <li><a href="{{ url('/cek-cucian') }}">Cek Cucian</a></li>

    </ul>

</nav>

<section class="profil">

    <!-- ================= Tentang ================= -->

    <div class="about">

        <div class="about-image">
            <img src="{{ asset('images/toko.jpg') }}" alt="Harum Laundry">
        </div>

        <div class="about-content">

            <img src="{{ asset('images/logo.png') }}" class="logo-profil">

            <h2>#1 Laundry di kotamu</h2>

            <p>
                <b>Harum Laundry</b> adalah layanan laundry di Kota Tarakan yang
                melayani laundry kiloan dan satuan.
                Kami menjamin kualitas pakaian yang tetap bersih,
                rapi, wangi, cepat dan ekonomis.
            </p>

            <p>
                Kami menerima laundry pakaian, bed cover,
                selimut, karpet, helm,
                hingga berbagai perlengkapan rumah tangga lainnya.
            </p>

            <div class="info-box">

                <h4>🕒 3 Jam lebih dari cukup!</h4>

                <p>
                    Cukup luangkan waktu Anda selama 3 jam dan
                    pakaian siap digunakan kembali.
                </p>

            </div>

        </div>

    </div>
    <br>

    <hr>


    <!-- ================= MAP ================= -->

    <section class="maps">

        <h2>Cabang Kami di Google Maps</h2>

        <div class="maps-content">

            <div class="maps-frame">

                <iframe
                    src="https://www.google.com/maps?q=Harum+Laundry,+ruko+permata+indah,+Jl.+Mulawarman+perumnas+no.+B1,+Karang+Anyar,+Kota+Tarakan&output=embed"
                    width="100%"
                    height="280"
                    style="border:0;"
                    allowfullscreen
                    loading="lazy">
                </iframe>

            </div>

            <div class="maps-info">

                <h4>
                    Jl. Mulawarman, Karang Anyar,
                    Tarakan Barat
                </h4>

                <p>

                    Tempat laundry kami berada tepat di pusat kota
                    sehingga mudah dijangkau dari seluruh wilayah Tarakan.

                </p>

                <a href="#" class="btn">
                    📍 Buka GMaps
                </a>

            </div>

        </div>

    </section>



    <!-- ================= Keunggulan ================= -->

    <section class="unggulan">

        <h2>Keunggulan yang dimiliki</h2>

        <div class="card-container">

            <div class="card">

                <div class="icon">📍</div>

                <h3>Cabang yang merata</h3>

                <p>

                    Terdapat beberapa cabang di Kota Tarakan
                    sehingga pelanggan lebih mudah menjangkau outlet.

                </p>

            </div>

            <div class="card">

                <div class="icon">🛵</div>

                <h3>Gratis antar jemput</h3>

                <p>

                    Gratis pickup dan delivery
                    untuk area tertentu.

                </p>

            </div>

            <div class="card">

                <div class="icon">👕</div>

                <h3>3 Jam Siap Pakai</h3>

                <p>

                    Laundry Express selesai hanya
                    dalam waktu sekitar 3 jam.

                </p>

            </div>

        </div>

    </section>



    <!-- ================= CTA ================= -->

    <section class="cta">

        <h2>Lakukan Pemesanan Sekarang</h2>

        <div class="button-group">

            <a href="#" class="btn">
                Hubungi Outlet
            </a>

            <a href="#" class="btn btn-outline">
                Menu Layanan
            </a>

        </div>

    </section>

</section>

@endsection