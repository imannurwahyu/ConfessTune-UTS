@extends('layouts.app')

@section('title', 'Profile - ConfessTune')

@section('content')
<a href="{{ auth()->user()->role === 'admin' ? route('admin.dashboard') : route('user.dashboard') }}" class="btn back-btn">
    <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
</a>

<div class="card">
    <h2 style="text-align: center; margin-bottom: 2rem; color: var(--primary);">
        <i class="fas fa-user-edit"></i> Kelola Profile
    </h2>

    <!-- Update Profile Information Form -->
    <div style="margin-bottom: 2rem;">
        <h3 style="color: var(--primary); margin-bottom: 1rem;">
            <i class="fas fa-user"></i> Informasi Profile
        </h3>
        @include('profile.partials.update-profile-information-form')
    </div>

    <!-- Update Password Form -->
    <div style="margin-bottom: 2rem;">
        <h3 style="color: var(--primary); margin-bottom: 1rem;">
            <i class="fas fa-lock"></i> Ganti Password
        </h3>
        @include('profile.partials.update-password-form')
    </div>

    <!-- Delete Account Form -->
    <div>
        <h3 style="color: var(--accent); margin-bottom: 1rem;">
            <i class="fas fa-trash"></i> Hapus Akun
        </h3>
        @include('profile.partials.delete-user-form')
    </div>
</div>
@endsection