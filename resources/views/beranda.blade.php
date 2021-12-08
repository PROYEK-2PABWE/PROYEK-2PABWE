@extends('layouts.main')

@section('container')
    <div class="row my-4 justify-content-center pt-5">
        <div class="col-12 col-sm-12 col-md-8">

            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/gusi.jpg" class="card-img-top" alt="gambar1">
                        <div class="card-body">
                            <h5 class="card-title">Pentingnya Menjaga Kesehatan</h5>
                            <p class="card-text text">Kesehatan adalah kondisi kesejahteraan fisik, mental, dan sosial yang
                                lengkap....</p>
                            <p><a href="https://id.wikipedia.org/wiki/Kesehatan" class="color-main">Baca
                                    selengkapnya...</a></p>
                            <p>Minggu, 05 Desember 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/1.jpg" class="card-img-top" alt="gambar2">
                        <div class="card-body">
                            <h5 class="card-title">Makanan Sehat</h5>
                            <p class="card-text text">Makanan sehat adalah makanan yang mengandung banyak gizi yang memang
                                sudah seimbang sesuai
                                dengan menu 4 sehat 5 sempurna.
                            </p>
                            <p><a href="https://www.gramedia.com/literasi/pengertian-makanan-4-sehat-5-sempurna-dan-jenis-jenisnya/"
                                    class="color-main">Baca
                                    selengkapnya...</a></p>
                            <p>Senin, 06 Desember 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/olahraga.jpg" class="card-img-top" alt="gambar3">
                        <div class="card-body">
                            <h5 class="card-title">Olahraga Teratur</h5>
                            <p class="card-text text">Olahraga dapar membantu mencegah penambahan berat badan berlebih atau
                                membantu mempertahankan penurunan berat badan. Saat Anda melakukan aktivitas fisik, Anda
                                membakar kalori. Semakin intens aktivitasnya, semakin banyak kalori yang terbakar.</p>
                            <p><a href="https://health.detik.com/berita-detikhealth/d-5218823/7-manfaat-olahraga-untuk-kesehatan-yang-dilakukan-secara-teratur#:~:text=Olahraga%20teratur%20dapat%20membantu%20mencegah%20atau%20menangani%20banyak,membantu%20menurunkan%20risiko%20kematian%20dari%20semua%20penyebab.%203."
                                    class="color-main">Baca
                                    selengkapnya...</a></p>
                            <p>Selasa, 07 Desember 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/7.jpg" class="card-img-top" alt="gambar4">
                        <div class="card-body">
                            <h5>Obat Tradisional</h5>
                            <p>Ada banyak sekali jenis tanaman obat tradisional atau yang biasa kita sebut dengan obat
                                herbal yang ampuh mengobati penyakit ringan hingga penyakit kelas berat. Selain itu, Tanaman
                                obat tradisional ini juga sudah teruji mampu menghilangkan penyakit dibandingkan dengan
                                obat-obatan yang dicampur dengan zat kimia</p>
                            <p><a href="https://bibitonline.com/artikel/10-macam-tanaman-obat-tradisional-dan-kegunaannya"
                                    class="color-main">Baca
                                    selengkapnya...</a></p>
                            <p>Rabu, 08 Desember 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/imgg.png" class="card-img-top" alt="gamabar5">
                        <div class="card-body">
                            <h5>Alat Kesehatan</h5>
                            <p>Alat Kesehatan adalah peralatan yang digunakan untuk tindakan medis
                                dalam dunia kedokteran baik itu untuk mencegah, mendiagnosis, mengobati/menyembuhkan,
                                meringankan, merawat serta memulihkan orang sakit atau bisa juga untuk memperbaiki fungsi
                                tubuh manusia termasuk tindakan implan.
                            </p>
                            <p><a href="https://www.amesbostonhotel.com/alat-kesehatan-dan-fungsinya/"
                                    class="color-main">Baca
                                    selengkapnya...</a></p>
                            <p>Kamis, 09 Desember 2021</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class=" mb-3">
                        <img src="images/kosmetik.jpg" class="card-img-top" alt="gambar6">
                        <div class="card-body">
                            <h5>Kosmetik</h5>
                            <p>Kosmetik adalah zat perawatan yang digunakan untuk meningkatkan penampilan atau aroma tubuh
                                manusia. Kosmetik umumnya merupakan campuran ...</p>
                            <p><a href="https://id.wikipedia.org/wiki/Kosmetik" class="color-main">Baca
                                    selengkapnya...</a></p>
                            <p>Jumat, 10 Desember 2021</p>
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
                <div class="card-body">
                    <div class="newsletter-header">
                        <h4 class="text-center">IKUTI NEWINFO</h4>
                    </div>
                    <p class="newsletter-text mt-4 px-3">
                        Newinfo Del Apotek merupakan satu cara agar kamu tidak ketinggalan informasi seputar
                        apotek kami. Informasi terbaru akan dikirimkan kepadamu secara berkala melalui email.
                        Cantumkan emailmu sekarang juga dan informasi terbaru akan menunggumu.
                    </p>
                    <form class="p-4">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 btn-subscribe">BERLANGGANAN</button>
                    </form>
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
                                <p class="text-light">"Jangan menunggu sakit baru memulai pola hidup sehat. Budayakan
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
                                <p class="text-light">"Luangkan waktumu sejenak untuk berolahraga karena kesehatanmu itu
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
                                <p class="text-light">"Kebahagiaan terbesar kita tidak tergantung pada situasi hidup di
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
