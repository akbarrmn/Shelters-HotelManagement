<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <link href="assets/css/styleIndex.css" rel="stylesheet" />
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <title>Reservasi Hotel</title>
</head>

<body>
    <section id="navigation">
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand m" href="#">Shelter's</a>
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#masthead">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Me</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="login.php">
                        <button class="btn btn-outline-success" type="submit">Login</button>
                    </form>
                    
                </div>
            </div>
        </nav>
    </section>
    <!-- Masthead-->
    <header class="masthead" id="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang !</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Tell Me More</a>
        </div>
    </header>
    <!-- Katalog Grid-->
    <section class="section section-katalog page-section light-bg" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Katalog Kamar</h2>
                    <h3 class="section-subheading text-muted">Detail kamar, fitur, dan harga.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/katalog/single-room.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Single Room</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.150.000,00 / Hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/katalog/twin-room.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Twin Room</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.200.000,00 / Hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/katalog/family-room.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Family Room</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.250.000,00 / Hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/katalog/junior-suite-room.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Junior Suite Room</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.350.000,00 / Hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/katalog/deluxe-room.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Deluxe Room</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.500.000,00 / Hari</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/katalog/cabana-room.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Cabana Room</div>
                                <div class="portfolio-caption-subheading text-muted">Rp.650.000,00 / Hari</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </section>
    <!-- Portfolio Ends-->
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Single Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/single-room.jpg" alt="..." />
                                <p>Jenis kamar hotel Single Room memiliki satu tempat tidur single untuk hunian satu orang. Single Room memiliki ranjang standar.
                                    Selain tempat tidur, perabot lain juga ditawarkan kepada tamu untuk menambah fungsionalitas ruangan seperti meja rias kecil, meja samping tempat tidur kecil, meja tulis dengan kursi tunggal dan satu kamar mandi.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Harga:</strong>
                                        Rp.150.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Twin Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/twin-room.jpg" alt="..." />
                                <p>Jenis kamar hotel Twin Room memiliki dua tempat tidur single dengan sandaran kepala terpisah yang dimaksudkan untuk hunian ganda. Kamar ini juga memiliki meja samping tempat tidur tunggal di antara dua tempat tidur.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Harga:</strong>
                                        Rp. 200.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Family Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/family-room.jpg" alt="..." />
                                <p>Jenis kamar yang luas dengan fasilitas modern lengkap yang menawarkan tempat tidur gabungan sebagai satu tempat tidur king dan tempat tidur twin ganda atau empat tempat tidur single sebagai kapasitas ideal untuk empat orang. Kamar-kamar ini dirancang khusus untuk menjadi tempat berkumpulnya keluarga dan teman-teman untuk rekreasi kelompok atau kegiatan keluarga lainnya.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Kamar:</strong>
                                        Rp. 250.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Junior Suite Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/junior-suite-room.jpg" alt="..." />
                                <p>Jenis kamar hotel Suite biasanya memiliki beberapa ukuran berbeda. Basic Suite atau Executive Suite dilengkapi dengan ruang tamu terpisah yang terhubung ke satu atau lebih kamar tidur.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Harga:</strong>
                                        Rp. 350.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Deluxe Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/deluxe-room.jpg" alt="..." />
                                <p>Tipe Deluxe Room memiliki ruang kamar yang lebih luas dan menawarkan pemandangan indah. Hotel modern dengan Deluxe Room menawarkan pemandangan kota/pantai dan kamar mandi berukuran besar yang dilengkapi dengan bathtub, shower cubical area, LED dengan berbagai saluran, telepon, Wi-Fi, meja rias, meja samping tempat tidur, meja tulis kecil, kursi, lemari es mini dan sebagainya.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Harga:</strong>
                                        Rp.500.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Cabana Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/cabana-room.jpg" alt="..." />
                                <p>Jenis kamar hotel Cabana terletak jauh dari bangunan utama hotel, biasanya dibangun di sekitar kolam renang atau pantai. Beberapa Cabana bahkan dibangun dengan satu kolam renang pribadi per kamarnya. Jenis kamar hotel iniumumnya dapat ditemukan di jenis Boutique Hotels.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Harga:</strong>
                                        Rp. 650.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
    <!-- Modal-Booking -->
    <div class="portfolio-modal modal fade" id="book-poopup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h2 class="text-uppercase p-4">Booking Room</h2>
                            <div class="modal-body">
                                <!-- Project details-->
                                <div class="container-fluid">
                                    <form action="" id="manage-check">
                                        <div class="form-group">
                                            <label for="name ">Nama Lengkap</label>
                                            <input type="text" name="name" id="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ktp ">KTP</label>
                                            <input type="text" name="ktp" id="ktp" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">No Hp</label>
                                            <input type="text" name="contact" id="contact" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Kategori Ruangan</label>
                                            <input type="text" name="contact" id="contact" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact">Ketersediaan</label>
                                            <input type="text" name="contact" id="contact" class="form-control" required readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_in">Check-in Date</label>
                                            <input type="date" name="date_in" id="date_in" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_out">Check-out Date</label>
                                            <input type="date" name="date_in" id="date_out" class="form-control" required>
                                        </div>
                                    </form>
                                </div>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="far fa-clipboard me-1"></i>
                                    Book
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
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
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/katalog/cabana-room.jpg" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/katalog/deluxe-room.jpg" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/katalog/family-room.jpg" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
                                            <!-- Single -->
                                            <div class="weekly2-single">
                                                <div class="weekly2-img">
                                                    <img src="assets/img/katalog/junior-suite-room.jpg" alt="">
                                                </div>
                                                <div class="weekly2-caption">
                                                    <h4><a href="#">Scarlett’s disappointment at latest accolade</a></h4>
                                                    <p>Jhon | 2 hours ago</p>
                                                </div>
                                            </div>
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
    <!-- News Detail -->
    <div class="portfolio-modal modal fade" id="news1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Cabana Room</h2>
                                <img class="img-fluid d-block mx-auto" src="assets/img/katalog/cabana-room.jpg" alt="..." />
                                <p>Jenis kamar hotel Cabana terletak jauh dari bangunan utama hotel, biasanya dibangun di sekitar kolam renang atau pantai. Beberapa Cabana bahkan dibangun dengan satu kolam renang pribadi per kamarnya. Jenis kamar hotel iniumumnya dapat ditemukan di jenis Boutique Hotels.</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Harga:</strong>
                                        Rp. 650.000,00 / Hari
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase portfolio-link" data-bs-toggle="modal" href="#book-poopup" type="button">
                                    <i class="fas fa-plus me-1"></i>
                                    Book Now
                                </button>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-times me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                                    <p>0812-257-9150</p>
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
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End -->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold">Akbar Rahmana</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/main.js"></script>


</body>

</html>