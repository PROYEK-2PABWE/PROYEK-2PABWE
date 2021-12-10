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
            <div class="carousel-item active">
                <img src="{{ asset('images/slide1.jpg') }}" alt="Los Angeles" class="d-block"
                    style="width:100%; height:30em">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slide2.jpg') }}" alt="Chicago" class="d-block"
                    style="width:100%; height:30em">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slide3.jpg') }}" alt="New York" class="d-block"
                    style="width:100%; height:30em">
            </div>
        </div>

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
        <!-- kategori pertama -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="{{ URL::to('kategori/satu') }}">
                    <img src="{{ asset('images/kategori1.jpg') }}" alt="foto kategori" class="card-img-top">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('kategori/satu') }}" class="text-decoration-none">
                        <p class="card-text">Kategori Pertama</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- kategori kedua -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="{{ URL::to('kategori/dua') }}">
                    <img src="{{ asset('images/kategori2.jpg') }}" alt="foto kategori" class="card-img-top">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('kategori/dua') }}" class="text-decoration-none">
                        <p class="card-text">Kategori Kedua</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- kategori ketiga -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="{{ URL::to('kategori/tiga') }}">
                    <img src="{{ asset('images/kategori3.jpg') }}" alt="foto kategori" class="card-img-top">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('kategori/tiga') }}" class="text-decoration-none">
                        <p class="card-text">Kategori Ketiga</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end kategori produk -->

    <!-- produk Promo-->
    <div class="row mt-4">
        <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Promo</h2>
        </div>
        <!-- produk pertama -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="{{ URL::to('produk/satu') }}">
                    <img src="{{ asset('images/promo1.jpg') }}" alt="foto produk" class="card-img-top" width="200"
                        height="200">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                        <p class="card-text">
                            IbuProfen
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
                                <del>Rp. 90.000,00</del>
                                <br />
                                Rp. 60.000,00
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
                    <img src="{{ asset('images/promo2.jpg') }}" alt="foto produk" class="card-img-top" width="200"
                        height="200">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                        <p class="card-text">
                            Oil Baby
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
                                <del>Rp. 60.000,00</del>
                                <br />
                                Rp. 45.000,00
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
                    <img src="{{ asset('images/promo3.jpg') }}" alt="foto produk" class="card-img-top" width="200"
                        height="200">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                        <p class="card-text">
                            Madu TJ
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
                                <del>Rp. 45.000,00</del>
                                <br />
                                Rp. 35.000,00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end produk promo -->

    <!-- produk Terbaru-->
    <div class="row mt-4">
        <div class="col col-md-12 col-sm-12 mb-4">
            <h2 class="text-center">Terbaru</h2>
        </div>
        <!-- produk pertama -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <a href="{{ URL::to('produk/satu') }}">
                    <img src="{{ asset('images/terbaru0.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('produk/satu') }}" class="text-decoration-none">
                        <p class="card-text">
                            HERSAGI
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
                                Rp. 50.000,00
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
                    <img src="{{ asset('images/terbaru2.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('produk/dua') }}" class="text-decoration-none">
                        <p class="card-text">
                            FERNLEAF
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
                                Rp. 65.000,00
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
                    <img src="{{ asset('images/terbaru4.jpg') }}" alt="foto produk" class="card-img-top">
                </a>
                <div class="card-body">
                    <a href="{{ URL::to('produk/tiga') }}" class="text-decoration-none">
                        <p class="card-text">
                            TEA TREE OIL
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
                                Rp. 75.000,00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end produk terbaru -->

    <div class="row my-4 justify-content-center pt-5">
        <h2 class="text-center mb-5">Artikel Terbaru</h2>
        <div class="col-12 col-sm-12 col-md-8">

            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/gusi.jpg" class="card-img-top" width="200" height="140" alt="gambar1">
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
                        <img src="images/olahraga.jpg" class="card-img-top" width="200" height="140" alt="gambar3">
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
                        <img src="images/imgg.png" class="card-img-top" width="200" height="140" alt="gamabar5">
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
                        <img src="images/kosmetik.jpg" class="card-img-top" width="200" height="140" alt="gambar6">
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
                        <li><a href="https://www.youtube.com/watch?v=x769gFb0vks" class="fs-6">Penggolongan Jenis
                                Obat</a></li>
                        <li><a href="https://www.youtube.com/watch?v=wT7v22T1bzA" class="fs-6">Aturan Minum
                                Obat</a></li>
                        <li><a href="https://www.youtube.com/watch?v=Sn7NeoLfN4c" class="fs-6">Pengobatan
                                Alami</a></li>
                    </ul>
                    <p class="newsletter-text mt-4 px-3 text-light text-justify">
                        Secara umum, diabetes dibedakan menjadi dua jenis, yaitu diabetes tipe 1 dan tipe 2. Diabetes tipe 1
                        terjadi karena sistem kekebalan tubuh penderita menyerang dan menghancurkan sel-sel pankreas yang
                        memproduksi insulin. Hal ini mengakibatkan peningkatan kadar glukosa darah, sehingga terjadi
                        kerusakan pada organ-organ tubuh. Diabetes tipe 1 dikenal juga dengan diabetes autoimun. Pemicu
                        timbulnya keadaan autoimun ini masih belum diketahui dengan pasti. Dugaan paling kuat adalah
                        disebabkan oleh faktor genetik dari penderita yang dipengaruhi juga oleh faktor lingkungan.

                        Diabetes tipe 2 merupakan jenis diabetes yang lebih sering terjadi. Diabetes jenis ini disebabkan
                        oleh sel-sel tubuh yang menjadi kurang sensitif terhadap insulin, sehingga insulin yang dihasilkan
                        tidak dapat dipergunakan dengan baik (resistensi sel tubuh terhadap insulin). Sekitar 90-95% persen
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
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
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
                                <p class="text-light">"Luangkan waktumu sejenak untuk berolahraga karena kesehatanmu
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
                                <p class="text-light">"Kebahagiaan terbesar kita tidak tergantung pada situasi hidup
                                    di
                                    mana kita berada, tapi
                                    selalu dari hasil dari kesadaran yang baik, kesehatan yang baik, pekerjaan, dan
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
