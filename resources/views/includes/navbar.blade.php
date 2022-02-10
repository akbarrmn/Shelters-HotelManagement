{{-- Navbar --}}
<section id="navigation">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand m" href="{{ url('/') }}">Shelter's</a>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') . '#masthead' }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') . '#portfolio' }} ">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') . '#berita' }}">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') . '#about' }}">About Me</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('alert')}}">
                                @php
                                //Reset specific session
                                session()->forget('Success');
                                session()->forget('Gagal');
                                @endphp
                                Booked
                            </a>
                        </li>
                    @endauth
                </ul>
                @guest
                    <form>
                        <button class="btn btn-outline-success" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('/login') }}';">Login</button>
                    </form>
                @endguest
                @auth
                <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-outline-success" type="submit">Logout</button>
                    </form>
                    </ul>
                @endauth

            </div>
        </div>
    </nav>
</section>
{{-- End Navbar --}}
