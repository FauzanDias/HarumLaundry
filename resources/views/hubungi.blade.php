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

        <li><a href="{{ url('/hubungi') }}" class="active">Hubungi Kami</a></li>

        <li><a href="{{ url('/cek-cucian') }}">Cek Cucian</a></li>

    </ul>

</nav>

<!-- Section Kontak & Peta Harum Laundry -->
<section class="harum-contact-section">
    <div class="contact-container">

        <!-- 1. HEADER: Logo & Kontak Kami -->
        <div class="contact-header-card">
            
            <!-- Logo Harum Laundry -->
            <div class="contact-logo-box">
                <img src="{{ asset('images/logo.png') }}" alt="Harum Laundry Logo">
            </div>

            <!-- Detail Kontak & Media Sosial (Mengikuti Lebar Konten) -->
            <div class="contact-details-wrap">
                <h2 class="contact-title">Kontak Kami</h2>

                <!-- Nomor WhatsApp -->
                <a href="https://wa.me/6285183754455" target="_blank" class="contact-item">
                    <div class="contact-icon-circle">
                        <img src="{{ asset('images/phoneicon.png') }}" alt="Phone Icon">
                    </div>
                    <span>0851-8375-4455</span>
                </a>

                <!-- Instagram -->
                <a href="https://instagram.com/harumlaundry168" target="_blank" class="contact-item">
                    <div class="contact-icon-circle">
                        <img src="{{ asset('images/instaicon.png') }}" alt="Instagram Icon">
                    </div>
                    <span>harumlaundry168</span>
                </a>

                <!-- Alamat Ringkas -->
                <div class="contact-item">
                    <div class="contact-icon-circle">
                        <img src="{{ asset('images/mapicon.png') }}" alt="Map Icon">
                    </div>
                    <span>Jl. Mulawarman, Karang Anyar</span>
                </div>

                <!-- Row 4 Ikon Tanpa Kotak Hitam (Rata Kiri-Kanan Sesuai Lebar Teks) -->
                <div class="social-links-row">
                    <!-- Kotak 1: WhatsApp -->
                    <a href="https://wa.me/6285183754455" target="_blank" class="social-icon-box">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp">
                    </a>

                    <!-- Kotak 2: Instagram -->
                    <a href="https://instagram.com/harumlaundry168" target="_blank" class="social-icon-box">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
                    </a>

                    <!-- Kotak 3: Google -->
                    <a href="https://www.google.com/search?q=harum+laundry+tarakan" target="_blank" class="social-icon-box">
                        <img src="{{ asset('images/google.png') }}" alt="Google">
                    </a>

                    <!-- Kotak 4: Maps -->
                    <a href="https://maps.app.goo.gl/y11atKzykayZkyyx5" target="_blank" class="social-icon-box">
                        <img src="{{ asset('images/maps.png') }}" alt="Google Maps">
                    </a>
                </div>

            </div>
        </div>

        <!-- 2. BANNER NAMA (Brush Accent Style) -->
        <div class="brand-banner-wrapper">
            <div class="brand-banner">
                <div class="brand-banner-title">Harum</div>
                <div class="brand-banner-subtitle">laundry</div>
            </div>
        </div>

        <!-- 3. FRAME MAPS (Double Layer Offset Border Effect) -->
        <div class="maps-frame-wrapper">
            <!-- Frame Cyan Luar -->
            <div class="maps-outer-frame">
                <!-- Frame Gelap Dalam -->
                <div class="maps-inner-frame">
                    <!-- Embed Google Maps -->
                    <div class="maps-embed-container">
                        <iframe 
                            src="https://maps.google.com/maps?q=Harum%20Laundry%20Jl.%20Mulawarman%20Tarakan&t=&z=17&ie=UTF8&iwloc=B&output=embed" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. FOOTER BANNER ALAMAT LENGKAP -->
        <div class="address-banner-wrapper">
            <div class="address-banner">
                Ruko Permata Indah, Jl. Mulawarman Perumnas no. B1, Karang Anyar, Kec. Tarakan Bar., Kota Tarakan, Kalimantan Utara 77111
            </div>
        </div>

    </div>
</section>

@endsection