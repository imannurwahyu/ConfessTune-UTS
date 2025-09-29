@extends('layouts.app')

@section('title', 'Dashboard User - ConfessTune')

@section('content')
<div class="card">
    <div class="welcome-text">
        <i class="fas fa-user"></i> Selamat datang {{ auth()->user()->name }}, ConfessTune
        <div style="font-size: 1rem; color: var(--secondary); margin-top: 0.5rem;">
            Halo, {{ auth()->user()->name }}!
        </div>
    </div>

    <div class="btn-group">
        <a href="{{ route('user.kirim') }}" class="btn">
            <i class="fas fa-paper-plane"></i> Kirim Lagu
        </a>
        <a href="{{ route('profile.edit') }}" class="btn" style="background: var(--secondary);">
            <i class="fas fa-user-cog"></i> Kelola Profile
        </a>
    </div>
</div>

<!-- Card Info Profile -->
<div class="card">
    <h3 style="color: var(--primary); margin-bottom: 1rem;">
        <i class="fas fa-info-circle"></i> Info Profile
    </h3>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
        <div>
            <strong>Nama:</strong> {{ auth()->user()->name }}
        </div>
        <div>
            <strong>Email:</strong> {{ auth()->user()->email }}
        </div>
        <div>
            <strong>Role:</strong>
            <span style="background: var(--primary); color: white; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">
                {{ ucfirst(auth()->user()->roles) }}
            </span>
        </div>
        <div>
            <strong>Bergabung:</strong> {{ auth()->user()->created_at->format('d M Y') }}
        </div>
    </div>
</div>
@endsection