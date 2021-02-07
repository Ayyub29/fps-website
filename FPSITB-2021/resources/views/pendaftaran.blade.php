@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/pendaftaran.css')}}" rel="stylesheet">
@endsection
@section('title', 'Pendaftaran Akun Paduan Suara | FPS ITB 2021');

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card flex-containers">
                    <div class="small-card card">
                        <div class="card-body">
                            <h5 class="card-title">Choir Exhibition</h5>
                            <hr>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{url('/pendaftaran-tim-padus')}}" class="btn btn-primaries">Daftar</a>
                        </div>
                    </div>
                    <div class="small-card card">
                        <div class="card-body">
                            <h5 class="card-title">Webinar dan Workshop</h5>
                            <hr>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primaries">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection