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
                            
                            <div class="form-group row">
                                <label for="email" class="label-form">{{ __('Email') }}</label>

                                <div class="col-md-6s">
                                    <p class="text-line-form" >{{$akun->email}} </p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="label-form">{{ __('Username') }}</label>

                                <div class="col-md-6s">
                                    <p class="text-line-form" >{{$akun->name}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="label-form">{{ __('Password') }}</label>

                                <div class="col-md-6s">
                                    <p class="text-line-form" >&nbsp</p>
                                </div>
                            </div>
                            <a href="/pengaturan-akun/edit" style="margin-left:80%;" class="btn btn-outline-dark">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection