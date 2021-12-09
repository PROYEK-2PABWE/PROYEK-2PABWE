@extends('layouts.app')
@section('content')
    <h1>Data Kuliah</h1>
    <a class="btn btn-primary" href="{{ route('tambah') }}">Tambah Data</a>
    <a class="btn btn-primary" href="{{ route('view.login') }}">Register</a>
    <br><br>
    <table class="table table-bordered">
        <tr class="text-center">
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>

        @foreach ($data as $kuliah)
            <tr class="text-center">
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->pasword }}</td>
                <td>
                    <a class="btn btn-warning" href="{{ route('edit.perkuliahan', $kuliah->id_kuliah) }}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('hapus.perkuliahan', $kuliah->id_kuliah) }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
