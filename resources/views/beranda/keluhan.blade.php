@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')

    <form action="{{ route('home.simpanKeluhan') }}" method="POST">
        {{ csrf_field() }}
        <div class="p-5">
            <h2>Anda Memiliki Keluhan</h2>
            <p>Informasikan kepada kami, keluhan anda. Keluhan anda akan segera kami tindak lanjuti</p>
            <div class="w-75">
                <div class="bg-secondary py-2">
                    <i class="fas fa-pen mx-3"></i>
                </div>
                <textarea rows="10" cols="120" style="max-width:100%" name="pesanKeluhan"
                    placeholder="Tuliskan isi pesan anda"></textarea>
            </div>
            <br>
            <input type="submit" value="Kirim" class="btn btn-primary bg-color-main">
        </div>
    </form>
@endsection
