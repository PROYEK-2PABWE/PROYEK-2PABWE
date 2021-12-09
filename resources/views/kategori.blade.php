@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href={{ asset('css/sideBar.css') }}>
    <div class="row">
        <div class="col-3 me-4 sidenav card p-3">
            <a href=" {{ route('beranda.kategori') }}" class="text-dark p-1 fs-5">Semua</a>
            <a href="#services" class="text-dark p-1 fs-5">Obat</a>
            <a href="#clients" class="text-dark p-1 fs-5">Suplemen</a>
            <a href="#contact" class="text-dark p-1 fs-5">Alat Kesehatan</a>
            <a href="#contact" class="text-dark p-1 fs-5">Kosmetika</a>
            <a href="#contact" class="text-dark p-1 fs-5">Obat Herbal</a>
            <a href="#contact" class="text-dark p-1 fs-5">Produk Ibu dan Bayi</a>
            <a href="#contact" class="text-dark p-1 fs-5">Susu</a>
        </div>

        <div class="col-9 main">
            <!-- produk Terbaru-->
            <div class="row mt-4">
                <!-- produk pertama -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/satu') }}">
                            <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                                <p class="card-text">
                                    Produk Pertama
                                </p>
                            </a>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <p>
                                        Rp. 10.000,00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- produk kedua -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/dua') }}">
                            <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                                <p class="card-text">
                                    Produk Kedua
                                </p>
                            </a>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <p>
                                        Rp. 10.000,00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- produk ketiga -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/tiga') }}">
                            <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                                <p class="card-text">
                                    Produk Ketiga
                                </p>
                            </a>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <p>
                                        Rp. 10.000,00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end produk terbaru -->

            <!-- produk Terbaru-->
            <div class="row mt-4">
                <!-- produk pertama -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/satu') }}">
                            <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                                <p class="card-text">
                                    Produk Pertama
                                </p>
                            </a>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <p>
                                        Rp. 10.000,00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- produk kedua -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/dua') }}">
                            <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                                <p class="card-text">
                                    Produk Kedua
                                </p>
                            </a>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <p>
                                        Rp. 10.000,00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- produk ketiga -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('produk/tiga') }}">
                            <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                                <p class="card-text">
                                    Produk Ketiga
                                </p>
                            </a>
                            <div class="row mt-4">
                                <div class="col">
                                    <button class="btn btn-light">
                                        <i class="far fa-heart"></i>
                                    </button>
                                </div>
                                <div class="col-auto">
                                    <p>
                                        Rp. 10.000,00
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end produk terbaru -->
        </div>
    </div>

@endsection
