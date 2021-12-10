@extends('layouts.main')

@section('container')
    @include('sweetalert::alert')

    <form action="{{ route('home.simpanResep') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="p-5">
            <h1>Kirim Resep</h1>
            <p>Anda bisa membeli obat dengan mengirimkan resep obat kepada kami. Silahkan lengkapi form dibawah ini</p>
            <h3>Upload Resep</h3>
            <br>
            <div class="bg-secondary py-5 w-100">
                <div class="m-auto bg-light w-75 rounded-3" style="border: dashed 0.3rem">
                    <div class="text-center" style="padding: 6rem 0">
                        <i class="fas fa-cloud-upload-alt color-main" style="font-size: 5rem"></i> <br><br>
                        <input type="file" id="myFile" name="file" style="background-color: #DDD;">
                    </div>
                </div>
            </div>
            <div class="form-group py-3">
                <h3>Keterangan :</h3> <br>
                <textarea class="form-control" name="ket" rows="5rem"></textarea>
            </div>
            <br>
            <input type="submit" value="Kirim" class="btn btn-primary bg-color-main" php artisan sweetalert:publish>
        </div>
    </form>

@endsection;
