@extends('layouts.main')

@section('container')
    <h1 class="text-center my-5"> {{ $informasi->judulInformasi }} </h1>

    {!! $informasi->text1 !!}

    <center>
        <img src="{{url('/images/1.jpg')}}" class="m-3">
    </center>

    {!! $informasi->text2 !!}
    
@endsection