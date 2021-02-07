<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{asset('css/login-register.css')}}" rel="stylesheet">

    <title>Register</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <div class="main-background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-headers">
                            <h5 class="title-card"> Buat Akun </h5>
                            <p> <span class="text-card"> Sudah punya akun? <a href="{{url('/login')}}" class="login-text-card" ><b>Masuk<b></a> </span> </p>
                        </div>
                            <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="email" class="label-form">{{ __('Email') }}</label>

                                    <div class="col-md-6s">
                                        <input id="email" type="email" class="text-line-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_pemegang_akun" class="label-form">{{ __('Nama Pemegang Akun') }}</label>

                                    <div class="col-md-6s">
                                        <input id="nama_pemegang_akun" type="text" class="text-line-form @error('nama_pemegang_akun') is-invalid @enderror" name="nama_pemegang_akun" value="{{ old('nama_pemegang_akun') }}" required autocomplete="nama_pemegang_akun" autofocus>

                                        @error('nama_pemegang_akun')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="label-form">{{ __('Username') }}</label>

                                    <div class="col-md-6s">
                                        <input id="name" type="text" class="text-line-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="label-form">{{ __('Password') }}</label>

                                    <div class="col-md-6s">
                                        <input id="password" type="password" class="text-line-form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="label-form">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6s">
                                        <input id="password-confirm" type="password" class="text-line-form" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nama_paduan_suara" class="label-form">{{ __('Nama Paduan Suara') }}</label>

                                    <div class="col-md-6s">
                                        <input id="nama_paduan_suara" type="text" class="text-line-form @error('nama_paduan_suara') is-invalid @enderror" name="nama_paduan_suara" value="{{ old('nama_paduan_suara') }}" required autocomplete="nama_paduan_suara" autofocus>

                                        @error('nama_paduan_suara')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6s offset-md-4">
                                        <button type="submit" class="submit-button">
                                            {{ __('Daftar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
