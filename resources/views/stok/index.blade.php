@extends('layout/index')
@section('content')
    <div class="container">
        <section class="content-header mb-5">
            <title>View | Stok Gudang</title>
            <section class="content-header ml-4">
                <div class="row mt-2">
                    <h1 class="m-0">Data Stok Gudang</title>
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
                                <a href="{{ route('stoks.create') }}">
                                    <button class="btn btn-primary m-2">Tambah Stok Gudang</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tblAkun">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jumlah Persediaan</th>
                                                <th>Harga</th>
                                                <th>Jenis</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stoks as $stok)
                                                <tr>
                                                    <td>{{ $stok->nama }}</td>
                                                    <td>{{ $stok->jumlah }}</td>
                                                    <td>{{ $stok->harga }}</td>
                                                    <td>{{ $stok->jenis }}</td>
                                                    <td>
                                                        <a href="{{ route('stoks.edit', $stok->id) }}" class="btn">
                                                            <i class="fa fa-edit text-info fa-lg"></i>
                                                        </a>
                                                        <form style="display: inline" method="post"
                                                            action="{{ route('stoks.destroy', $stok->id) }}">
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
