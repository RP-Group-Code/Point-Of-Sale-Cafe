@includeIf('layout/style')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div class="login-card">
    <div class="container p-5">
        <div class="container-fluid cover">
            <div class="card text-info">
                <h1 class="text-center pb-5">
                    <b> POS CAFE </b>
                    @if (session()->has('loginEror') == true)
                        <div class="alert alert-danger alert-dismissible fade show" style="z-index: 1; font-size: 11px"
                            role="alert">
                            <i class="fas fa-exclamation-triangle" width="100%" height="44">
                                <strong></strong>LOGIN GAGAL, USERNAME / PASSWORD ANDA SALAH</i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                </h1>
                <div class="container">
                    <div class="container-fluid d-flex justify-content-center">
                        <form action="{{ route('masuk') }}" method="post" id="margin__card">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3 form-check">
                            </div>
                            <div class="tombol" align="center">
                                <button type="submit" class="btn btn btn-outline-primary mb-3">LOGIN</button>
                                <a href="{{url('/register')}}" type="submit" class="btn btn btn-outline-secondary mb-3">Register</a>
                                <br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
