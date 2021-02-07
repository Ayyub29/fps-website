@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/pendaftaran.css')}}" rel="stylesheet">
@endsection
@section('title', 'Pendaftaran Akun Paduan Suara | FPS ITB 2021');

@section('isi')
<div class="flex-containers">
    <h5 class="text-himbauan"> Silahkan <a href="{{url('/login')}}" class="login-text" ><b>Masuk<b></a></span> sebelum melakukan pendaftaran </h5>
</div>
@endsection