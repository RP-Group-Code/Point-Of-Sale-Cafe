@extends('layout/index')
@section('content')
    <style>
        .row {
            margin-top: 1rem;
        }
    </style>
    <div class="container">
        <section class="content-header ml-3 mb-2 pt-5">
            <title>Create | Penjualan </title>
            <div class="container-fluid">
                <h1>
                    Tambah Data Penjualan Makanan
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Penambahan Data Penjualan </h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('penjualans.store') }}" method="POST" enctype="multipart/form-data"
                        id="quickForm">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label>Nama Makanan</label>
                                        <div class="form-group">
                                            <select class="form-control" name="stok_id">
                                                @foreach ($stoks as $brg)
                                                    <option value="{{ $brg->id }}">{{ $brg->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="stok">Jumlah Pesanan</label>
                                        <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1"
                                            placeholder="Stok Makanan" value="{{ old('stok') }}" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label>Member</label>
                                        <div class="form-group">
                                            <select class="form-control" name="member_id">
                                                @foreach ($members as $brg)
                                                    <option value="{{ $brg->id }}">{{ $brg->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <input type="hidden" name="akun_id" id="akun_id"
                                            value="{{ Session::get('user')[0]['id'] }}" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('penjualans.index') }}" class="btn btn-warning">Lihat Pesanan</a>
                                <button type="submit" class="btn btn-primary">TAMBAH</button>
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
