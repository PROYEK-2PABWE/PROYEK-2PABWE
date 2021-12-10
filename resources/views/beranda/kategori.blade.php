@extends('layouts.main')

@section('container')
    <link rel="stylesheet" href={{ asset('css/sideBar.css') }}>
    <div class="row">
        <div class="col-3 me-4 sidenav card p-3">
            @foreach ($kategoris as $kategori)
                <a href="{{ URL::to('kategori/' . $kategori->slug_kategori) }}"
                    class="text-dark p-1 fs-5">{{ $kategori->nama_kategori }}</a>
            @endforeach
        </div>
        <div class="col-9 main">
            <!-- produk Terbaru-->
            <div class="row mt-4">
                @foreach ($itemproduk as $produk)
                    <!-- produk pertama -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('produk/' . $produk->slug_produk) }}">
                                <img src="{{ asset('images/slide2.jpg') }}" alt="foto produk" class="card-img-top">
                                @if ($produk->foto != null)
                                    <img src="{{ Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}"
                                        class="card-img-top">
                                @else
                                    <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}"
                                        class="card-img-top">
                                @endif
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('produk/' . $produk->slug_produk) }}" class="text-decoration-none">
                                    <p class="card-text">
                                        {{ $produk->nama_produk }}
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
                                            Rp. {{ number_format($produk->harga, 2) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
