@extends('layouts.app')

@section('title', 'Data Kelas')

@section('content')

    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">
            Data Kelas
        </h1>

        <div class="card shadow mb-4">

            <div class="card-header py-3 d-flex justify-content-between align-items-center">

                <h6 class="m-0 font-weight-bold text-primary">
                    Data Kelas
                </h6>

                <div>

                    <a href="{{ route('admin.kelas.create') }}" class="btn btn-primary btn-sm">

                        Tambah Kelas

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

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>

                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Tingkat</th>
                                <th>Jurusan</th>
                                <th>Wali Kelas</th>
                                <th>Jumlah Siswa</th>
                                <th width="180">Aksi</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse ($kelas as $kls)
                                <tr>

                                    <td>
                                        {{ $loop->iteration }}
                                    </td>

                                    <td>
                                        {{ $kls->nama_kelas }}
                                    </td>

                                    <td>
                                        {{ $kls->tingkat }}
                                    </td>

                                    <td>
                                        {{ $kls->jurusan }}
                                    </td>

                                    <td>
                                        {{ $kls->waliGuru->nama ?? '-' }}
                                    </td>

                                    <td>
                                        -{{-- {{ $kls->siswa->count() }} --}}
                                    </td>

                                    <td>

                                        <a href="{{ route('admin.kelas.show', $kls->id) }}" class="btn btn-info btn-sm">

                                            Detail

                                        </a>

                                        <a href="{{ route('admin.kelas.edit', $kls->id) }}" class="btn btn-warning btn-sm">

                                            Edit

                                        </a>

                                        <form action="{{ route('admin.kelas.destroy', $kls->id) }}" method="POST"
                                            style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin hapus data?')">

                                                Hapus

                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="7" class="text-center">
                                        Data kelas belum tersedia
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
