@extends('layouts.app')

@section('title', 'Daftar - ConfessTune')

@section('content')
<div class="auth-container">
    <div class="card">
        <div class="auth-header">
            <h1><i class="fas fa-user-plus"></i> Daftar</h1>
            <p>Buat akun baru ConfessTune</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label">
                    <i class="fas fa-user"></i> Nama
                </label>
                <input id="name" class="form-control" type="text" name="name"
                    value="{{ old('name') }}" required autofocus autocomplete="name"
                    placeholder="Masukkan nama lengkap Anda">
                @error('name')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">
                    <i class="fas fa-envelope"></i> Email
                </label>
                <input id="email" class="form-control" type="email" name="email"
                    value="{{ old('email') }}" required autocomplete="username"
                    placeholder="Masukkan email Anda">
                @error('email')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <!-- Role Selection -->
            <div class="form-group">
                <label for="role" class="form-label">
                    <i class="fas fa-user-tag"></i> Daftar sebagai
                </label>
                <select id="role" name="role" class="form-control" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="user" {{ old('role') === 'user' ? 'selected' : '' }}>
                        👤 User (Mengirim Lagu)
                    </option>
                    <option value="admin" {{ old('role') === 'admin' ? 'selected' : '' }}>
                        🛡️ Admin (Mengelola Lagu)
                    </option>
                </select>
                @error('role')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">
                    <i class="fas fa-lock"></i> Password
                </label>
                <input id="password" class="form-control" type="password" name="password"
                    required autocomplete="new-password" placeholder="Minimal 8 karakter">
                @error('password')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">
                    <i class="fas fa-lock"></i> Konfirmasi Password
                </label>
                <input id="password_confirmation" class="form-control" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Ulangi password Anda">
                @error('password_confirmation')
                <small style="color: var(--accent);">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-center">
                <i class="fas fa-user-plus"></i> Daftar
            </button>
        </form>

        <div class="auth-links" style="margin-top: 2rem; padding-top: 1rem; border-top: 1px solid rgba(56, 75, 112, 0.2);">
            <p style="color: var(--secondary); margin-bottom: 0.5rem;">Sudah punya akun?</p>
            <a href="{{ route('login') }}">
                <i class="fas fa-sign-in-alt"></i> Masuk ke akun
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