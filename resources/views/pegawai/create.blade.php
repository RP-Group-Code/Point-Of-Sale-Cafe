@includeIf('layout/style')
<div class="container">

    <section class="content-header ml-3 mb-2 pt-5">
        <title>Create | Pegawai</title>
        <div class="container-fluid">
            <h1 class="mb-5">
                <center>
                    Registrasi Pegawai Baru
                </center>
            </h1>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- jquery validation -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Register Pegawai</h3>
                </div>
                <form action="{{ route('pegawais.store') }}" method="POST" enctype="multipart/form-data"
                    id="quickForm">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="nama">nama</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama" value="{{ old('nama') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="jabatan" name="jabatan" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama jabatan Perusahaan" value="{{ old('jabatan') }}" required>
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="Shift">Shift Pegawai</label>
                                <form>
                                    <div class="form-group">
                                        <select class="form-control" name="shift_id">
                                            @foreach ($shifts as $brg)
                                                <option value="{{ $brg->id }}">{{ $brg->shift }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <center>
                            <div class="tombol ml-3 mt-5">
                                <a href="{{ route('akuns.index') }}" class="btn btn-secondary">BATAL</a>
                                <button type="submit" class="btn btn-primary">BUAT AKUN</button>
                            </div>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
@push('scripts')
@endpush
