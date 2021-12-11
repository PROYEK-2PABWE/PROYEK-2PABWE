@extends('layouts.mainAdmin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col col-lg-4 col-md-4">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-warning">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-warning">{{ $error }}</div>
                            @endforeach
                        @endif
                        <!-- image kategori -->
                        @if ($itemprofil->foto != null)
                            <img src="{{ Storage::url($itemprofil->foto) }}" alt="profil" width='150px'
                                class="img-thumbnail mb-2">
                            <br>
                            <form action="{{ url('/admin/imageProfil/profil') }}" method="post" style="display:inline;">
                                @csrf
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-sm btn-danger mb-2">
                                    Hapus
                                </button>
                            </form>
                        @else
                            <form action="{{ url('/admin/imageProfil') }}" method="post" enctype="multipart/form-data"
                                class="form-inline">
                                @csrf
                                <div class="form-group">
                                    <input type="file" name="image" id="image">
                                    <input type="hidden" name="profil_id" value={{ $itemprofil->id }}>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        @endif
                        <hr>

                        <form action="{{ url('/admin/setting/ubah') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">No Tlp</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    value="{{ Auth::user()->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Alamat</label>
                                <input type="text" name="alamat" id="phone" class="form-control"
                                    value="{{ Auth::user()->alamat }}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
