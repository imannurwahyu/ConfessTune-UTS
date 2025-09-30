@extends('layouts.app')

@section('title', 'Kiriman Lagu - ConfessTune')

@section('content')
<div class="card">
    <h2 style="text-align: center; margin-bottom: 2rem; color: var(--primary);">
        <i class="fas fa-music"></i> Kiriman Lagu
    </h2>

    <p><strong>Kepada:</strong> {{ $kirim->to }}</p>
    <p><strong>Lagu:</strong> {{ $kirim->lagu->judul }} - {{ $kirim->lagu->Penyanyi }}</p>
    <p><strong>Pesan:</strong> {{ $kirim->pesan }}</p>

    <hr>
    <p>
        <strong>Link kiriman ini:</strong><br>
        <a href="{{ route('user.show', $kirim->id) }}">
            {{ route('user.show', $kirim->id) }}
        </a>
    </p>
</div>
@endsection