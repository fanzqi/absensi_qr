@extends('layouts.app')

@section('title', 'Tambah Guru')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tambah Guru</h1>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Form Tambah Guru
            </h6>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.guru.store') }}" method="POST">
                @csrf

                {{-- NIP --}}
                <div class="form-group">
                    <label for="nip">NIP</label>

                    <input type="text"
                        class="form-control @error('nip') is-invalid @enderror"
                        id="nip"
                        name="nip"
                        value="{{ old('nip') }}"
                        required>

                    @error('nip')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Nama --}}
                <div class="form-group">
                    <label for="nama">Nama Guru</label>

                    <input type="text"
                        class="form-control @error('nama') is-invalid @enderror"
                        id="nama"
                        name="nama"
                        value="{{ old('nama') }}"
                        required>

                    @error('nama')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Jenis Kelamin --}}
                <div class="form-group">
                    <label for="jenis_kelamin">
                        Jenis Kelamin
                    </label>

                    <select
                        class="form-control @error('jenis_kelamin') is-invalid @enderror"
                        id="jenis_kelamin"
                        name="jenis_kelamin"
                        required>

                        <option value="">
                            -- Pilih Jenis Kelamin --
                        </option>

                        <option value="Laki-laki"
                            {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                            Laki-laki
                        </option>

                        <option value="Perempuan"
                            {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                            Perempuan
                        </option>

                    </select>

                    @error('jenis_kelamin')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Mata Pelajaran --}}
                <div class="form-group">
                    <label for="mapel">
                        Mata Pelajaran
                    </label>

                    <input type="text"
                        class="form-control @error('mapel') is-invalid @enderror"
                        id="mapel"
                        name="mapel"
                        value="{{ old('mapel') }}"
                        required>

                    @error('mapel')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- No HP --}}
                <div class="form-group">
                    <label for="no_hp">No HP</label>

                    <input type="text"
                        class="form-control @error('no_hp') is-invalid @enderror"
                        id="no_hp"
                        name="no_hp"
                        value="{{ old('no_hp') }}"
                        required>

                    @error('no_hp')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Tanggal Lahir --}}
                <div class="form-group">
                    <label for="tanggal_lahir">
                        Tanggal Lahir
                    </label>

                    <input type="date"
                        class="form-control @error('tanggal_lahir') is-invalid @enderror"
                        id="tanggal_lahir"
                        name="tanggal_lahir"
                        value="{{ old('tanggal_lahir') }}"
                        required>

                    @error('tanggal_lahir')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Pendidikan --}}
                <div class="form-group">
                    <label for="pendidikan_terakhir">
                        Pendidikan Terakhir
                    </label>

                    <input type="text"
                        class="form-control @error('pendidikan_terakhir') is-invalid @enderror"
                        id="pendidikan_terakhir"
                        name="pendidikan_terakhir"
                        value="{{ old('pendidikan_terakhir') }}"
                        required>

                    @error('pendidikan_terakhir')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Alamat --}}
                <div class="form-group">
                    <label for="alamat">Alamat</label>

                    <textarea
                        class="form-control @error('alamat') is-invalid @enderror"
                        id="alamat"
                        name="alamat"
                        rows="4"
                        required>{{ old('alamat') }}</textarea>

                    @error('alamat')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                {{-- Tombol --}}
                <div class="form-group">

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('admin.guru') }}"
                        class="btn btn-secondary">

                        Batal

                    </a>

                </div>

            </form>

        </div>
    </div>
</div>
@endsection
