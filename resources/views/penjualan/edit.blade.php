@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Edit | Penjualan Makanan</title>
            <div class="container-fluid">
                <h1>
                    Edit Penjualan Makanan
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pengubahan Data Penjualan </h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('barangk.update', $barangs->id) }}" method="POST" enctype="multipart/form-data"
                        id="quickForm">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="stok_id">Nama Makanan</label>
                                            <select class="form-control" name="stok_id">
                                                <option value="{{ $barangs['stok_id'] }}" hidden>
                                                    {{ $barangs->stok->nama }}
                                                </option>
                                                @foreach ($stokx as $brg)
                                                    <option value="{{ $brg->id }}">{{ $brg->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="stok">Jumlah Stok</label>
                                        <input type="number" name="jumlah" class="form-control" id="exampleInputEmail1"
                                            placeholder="Jumlah" value="{{ old('jumlah') ? old('jumlah') : $barangs['jumlah']}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="harga">Harga Jual</label>
                                        <input type="number" name="harga" class="form-control"
                                            id="exampleInputPassword1" placeholder="harga Yang Tersedia" value="{{ old('harga') ? old('harga') : $barangs['harga']}}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="pembeli">Pembeli</label>
                                        <input type="text" name="pembeli" class="form-control" placeholder="pembeli Yang Tersedia" value="{{ old('pembeli') ? old('pembeli') : $barangs['pembeli']}}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control"
                                            value="{{ old('keterangan') ? old('keterangan') : $barangs['keterangan'] }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="hidden" name="akun_id" id="akun_id"
                                        value="{{ Session::get('user')[0]['id'] }}" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('barangk.index') }}" class="btn btn-warning">KEMBALI</a>
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
