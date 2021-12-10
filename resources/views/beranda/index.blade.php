@extends('layouts.main')

@section('container')
    <!-- carousel -->
    <div id="carouselID" class="carousel slide w-50 mx-auto" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselID" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselID" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselID" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @foreach ($itemslide as $index => $slide)
                @if ($index == 0)
                    <div class="carousel-item active">
                        <img src="{{ Storage::url($slide->foto) }}" alt="Los Angeles" class="d-block"
                            style="width:100%; height:30em">
                        <h5>{{ $slide->caption_title }}</h5>
                        <p>{{ $slide->caption_content }}</p>
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ Storage::url($slide->foto) }}" alt="Chicago" class="d-block"
                            style="width:100%; height:30em">
                        <h5>{{ $slide->caption_title }}</h5>
                        <p>{{ $slide->caption_content }}</p>
                    </div>
        </div>
        @endif
        @endforeach
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselID" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselID" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- end carousel -->

    <!-- kategori produk -->
    <div class="row mt-4">
        <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Kategori Produk</h2>
        </div>
        @foreach ($itemkategori as $kategori)
            <!-- kategori pertama -->
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ URL::to('Kategori/' . $kategori->slug_kategori) }}">
                        @if ($kategori->foto != null)
                            <img src="{{ Storage::url($kategori->foto) }}" alt="{{ $kategori->nama_kategori }}"
                                class="card-img-top">
                        @else
                            <img src="{{ asset('images/bag.jpg') }}" alt="{{ $kategori->nama_kategori }}"
                                class="card-img-top">
                        @endif
                    </a>
                    <div class="card-body">
                        <a href="{{ URL::to('Kategori/' . $kategori->slug_kategori) }}" class="text-decoration-none">
                            <p class="card-text">{{ $kategori->nama_kategori }}</p>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- end kategori produk -->
        <!-- produk Promo-->
        <div class="row mt-4">
            <div class="col col-md-12 col-sm-12 mb-4">
                <h2 class="text-center">Promo</h2>
            </div>
            @foreach ($itempromo as $promo)
                <!-- produk pertama -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ URL::to('Produk/' . $promo->produk->slug_produk) }}">
                            @if ($promo->produk->foto != null)
                                <img src="{{ Storage::url($promo->produk->foto) }}"
                                    alt="{{ $promo->produk->nama_produk }}" class="card-img-top">
                            @else
                                <img src="{{ asset('images/bag.jpg') }}" alt="{{ $promo->produk->nama_produk }}"
                                    class="card-img-top">
                            @endif
                        </a>
                        <div class="card-body">
                            <a href="{{ URL::to('Produk/' . $promo->produk->slug_produk) }}"
                                class="text-decoration-none">
                                <p class="card-text">
                                    {{ $promo->produk->nama_produk }}
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
                                        <del>Rp. {{ number_format($promo->harga_awal, 2) }}</del>
                                        <br />
                                        Rp. {{ number_format($promo->harga_akhir, 2) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- end produk promo -->
            <!-- produk Terbaru-->
            <div class="row mt-4">
                <div class="col col-md-12 col-sm-12 mb-4">
                    <h2 class="text-center">Terbaru</h2>
                </div>
                @foreach ($itemproduk as $produk)
                    <!-- produk pertama -->
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="{{ URL::to('Produk/' . $produk->slug_produk) }}">
                                @if ($produk->foto != null)
                                    <img src="{{ Storage::url($produk->foto) }}" alt="{{ $produk->nama_produk }}"
                                        class="card-img-top">
                                @else
                                    <img src="{{ asset('images/bag.jpg') }}" alt="{{ $produk->nama_produk }}"
                                        class="card-img-top">
                                @endif
                            </a>
                            <div class="card-body">
                                <a href="{{ URL::to('Produk/' . $produk->slug_produk) }}" class="text-decoration-none">
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
                <!-- end produk terbaru -->

                <div class="row my-4 justify-content-center pt-5">
                    <h2 class="text-center mb-5">Artikel Terbaru</h2>
                    <div class="col-12 col-sm-12 col-md-8">

                        <div class="row">
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class=" mb-3">
                                    <img src="images/gusi.jpg" class="card-img-top" width="200" height="140"
                                        alt="gambar1">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{ $beranda->find(1)->judulBeranda }}</h5>
                                        <p class="card-text text"> {{ $beranda->find(1)->excerptBody }}</p>
                                        <p><a href="https://id.wikipedia.org/wiki/Kesehatan" class="color-main">Baca
                                                selengkapnya...</a></p>
                                        <p>{{ $beranda->find(1)->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class=" mb-3">
                                    <img src="images/1.jpg" class="card-img-top" width="200" height="140" alt="gambar2">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $beranda->find(2)->judulBeranda }}</h5>
                                        <p class="card-text text">{{ $beranda->find(2)->excerptBody }}
                                        </p>
                                        <p><a href="https://www.gramedia.com/literasi/pengertian-makanan-4-sehat-5-sempurna-dan-jenis-jenisnya/"
                                                class="color-main">Baca
                                                selengkapnya...</a></p>
                                        <p>{{ $beranda->find(2)->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class=" mb-3">
                                    <img src="images/olahraga.jpg" class="card-img-top" width="200" height="140"
                                        alt="gambar3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $beranda->find(3)->judulBeranda }}</h5>
                                        <p class="card-text text">{{ $beranda->find(3)->excerptBody }}</p>
                                        <p><a href="https://health.detik.com/berita-detikhealth/d-5218823/7-manfaat-olahraga-untuk-kesehatan-yang-dilakukan-secara-teratur#:~:text=Olahraga%20teratur%20dapat%20membantu%20mencegah%20atau%20menangani%20banyak,membantu%20menurunkan%20risiko%20kematian%20dari%20semua%20penyebab.%203."
                                                class="color-main">Baca
                                                selengkapnya...</a></p>
                                        <p>{{ $beranda->find(3)->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class=" mb-3">
                                    <img src="images/7.jpg" class="card-img-top" width="200" height="140" alt="gambar4">
                                    <div class="card-body">
                                        <h5>{{ $beranda->find(4)->judulBeranda }}</h5>
                                        <p>{{ $beranda->find(4)->excerptBody }}</p>
                                        <p><a href="https://bibitonline.com/artikel/10-macam-tanaman-obat-tradisional-dan-kegunaannya"
                                                class="color-main">Baca
                                                selengkapnya...</a></p>
                                        <p>{{ $beranda->find(4)->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class=" mb-3">
                                    <img src="images/imgg.png" class="card-img-top" width="200" height="140"
                                        alt="gamabar5">
                                    <div class="card-body">
                                        <h5>{{ $beranda->find(5)->judulBeranda }}</h5>
                                        <p>{{ $beranda->find(5)->excerptBody }}
                                        </p>
                                        <p><a href="https://www.amesbostonhotel.com/alat-kesehatan-dan-fungsinya/"
                                                class="color-main">Baca
                                                selengkapnya...</a></p>
                                        <p>{{ $beranda->find(5)->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4">
                                <div class=" mb-3">
                                    <img src="images/kosmetik.jpg" class="card-img-top" width="200" height="140"
                                        alt="gambar6">
                                    <div class="card-body">
                                        <h5>{{ $beranda->find(6)->judulBeranda }}</h5>
                                        <p>{{ $beranda->find(6)->excerptBody }}</p>
                                        <p><a href="https://id.wikipedia.org/wiki/Kosmetik" class="color-main">Baca
                                                selengkapnya...</a></p>
                                        <p>{{ $beranda->find(6)->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div> <br><br>


                        <!-- The Start of Pagination -->
                        <div class="row justify-content-center">
                            <div class="d-flex justify-content-center">
                                <nav aria-label="...">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">Sebelumnya</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Selengkapnya</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> <br><br>
                    <!-- The End of Pagination -->


                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="card mb-3">
                            <div class="card-body bg-secondary">
                                <div class="newsletter-header">
                                    <h4 class="text-center text-bold fs-4">Tambahan Informasi</h4>
                                </div>

                                <ul class="p-3 m-3 bg-light rounded-3">
                                    <li><a href="https://www.youtube.com/watch?v=x769gFb0vks"
                                            class="fs-6">Penggolongan Jenis
                                            Obat</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=wT7v22T1bzA" class="fs-6">Aturan
                                            Minum
                                            Obat</a></li>
                                    <li><a href="https://www.youtube.com/watch?v=Sn7NeoLfN4c"
                                            class="fs-6">Pengobatan
                                            Alami</a></li>
                                </ul>
                                <p class="newsletter-text mt-4 px-3 text-light text-justify">
                                    Secara umum, diabetes dibedakan menjadi dua jenis, yaitu diabetes tipe 1 dan tipe 2.
                                    Diabetes tipe 1
                                    terjadi karena sistem kekebalan tubuh penderita menyerang dan menghancurkan sel-sel
                                    pankreas yang
                                    memproduksi insulin. Hal ini mengakibatkan peningkatan kadar glukosa darah, sehingga
                                    terjadi
                                    kerusakan pada organ-organ tubuh. Diabetes tipe 1 dikenal juga dengan diabetes autoimun.
                                    Pemicu
                                    timbulnya keadaan autoimun ini masih belum diketahui dengan pasti. Dugaan paling kuat
                                    adalah
                                    disebabkan oleh faktor genetik dari penderita yang dipengaruhi juga oleh faktor
                                    lingkungan.

                                    Diabetes tipe 2 merupakan jenis diabetes yang lebih sering terjadi. Diabetes jenis ini
                                    disebabkan
                                    oleh sel-sel tubuh yang menjadi kurang sensitif terhadap insulin, sehingga insulin yang
                                    dihasilkan
                                    tidak dapat dipergunakan dengan baik (resistensi sel tubuh terhadap insulin). Sekitar
                                    90-95% persen
                                    penderita diabetes di dunia menderita diabetes tipe ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> <br><br><br>


                <!-- The start of Testimonial -->
                <section class="testimonial-slider p-5 bg-success">
                    <h1 class="text-light text-center">Testimonial Pengunjung</h1>
                    <h4 class="text-light text-center">Apa Kata Mereka?</h4>
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner py-5 text-center">
                            <div class="carousel-item active">
                                <i class="bi bi-chat-right-quote fs-1 text-danger"></i>
                                <figure class="col-md-6 offset-md-3 mt-4">
                                    <blockquote class="blockquote">
                                        <img class="img-circle img-responsive" src="images/15.jpg" alt="">
                                        <blockquote class="blockquote">
                                            <p class="text-light">"Jangan menunggu sakit baru memulai pola hidup sehat.
                                                Budayakan
                                                hidup
                                                sehat untuk mencegah
                                                segala penyakit."</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2 text-dark">
                                            Del Apotek
                                        </figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <i class="bi bi-chat-right-quote fs-1 text-danger"></i>
                                <figure class="col-md-6 offset-md-3 mt-4">
                                    <blockquote class="blockquote">
                                        <img class="img-circle img-responsive" src="images/4.jpg" alt="">
                                        <blockquote class="blockquote">
                                            <p class="text-light">"Luangkan waktumu sejenak untuk berolahraga karena
                                                kesehatanmu
                                                itu
                                                lebih bernilai
                                                daripada uang yang telah kamu hasilkan."</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2 text-dark">
                                            Del Apotek
                                        </figcaption>
                                </figure>
                            </div>
                            <div class="carousel-item">
                                <i class="bi bi-chat-right-quote fs-1 text-danger"></i>
                                <figure class="col-md-6 offset-md-3 mt-4">
                                    <blockquote class="blockquote">
                                        <img class="img-circle img-responsive" src="images/18.jpg" alt="">
                                        <blockquote class="blockquote">
                                            <p class="text-light">"Kebahagiaan terbesar kita tidak tergantung pada
                                                situasi hidup
                                                di
                                                mana kita berada, tapi
                                                selalu dari hasil dari kesadaran yang baik, kesehatan yang baik, pekerjaan,
                                                dan
                                                kebebasan dari semua tujuan."</p>
                                        </blockquote>
                                        <figcaption class="blockquote-footer mt-2 text-dark">
                                            Del Apotek
                                        </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </section> <br><br><br>

                <!-- The end of Testimonial -->
            @endsection
