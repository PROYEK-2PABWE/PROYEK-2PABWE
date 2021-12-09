@extends('layouts.main')

@section('container')
    <section class="vh-100" style="background-image:url(images/imgg.png)">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: rgb(142, 184, 184)">

                        <div class="card-body p-5 text-center">

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <h3 class="mb-5">Daftar</h3>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />

                                    <x-input id="name" class="block mt-1 w-full form-control form-control-lg" type="text"
                                        name="name" :value="old('name')" required autofocus />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-label for="email" :value="__('Email')" />

                                    <x-input id="email" class="block mt-1 w-full form-control form-control-lg" type="email"
                                        name="email" :value="old('email')" required />
                                </div>

                                {{-- <!-- No Telp -->
                                <div class="mt-4">
                                    <x-label for="phone" :value="__('No tlp')" />

                                    <x-input id="phone" class="block mt-1 w-full form-control form-control-lg" type="text"
                                        name="phone" :value="old('phone')" required />
                                </div> --}}

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-label for="password" :value="__('Password')" />

                                    <x-input id="password" class="block mt-1 w-full form-control form-control-lg"
                                        type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-input id="password_confirmation"
                                        class="block mt-1 w-full form-control form-control-lg" type="password"
                                        name="password_confirmation" required />
                                </div>

                                <div class="flex items-center justify-end mt-4 d-flex justify-content-start">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('login') }}">
                                        {{ __('Sudah Punya Akun?') }}
                                    </a>

                                    <x-button class="ml-4 mx-auto btn-info bg-color-main">
                                        {{ __('Daftar') }}
                                    </x-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
