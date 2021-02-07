@extends('layout.app');
@section('page-css')
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
@endsection
@section('title', 'FPS ITB 2021');

@section('isi')
    <div id="welcome-section1" class="welcome-section">
        <div id="logo-welcome">
            <img src="{{asset('img/FPS-icon.png')}}" id="logo-fps-main" alt="Logo FPS">
        </div>
        <div class="section1-text">
            <p class="section1-header">
                Festival Paduan Suara XXVI
            </p>
            <p class="section1-paragraph">
                Institut Teknologi Bandung 2021
            </p>
            <br>
            <p>
                <span class="section1-paragraph">AKAN DIADAKAN PADA</span><br/>
                <span class="section1-header2"><em>September 2021</em></span>
            </p>
            <p id="section1-countdown"><b id="hari">01</b> : <b id="jam">01</b> : <b id="menit">01</b> : <b id="detik">01</b></p>
            <pre id="countdown-details">      Hari          Jam         Menit         Detik</pre>
            <script>
                var deadline = new Date("Feb 12, 2021 00:00:00").getTime();
                var x = setInterval(function() {
                    var now = new Date().getTime();
                    var t = deadline - now;
                    var days = Math.floor(t / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
                    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((t % (1000 * 60)) / 1000);
                    document.getElementById("hari").innerHTML = days;
                    document.getElementById("jam").innerHTML = hours;
                    document.getElementById("menit").innerHTML = minutes;
                    document.getElementById("detik").innerHTML = seconds;

                    if (t < 0) {
                        clearInterval(x);
                        document.getElementById("section1-countdown").innerHTML = "FPS ITB telah dimulai.";
                    }
                }, 1000);
            </script>
        </div>
    </div>

    <div id="welcome-section2">
        <div class="guideslide-section2">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{asset('img/bukupanduan-image.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block vertical-center">
                        <h5 class="title-slide">Buku Panduan</h5>
                        <p class="desc-slide">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        <button class="btn btn-light" onclick="window.location.href = '{{url('/doc/Buku_Panduan_Peserta_FPS_XXVI_ITB_2020_v13Des19.pdf')}}';"><i class="fa fa-download"></i> Download</button>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/bukupanduan-image.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h5 class="title-slide">Second slide label</h5>
                        <p class="desc-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <button class="btn btn-light" onclick="window.location.href = '{{url('/doc/Buku_Panduan_Peserta_FPS_XXVI_ITB_2020_v13Des19.pdf')}}';"><i class="fa fa-download"></i> Download</button>                    
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{asset('img/bukupanduan-image.png')}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="title-slide">Third slide label</h5>
                        <p class="desc-slide">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        <button class="btn btn-light" onclick="window.location.href = '{{url('/doc/Buku_Panduan_Peserta_FPS_XXVI_ITB_2020_v13Des19.pdf')}}';"><i class="fa fa-download"></i> Download</button>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="announcement-section2">
            <div class="card left-side2">
                <div class="title-announcementcard">
                    Pengumuman
                </div>
                <ul class="list-group list-group-flush clearfix ann-bar">
                    @foreach( $beritas as $brt)
                    <div class="ann-item">
                        <div class="kategori-announcement">
                            {{$brt->kategori}}
                        </div>
                        <div class="title-announcement">
                            {{$brt->judul}}
                        </div>
                        <div class="desc-announcement">
                            {{$brt->isi_berita}}
                        </div>
                        <div class="time-announcement">
                            <img src="{{asset('img/time-icon.png')}}" class="time-icon">
                            {{$brt->updated_at}}
                        </div>
                    </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    
    <!-- <h1 style="color:black"> Aloha </h1> -->
    @guest
    <div class="pemisah-mini">
    </div>

    <div id="welcome-section3" class="welcome-section">
        <div id="section3-container" data-aos="fade-up">
            <div id="section3-text">
                <p id="section3-text">
                    <span><button id="section3-button" onclick="window.location.href = '{{url('/register')}}';"><b>Daftar</b></button></span><br>
                    <span class="login-text-section3"> Punya akun? <a href="{{url('/login')}}" class="login-text-section3" ><b>Masuk<b></a> </span>
                </p>
            </div>
        </div>
    </div>
    <div id="welcome-section4" class="welcome-section">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            </ol>
            <div class="carousel-inner carousel-inner-section3">
                <div class="carousel-item active">
                    <div class="flex-container"> 
                        <div>
                            <img src="{{asset('img/logo-fps-ungu.png')}}" id="desc-fpslogo-section3" alt="Logo FPS">
                        </div>
                        <div class="left-side-car">
                            <div class="title-section4">
                                <h5> Apakah itu FPS ITB? </h5>
                                <div class="slide-control">
                                    <a class="carousel-control-prevs" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-nexts" href="#carouselExampleDark" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="desc-section4">
                                <p > <span class="desc-section4"> Festival Paduan Suara ITB (FPS ITB) adalah pesta paduan suara Indonesia sebagai wadah untuk belajar sekaligus mengekspresikan diri. Mengusung tagline utuh dan serasi, FPS XXVI ITB 2020 diharapkan dapat menjadi wadah bersatunya keanekaragaman corak budaya dalam satu kesatuan. </span> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="flex-container"> 
                        <div>
                            <img src="{{asset('img/logo psm-itb.png')}}" id="desc-psmlogo-section3" alt="Logo FPS">
                        </div>
                        <div class="left-side-car">
                            <div class="title-section4">
                                <h5> Apakah itu PSM-ITB? </h5>
                                <div class="slide-control">
                                    <a class="carousel-control-prevs" href="#carouselExampleDark" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-nexts" href="#carouselExampleDark" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="desc-section4">
                                <p> <span class="desc-section4"> PSM-ITB merupakan paduan suara mahasiswa Institut Teknologi Bandung yang didirikan pada 11 Februari 1962. Berawal dari paduan suara yang hanya mengiringi kegiatan protokoler, PSM-ITB terus melebarkan sayapnya untuk mengikuti berbagai kompetisi sehingga berhasil menorehkan berbagai prestasi seperti GRAND PRIX 1st Runner-Up di 57th Concorso Internazionale di Canto Corale “Seghizzi” 2018, Italia.  </span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <div id="welcome-section5" class="welcome-section">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators white">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimoni-text">
                        <h5 class="testimoni-title testi"> Testimoni </h5>
                        <div class="testimoni testi">
                            <p> Kami senang sekali dapat mengikuti perlombaan ini karena juri-jurinya merupakan profesional dalam bidang choir di Indonesia.  Alur perlombaannya juga tertata sehingga sebagai peserta kami merasa nyaman. </p>
                        </div>
                        <br>
                        <div class="pengirim-testimoni">
                            <p>-PSM Floyce, kategori Folklore dan Lagu Populer </p>
                        </div>
                    </div>  
                </div>
                <div class="carousel-item">
                    <div class="testimoni-text">
                        <h5 class="testimoni-title testi"> Testimoni </h5>
                        <div class="testimoni testi">
                            <p> Panitia-panitianya sangat ramah kami merasa terbantu sekali untuk pengurusan administrasi, daftar ulang, info lebih lanjut, dan juga ketepatan waktunyaa. Kami tidak merasa kelelahan dan menunggu berlama-lama rasanya di sana.. semuanya cukup jelas berdasarkan informasi dari panitia. </p>
                        </div>
                        <br>
                        <div class="pengirim-testimoni testi">
                            <p>-Don Bosco, kategori C </p>
                        </div>
                    </div>  
                </div>
                <div class="carousel-item">
                    <div class="testimoni-text">
                        <h5 class="testimoni-title testi"> Testimoni </h5>
                        <div class="testimoni testi">
                            <p> Bertemu juri profesional dari dalam dan luar negeri serta bisa berkenalan dengan paduan suara lain di Indonesia memberikan pelajaran yang amat berharga untuk kami. Menjadi bagian dari FPS ITB XXV merupakan salah satu pengalaman yang luar biasa!</p>
                        </div>
                        <br>
                        <div class="pengirim-testimoni testi">
                            <p>-Agria Swara</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @endguest
@endsection