@extends('layout/index')
@section('content')
    <div class="container">
        <section class="content-header mb-5">
            <title>View | Penjualan Makanan</title>
            <section class="content-header ml-4">
                <div class="row mt-2">
                    <h1 class="m-0">Data Penjualan Makanan</title>
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
                                <a href="{{ route('penjualans.create') }}">
                                    <button class="btn btn-primary m-2">Tambah Pesanan Makanan</button>
                                </a>
                                <a href="{{ route('createmn') }}">
                                    <button class="btn btn-success m-2">Tambah Pesanan Minuman</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tblAkun">
                                        <thead>
                                            <tr>
                                                <th>Nama Pesanan</th>
                                                <th>Jumlah Pesanan</th>
                                                <th>Pembeli</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>User Penginput</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penjualans as $penjualan)
                                                <tr>
                                                    <td>{{ $penjualan->stok->nama }}</td>
                                                    <td>{{ $penjualan->jumlah }}</td>
                                                    <td>{{ $penjualan->member->nama }}</td>
                                                    <td>{{ $penjualan->tgltransaksi }}</td>
                                                    <td>{{ $penjualan->akun->nama }}</td>
                                                    <td>
                                                        <form style="display: inline" method="post"
                                                            action="{{ route('penjualans.destroy', $penjualan->id) }}">
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
