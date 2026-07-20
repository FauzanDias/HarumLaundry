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

        <li><a href="{{ url('/layanan') }}" class="active">Layanan</a></li>

        <li><a href="{{ url('/cabang') }}">Lokasi Cabang</a></li>

        <li><a href="{{ url('/hubungi') }}">Hubungi Kami</a></li>

        <li><a href="{{ url('/cek-cucian') }}">Cek Cucian</a></li>

    </ul>

</nav>

<section class="layanan-page">

    <div class="layanan-header">

        <h1>HARUM LAUNDRY</h1>

        <div class="subtitle">
            Cuci Reguler & Cuci Express (3 Jam Siap Pakai Langsung Kering)
        </div>

        <h3>
            Bersih, Rapi, Wangi, Cepat, dan Ekonomis
        </h3>

        <p>
            Fasilitas: Gratis Antar Jemput |
            WA: 0851-8375-4455
        </p>

    </div>


    <div class="table-box">

        <div class="table-title">
            Layanan Kiloan
        </div>

        <table>

            <thead>

                <tr>

                    <th>No</th>

                    <th>Jenis Layanan</th>

                    <th>
                        3 Hari
                        <small>(Min. Trx 30rb)</small>
                    </th>

                    <th>
                        2 Hari
                        <small>(Min. Trx 40rb)</small>
                    </th>

                    <th>
                        1 Hari
                        <small>(Min. Trx 50rb)</small>
                    </th>

                    <th>
                        6 Jam
                        <small>(Min. Trx 60rb)</small>
                    </th>

                    <th>
                        3 Jam
                        <small>(Min. Trx 75rb)</small>
                    </th>

                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>Cuci Lipat</td>
                    <td>Rp 7.000</td>
                    <td>Rp 8.000</td>
                    <td>Rp 10.000</td>
                    <td>Rp 20.000</td>
                    <td>Rp 30.000</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Cuci Lipat Setrika</td>
                    <td>Rp 9.000</td>
                    <td>Rp 12.000</td>
                    <td>Rp 15.000</td>
                    <td>Rp 25.000</td>
                    <td>Rp 35.000</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>Setrika Harum</td>
                    <td>Rp 7.000</td>
                    <td>Rp 8.000</td>
                    <td>Rp 10.000</td>
                    <td>Rp 20.000</td>
                    <td>Rp 25.000</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>Baju Bayi Lipat Setrika</td>
                    <td>Rp 12.000</td>
                    <td>Rp 17.000</td>
                    <td>Rp 22.000</td>
                    <td>Rp 35.000</td>
                    <td>Rp 45.000</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>Pakaian Anak Cuci Lipat</td>
                    <td>Rp 10.000</td>
                    <td>Rp 12.000</td>
                    <td>Rp 15.000</td>
                    <td>Rp 25.000</td>
                    <td>Rp 35.000</td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>Pakaian Anak Cuci Lipat Setrika</td>
                    <td>Rp 11.000</td>
                    <td>Rp 13.000</td>
                    <td>Rp 20.000</td>
                    <td>Rp 30.000</td>
                    <td>Rp 38.000</td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>Gorden</td>
                    <td>Rp 15.000</td>
                    <td>Rp 20.000</td>
                    <td>Rp 30.000</td>
                    <td>Rp 50.000</td>
                    <td>Rp 60.000</td>
                </tr>

            </tbody>

        </table>

    </div>
<div class="table-box">

    <div class="table-title">
        Layanan Satuan
    </div>

    <table>

        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Layanan</th>
                <th>3 Hari</th>
                <th>2 Hari</th>
                <th>1 Hari</th>
                <th>8 Jam</th>
                <th>6 Jam</th>
            </tr>
        </thead>

        <tbody>

            <tr><td>1</td><td>Bed Cover No. 1</td><td>Rp 40.000</td><td>Rp 45.000</td><td>Rp 50.000</td><td>Rp 60.000</td><td>Rp 65.000</td></tr>

            <tr><td>2</td><td>Bed Cover No. 2</td><td>Rp 35.000</td><td>Rp 40.000</td><td>Rp 45.000</td><td>Rp 50.000</td><td>Rp 55.000</td></tr>

            <tr><td>3</td><td>Bed Cover No. 3</td><td>Rp 30.000</td><td>Rp 35.000</td><td>Rp 40.000</td><td>Rp 45.000</td><td>Rp 50.000</td></tr>

            <tr><td>4</td><td>Sprei King Size (220/200)</td><td>Rp 35.000</td><td>Rp 40.000</td><td>Rp 45.000</td><td>Rp 50.000</td><td>Rp 55.000</td></tr>

            <tr><td>5</td><td>Sprei No. 1 (180/200)</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 30.000</td><td>Rp 35.000</td><td>Rp 45.000</td></tr>

            <tr><td>6</td><td>Sprei No. 2 (160/200)</td><td>Rp 16.000</td><td>Rp 21.000</td><td>Rp 26.000</td><td>Rp 31.000</td><td>Rp 41.000</td></tr>

            <tr><td>7</td><td>Sprei No. 3 (120/200)</td><td>Rp 12.000</td><td>Rp 17.000</td><td>Rp 22.000</td><td>Rp 27.000</td><td>Rp 37.000</td></tr>

            <tr><td>8</td><td>Selimut Jumbo / Tebal</td><td>Rp 25.000</td><td>Rp 25.000</td><td>Rp 30.000</td><td>Rp 35.000</td><td>Rp 35.000</td></tr>

            <tr><td>9</td><td>Selimut No. 1</td><td>Rp 20.000</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 30.000</td><td>Rp 30.000</td></tr>

            <tr><td>10</td><td>Selimut No. 2</td><td>Rp 15.000</td><td>Rp 15.000</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 25.000</td></tr>

            <tr><td>11</td><td>Selimut No. 3</td><td>Rp 15.000</td><td>Rp 15.000</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 25.000</td></tr>

            <tr><td>12</td><td>Handuk Kecil (30/60)</td><td>Rp 5.000</td><td>Rp 5.000</td><td>Rp 8.000</td><td>Rp 12.000</td><td>Rp 12.000</td></tr>

            <tr><td>13</td><td>Handuk Sedang (50/100, 40/80)</td><td>Rp 8.000</td><td>Rp 8.000</td><td>Rp 12.000</td><td>Rp 15.000</td><td>Rp 15.000</td></tr>

            <tr><td>14</td><td>Handuk Standart (70/140, 60/120)</td><td>Rp 10.000</td><td>Rp 10.000</td><td>Rp 15.000</td><td>Rp 25.000</td><td>Rp 25.000</td></tr>

            <tr><td>15</td><td>Handuk Besar (80/160)</td><td>Rp 15.000</td><td>Rp 15.000</td><td>Rp 20.000</td><td>Rp 30.000</td><td>Rp 30.000</td></tr>

            <tr><td>16</td><td>Handuk Jumbo (90/180)</td><td>Rp 20.000</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 35.000</td><td>Rp 35.000</td></tr>

            <tr><td>17</td><td>Boneka Mini</td><td>Rp 5.000</td><td>Rp 10.000</td><td>Rp 15.000</td><td>Rp 25.000</td><td>Rp 35.000</td></tr>

            <tr><td>18</td><td>Boneka Kecil (20×10)</td><td>Rp 10.000</td><td>Rp 15.000</td><td>Rp 20.000</td><td>Rp 30.000</td><td>Rp 40.000</td></tr>

            <tr><td>19</td><td>Boneka Sedang (30×20)</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 30.000</td><td>Rp 40.000</td><td>Rp 50.000</td></tr>

            <tr><td>20</td><td>Boneka Besar (40×30)</td><td>Rp 30.000</td><td>Rp 35.000</td><td>Rp 40.000</td><td>Rp 50.000</td><td>Rp 60.000</td></tr>

            <tr><td>21</td><td>Boneka Jumbo</td><td>Rp 50.000</td><td>Rp 55.000</td><td>Rp 60.000</td><td>Rp 70.000</td><td>Rp 80.000</td></tr>

            <tr><td>22</td><td>Boneka Extra Jumbo</td><td>Rp 75.000</td><td>Rp 80.000</td><td>Rp 85.000</td><td>Rp 95.000</td><td>Rp 105.000</td></tr>

            <tr><td>23</td><td>Tas Kecil</td><td>Rp 15.000</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 35.000</td><td>Rp 45.000</td></tr>

            <tr><td>24</td><td>Tas Sedang</td><td>Rp 20.000</td><td>Rp 25.000</td><td>Rp 30.000</td><td>Rp 40.000</td><td>Rp 50.000</td></tr>

            <tr><td>25</td><td>Tas Besar</td><td>Rp 30.000</td><td>Rp 35.000</td><td>Rp 40.000</td><td>Rp 50.000</td><td>Rp 60.000</td></tr>

        </tbody>

    </table>

</div>
</section>

@endsection