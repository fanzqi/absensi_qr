@extends('layouts.app')

@section('title', 'Data Guru')

@section('content')
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Data Guru</h1>

    <div class="card shadow mb-4">

        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>

            <div>
                <a href="{{ route('admin.guru.create') }}" class="btn btn-primary btn-sm">
                    Tambah Guru
                </a>

                <a href="#" class="btn btn-success btn-sm">
                    Ekspor Excel
                </a>

                <a href="#" class="btn btn-secondary btn-sm" target="_blank">
                    Print
                </a>
            </div>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Mapel</th>
                            <th>No HP</th>
                            <th>Pendidikan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($guru as $guru)

                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->nama }}</td>
                                <td>{{ $guru->jenis_kelamin }}</td>
                                <td>{{ $guru->mapel }}</td>
                                <td>{{ $guru->no_hp }}</td>
                                <td>{{ $guru->pendidikan_terakhir }}</td>

                                <td>
{{--
                                    <a href="{{ route('guru.show', $guru->id) }}"
                                        class="btn btn-info btn-sm">
                                        Detail
                                    </a> --}}

                                    <a href="{{ route('admin.guru.edit', $guru->id) }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                   <button type="button"
        class="btn btn-danger btn-sm"
        data-toggle="modal"
        data-target="#deleteModal{{ $guru->id }}">

    Hapus

</button>

                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="8" class="text-center">
                                    Data guru belum tersedia
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>
@endsection
<div class="modal fade"
     id="deleteModal{{ $guru->id }}"
     tabindex="-1"
     role="dialog"
     aria-labelledby="deleteModalLabel{{ $guru->id }}"
     aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="deleteModalLabel{{ $guru->id }}">
                    Konfirmasi Hapus
                </h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">
                Yakin ingin menghapus data guru <b>{{ $guru->nama }}</b>?
            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Batal
                </button>

                <form action="{{ route('admin.guru.destroy', $guru->id) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Hapus
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
