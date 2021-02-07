@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/account-setting.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('css/login-register.css')}}" rel="stylesheet"> -->
@endsection
@section('title', 'Pengaturan Akun | FPS ITB 2021');

@section('isi')
    <div class="main-background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-headers">
                            <h5 class="title-card"> Pengaturan Akun </h5>
                            <div class="personal-container">
                                <div>
                                    <img src="{{asset('img/black-box.png')}}" id="black-box" alt="Avatar">
                                </div>
                                <div class="text-tilte">
                                    <p class="nama-paduan-suara"> Nama Paduan Suara </p>
                                    <p class="nama-tim-paduan-suara"> {{ $akun->nama_paduan_suara }} </p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="card-body ">
                            <div class="form-group row">
                                <label for="nama_pemegang_akun" class="label-form">{{ __('Nama Pemegang Akun') }}</label>

                                <div class="col-md-6s">
                                    <p class="text-line-form" >{{$akun->nama_pemegang_akun}}</p>
                                </div>
                            </div>
                            <form method="post" action="/pengaturan-akun">
                                <!-- @method('patch') -->
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="label-form">{{ __('Email') }}</label>

                                    <div class="col-md-6s">
                                        <input id="email" type="email" class="text-line-form @error('email') is-invalid @enderror" name="email" value="{{ old('email', $akun->email) }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="label-form">{{ __('Username') }}</label>

                                    <div class="col-md-6s">
                                        <input id="name" type="text" class="text-line-form @error('name') is-invalid @enderror" name="name" value=" {{ old('name', $akun->name) }}" required autocomplete="name" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="label-form">{{ __('Password (kosongkan jika tidak perlu)') }}</label>

                                    <div class="col-md-6s">
                                        <input id="password" type="password" class="text-line-form @error('password') is-invalid @enderror" value ="{{old('password')}}" name="password" autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="label-form">{{ __('Konfirmasi Password (kosongkan jika tidak perlu)') }}</label>

                                    <div class="col-md-6s">
                                        <input id="password-confirm" type="password" class="text-line-form @error('password') is-invalid @enderror" name="password-confirm" autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <button type="submit" style="margin-left:80%;" class="btn btn-outline-dark">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection