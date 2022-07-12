@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Create | Member</title>
            <div class="container-fluid">
                <h1>
                    Tambah Data Member
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Penambahan Data Member</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data" id="quickForm">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="nama">nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            placeholder="nama Member" value="{{ old('nama') }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="no telp">no telp</label>
                                        <input type="no telp" name="notelp" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama no telp Member" value="{{ old('notelp') }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="point">Point Member</label>
                                        <input type="number" name="point" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama point Member" value="{{ old('point') }}" required>
                                    </div>
                                </div>
                            </div>
                            
                            <center>
                                <div class="tombol ml-3 mt-5">
                                    <a href="{{ route('members.index') }}" class="btn btn-secondary">BATAL</a>
                                    <button type="submit" class="btn btn-primary">BUAT AKUN</button>
                                </div>
                            </center>

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
