@extends('layout/index')
@section('content')
    <div class="container">
        <section class="content-header mb-5">
            <title>View | User System</title>
            <section class="content-header ml-4">
                <div class="row mt-2">
                    <h1 class="m-0">Data User System</title>
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
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tblAkun">
                                        <thead>
                                            <tr>
                                                <th>Usename</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->username }}</td>
                                                    <td>{{ $user->nama }}</td>
                                                    <td>{{ $user->jabatan }}</td>
                                                    <td>
                                                        <a href="{{ route('akuns.edit', $user->id) }}" class="btn">
                                                            <i class="fa fa-edit text-info fa-lg"></i>
                                                        </a>
                                                        <form style="display: inline" method="post"
                                                            action="{{ route('akuns.destroy', $user->id) }}">
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
