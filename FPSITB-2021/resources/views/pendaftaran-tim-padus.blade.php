@extends('layout.app');
@section('page-css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <link href="{{asset('css/pendaftaran-tim-padus.css')}}" rel="stylesheet">
    <script src="{{asset('js/pendaftaran.js') }}" defer></script>
@endsection
@section('title', 'Pendaftaran Akun Paduan Suara | FPS ITB 2021');

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-headers">
                    <h5 class="title-card"> Pendaftaran Akun Paduan Suara </h5>
                </div>
                <!-- progressbar -->
                <ul id="progressbar">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <form id="msform">
                    <!-- fieldsets -->
                    <fieldset>
                        <h5 class="title-sub-card"> Biodata Paduan Suara </h5>
                        <div class="form-group row">
                            <label class="label-form">Nama Paduan Suara</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="nama-paduan-suara">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Alamat</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Deskripsi Singkat</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-between" >
                            <div>
                                <p class="label-form">Foto Paduan Suara</label>
                            </div>
                            <div class="col-md-6s">
                                <label for="logo-paduan-suara" class="label-button btn btn-outline-dark">Upload</label>
                                <input type="file" id="logo-paduan-suara" name="logo-paduan-suara">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div>
                                <p class="label-form">Logo Paduan Suara</label>
                            </div>

                            <div class="col-md-6s">
                                <label class="label-button btn btn-outline-dark" for="logo-paduan-suara">Upload</label>
                                <input type="file" name="logo-paduan-suara" id="logo-paduan-suara">
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                    <h5 class="title-sub-card"> Data Penanggung Jawab </h5>
                        <div class="form-group row">
                            <label class="label-form">Nama Lengkap</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="nama-paduan-suara">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Nomor Telepon</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Email</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Nomor Rekening</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                        <h5 class="title-sub-card"> Kategori </h5>
                        <div class="form-group row">
                            <label class="label-form">Nama Lengkap</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="nama-paduan-suara">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Nomor Telepon</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Email</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Nomor Rekening</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    <fieldset>
                    <h5 class="title-sub-card"> Lagu </h5>
                        <div class="form-group row">
                            <label class="label-form">Nama Lengkap</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="nama-paduan-suara">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Nomor Telepon</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="alamat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Email</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="label-form">Nomor Rekening</label>

                            <div class="col-md-6s">
                                <input type="text" class="text-line-form" name="deskripsi-singkat">
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.MultiStep Form -->
@endsection