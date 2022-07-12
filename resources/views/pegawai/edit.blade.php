@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Edit | Pegawai</title>
            <div class="container-fluid">
                <h1>
                    Edit Pegawai
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pengubahan Data Pegawai</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('pegawais.update', $pegawais->id) }}" method="POST"
                        enctype="multipart/form-data" id="quickForm">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Pegawai"
                                            value="{{ old('nama') ? old('nama') : $pegawais['nama'] }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="jabatan">jabatan Pegawai</label>
                                        <input type="text" name="jabatan" class="form-control" id="exampleInputPassword1"
                                            value="{{ old('jabatan') ? old('jabatan') : $pegawais['jabatan'] }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="shift" class="form-label">Shift Pegawai</label>
                                        <select class="form-control" name="shift_id" id="shift">
                                            <option value="{{ $pegawais['shift_id'] }}" hidden>
                                                {{ $pegawais->shift->shift }}
                                            </option>
                                            <option>~ Pilih shift ~</option>
                                            @foreach ($shifts as $brg)
                                            <option value="{{ $brg->id }}">{{ $brg->shift }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('pegawais.index') }}" class="btn btn-warning">KEMBALI</a>
                                <button type="submit" class="btn btn-primary">EDIT</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
@endpush
