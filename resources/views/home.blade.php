<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harum Laundry - #1 Laundry di Kotamu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Baloo+2:wght@600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .font-baloo { font-family: 'Baloo 2', cursive; }
        .cloud-divider {
            background: #e5e7eb;
            position: relative;
        }
        .cloud-divider::before {
            content: "";
            position: absolute;
            top: -1px;
            left: 0;
            width: 100%;
            height: 60px;
            background-image: radial-gradient(circle at 10% 60%, #e5e7eb 20px, transparent 21px),
                               radial-gradient(circle at 25% 40%, #e5e7eb 25px, transparent 26px),
                               radial-gradient(circle at 40% 60%, #e5e7eb 20px, transparent 21px),
                               radial-gradient(circle at 55% 35%, #e5e7eb 28px, transparent 29px),
                               radial-gradient(circle at 70% 55%, #e5e7eb 22px, transparent 23px),
                               radial-gradient(circle at 85% 40%, #e5e7eb 25px, transparent 26px),
                               radial-gradient(circle at 95% 60%, #e5e7eb 18px, transparent 19px);
            transform: translateY(-50%);
        }
        .cloud-divider-bottom {
            position: relative;
        }
        .cloud-divider-bottom::after {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 60px;
            background-image: radial-gradient(circle at 15% 50%, #e5e7eb 22px, transparent 23px),
                               radial-gradient(circle at 30% 30%, #e5e7eb 26px, transparent 27px),
                               radial-gradient(circle at 45% 50%, #e5e7eb 20px, transparent 21px),
                               radial-gradient(circle at 60% 25%, #e5e7eb 30px, transparent 31px),
                               radial-gradient(circle at 75% 45%, #e5e7eb 24px, transparent 25px),
                               radial-gradient(circle at 90% 30%, #e5e7eb 26px, transparent 27px);
            transform: translateY(50%);
        }
    </style>
</head>
<body class="bg-white text-gray-800">

    {{-- ================= NAVBAR ================= --}}
    <header class="w-full bg-white shadow-sm sticky top-0 z-50">
        <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
            <a href="{{ url('/') }}" class="font-baloo text-xl font-bold">
                <span class="text-sky-400">Harum</span> <span class="text-gray-700">laundry</span>
            </a>

            <ul class="hidden md:flex items-center gap-8 text-sm font-medium text-gray-600">
                <li><a href="{{ url('/') }}" class="text-sky-400 border-b-2 border-sky-400 pb-1">Home</a></li>
                <li><a href="#profil" class="hover:text-sky-400 transition">Profil Laundry</a></li>
                <li class="relative group">
                    <button class="flex items-center gap-1 hover:text-sky-400 transition">
                        Layanan
                        <svg class="w-3 h-3 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <ul class="absolute hidden group-hover:block bg-white shadow-lg rounded-md mt-2 py-2 w-44 text-gray-600">
                        <li><a href="#" class="block px-4 py-2 hover:bg-sky-50 hover:text-sky-400">Cuci Kering</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-sky-50 hover:text-sky-400">Cuci Setrika</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-sky-50 hover:text-sky-400">Setrika Saja</a></li>
                    </ul>
                </li>
                <li><a href="#lokasi" class="hover:text-sky-400 transition">Lokasi Cabang</a></li>
                <li><a href="#kontak" class="hover:text-sky-400 transition">Hubungi Kami</a></li>
                <li><a href="#cek" class="hover:text-sky-400 transition">Cek Cucian</a></li>
            </ul>
        </nav>
    </header>

    {{-- ================= HERO SECTION ================= --}}
    <section class="bg-gradient-to-b from-sky-50 to-white pt-12 pb-16 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-baloo text-3xl md:text-4xl text-sky-400 font-bold mb-4">#1 Laundry di kotamu</h2>

            <img src="{{ asset('images/laundry-illustration.png') }}"
                 alt="Ilustrasi orang mencuci pakaian"
                 class="mx-auto w-64 md:w-80 mb-6">

            <h1 class="text-2xl md:text-3xl font-semibold text-sky-500 mb-2">
                Harum Laundry Wash Deeper To Your Sins
            </h1>
            <h3 class="text-xl md:text-2xl font-semibold text-gray-800 mb-3">
                We Can Even Cleanse Your Soul
            </h3>
            <p class="text-gray-500 mb-8">Cuci Bersih hingga seperti baru ⭐</p>

            <a href="#order"
               class="inline-block bg-sky-400 hover:bg-sky-500 text-white font-medium px-8 py-3 rounded-full shadow-md transition">
                Laundry Sekarang
            </a>
        </div>
    </section>

    {{-- ================= ALASAN MEMILIH JASA (background image) ================= --}}
    <section id="profil" class="relative bg-cover bg-center py-24 px-6"
             style="background-image: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.6)), url('{{ asset('images/harumlaundry.jpg') }}');">
        <div class="max-w-4xl mx-auto text-center text-white">
            <h2 class="font-baloo text-3xl md:text-4xl font-bold mb-4 leading-tight">
                ALASAN MEMILIH JASA<br>HARUM LAUNDRY
            </h2>
            <p class="italic text-gray-200 max-w-2xl mx-auto mb-16">
                Memilih jasa kami adalah pilihan yang tepat. Laundry terbaik yang ada di Kota
                Tarakan. Pelayanan terbaik tiada tara. Kualitas barang milikmu akan sampai
                seperti baru dibeli.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-6 items-start">
                <div class="flex flex-col items-center">
                    <svg class="w-10 h-10 mb-4" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M14 10V6a2 2 0 00-2-2h-.5a2 2 0 00-1.9 1.4L7.5 12H4a1 1 0 00-1 1v6a1 1 0 001 1h3m6-10h3.5a2 2 0 011.9 2.6l-2 6A2 2 0 0116.6 20H10a1 1 0 01-1-1V9.5" />
                    </svg>
                    <p class="uppercase text-sm tracking-wide leading-relaxed bg-black/30 px-3 py-2 rounded">
                        Sudah melayani banyak cucian.<br>Dijamin 100% kualitasnya
                    </p>
                </div>

                <div class="flex flex-col items-center md:mt-24">
                    <svg class="w-10 h-10 mb-4" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M8 11V7a4 4 0 118 0M6 11h12v9a1 1 0 01-1 1H7a1 1 0 01-1-1v-9z" />
                    </svg>
                    <p class="uppercase text-sm tracking-wide leading-relaxed bg-black/30 px-3 py-2 rounded">
                        Layanan lengkap, tinggal pilih<br>paket yang kamu butuhkan
                    </p>
                </div>

                <div class="flex flex-col items-center">
                    <svg class="w-10 h-10 mb-4" fill="none" stroke="white" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
                    </svg>
                    <p class="uppercase text-sm tracking-wide leading-relaxed bg-black/30 px-3 py-2 rounded">
                        Satu mesin untuk satu cucian.<br>Pakaian kamu tidak akan tercampur
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ================= JAM OPERASIONAL ================= --}}
    <section class="bg-gray-100 py-14 px-6 text-center">
        <h2 class="text-sky-400 font-bold text-2xl mb-2">BUKA SETIAP HARI</h2>
        <p class="text-lg text-gray-700 mb-8">08.00 - 22.00 WITA</p>

        <div class="flex items-center justify-center gap-3 text-sky-500 font-semibold text-lg">
            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                      d="M3 13h13V6H3v7zm0 0l3 4h7l3-4m3 0h2l1 3v3h-3m-13 0a2 2 0 11-4 0 2 2 0 014 0zm12 0a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span>FREE ANTAR JEMPUT. CUKUP KIRIM ALAMATMU</span>
        </div>
    </section>

    {{-- ================= ORDER SECTION ================= --}}
    <section id="order" class="cloud-divider bg-gray-200 pt-20 pb-16 px-6">
        <div class="max-w-5xl mx-auto text-center">
            <h2 class="text-sky-400 font-bold text-2xl mb-2">Order Sekarang Juga</h2>
            <hr class="w-40 mx-auto border-gray-400 mb-10">

            {{-- Paket Jam --}}
            <h3 class="text-xl font-bold mb-4">Paket Jam</h3>
            <hr class="w-full max-w-3xl mx-auto border-gray-400 mb-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-14">
                {{-- Paket 3 Jam --}}
                <div class="bg-white rounded-xl shadow-md p-6 text-left">
                    <h4 class="text-center font-bold text-lg mb-4">PAKET 3 JAM</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Minimal Transaksi 75.000
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Layanan 3 Jam
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Cuci Kering - Lipat
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Free Ongkir
                        </li>
                    </ul>
                    <a href="#" class="block text-center bg-sky-400 hover:bg-sky-500 text-white font-semibold py-3 rounded-lg transition">
                        Rp. 30.000 / Kg
                    </a>
                </div>

                {{-- Paket 6 Jam --}}
                <div class="bg-white rounded-xl shadow-md p-6 text-left">
                    <h4 class="text-center font-bold text-lg mb-4">PAKET 6 JAM</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Minimal Transaksi 60.000
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Layanan 6 Jam
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Cuci Kering - Lipat
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Free Ongkir
                        </li>
                    </ul>
                    <a href="#" class="block text-center bg-sky-400 hover:bg-sky-500 text-white font-semibold py-3 rounded-lg transition">
                        Rp. 20.000 / Kg
                    </a>
                </div>
            </div>

            {{-- Paket Harian --}}
            <h3 class="text-xl font-bold mb-4">Paket Harian</h3>
            <hr class="w-full max-w-3xl mx-auto border-gray-400 mb-8">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10">
                {{-- Paket 1 Hari --}}
                <div class="bg-white rounded-xl shadow-md p-6 text-left">
                    <h4 class="text-center font-bold text-lg mb-4">PAKET 1 HARI</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Minimal Transaksi 50.000
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Layanan 1 Hari
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Cuci Kering - Lipat
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Free Ongkir
                        </li>
                    </ul>
                    <a href="#" class="block text-center bg-sky-400 hover:bg-sky-500 text-white font-semibold py-3 rounded-lg transition">
                        Rp. 10.000 / Kg
                    </a>
                </div>

                {{-- Paket 3 Hari --}}
                <div class="bg-white rounded-xl shadow-md p-6 text-left">
                    <h4 class="text-center font-bold text-lg mb-4">PAKET 3 HARI</h4>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Minimal Transaksi 30.000
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Layanan 3 Hari
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Cuci Kering - Lipat
                        </li>
                        <li class="flex items-center gap-2 border-b pb-2">
                            <span class="text-sky-400">✍️</span> Free Ongkir
                        </li>
                    </ul>
                    <a href="#" class="block text-center bg-sky-400 hover:bg-sky-500 text-white font-semibold py-3 rounded-lg transition">
                        Rp. 7.000 / Kg
                    </a>
                </div>
            </div>

            <div class="text-right max-w-3xl mx-auto">
                <a href="#" class="inline-block bg-sky-400 hover:bg-sky-500 text-white font-medium px-6 py-3 rounded-lg shadow transition">
                    Pemesanan Lengkap →
                </a>
            </div>
        </div>
    </section>

    {{-- ================= FOOTER ================= --}}
    <footer id="kontak" class="bg-white pt-20 pb-8 px-6">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 mb-10">
            <div>
                <h4 class="text-sky-400 font-bold text-lg mb-4">Kontak Kami</h4>
                <ul class="space-y-3 text-gray-600">
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 5a2 2 0 012-2h2.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.05 11.05 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        0851-8375-4455
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="4" stroke-width="1.5"/>
                            <circle cx="12" cy="12" r="4" stroke-width="1.5"/>
                            <circle cx="17.5" cy="6.5" r="0.7" fill="currentColor" stroke="none"/>
                        </svg>
                        harumlaundry168
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                            <circle cx="12" cy="11" r="2.5" stroke-width="1.5" />
                        </svg>
                        Jl. Mulawarman, Karang Anyar
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-sky-400 font-bold text-lg mb-4">Jam Buka</h4>
                <p class="text-gray-600 mb-2">Setiap Hari</p>
                <p class="flex items-center gap-2 text-gray-600">
                    <svg class="w-5 h-5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="9" stroke-width="1.5" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 7v5l3 3" />
                    </svg>
                    08.00 - 22.00 WITA
                </p>
            </div>
        </div>

        <div class="text-center text-gray-400 text-sm border-t pt-6">
            &copy; Copyrigth {{ date('Y') }}. Harum Laundry
        </div>
    </footer>

</body>
</html>