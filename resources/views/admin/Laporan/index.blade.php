@extends('layouts.app')

@section('title', 'Data Laporan')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Laporan</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data laporan</h6>
            </div>
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('laporan.create') }}" class="btn btn-primary btn-sm">Tambah Laporan</a>
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
                                <th>Nama Laporan</th>
                                <th>Kode Laporan</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($laporans as $laporan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $laporan->nama_laporan }}</td>
                                    <td>{{ $laporan->kode_laporan }}</td>
                                    <td>{{ $laporan->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('laporan.show', $laporan->id) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('laporan.edit', $laporan->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                    {{-- Pagination --}}
                    {{-- {{ $laporans->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
