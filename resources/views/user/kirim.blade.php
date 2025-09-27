@extends('layouts.app')

@section('title', 'Kirim Lagu - ConfessTune')

@section('content')
<a href="{{ route('user.dashboard') }}" class="btn back-btn">
    <i class="fas fa-arrow-left"></i> Kembali
</a>

<div class="card">
    <h2 style="text-align: center; margin-bottom: 2rem; color: var(--primary);">
        <i class="fas fa-music"></i> Kirim Lagu
    </h2>

    <form action="{{ route('user.kirim.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="to" class="form-label">Kepada:</label>
            <input type="text" id="to" name="to" class="form-control"
                placeholder="Nama penerima" value="{{ old('to') }}" required>
            @error('to')
            <small style="color: var(--accent);">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="lagu_id" class="form-label">Pilih Lagu:</label>
            <select id="lagu_id" name="lagu_id" class="form-control" required>
                <option value="">-- Pilih Lagu --</option>
                @foreach($lagu as $item)
                <option value="{{ $item->id }}" {{ old('lagu_id') == $item->id ? 'selected' : '' }}>
                    {{ $item->judul }} - {{ $item->Penyanyi }}
                </option>
                @endforeach
            </select>
            @error('lagu_id')
            <small style="color: var(--accent);">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="pesan" class="form-label">Pesan:</label>
            <textarea id="pesan" name="pesan" class="form-control"
                placeholder="Tulis pesan Anda..." required>{{ old('pesan') }}</textarea>
            @error('pesan')
            <small style="color: var(--accent);">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-center">
            <i class="fas fa-paper-plane"></i> Kirim
        </button>
    </form>
</div>
@endsection