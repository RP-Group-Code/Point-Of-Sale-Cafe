<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="container">

    <section class="content-header ml-3 mb-2 pt-5">
        <title>Create | Akun</title>
        <div class="container-fluid">
            <h1 class="mb-5">
                <center>
                    Silahkan Registrasi Akun
                </center>
            </h1>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <!-- jquery validation -->
            <div class="card">
                <div class="card-header bg-success">
                    <h3 align="center" class="card-title">REGISTRASI</h3>
                </div>

                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ url('/createregister') }}" method="POST" enctype="multipart/form-data"
                    id="quickForm">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                                        placeholder="username" value="{{ old('username') }}" required>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                        placeholder="Password" value="{{ old('password') }}" required>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="nama">Nama Akun</label>
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                        placeholder="Nama" value="{{ old('nama') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1"
                                        placeholder="jabatan" value="{{ old('jabatan') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <div class="tombol ml-3 mt-5">
                            <a href="{{ url('/login') }}" class="btn btn-secondary">BATAL</a>
                            <button type="submit" class="btn btn-primary">BUAT AKUN</button>
                        </div>
                    </center>
            </div>
            <!-- /.card-body -->
            </form>
        </div>
</div>
</section>

</div>
