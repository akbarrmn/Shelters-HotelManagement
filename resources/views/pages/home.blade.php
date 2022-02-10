@extends('layouts.app')

@section('title')
    Reservasi Hotel
@endsection

@section('content')
    <!-- Masthead-->
    <header class="masthead" id="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang !</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Tell Me More</a>
        </div>
    </header>

    <!-- Katalog Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Katalog Kamar</h2>
                <h3 class="section-subheading text-muted">Detail kamar, harga, dll</h3>
            </div>
            <div class="row">
                @foreach ($items as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="{{ '#modal' . $item->id }}">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{ Storage::url($item->image) }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">{{ $item->title }}</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.{{ $item->price }}/Hari</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio item 1 modal popup-->
    @foreach ($items as $item)
        <div class="portfolio-modal modal fade" id="{{ 'modal' . $item->id }}" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $item->title }}</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ Storage::url($item->image) }}"
                                        alt="..." />
                                    <p>{{ $item->about }}</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Harga:</strong>
                                            Rp.{{ $item->price }}/Hari
                                        </li>
                                    </ul>

                                    @auth
                                        <button class="btn btn-primary btn-xl text-uppercase portfolio-link"
                                            data-bs-toggle="modal" href="{{ '#book' . $item->id }}" type="button">
                                            <i class="fas fa-plus me-1"></i>
                                            Book Now
                                        </button>
                                    @endauth
                                    @guest
                                        <button class="btn btn-primary btn-xl text-uppercase" type="button"
                                            onclick="event.preventDefault(); location.href='{{ url('/login') }}';">
                                            <i class="fas fa-plus me-1"></i>Login to Book
                                        </button>
                                    @endguest

                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Katalog
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @auth
        @foreach ($items as $item)
            <!-- Modal-Booking -->
            <div class="portfolio-modal modal fade" id="{{ 'book' . $item->id }}" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content scroll-style">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="text-uppercase p-4">Booking Room</h2>
                                    <div class="modal-body">
                                        <!-- Project details-->
                                        <div class="container-fluid">
                                            <form action="{{ route('booking') }}" id="manage-check" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name ">Nama Lengkap</label>
                                                    <input type="text" name="name" id="name" class="form-control" required
                                                        value="{{ Auth::user()->name }}" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ktp ">KTP</label>
                                                    <input type="text" name="ktp" id="ktp" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contact">No Hp</label>
                                                    <input type="text" name="contact" id="contact" class="form-control"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="kategori">Kategori Ruangan</label>
                                                    <input type="text" name="kategori" id="kategori" class="form-control"
                                                        value='{{ $item->title }}' required readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sedia">Ketersediaan</label>
                                                    <input type="text" name="sedia" id="sedia" class="form-control"
                                                        value="<?php $ketersediaan = $item->jumlah - $item->kamar_digunakan;
                                                        if ($ketersediaan != 0) {
                                                            echo 'Available';
                                                        } else {
                                                            echo 'Unavailable';
                                                        } ?>" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_in">Check-in Date</label>
                                                    <input type="date" name="date_in" id="date_in" class="form-control"
                                                        required value="{{ $item->checkin }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="date_out">Check-out Date</label>
                                                    <input type="date" name="date_out" id="date_out" class="form-control"
                                                        required value="{{ $item->checkout }}">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-primary btn-xl text-uppercase portfolio-link"
                                                        type="submit">
                                                        <i class="far fa-clipboard me-1"></i>
                                                        Book
                                                    </button>
                                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal"
                                                        type="button">
                                                        <i class="fas fa-times me-1"></i>
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking End -->
        @endforeach
    @endauth

    <!--   News start -->
    <section class="section section-news page-section gray-bg" id="berita">
        <div class="weekly2-news-area pt-50 pb-30 gray-bg ">
            <div class="container">
                <div class="weekly2-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider-wrapper">
                                <!-- section Tittle -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="small-tittle mb-30">
                                            <h4>Berita Populer</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slider -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="weekly2-news-active d-flex">
                                            @foreach ($news as $item)
                                                <!-- Single -->
                                                <div class="weekly2-single">
                                                    <div class="weekly2-img">
                                                        <img src="{{ Storage::url($item->image) }}" alt="">
                                                    </div>
                                                    <div class="weekly2-caption portfolio-link">
                                                        <h4><a class="portfolio-link" data-bs-toggle="modal"
                                                                href="{{ '#news' . $item->id }}">{{ $item->title }}</a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Weekly-News -->
    @foreach ($news as $item)
        <!-- News Detail -->
        <div class="portfolio-modal modal fade" id="{{ 'news' . $item->id }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content scroll-style">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">{{ $item->title }}</h2>
                                    <img class="img-fluid d-block mx-auto" src="{{ Storage::url($item->image) }}" />
                                    <p>{{ $item->about }}</p>
                                    <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- End Detail -->


    <!-- About Me -->
    <section class="section about-section gray-bg page-section " id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">About Me</h3>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Nama</label>
                                    <p>Akbar Rahmana</p>
                                </div>
                                <div class="media">
                                    <label>Nim</label>
                                    <p>L200190023</p>
                                </div>
                                <div class="media">
                                    <label>Alamat</label>
                                    <p>Colomadu, Karanganyar</p>
                                </div>
                                <div class="media">
                                    <label>Tgl Lahir</label>
                                    <p>27 September 2000</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Email</label>
                                    <p>l200190023@gmail.com</p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p>0812-257-91150</p>
                                </div>
                                <div class="media">
                                    <label>IG</label>
                                    <p>@akbar.rmn</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="{{ url('frontend/assets/img/team/foto.jpg') }}" width="70%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->

@endsection
