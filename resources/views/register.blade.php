@extends('layouts.main')

@section('container')
    <form action="" method="">
        <div style="background-color: #618EB5;">
            <div class="container py-5">
                <div class="d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-2-strong" style="border-radius: 3rem;">
                            <div class="card-body p-5 text-center">
                                <h3 class="mb-5">Daftar</h3>

                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX-2">Nama</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">Daftar</button>

                                <p class="text-center text-muted mt-5 mb-0">Sudah punya akun? <a href="login.blade.php"
                                        class="fw-bold text-body">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
