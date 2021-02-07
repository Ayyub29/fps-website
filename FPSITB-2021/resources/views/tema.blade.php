@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/tema.css')}}" rel="stylesheet">
@endsection
@section('title', 'Tema | FPS ITB 2021');

@section('isi')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-headers">
                        <h5 class="title-card"> Tema </h5>
                    </div>
                    <div class="card-body">
                        <p class="desc-title"> “Bersatunya keanekaragaman corak budaya dalam satu kebulatan utuh dan serasi.”</p>
                        <img src="{{asset('img/tema.png')}}"  style="display:block;width:80%; align-self:center; margin-left:auto; margin-right:auto;"alt="...">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection