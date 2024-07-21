@extends('user.layouts.app')

@section('title', 'Home')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')
    <section id="home">
        <div class="hero">
            <h1>Acara Berkelas, Kenangan Abadi</h1>
            <p>Elegansi & Keunggulan Berkelanjutan untuk Setiap Acara</p>
            <a href="{{ url('/form') }}" class="btn">Mulai Rencanakan!</a>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>YUCARI Event & Co. didirikan dengan semangat untuk menghadirkan pengalaman acara yang tak terlupakan. Berbekal pengalaman bertahun-tahun dalam industri acara, kami telah menyaksikan secara langsung bagaimana acara yang direncanakan dengan baik dapat menyatukan orang-orang, menciptakan kenangan abadi, dan membangun hubungan yang kuat. Inilah yang memotivasi kami untuk menjadi yang terbaik di bidang manajemen acara.</p>
            <p>Industri acara terus berkembang dengan dinamika pasar dan tren terbaru, dan kami berkomitmen untuk selalu berada di garis depan perubahan tersebut. Kami memahami bahwa setiap klien memiliki visi dan kebutuhan unik, dan kami bangga dapat menghadirkan solusi yang disesuaikan dengan detail dan penuh perhatian. Melalui kolaborasi yang erat dengan klien kami, kami memastikan bahwa setiap aspek acara direncanakan dengan cermat, mulai dari konsep awal hingga pelaksanaan akhir.</p>
            <p>Kami telah mengidentifikasi adanya permintaan yang signifikan untuk layanan manajemen acara khusus di komunitas kami. Pasar ini sering kali kurang terlayani, dengan banyak penyedia yang menawarkan layanan generik yang kurang memenuhi harapan pelanggan. YUCARI Event & Co. hadir untuk mengisi celah ini dengan menawarkan pendekatan yang berfokus pada kualitas, inovasi, dan kepuasan pelanggan.</p>
            <a href="{{ url('/about') }}" class="btn">Selengkapnya</a>
        </div>
    </section>

    <section id="promo">
        <div class="container">
            <h2>Penawaran Khusus</h2>
            <div class="offers">
                <div class="offer">
                    <img src="{{ asset('images/penawaran1.jpg') }}" alt="Diskon 20%">
                    <h3>Diskon 20% untuk Klien Baru</h3>
                    <p>Nikmati diskon 20% untuk semua layanan kami bagi klien baru yang memesan acara pertama mereka dengan kami. Jangan lewatkan kesempatan ini untuk merasakan layanan terbaik dari YUCARI Event & Co.</p>
                </div>
                <div class="offer">
                    <img src="{{ asset('images/penawaran2.jpg') }}" alt="Paket Premium">
                    <h3>Paket Premium dengan Harga Terjangkau</h3>
                    <p>Dapatkan paket premium dengan harga spesial untuk acara pernikahan, ulang tahun, dan acara perusahaan. Kami menawarkan solusi lengkap dengan layanan terbaik yang akan membuat acara Anda tak terlupakan.</p>
                </div>
                <div class="offer">
                    <img src="{{ asset('images/penawaran3.jpg') }}" alt="Promo Spesial">
                    <h3>Promo Spesial Acara Tahun Ini</h3>
                    <p>Bergabunglah dengan promo spesial kami tahun ini dan dapatkan layanan ekstra tanpa biaya tambahan. Kami menghargai setiap klien setia dan ingin memberikan penghargaan terbaik bagi Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>Proyek Kami</h2>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('images/project7.jpg') }}" alt="Project Image 1"></div>
                <div class="gallery-item"><img src="{{ asset('images/project2.jpg') }}" alt="Project Image 2"></div>
                <div class="gallery-item"><img src="{{ asset('images/project3.jpg') }}" alt="Project Image 3"></div>
                <div class="gallery-item"><img src="{{ asset('images/project4.jpg') }}" alt="Project Image 4"></div>
            </div>
            <br>
            <a href="{{ url('/projects') }}" class="btn">Lihat Semua Album</a>
        </div>
    </section>
@endsection
