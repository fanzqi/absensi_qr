@extends('layouts.app')

@section('title', 'Data Mapel')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Data Mapel</h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data mapel</h6>
            </div>
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('mapel.create') }}" class="btn btn-primary btn-sm">Tambah Mapel</a>
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
                                <th>Nama Mapel</th>
                                <th>Kode Mapel</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($mapels as $mapel)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $mapel->nama_mapel }}</td>
                                    <td>{{ $mapel->kode_mapel }}</td>
                                    <td>{{ $mapel->deskripsi }}</td>
                                    <td>
                                        <a href="{{ route('mapel.show', $mapel->id) }}"
                                            class="btn btn-info btn-sm">Detail</a>
                                        <a href="{{ route('mapel.edit', $mapel->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('mapel.destroy', $mapel->id) }}" method="POST"
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
                    {{-- {{ $mapels->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection
