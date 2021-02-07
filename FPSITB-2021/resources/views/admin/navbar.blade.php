<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/admin-panel')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/admin-panel/pengumuman')}}">Pengumuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Choir Exhibition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Webinar and Workshop</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
        </form>
        <li class="nav-item dropdown">
            <a class="nav-link btn-secondary btn dropdown-toggle caret-off" style="background-color:white; align:right;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a></li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>