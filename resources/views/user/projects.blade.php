@extends('user.layouts.app')

@section('title', 'Projects')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
@endpush

@section('content')
    <section id="projects">
        <div class="container">
            <h2>Proyek Unggulan Kami</h2>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('images/project10.jpg') }}" alt="Project 1">
                    <h3>Pernikahan di Bali</h3>
                    <p>Pernikahan Outdoor yang Cantik.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project8.jpg') }}" alt="Project 2">
                    <h3>Penyambutan Presiden</h3>
                    <p>Konsep penyambutan presiden</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project9.jpg') }}" alt="Project 3">
                    <h3>Konser Musik</h3>
                    <p>Panggung megah yang spektakuler.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project11.jpg') }}" alt="Project 4">
                    <h3>Festival Budaya</h3>
                    <p>Perayaan budaya lokal yang meriah.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project14.jpg') }}" alt="Project 5">
                    <h3>Acara Korporat</h3>
                    <p>Pengaturan profesional acara resmi.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project13.jpg') }}" alt="Project 6">
                    <h3>Pesta Ulang Tahun</h3>
                    <p>dekorasi kreatif untuk ulang tahun.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project12.jpg') }}" alt="Project 7">
                    <h3>Peluncuran Produk</h3>
                    <p>peluncuran produk yang menarik.</p>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/project15.jpg') }}" alt="Project 8">
                    <h3>Seminar Pendidikan</h3>
                    <p>Pengaturan seminar yang kondusif.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
