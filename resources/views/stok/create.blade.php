@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Create | Stok</title>
            <div class="container-fluid">
                <h1>
                    Tambah Data Stok
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Penambahan Data Stok</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('stoks.store') }}" method="POST" enctype="multipart/form-data" id="quickForm">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="nama">nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Makanan" value="{{ old('nama') }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="jumlah">jumlah</label>
                                        <input type="jumlah" name="jumlah" class="form-control" id="exampleInputEmail1"
                                            placeholder="Jumlah Makanan" value="{{ old('jumlah') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group mt-3">
                                        <label for="harga">Harga Makanan/Minuman</label>
                                        <input type="number" name="harga" class="form-control" id="exampleInputEmail1"
                                            placeholder="Harga Makanan/Minuman" value="{{ old('harga') }}" required>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="jenis" class="col-form-label">Jenis Stok</label>
                                        <form>
                                            <select class="form-control" name="jenis" required>
                                                <option>~ Pilih Jenis Stok ~</option>
                                                <option value="Makanan">Makanan</option>
                                                <option value="Minuman">Minuman</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <center>
                                <div class="tombol ml-3 mt-5">
                                    <a href="{{ route('stoks.index') }}" class="btn btn-secondary">BATAL</a>
                                    <button type="submit" class="btn btn-primary">BUAT STOK</button>
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
