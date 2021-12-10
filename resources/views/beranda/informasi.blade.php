@extends('layouts.main')

@section('container')
    <!-- Optional JavaScript; choose one of the two! -->
    <section class="about" id="about">
        <div class="container">
            <h2>Informasi/Artikel</h2>
            <hr>
            <h2>Artikel populer</h2><br>
            <div class="row">
                <div class="col-sm-8">
                    <img src="images/40.jpg" style="width: 620px; height: 340px">
                </div>

                <div class="col-sm-4 d-flex flex-column">
                    <div class="text-start w-100 my-2 my-2"><a href="Informasi/7" class="text-dark fw-bold"><img
                                src="images/17.jpg" style="float: left; width: 90px;" class="mx-2" />
                            {{ $info->find(7)->excerptJudul }} </a>
                    </div>
                    <div class="text-start w-100 my-2"><a href="Informasi/8" class="text-dark fw-bold"><img
                                src="images/16.jpg" style="float: left; width: 90px;" class="mx-2"
                                class="mx-2" />
                            {{ $info->find(8)->excerptJudul }} </a>
                    </div>

                    <div class="text-start w-100 my-2"><a href="Informasi/9" class="text-dark fw-bold"><img
                                src="images/15.jpg" style="float: left; width: 90px;" class="mx-2" />
                            {{ $info->find(9)->excerptJudul }} </a>
                    </div>


                    <div class="text-start w-100 my-2"><a href="Informasi/10" class="text-dark fw-bold"><img
                                src="images/18.jpg" style="float: left; width: 90px;" class="mx-2" />
                            {{ $info->find(10)->excerptJudul }} </a>
                    </div>

                </div>
            </div>

            <h2 class="my-4">Artikel Terbaru</h2>

            <div class="row">

                <!-- row 1 collumns 1-->
                <div class="col-sm-4 text-center">
                    <a href="Informasi/1" class="text-dark"><img src="images/3.JPG" alt="" width="200" height="140"
                            class="mb-4">
                        <h4> {{ $info->find(1)->excerptJudul }} </h4>
                    </a>
                    <p> {{ $info->find(1)->excerptBody }} </p>
                </div>

                <!-- row2 collumns 1-->
                <div class="col-sm-4 text-center">
                    <a href="Informasi/2" class="text-dark"><img src="images/4.JPG" alt="" width="200" height="140"
                            class="mb-4">
                        <h4> {{ $info->find(2)->excerptJudul }} </h4>
                    </a>
                    <p> {{ $info->find(2)->excerptBody }} </p>
                </div>

                <!-- row3 collumns 1-->
                <div class="col-sm-4 text-center">
                    <a href="Informasi/3" class="text-dark"><img src="images/6.JPG" alt="" width="200" height="140"
                            class="mb-4">
                        <h4> {{ $info->find(3)->excerptJudul }} </h4>
                    </a>
                    <p> {{ $info->find(3)->excerptBody }} </p>
                </div>

            </div>

            <!-- Optional JavaScript; choose one of the two! -->
            <section class="about" id="about">
                <div class="container">
                    <div class="row">
                        <br>
                    </div>
                </div>
                <!-- row1 collumns 2-->
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <a href="Informasi/4" class="text-dark"><img src="images/7.JPG" alt="" width="200" height="140"
                                class="mb-4">
                            <h4> {{ $info->find(4)->excerptJudul }} </h4>
                        </a>
                        <p> {{ $info->find(4)->excerptBody }} </p>
                    </div>
                    <!-- row2 collumns 2-->
                    <div class="col-sm-4 text-center">
                        <a href="Informasi/5" class="text-dark"><img src="images/1.JPG" alt="" width="200" height="140"
                                class="mb-4">
                            <h4> {{ $info->find(5)->excerptJudul }} </h4>
                        </a>
                        <p> {{ $info->find(5)->excerptBody }} </p>
                    </div>
                    <!-- row3 collumns 2-->
                    <div class="col-sm-4 text-center">
                        <a href="Informasi/6" class="text-dark"><img src="images/5.JPG" alt="" width="200" height="140"
                                class="mb-4">
                            <h4> {{ $info->find(6)->excerptJudul }} </h4>
                        </a>
                        <p> {{ $info->find(6)->excerptBody }} </p>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
