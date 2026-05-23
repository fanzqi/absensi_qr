@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data siswa</h6>
            </div>
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary btn-sm">Tambah Siswa</a>
                    <a href="#" class="btn btn-success btn-sm">Ekspor Excel</a>
                    <a href="#" class="btn btn-secondary btn-sm" target="_blank">Print</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $siswa->nis }}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->jenis_kelamin }}</td>
                                    <td>{{ $siswa->tempat }}, {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d-m-Y') }}</td>
                                    <td>{{ $siswa->kelas }}</td>
                                    <td>{{ $siswa->alamat }}</td>
                                    <td>
                                        <a href="{{ route('admin.siswa.show', $siswa->id) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('admin.siswa.edit', $siswa->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.siswa.destroy', $siswa->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
