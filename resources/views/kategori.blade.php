@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-4">
        <ul class="nav nav-pills flex-column " >
          <h3>
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="kategori.html" align="left" style="background-color: blue; color: black;">Kategori</a></li>
            <li class="nav-item"><a class="nav-link" href="semua.html" align="left" style="color: black;">Semua</a></li>
            <li class="nav-item"><a class="nav-link" href="obat.html" align="left" style="color: black;">Obat</a></li>
            <li class="nav-item"><a class="nav-link" href="alatkesehatan.html" align="left" style="color: black;">Alat Kesehatan</a></li>
            <li class="nav-item"><a class="nav-link" href="herbal.html" align="left" style="color: black;">Obat Herbal</a></li>
            <li class="nav-item"><a class="nav-link" href="kosmetik.html" align="left" style="color: black;">Kosmetik</a></li>
          </h3>  
        </ul>
        </div>
        
        <div class="col-lg-8">
          <h2 style="text-align: center; background-color: blue; color: white;">Semua Kategori</h2>
          <div class="row align-items-start">
            <div class="col" style="text-align:center; font-size: 25px;">
              <img src="image/Aerius.jpeg" width="180px">
              Aerius 
            </div>
            <div class="col" style="text-align: center; font-size: 25px;">
              <img src="image/Cetymin.jpeg" width="200px">
              Cetymin
            </div>
            <div class="col" style="text-align: center; font-size: 25px;">
              <img src="image/Cinolon.jpeg" width="200px">
              Cinolon
            </div>
            <div class="row align-items-center">
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Comdipin.jpeg" width="150px">
                Comdipin
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Magten.jpeg" alt="" width="150px">
                Magten
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Kifovir.jpeg" width="180px">
                Kifovir
              </div>
            </div>
            <div class="row align-items-end">
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Paracetamol.jpeg" alt="" width="180px">
                Paracetamol
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Protecline.jpeg" alt="" width="180px">
                Protecline
              </div>
              <div class="col" style="text-align: center; font-size: 25px;">
                <img src="image/Grantusif.jpeg" alt="" width="180px">
                Grantusif
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