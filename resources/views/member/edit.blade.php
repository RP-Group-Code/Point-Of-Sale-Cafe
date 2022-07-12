@extends('layout/index')
@section('content')
    <div class="container">

        <section class="content-header ml-3 mb-2 pt-5">
            <title>Edit | Member</title>
            <div class="container-fluid">
                <h1>
                    Edit Member
                </h1>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Pengubahan Data Member</h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('members.update', $members->id) }}" method="POST" enctype="multipart/form-data"
                        id="quickForm">
                        @method('put')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="nama">nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Member"
                                            value="{{ old('nama') ? old('nama') : $members['nama'] }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="No Telephone">No Telephone</label>
                                        <input type="text" name="notelp" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama No Telephone Member"
                                            value="{{ old('notelp') ? old('notelp') : $members['notelp'] }}" required>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="point">Point</label>
                                        <input type="number" name="point" class="form-control" id="exampleInputEmail1"
                                            placeholder="Point Member"
                                            value="{{ old('point') ? old('point') : $members['point'] }}" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('members.index') }}" class="btn btn-warning">KEMBALI</a>
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
