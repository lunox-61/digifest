<!-- Navbar -->
<nav class="navbar navbar-dark" style="background-color:rgb(23, 35, 199)">
    <div class="container-fluid p-4">
      <a class="navbar-brand" href="#">
        <img src="{{asset('img/LogoDigifest.png')}}" alt="" width="400" class="d-inline-block align-text-top">
      </a>
    </div>
  </nav>
<nav id="menu" class="navbar navbar-dark bg-primary navbar-expand-md">
    <img src="" alt="">
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{url('/')}}" class="nav-link {{Request::is('/') ? 'active' : ''}}">BERANDA</a></li>
            <li class="nav-item"><a href="{{url('pengumuman')}}" class="nav-link {{Request::is('pengumuman') ? 'active' : ''}}">PENGUMUMAN</a></li>
            <li class="nav-item"><a href="{{url('jadwal')}}" class="nav-link {{Request::is('jadwal') ? 'active' : ''}}">JADWAL</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle {{ Request::is('formulir*') || Request::is('pribadi*') || Request::is('grafik*')  || Request::is('perbandingan*') ? 'active' : '' }}" href="#" id="pendaftaranDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PARTISIPASI
                </a>
                <div class="dropdown-menu" aria-labelledby="pendaftaranDropdown">
                    <a class="dropdown-item {{ Request::is('formulir') ? 'active' : '' }}" href="{{ url('formulir') }}">Form Partisipasi</a>
                    <a class="dropdown-item {{ Request::is('pribadi') ? 'active' : '' }}" href="{{ url('pribadi') }}">Grafik Pribadi</a>
                    <a class="dropdown-item {{ Request::is('grafik') ? 'active' : '' }}" href="{{ url('grafik') }}">Grafik Akumulasi</a>
                    <a class="dropdown-item {{ Request::is('perbandingan') ? 'active' : '' }}" href="{{ url('perbandingan') }}">Bandingkan Grafik</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{url('investasi')}}" class="nav-link {{Request::is('investasi') ? 'active' : ''}}">PLATFORM INVESTASI</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Hai, {{ Auth::user()->name }} <!-- Menampilkan nama pengguna yang sedang login -->
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('user.profile.show', Auth::user()) }}">
                        Profile
                    </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('user.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->
<!-- jQuery (pastikan Anda sudah memuat jQuery sebelum Bootstrap.js) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (pastikan Anda sudah memuat Popper.js sebelum Bootstrap.js) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
