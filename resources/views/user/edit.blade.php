@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Edit | Akun</title>
            <div class="container-fluid">
                <h1>
                    Edit Akun
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pengubahan Data Akun</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('akuns.update', $akuns->id) }}" method="POST" enctype="multipart/form-data"
                        id="quickForm">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="Username">Username</label>
                                        <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Perusahaan"
                                            value="{{ old('username') ? old('username') : $akuns['username'] }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nama">Nama Pengguna</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputPassword1"
                                            value="{{ old('nama') ? old('nama') : $akuns['nama'] }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="jabatan" class="form-label">Jabatan Pengguna</label>
                                        <select class="form-control" name="jabatan" id="jabatan">
                                            <option value="{{ $akuns->jabatan }}" hidden>
                                                {{ $akuns->jabatan }}
                                            </option>
                                            <option>~ Pilih Jabatan ~</option>
                                            <option value="Admin">Admin</option>
                                            <option value="User"> User</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('akuns.index') }}" class="btn btn-warning">KEMBALI</a>
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
