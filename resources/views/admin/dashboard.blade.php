@extends('layouts.app')

@section('title', 'Dashboard Admin - ConfessTune')

@section('content')
<div class="card">
    <div class="welcome-text">
        <i class="fas fa-user-shield"></i> Selamat datang Admin, ConfessTune
        <div style="font-size: 1rem; color: var(--secondary); margin-top: 0.5rem;">
            Halo, {{ auth()->user()->name }}!
        </div>
    </div>

    <div class="btn-group">
        <a href="{{ route('admin.tambah') }}" class="btn">
            <i class="fas fa-plus"></i> Tambah Lagu
        </a>
        <a href="{{ route('profile.edit') }}" class="btn" style="background: var(--secondary);">
            <i class="fas fa-user-cog"></i> Kelola Profile
        </a>
    </div>
</div>

<!-- Card Statistik Admin -->
<div class="card">
    <h3 style="color: var(--primary); margin-bottom: 1rem;">
        <i class="fas fa-chart-bar"></i> Statistik
    </h3>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
        <div style="background: linear-gradient(135deg, var(--primary), var(--secondary)); color: white; padding: 1rem; border-radius: 8px; text-align: center;">
            <div style="font-size: 2rem; font-weight: bold;">{{ \App\Models\Lagu::count() }}</div>
            <div>Total Lagu</div>
        </div>
        <div style="background: linear-gradient(135deg, var(--secondary), var(--accent)); color: white; padding: 1rem; border-radius: 8px; text-align: center;">
            <div style="font-size: 2rem; font-weight: bold;">{{ \App\Models\KirimLagu::count() }}</div>
            <div>Lagu Terkirim</div>
        </div>
        <div style="background: linear-gradient(135deg, var(--accent), var(--primary)); color: white; padding: 1rem; border-radius: 8px; text-align: center;">
            <div style="font-size: 2rem; font-weight: bold;">{{ \App\Models\User::where('role', 'user')->count() }}</div>
            <div>Total User</div>
        </div>
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
            <span style="background: var(--accent); color: white; padding: 0.2rem 0.5rem; border-radius: 4px; font-size: 0.8rem;">
                {{ ucfirst(auth()->user()->role) }}
            </span>
        </div>
        <div>
            <strong>Bergabung:</strong> {{ auth()->user()->created_at->format('d M Y') }}
        </div>
    </div>
</div>
@endsection