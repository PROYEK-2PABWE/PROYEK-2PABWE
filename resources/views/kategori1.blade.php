@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
        <ul class="nav nav-pills flex-column " >
          <h3>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#" align="left" style="background-color: blue; color: white;">Kategori</a></li>
            <li class="nav-item"><a class="nav-link" href="kategori.html" aria-current="page" href="#" align="left" style="color: black;">Semua</a></li>
            <li class="nav-item"><a class="nav-link" href="Obat.html" aria-current="page" href="#" align="left" style="color: black;">Obat</a></li>
            <li class="nav-item"><a class="nav-link" href="alatKesehatan.html" aria-current="page" href="#" align="left" style="color: black;">Alat Kesehatan</a></li>
            <li class="nav-item"><a class="nav-link" href="herbal.html" aria-current="page" href="#" align="left" style="color: black;">Obat Herbal</a></li>
            <li class="nav-item"><a class="nav-link" href="kosmetik.html" aria-current="page" href="#" align="left" style="color: black;">Kosmetik</a></li>
          </h3>  
        </ul>
        </div>
        
        <div class="col-lg-8">
          <h2 style="text-align: center; background-color: blue; color: white;">Semua Kategori</h2>
          <div class="row align-items-start">
            <div class="col" style="text-align:center; font-size: 25px;">
              <a href="#" class="text-decoration-none text-black">  <img src="image/Ritez tablet.jpg" width="180px">
              Ritez Tablet
              Rp.10000
              </a> 
            </div>
            <div class="col" style="text-align: center; font-size: 25px;">
              <a href="#" class="text-decoration-none text-black"> <img src="image/Ikagen Salep.jpg" width="200px">
              Ikagen Salep
              Rp.10000
              </a>
            </div>
            <div class="col" style="text-align: center; font-size: 25px;">
              <a href="#" class="text-decoration-none text-black"> <img src="image/Protecline.jpeg" width="200px">
              Protecline<br>
              Rp.10000
              </a>
            </div>
            <div class="row align-items-center">
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black">  <img src="image/Zigat.jpg" width="150px"><br>
                Zigat<br>
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black">  <img src="image/Purebb Hand & Mouth.jpeg" alt="" width="150px">
                Pureb Hand & Mouth<br>
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black">  <img src="image/Kifovir.jpeg" width="180px">
                Kifovir<br>
                Rp.14.443
                </a>
              </div>
            </div>
            <div class="row align-items-end">
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black">  <img src="image/Paracetamol.jpeg" alt="" width="180px">
                Paracetamol
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"> <img src="image/PolarisTablet.jpg" alt="" width="180px">
                PolarisTablet
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"><img src="image/Kaditic.jpeg" alt="" width="180px">
                Kaditic<br>
                Rp.14.443
                </a>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-md-center">
              <li class="page-item active">
                <a class="page-link" href="kategori.html" aria-label="Previous">
                  <span aria-hidden="false">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="kategori.html">1</a></li>
              <li class="page-item"><a class="page-link" href="kategori1.html">2</a></li>
              <li class="page-item"><a class="page-link" href="kategori2.html">3</a></li>
              <li class="page-item">
                <a class="page-link" href="kategori2.html" aria-label="Next">
                  <span aria-hidden="false">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
          

@endsection