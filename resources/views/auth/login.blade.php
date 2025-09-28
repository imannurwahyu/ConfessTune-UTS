@extends('layouts.app')

@section('title', 'Masuk - ConfessTune')

@section('content')
<div class="auth-container">
    <div class="card">
        <div class="auth-header">
            <h1><i class="fas fa-sign-in-alt"></i> Masuk</h1>
            <p>Masuk ke akun ConfessTune Anda</p>
        </div>

        <!-- Session Status -->
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope"></i> Email
                </label>
                <input id="email" class="form-control" type="email" name="email"
                    value="{{ old('email') }}" required autofocus autocomplete="username"
                    placeholder="Masukkan email Anda">
                @error('email')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input id="password" class="form-control" type="password" name="password"
                    required autocomplete="current-password" placeholder="Masukkan password Anda">
                @error('password')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="form-group" style="display: flex; align-items: center; gap: 0.5rem;">
                <input id="remember_me" type="checkbox" name="remember"
                    style="width: auto;">
                <label for="remember_me" class="form-label" style="margin: 0;">
                    Ingat saya
                </label>
            </div>

            <div style="display: flex; flex-direction: column; gap: 1rem;">
                <button type="submit" class="btn btn-center">
                    <i class="fas fa-sign-in-alt"></i> Masuk
                </button>

                @if (Route::has('password.request'))
                <div class="auth-links">
                    <a href="{{ route('password.request') }}">
                        <i class="fas fa-question-circle"></i> Lupa password?
                    </a>
                </div>
                @endif
            </div>
        </form>

        <div class="auth-links" style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid rgba(56, 75, 112, 0.2);">
            <p style="color: var(--secondary); margin-bottom: 0.5rem;">Belum punya akun?</p>
            <a href="{{ route('register') }}">
                <i class="fas fa-user-plus"></i> Daftar sekarang
            </a>
        </div>
    </div>
</div>

<div class="auth-links">
    <a href="{{ route('welcome') }}" class="btn back-btn">
        <i class="fas fa-home"></i> Kembali ke Home
    </a>
</div>
@endsection