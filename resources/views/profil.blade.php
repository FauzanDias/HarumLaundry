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
            <img src="{{ asset('images/profil.jpg') }}" alt="Harum Laundry">
        </div>

        <div class="about-content">

            <!-- <img src="{{ asset('images/profile.png') }}" class="logo-profil"> -->

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
                    Harum Laundry kini telah memiliki 3 cabang yang terbagi pada 3 kecamatan Kota Tarakan. 
                    Yaitu, Tarakan Utara, Tarakan Barat, dan Tarakan Tengah.
                    Kini akses untuk mencuci pakaian sudah sangat mudah dengan menggunakan jasa Harum Laundry.
                </p>

            </div>

            <div class="card">

                <div class="icon">🛵</div>

                <h3>Gratis antar jemput</h3>

                <p>
                    Kami menyediakan layanan gratis untuk pengambilan dan pengiriman cucian kepada pelanggan kami. 
                    Dengan adanya 3 cabang yang kami miliki dapat mempermudah pelanggan untuk melakukan pengiriman 
                    serta pengambilan pada cabang terdekat
                </p>

            </div>

            <div class="card">

                <div class="icon">👕</div>

                <h3>3 Jam Siap Pakai</h3>

                <p>
                    Cukup 3 jam saja hingga pakaianmu bersih kembali, layanan express ini sudah termasuk cuci kering-setrika-pewangi.
                    Mulai dari 30.000/kg dengan minimal cucian 3kg.
                </p>

            </div>

        </div>

    </section>



    <!-- ================= CTA ================= -->

    <section class="cta">

        <h2>Lakukan Pemesanan Sekarang</h2>

        <div class="button-group">

            <a href="{{ url('/cabang') }}" class="btn">
                Hubungi Outlet
            </a>

            <a href="{{ url('/layanan') }}" class="btn btn-outline">
                Menu Layanan
            </a>

        </div>

    </section>

</section>

@endsection