@extends('layouts.main')

@section('container')
<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12 pt-3">
            <div class="d-flex">
                <div class="pt-1">
                </div>
            </div>
            <div class="d-flex flex-column pt-4">
                <div>
                    <h5 class="text-uppercase font-weight-normal">DEL APOTEK</h5>
                </div>
                <div class="font-weight-normal">2 items</div>
            </div>
            <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                <div class="px-lg-5 mr-lg-5" id="produc">PRODUCTS</div>
                <div class="px-lg-5 ml-lg-5" id="prc">PRICE</div>
                <div class="px-lg-5 ml-lg-1" id="quantity">QUANTITY</div>
                <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="{{url('/images/paracetamol.jpg')}}" width="150" height="150" alt="" id="image"></div>
                    <div class="d-flex flex-column pl-md-3 pl-1">
                        <div>
                            <h6>Obat Demam</h6>
                        </div>
                        <div>Nama Obat:<span class="pl-2">Paracetamol</span></div>
                        <div>Kemasan:<span class="pl-3">Tablet</span></div>
                    </div>
                </div>
                <div class="pl-md-0 pl-1"><b>Rp. 15.000,00</b></div>
                <div class="pl-md-0 pl-2"> <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">2</span><span class="fa fa-plus-square text-secondary"></span> </div>
                <div class="pl-md-0 pl-1"><b>Rp. 30.000,00</b></div>
                <div class="close">&times;</div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="{{url('/images/gusi.jpg')}}" width="150" height="150" alt="" id="image"></div>
                    <div class="d-flex flex-column pl-md-3 pl-1">
                        <div>
                            <h6>Obat Gusi</h6>
                        </div>
                        <div>Nama Obat:<span class="pl-2">Mefinal</span></div>
                        <div>Kemasan:<span class="pl-3">Box</span></div>
                    </div>
                </div>
                <div class="pl-md-0 pl-1"><b>Rp. 120.000,00</b></div>
                <div class="pl-md-0 pl-2"> <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">1</span><span class="fa fa-plus-square text-secondary"></span> </div>
                <div class="pl-md-0 pl-1"><b>Rp.120.000,00</b></div>
                <div class="close">&times;</div>
            </div>
            </div>
    </div>
</div>
<div class="container bg-light rounded-bottom py-4" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div class="px-md-0 px-1" id="footer-font"> <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">Rp. 150.000,00</span></b> </div>
                <div> <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">CHECKOUT</button> </div>
            </div>
        </div>
    </div>
</div>

@endsection