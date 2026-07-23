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
        <a href="{{ url('/layanan') }}" class="btn">
            Laundry Sekarang
        </a>    
        <a href="{{ url('/hubungi') }}" class="btn">
            Hubungi Kami
        </a>
        </div>
    </div>
</section>

<section class="hero-slider" style="margin-top: 20px; width: 100%; overflow: hidden;">
    <div class="slider-container" id="draggable-slider" style="display: flex; overflow-x: auto; scroll-snap-type: none; gap: 24px; padding: 10px 0; cursor: grab; scrollbar-width: none; -ms-overflow-style: none;">
        @forelse($sliders ?? [] as $slider)
            <img src="{{ Storage::url($slider->image_path) }}" alt="Slider Laundry" style="flex: 0 0 85vw; width: 85vw; height: 75vh; max-height: 720px; object-fit: cover; border-radius: 8px;">
        @empty
            <img src="{{ asset('images/unavailable.jpg') }}" alt="Laundry" style="flex: 0 0 85vw; width: 85vw; height: 75vh; max-height: 720px; object-fit: cover; border-radius: 8px;">
        @endforelse
    </div>
</section>

<style>
/* Hide scrollbar for Chrome, Safari and Opera */
.slider-container::-webkit-scrollbar {
    display: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('draggable-slider');
    let isDown = false;
    let startX;
    let scrollLeft;
    let animationId;
    let autoScrollSpeed = 1;

    // Clone nodes for seamless infinite looping
    const children = Array.from(slider.children);
    children.forEach(child => {
        let clone = child.cloneNode(true);
        slider.appendChild(clone);
    });

    function autoScroll() {
        if (!isDown) {
            slider.scrollLeft += autoScrollSpeed;
            if (slider.scrollLeft >= slider.scrollWidth / 2) {
                slider.scrollLeft -= slider.scrollWidth / 2;
            }
        }
        animationId = requestAnimationFrame(autoScroll);
    }

    // Start auto scrolling
    animationId = requestAnimationFrame(autoScroll);

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.style.cursor = 'grabbing';
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
        cancelAnimationFrame(animationId);
    });

    slider.addEventListener('mouseleave', () => {
        if(isDown) {
            isDown = false;
            slider.style.cursor = 'grab';
            animationId = requestAnimationFrame(autoScroll);
        }
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.style.cursor = 'grab';
        animationId = requestAnimationFrame(autoScroll);
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1.5;
        slider.scrollLeft = scrollLeft - walk;
        
        if (slider.scrollLeft >= slider.scrollWidth / 2) {
            slider.scrollLeft -= slider.scrollWidth / 2;
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        } else if (slider.scrollLeft <= 0) {
            slider.scrollLeft += slider.scrollWidth / 2;
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        }
    });
});
</script>

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