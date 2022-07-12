@extends('layout/index')
@section('content')
    <div class="container">
        <section class="content-header mb-5">
            <title>View | Member</title>
            <section class="content-header ml-4">
                <div class="row mt-2">
                    <h1 class="m-0">Data Member</title>
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
                                <a href="{{ route('members.create') }}">
                                    <button class="btn btn-primary m-2">Tambah Member</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="tblAkun">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Nomor Telephone</th>
                                                <th>Point</th>
                                                <th>Button</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td>{{ $user->nama }}</td>
                                                    <td>{{ $user->notelp }}</td>
                                                    <td>{{ $user->point }}</td>
                                                    <td>
                                                        <a href="{{ route('members.edit', $user->id) }}" class="btn">
                                                            <i class="fa fa-edit text-info fa-lg"></i>
                                                        </a>
                                                        <form style="display: inline" method="post"
                                                            action="{{ route('members.destroy', $user->id) }}">
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
