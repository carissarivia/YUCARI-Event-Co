<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
                <div class="logo-text">Yucari Event & Co</div>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Dashboard</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/projects') }}">Proyek</a></li>
                    <li><a href="{{ url('/form') }}">Formulir</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="copyright">
                <p>&copy; Copyright 2024, Built by Team YCRA</p>
            </div>
            <div class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="social-links">
                <a href="https://twitter.com" target="_blank">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter">
                </a>
                <a href="https://facebook.com" target="_blank">
                    <img src="{{ asset('images/facebook.png') }}" alt="Facebook">
                </a>
                <a href="https://pinterest.com" target="_blank">
                    <img src="{{ asset('images/pinterest.png') }}" alt="Pinterest">
                </a>
                <a href="https://instagram.com" target="_blank">
                    <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
                </a>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
