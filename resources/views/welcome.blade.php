@extends('layouts.app')

@section('title', 'ConfessTune - Kirim Pesan Lewat Lagu')

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">
            <i class="fas fa-heart"></i> ConfessTune
        </h1>
        <p class="hero-subtitle">
            Ungkapkan Perasaanmu Melalui Lagu Favorit
        </p>
        <p class="hero-description">
            Platform untuk mengirim pesan romantis, ucapan, atau konfesi kepada orang tersayang
            melalui lagu-lagu pilihan yang bermakna.
        </p>

        @guest
        <div class="hero-buttons">
            <a href="{{ route('login') }}" class="btn btn-primary-hero">
                <i class="fas fa-sign-in-alt"></i> Masuk
            </a>
            <a href="{{ route('register') }}" class="btn btn-secondary-hero">
                <i class="fas fa-user-plus"></i> Daftar
            </a>
        </div>
        @else
        <div class="hero-buttons">
            <a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn btn-primary-hero">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
        </div>
        @endguest
    </div>
</div>

<!-- About Section -->
<div class="card">
    <h2 class="section-title">
        <i class="fas fa-music"></i> Tentang ConfessTune
    </h2>

    <div class="about-grid">
        <div class="about-item">
            <div class="about-icon">
                <i class="fas fa-paper-plane"></i>
            </div>
            <h3>Kirim Pesan</h3>
            <p>Pilih lagu favorit dan kirim pesan bermakna kepada orang yang kamu sayang.</p>
        </div>

        <div class="about-item">
            <div class="about-icon">
                <i class="fas fa-heart"></i>
            </div>
            <h3>Ekspresikan Perasaan</h3>
            <p>Ungkapkan perasaan yang sulit dikatakan melalui lirik lagu yang menyentuh hati.</p>
        </div>

        <div class="about-item">
            <div class="about-icon">
                <i class="fas fa-music"></i>
            </div>
            <h3>Koleksi Lagu</h3>
            <p>Berbagai pilihan lagu dari genre dan era yang berbeda untuk setiap momen spesial.</p>
        </div>
    </div>
</div>

<!-- How It Works Section -->
<div class="card">
    <h2 class="section-title">
        <i class="fas fa-question-circle"></i> Cara Menggunakan
    </h2>

    <div class="steps-container">
        <div class="step">
            <div class="step-number">1</div>
            <h3>Daftar/Masuk</h3>
            <p>Buat akun atau masuk ke platform ConfessTune</p>
        </div>

        <div class="step">
            <div class="step-number">2</div>
            <h3>Pilih Lagu</h3>
            <p>Browse dan pilih lagu yang sesuai dengan perasaanmu</p>
        </div>

        <div class="step">
            <div class="step-number">3</div>
            <h3>Tulis Pesan</h3>
            <p>Tambahkan pesan personal untuk memperkuat makna lagu</p>
        </div>

        <div class="step">
            <div class="step-number">4</div>
            <h3>Kirim</h3>
            <p>Kirim ke orang tersayang dan buat momen yang berkesan</p>
        </div>
    </div>
</div>

<!-- Contact Us Section -->
<div class="card">
    <h2 class="section-title">
        <i class="fas fa-envelope"></i> Tim Pengembang
    </h2>

    <p style="text-align: center; margin-bottom: 2rem; color: var(--secondary);">
        Hubungi tim pengembang ConfessTune untuk pertanyaan, saran, atau dukungan teknis.
    </p>

    <div class="contact-grid">
        <div class="contact-card">
            <div class="contact-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h3>Ayang Nova Anggraeni</h3>
            <p class="contact-role">2310631170126</p>
            <div class="contact-info">
                <a href="mailto:ayangnovaanggraeni371@gmail.com">
                    <i class="fas fa-envelope"></i> ayangnovaanggraeni371@gmail.com
                </a>
                <a href="https://github.com/AyangNovaAnggraeni" target="_blank">
                    <i class="fab fa-github"></i> @AyangNovaAnggraeni
                </a>
            </div>
        </div>

        <div class="contact-card">
            <div class="contact-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h3>Iman Nurwahyu</h3>
            <p class="contact-role">2310631170090</p>
            <div class="contact-info">
                <a href="mailto:iman@confesstune.com">
                    <i class="fas fa-envelope"></i> iman@confesstune.com
                </a>
                <a href="https://github.com/imannurwahyu" target="_blank">
                    <i class="fab fa-github"></i> @ImanNurwahyu
                </a>
            </div>
        </div>

        <div class="contact-card">
            <div class="contact-avatar">
                <i class="fas fa-user"></i>
            </div>
            <h3>Kevin Victorian</h3>
            <p class="contact-role">2310631170025</p>
            <div class="contact-info">
                <a href="mailto:kevin@confesstune.com">
                    <i class="fas fa-envelope"></i> kevin@confesstune.com
                </a>
                <a href="https://github.com/kevinpohan" target="_blank">
                    <i class="fab fa-github"></i> @KevinPohan
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2025 ConfessTune. Ungkapkan perasaanmu melalui musik.</p>
    <div class="footer-links">
        <a href="#"><i class="fas fa-shield-alt"></i> Privacy Policy</a>
        <a href="#"><i class="fas fa-gavel"></i> Terms of Service</a>
        <a href="#"><i class="fas fa-question-circle"></i> FAQ</a>
    </div>
</div>
@endsection