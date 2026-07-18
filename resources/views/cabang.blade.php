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

        <li><a href="{{ url('/cabang') }}" class="active">Lokasi Cabang</a></li>

        <li><a href="{{ url('/hubungi') }}">Hubungi Kami</a></li>

        <li><a href="{{ url('/cek-cucian') }}">Cek Cucian</a></li>

    </ul>

</nav>

<section class="cabang-section">

    <!-- ================= CABANG 1 ================= -->

    <div class="cabang-item">

        <div class="cabang-info">

            <h2>Cabang Utama Harum Laundry</h2>

            <p class="alamat">
                📍 Jl. Mulawarman Perumnas No. B1,
                Karang Anyar, Kec. Tarakan Barat,
                Kota Tarakan, Kalimantan Utara 77111
            </p>

            <p>
                Untuk pelanggan daerah Tarakan Barat.
                Seperti daerah Pasir Putih,
                Perumahan Dinas,
                dan Karang Anyar.
            </p>

            <h4>BUKA SETIAP HARI</h4>

            <span>08.00 - 22.00 WITA</span>

            <div class="btn-group">

                <a href="#" class="btn-primary">
                    Hubungi Outlet
                </a>

                <a href="#" class="btn-primary">
                    Buka Gmaps
                </a>

            </div>

        </div>

        <div class="maps-placeholder">

            <iframe
                src="https://www.google.com/maps?q=Harum+Laundry,+ruko+permata+indah,+Jl.+Mulawarman+perumnas+no.+B1,+Karang+Anyar,+Kota+Tarakan&output=embed"
                width="100%"
                height="100%"
                style="border:0;border-radius:12px;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

    </div>

    <hr>


    <!-- ================= CABANG 2 ================= -->

    <div class="cabang-item reverse">

        <div class="maps-placeholder">

            <iframe
                src="https://www.google.com/maps?q=Harum+laundry+(+Outlet+2+),+Jl.+Aki+Balak,+Juata+Kerikil,+Kec.+Tarakan+Utara,+Kota+Tarakan,+Kalimantan+Utara+77116&output=embed"
                width="100%"
                height="100%"
                style="border:0;border-radius:12px;"
                allowfullscreen=""
                loading="lazy">
            </iframe>

        </div>

        <div class="cabang-info">

            <h2>Cabang 2 Harum Laundry</h2>

            <p class="alamat">
                📍 Jl. Aki Balak,
                Juata Kerikil,
                Tarakan Utara,
                Kalimantan Utara
            </p>

            <p>
                Untuk pelanggan daerah Tarakan Utara,
                seperti Perumahan Griya Permai,
                Citra Cemerlang,
                dan sekitarnya.
            </p>

            <h4>BUKA SETIAP HARI</h4>

            <span>08.00 - 22.00 WITA</span>

            <div class="btn-group">

                <a href="#" class="btn-primary">
                    Hubungi Outlet
                </a>

                <a href="#" class="btn-primary">
                    Buka Gmaps
                </a>

            </div>

        </div>

    </div>

    <hr>


    <!-- ================= CABANG 3 ================= -->

    <div class="cabang-item">

        <div class="cabang-info">

            <h2>Cabang 3 Harum Laundry</h2>

            <p class="alamat">
                📍 Jl. P. Nias,
                Kelurahan Skip,
                Tarakan Tengah,
                Kalimantan Utara
            </p>

            <p>
                Melayani daerah Tarakan Tengah,
                RSUD,
                Hotel Lembasung,
                Penginapan Herison,
                dan daerah Skip.
            </p>

            <h4>BUKA SETIAP HARI</h4>

            <span>08.00 - 22.00 WITA</span>

            <div class="btn-group">

                <a href="#" class="btn-primary">
                    Hubungi Outlet
                </a>

                <a href="#" class="btn-primary">
                    Buka Gmaps
                </a>

            </div>

        </div>

        <div class="maps-placeholder">

            <div class="maps-placeholder">

    <iframe
        src="https://www.google.com/maps?q=Harum+Laundry+3,+Jl.+P.+Nias,+kelurahan+skip,+Kec.+Tarakan+Tengah,+Kota+Tarakan,+Kalimantan+Utara&output=embed"
        width="100%"
        height="100%"
        style="border:0;border-radius:12px;"
        allowfullscreen=""
        loading="lazy">
    </iframe>

</div>

        </div>

    </div>

</section>

@endsection