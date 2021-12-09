@extends('layouts.main')

@section('container')

    <div style="background-image:url(images/imgg.png)">
        <div class="container py-5">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 3rem; background-color: rgb(142, 184, 184)">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5 fs-2">Daftar</h3>
                            <br>
                            <form action="{{ route('simpan.login') }}" method="post">
                                {{ csrf_field() }}

                                <div class="form-outline mb-4">
                                    <input type="text" id="name" name="name" class="form-control form-control-lg" />
                                    <label class="form-label">Nama</label>
                                </div>

                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif

                                <div class="form-outline mb-4">
                                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                                    <label class="form-label">Email</label>
                                </div>

                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-lg" />
                                    <label class="form-label">Password</label>
                                </div>

                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>

                                <p class="text-center text-muted mt-5 mb-0">Sudah punya
                                    akun? <a href="login.blade.php" class="fw-bold text-body">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <table class="table">
            <thead>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($register as $reg)
                    <tr>
                        <td>{{ $reg->name }}</td>
                        <td>{{ $reg->email }}</td>
                        <td>{{ $reg->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    </form>
@endsection
