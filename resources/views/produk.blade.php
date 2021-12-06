@extends('layouts.main')

@section('container')
    <div class="row my-5">
        <div class="col-4 m-auto text-center">
            <!-- <a href="{{ asset('storage/'.$data->gambarProduk->first()->full) }}" data-fancybox="">
                <img src="{{ asset('storage/'.$data->gambarProduk->first()->full) }}" alt="">  
            </a> -->
            <i class="fas fa-image" style="font-size: 10rem"></i>
        </div>
    @foreach ($data as $detail)
        <div class="col-8">
            <div class="d-flex flex-column">
                <h1 class="fs-1">{{ $detail->namaProduk }}</h1>
                <div class="d-flex">
                    <p class="pe-5">Stock: {{ $detail->stokProduk }} </p>
                    <p class="ps-5">Brand: {{ $detail->brand }} </p>
                </div>

                <!-- <h6 class="fs-6">Pilih Kemasan</h6>
                <div class="d-flex flex-row">
                    <button type="button" class="btn btn-color-main mx-2 px-4 text-uppercase fw-bold">
                        Tablet
                    </button>
                    <button type="button" class="btn btn-color-main mx-2 px-4 text-uppercase fw-bold">
                        Box
                    </button>
                </div> -->

                <p class="fs-6 mt-3">Harga</p>
                <h4 class="fs-3 mx-3">Rp {{ $detail->hargaProduk }} </h4>
                <!-- <p class="fst-italic fs-6">*Harga sesuai kemasan yang dipilih</p> -->
                @endforeach
                <div class="d-flex flex-row mt-3">
                    <p class="fs-6 my-auto">{{ $detail->hargaProduk * $detail->stokProduk }}</p>
                    <input class="form-control mx-3" type="number" min="1" value="1" max="" name="qty" style="width:70px;">
                </div>
                <!-- <div class="d-flex flex-row mx-3">
                    <button type="button" class="border-0"> 
                        <i class="fas fa-minus-circle fs-3" style="color: #D27C2C"></i>
                    </button>
                    <h4 class="fs-3 px-5"> 1 </h4>
                    <button type="button" class="border-0">
                        <i class="fas fa-plus-circle fs-3" style="color: #D27C2C"></i>
                    </button>
                </div> -->

                <!-- <p class="fs-6 mt-3">Total Harga</p>
                <h4 class="fs-3 mx-3">Rp 19.658,00</h4> -->

                <!-- <div class="d-flex flex-row">
                    <button type="submit" class="btn btn-danger px-4 text-capitalize">
                        <i class="fas fa-cart-plus"></i> Beli</button>
                    <button type="submit" class="btn btn-secondary  mx-2 text-capitalize">
                        <i class="fas fa-heart"></i> Wishlist</button>
                </div>                 -->

                <button type="submit" class="btn btn-success my-4" style="width: fit-content"><i class="fas fa-shopping-cart"></i> Add To Cart</button>

            </div>
        </div>
    </div>
  
    <!-- <div class="d-flex flex-row fs-3">
        <i class="fas fa-info-circle"></i>
        <h4 class=" text-capitalize mx-2">Info Produk</h4>
    </div>
  
    <hr>
  
    <dl>
        <dt>Golongan Obat</dt>
        <dd class="mx-3">Deskripsi Golongan Obat</dd>
        
        <dt>Komposisi</dt>
        <dd class="mx-3">Deskripsi Komposisi</dd>

        <dt>Indikasi</dt>
        <dd class="mx-3">Deskripsi Indikasi</dd>
        
        <dt>Kemasan</dt>
        <dd class="mx-3">Deskripsi Kemasan</dd>

        <dt>Cara Pakai / Dosis</dt>
        <dd class="mx-3">Deskripsi Cara Pakai / Dosis</dd>
        
        <dt>Pabrik</dt>
        <dd class="mx-3">Deskripsi Pabrik</dd>
    </dl> -->
@endsection