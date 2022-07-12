@extends('layout/index')
@section('content')
    <div class="container">
        <section class="content">
            <div class="container-fluid">
                <div class="card mt-5">
                    <div class="card-header text-white mt-3 bg-info">
                        <center>
                            <h3>Point Of Sale Cafe</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="container-fluid p-5">
                                <center>
                                    <h6>SILAHKAN PESAN !!</h6>
                                    <h6>PILIH PESANAN DENGAN MENEKAN ICON</h6>
                                </center>

                                <div class="container">
                                    <div class="container-fluid">
                                        <div class="row m-5" style="text-align: center;">
                                            <div class="col-md-5 p-5">
                                                <div class="card" style="width: 50%; margin-left: 7rem !important;">
                                                    <a href="{{ route('penjualans.create') }}">
                                                        <i align="center" class="fa-solid fa-burger"
                                                            style="font-size: 8rem;"></i>
                                                    </a>
                                                    <h4>MAKANAN</h4>

                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="{{ route('penjualans.index') }}"
                                                class="btn btn-info">Lihat Data Pesanan</a>
                                            </div>
                                            <div class="col-md-5 p-5">
                                                <div class="card" style="width: 50%; margin-left: 7rem !important;">
                                                    <a href="{{ route('createmn') }}">
                                                        <i align="center" class="fa-solid fa-beer-mug-empty"
                                                            style="font-size: 8rem;"></i>
                                                    </a>
                                                    <h4>MINUMAN</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
