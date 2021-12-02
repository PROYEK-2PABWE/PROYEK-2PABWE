@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
        <ul class="nav nav-pills flex-column " >
          <h3>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#" align="left" style="background-color: blue; color: white;">Kategori</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="kategori.html" align="left" style="color: black;">Semua</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="Obat.html" align="left" style="color: black;">Obat</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="AlatKesehatan.html" align="left" style="color: black;">Alat Kesehatan</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#"  align="left" style="color: black;">Obat Herbal</a></li>
            <li class="nav-item"><a class="nav-link" aria-current="page" href="#" align="left" style="color: black;">Kosmetik</a></li>
          </h3>  
        </ul>
        </div>
        
        <div class="col-lg-8">
          <h2 style="text-align: center; background-color: blue; color: white;">Semua Kategori</h2>
          <div class="row align-items-start">
            <div class="col" style="text-align:center; font-size: 25px;">
             <a href="#" class="text-decoration-none text-black"><img src="image/Alat Kesehatan/Glucodr blood.png" width="200px" height="150px">
              Glucodr<br>
              Rp.14.443
            </a> 
            </div>
            <div class="col" style="text-align: center; font-size: 25px;">
              <a href="#" class="text-decoration-none text-black"><img src="image/Alat Kesehatan/kasa steril.jpg" width="180px" height="150px">
              Kasa steril<br>
              Rp.14.443
              </a>
            </div>
            <div class="col" style="text-align: center; font-size: 25px;">
              <a href="#" class="text-decoration-none text-black"><img src="image/Alat Kesehatan/Omron Digital.png" width="200px">
              Omron<br>
              Rp.14.443
            </a>
            </div>
            <div class="row align-items-center">
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"><img src="image/digitalthermometer.jpeg" width="150px">
                digitalthermometer
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Magten.jpeg" alt="" width="150px">
                Magten<br>
                Rp.14.443
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"> <img src="image/Suplemen/Fruit 18 JR.png" width="180px">
                Fruit 18 JR<br>
                Rp.14.443
              </a>
              </div>
            </div>
            <div class="row align-items-end">
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"> <img src="image/Paracetamol.jpeg" alt="" width="180px">
                Paracetamol
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"> <img src="image/Protecline.jpeg" alt="" width="180px">
                Protecline
                Rp.14.443
                </a>
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <a href="#" class="text-decoration-none text-black"> <img src="image/Grantusif.jpeg" alt="" width="180px">
                Grantusif<br>
                Rp.14.443
                </a>
              </div>
            </div>
          </div>
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-md-center">
              <li class="page-item active">
                <a class="page-link" href="kategori.html"aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="kategori.html">1</a></li>
              <li class="page-item"><a class="page-link" href="kategori1.html">2</a></li>
              <li class="page-item"><a class="page-link" href="kategori2.html">3</a></li>
              <li class="page-item">
                <a class="page-link" href="kategori1.html" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>

@endsection