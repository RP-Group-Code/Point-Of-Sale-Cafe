@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Edit | Stok</title>
            <div class="container-fluid">
                <h1>
                    Edit Stok
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pengubahan Data Stok</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('stoks.update', $stoks->id) }}" method="POST" enctype="multipart/form-data"
                        id="quickForm">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="nama">Nama Makanan / Minuma n</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Member"
                                            value="{{ old('nama') ? old('nama') : $stoks['nama'] }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="jumlah">Jumlah Stok</label>
                                        <input type="jumlah" name="jumlah" class="form-control" id="exampleInputEmail1"
                                            placeholder="Jumlah Makanan"
                                            value="{{ old('jumlah') ? old('jumlah') : $stoks['jumlah'] }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="harga">Harga Makanan / Minuman</label>
                                        <input type="harga" name="harga" class="form-control" id="exampleInputEmail1"
                                            placeholder="harga Makanan"
                                            value="{{ old('harga') ? old('harga') : $stoks['harga'] }}" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label for="jenis" class="col-form-label">Jenis Stok</label>
                                    <select class="form-control" name="jenis" required>
                                        <option value="{{ $stoks['jenis'] }}" hidden>
                                            {{ $stoks->jenis }}
                                        </option>
                                        <option>~ Pilih Jenis Stok ~</option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                            </div>

                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('stoks.index') }}" class="btn btn-warning">KEMBALI</a>
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
