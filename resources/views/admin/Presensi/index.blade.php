@extends('layouts.app')

@section('title', 'Data Presensi QR')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Presensi QR</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Presensi QR</h6>
            </div>
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('presensi.create') }}" class="btn btn-primary btn-sm">Tambah Presensi</a>
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
                                <th>Nama Siswa</th>
                                <th>Kode QR</th>
                                <th>Tanggal Presensi</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($presensis as $presensi)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $presensi->siswa->nama ?? '-' }}</td>
                                    <td>{{ $presensi->kode_qr }}</td>
                                    <td>{{ $presensi->tanggal_presensi }}</td>
                                    <td>{{ $presensi->status }}</td>
                                    <td>
                                        <a href="{{ route('presensi.show', $presensi->id) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('presensi.edit', $presensi->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('presensi.destroy', $presensi->id) }}" method="POST"
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
                    {{-- {{ $presensis->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
