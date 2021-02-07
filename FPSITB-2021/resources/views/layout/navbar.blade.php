<nav class="navbar-down">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" style="" href="{{url('/')}}">Beranda</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle caret-off" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <li><a class="dropdown-item" href="{{url('/tema')}}">TEMA DAN SEJARAH FPS</a></li>
                <li><a class="dropdown-item" href="{{url('/visi-misi')}}">VISI & MISI</a></li>
                <li><a class="dropdown-item" href="{{url('/makna-logo')}}">PENGERTIAN LOGO</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/dewan-artistik')}}">Tim Artistik dan Juri</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle caret-off" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Pendaftaran
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <li><a class="dropdown-item" href="#">ALUR PENDAFTARAN</a></li>
                <li><a class="dropdown-item" href="{{url('/pendaftaran')}}">PENDAFTARAN KELOMPOK PADUS</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle caret-off" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Kegiatan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <li><a class="dropdown-item" href="#">LOMBA</a></li>
                <li><a class="dropdown-item" href="#">WORKSHOP</a></li>
                <li><a class="dropdown-item" href="#">WEBINAR</a></li>
                <li><a class="dropdown-item" href="#">CHOIR EXHIBIT</a></li>
                <li><a class="dropdown-item" href="{{url('/festival-grup-vokal')}}">FESTIVAL GRUP VOKAL</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Ticketing</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Download</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sponsorship</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Merchandise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
        </li>
        @guest
        <li class="nav-item">
            <button type="button" onclick="window.location.href = '{{url('/login')}}';" class="btn login-button">Masuk</button>
        </li>
        @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
        </form>
        <li class="nav-item dropdown">
            <a class="nav-link btn-secondary btn dropdown-toggle caret-off" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <li><a class="dropdown-item" id="nama-akun" href="#"><b>{{ Auth::user()->name }} <b></a></li>
                @if (auth()->user()->status == 1)
                <li><a class="dropdown-item" href="{{url('/admin-panel')}}">ADMIN PANEL</a></li>
                @else
                <li><a class="dropdown-item" href="{{url('/pengaturan-akun')}}">AKUN</a></li>
                @endif
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a></li>
            </ul>
        </li>
        @endguest
         
    </ul>
</nav>