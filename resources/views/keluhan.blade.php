@extends('layouts.main')

@section('container')
    <div class="p-5">
        <h2>Anda Memiliki Keluhan</h2>
        <p>Informasikan kepada kami, keluhan anda. Keluhan anda akan segera kami tindak lanjuti</p>
        <div class="w-75">
            <div class="bg-secondary" style="width: 883px">
                <i class="fas fa-pen"></i>
            </div>
            <textarea rows="10" cols="108.6">Tuliskan isi pesan anda</textarea>
        </div>
        <input type="submit" value="Kirim" class="btn btn-primary bg-color-main py-3">
    </div>
@endsection
