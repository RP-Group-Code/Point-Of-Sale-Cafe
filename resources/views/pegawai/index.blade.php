@extends('layout/index')
@section('content')
    <div class="container">
        <section class="content-header mb-5">
            <title>View | Pegawai</title>
            <section class="content-header ml-4">
                <div class="row mt-2">
                    <h1 class="m-0">Data Pegawai</title>
                    </h1>
                </div>
            </section>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-header">
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('pegawais.create') }}">
                                    <button class="btn btn-primary m-2">Tambah Data Pegawai</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tblAkun">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Shift</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pegawais as $pegawai)
                                                <tr>
                                                    <td>{{ $pegawai->nama }}</td>
                                                    <td>{{ $pegawai->jabatan }}</td>
                                                    <td>{{ $pegawai->shift->shift }}</td>
                                                    <td>
                                                        <a href="{{ route('pegawais.edit', $pegawai->id) }}" class="btn">
                                                            <i class="fa fa-edit text-info fa-lg"></i>
                                                        </a>
                                                        <form style="display: inline" method="post"
                                                            action="{{ route('pegawais.destroy', $pegawai->id) }}">
                                                            @method('delete')
                                                            @csrf
                                                            <button type="submit" class="btn">
                                                                <i class="fa fa-trash text-danger"></i>
                                                            </button>
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
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')

@endpush
