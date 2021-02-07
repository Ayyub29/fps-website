@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/makna-logo.css')}}" rel="stylesheet">
@endsection
@section('title', 'Pengertian Logo | FPS ITB 2021');

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-headers">
                        <h5 class="title-card"> Pengertian Logo </h5>
                    </div>
                    <div id="logo-welcome">
                        <img src="{{asset('img/logo-fps-ungu.png')}}" id="logo-fps-main" alt="Logo FPS">
                    </div>
                    <div class="card-body">
                        <div class="flex-containers">
                            <div class="logo-breakdown">
                                <img src="{{asset('img/api-logo.png')}}" class="logo-image-brkdn" alt="Api">
                            </div>
                            <div class="logo-explanation">
                                <h5 class="title"> Api </h5>
                                <p class="desc"> 
                                    Api sebagai sumber cahaya dan kehangatan melambangkan FPS XXVI ITB 2021 sebagai sumber ilmu pengetahuan (musikalitas) dan kekeluargaan bagi peserta.
                                </p>
                            </div>
                        </div>
                        <div class="flex-containers">
                            <div class="logo-breakdown">
                                <img src="{{asset('img/logo-manusia.png')}}" class="logo-image-brkdn" alt="Api">
                            </div>
                            <div class="logo-explanation">
                                <h5 class="title"> Manusia </h5>
                                <p class="desc"> 
                                    Bayangan manusia menggambarkan manusia sebagai subyek FPS sendiri.  Acara diselenggarakan untuk pengembangan diri dari segi musikalitas dan profesionalitas.
                                </p>
                            </div>
                        </div>
                        <div class="flex-containers">
                            <div class="logo-breakdown">
                                <img src="{{asset('img/kujang-logo.png')}}" class="logo-image-brkdn" alt="Api">
                            </div>
                            <div class="logo-explanation">
                                <h5 class="title"> Kujang </h5>
                                <p class="desc"> 
                                    Kujang melambangkan FPS XXVI ITB 2021 dilaksanakan di Jawa Barat, tepatnya di Kota Bandung.
                                </p>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <h5 class="title-category"> Warna </h5>
                        <div class="flex-containers">
                            <div class="flex-containers">
                                <div class="logo-breakdowns">
                                    <img src="{{asset('img/kuning-logo.png')}}" class="logo-image-brkdn" alt="Api">
                                </div>
                                <div class="logo-explanation">
                                    <p class="desc"> 
                                        Kuning dan jingga melambangkan ilmu pengetahuan (musikalitas) dan kehangatan/kekeluargaan.
                                    </p>
                                </div>
                            </div>
                            <div class="pemisah-kecil">
                            </div>
                            <div class="flex-containers">
                                <div class="logo-breakdowns">
                                    <img src="{{asset('img/ungu-logo.png')}}" class="logo-image-brkdn" alt="Api">
                                </div>
                                <div class="logo-explanation">
                                    <p class="desc"> 
                                        Ungu dan merah jambu melambangkan musik dan kreativitas
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection