@extends('layouts.app')

@section('title', 'Tambah Lagu - ConfessTune')

@section('content')
<a href="{{ route('admin.dashboard') }}" class="btn back-btn">
    <i class="fas fa-arrow-left"></i> Kembali
</a>

<div class="card">
    <h2 style="text-align: center; margin-bottom: 2rem; color: var(--primary);">
        <i class="fas fa-plus-circle"></i> Tambah Lagu Baru
    </h2>

    <form action="{{ route('admin.tambah.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="judul" class="form-label">Judul Lagu:</label>
            <input type="text" id="judul" name="judul" class="form-control"
                placeholder="Masukkan judul lagu" value="{{ old('judul') }}" required>
            @error('judul')
            <small style="color: var(--accent);">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="penyanyi" class="form-label">Penyanyi:</label>
            <input type="text" id="penyanyi" name="penyanyi" class="form-control"
                placeholder="Masukkan nama penyanyi" value="{{ old('penyanyi') }}" required>
            @error('penyanyi')
            <small style="color: var(--accent);">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-center">
            <i class="fas fa-save"></i> Tambah
        </button>
    </form>
</div>
@endsection