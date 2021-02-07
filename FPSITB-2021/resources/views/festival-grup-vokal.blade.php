@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/festival-grup-vokal.css')}}" rel="stylesheet">
@endsection
@section('title', 'Festival Grup Vokal | FPS ITB 2021');

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-headers">
                        <h5 class="title-card"> Festival Grup Vokal </h5>
                        <p class="desc-title"> Pra acara Festival Paduan Suara lingkup Institut Teknologi Bandung. </p>
                    </div>
                    <div class="image">
                        <img src="{{asset('img/gambar-sejuta-umat.png')}}" style="width:100%; height:450px;" alt="...">
                    </div>
                    <div class="card-body">
                        <p class="desc"> 
                            Festival Grup Vokal merupakan pra acara dari Festival Paduan Suara yang berupa perlombaan antar grup vokal dalam lingkup Institut Teknologi Bandung yang mengajak Himpunan Mahasiswa Jurusan dan Mahasiswa Tahap Persiapan Bersama sebagai peserta. 
                            Acara ini bersifat internal di dalam Institut Teknologi Bandung dan bertujuan untuk menambah musikalitas para mahasiswa/i Institut Teknologi Bandung.
                            Adapun pemenang dari Festival Grup Vokal 2017 adalah sebagai berikut :
                        </p>
                        <p class="cont-desc">
                            1. Juara 1 Himpunan Mahasiswa Perencanaan Wilayah dan Kota Pangripta Loka ITB (HMP PL ITB) <br>
                            2. Juara 2 Himpunan Mahasiswa Teknik Lingkungan ITB (HMTL ITB) <br>
                            3. Juara 3 Himpunan Mahasiswa Biologi ‘NYMPHAEA’ ITB (HIMABIO ‘NYMPHAEA’ ITB
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection