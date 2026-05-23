@extends('layouts.app')

@section('title', 'Tambah Kelas')

@section('content')
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Tambah Kelas</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kelas</h6>

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

                <form action="{{ route('admin.kelas.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nama_kelas">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas"
                            class="form-control @error('nama_kelas') is-invalid @enderror" value="{{ old('nama_kelas') }}"
                            required>
                        @error('nama_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="tingkat">Tingkat</label>
                        <input type="text" name="tingkat" id="tingkat"
                            class="form-control @error('tingkat') is-invalid @enderror" value="{{ old('tingkat') }}"
                            required>
                        @error('tingkat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" id="jurusan"
                            class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}"
                            required>
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label for="wali_guru_id">
                            Wali Kelas
                        </label>

                        <select name="wali_guru_id" id="wali_guru_id"
                            class="form-control @error('wali_guru_id') is-invalid @enderror">

                            <option value="">
                                -- Pilih Wali Kelas --
                            </option>

                            @foreach ($gurus as $g)
                                <option value="{{ $g->id }}" {{ old('wali_guru_id') == $g->id ? 'selected' : '' }}>

                                    {{ $g->nama }}

                                </option>
                            @endforeach

                        </select>

                        @error('wali_guru_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.kelas') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
