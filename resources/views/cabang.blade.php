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

                <a href="https://wa.me/6285183754455" class="btn-primary">
                    Hubungi Outlet
                </a>

                <a href="https://maps.app.goo.gl/y11atKzykayZkyyx5" target="_blank" class="btn-primary">
                    Buka Gmaps
                </a>

            </div>

        </div>

        <div class="maps-placeholder">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.127190738249!2d117.57605272712374!3d3.318726814770629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32138b72e597c2d7%3A0x36030dc9adb4f263!2sHarum%20Laundry!5e0!3m2!1sid!2sid!4v1784785762462!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin">
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

                <a href="https://wa.me/6285183754455" class="btn-primary">
                    Hubungi Outlet
                </a>

                <a href="https://maps.app.goo.gl/p4EUKpYpddoTQWeu7" class="btn-primary">
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

                <a href="https://wa.me/6285183754455" class="btn-primary">
                    Hubungi Outlet
                </a>

                <a href="https://maps.app.goo.gl/KsbZdQYjq5kUweCS6" class="btn-primary">
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