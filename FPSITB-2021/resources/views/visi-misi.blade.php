@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/visi-misi.css')}}" rel="stylesheet">
@endsection
@section('title', 'Visi & Misi | FPS ITB 2021');

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-headers">
                        <h5 class="title-card"> Visi & Misi </h5>
                    </div>
                    <div class="card-body">
                        <div class="flex-containers">
                            <div class="logo">
                                <img src="{{asset('img/visi-logo.png')}}" alt="Visi">
                            </div>
                            <div class="pemisah-kecil"></div>
                            <div class="logo-explanation">
                                <h5 class="title"> Visi </h5>
                                <p class="desc"> 
                                    “FPS XXVI ITB sebagai ajang pengembangan musikalitas bagi peserta serta sebagai wadah yang nyaman untuk mengembangkan profesionalitas bagi anggota PSM-ITB.”
                                </p>
                            </div>
                        </div>
                        <div class="flex-containers">
                            <div class="logo">
                                <img src="{{asset('img/misi-logo.png')}}" alt="Misi">
                            </div>
                            <div class="pemisah-kecil"></div>
                            <div class="logo-explanation">
                                <h5 class="title"> Misi </h5>
                                <p class="desc">
                                    1. Menciptakan suasana kerja yang nyaman bagi panitia FPS ITB. <br>
                                    2. Menyelenggarakan acara yang dapat meningkatkan musikalitas peserta baik secara langsung maupun tidak langsung. <br>
                                    3. Menjunjung tinggi profesionalitas dengan tanpa melupakan asas kekeluargaan.
                                </p>
                            </div>
                        </div>                 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection