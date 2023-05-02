@extends('user.layouts.app')
@section('judul', 'Landing Page')
@section('konten')
    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>Sewa Mobil Harga <em>Murah</em></h1>
                        <p>Kami menyediakan pelayanan sewa mobil dengan jaminan data pribadi aman, transaksi aman, dan
                            pastinya keuangan anda juga aman</p>
                        <a href="#about" class="main-button-slider">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <section class="section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>Mobil Yang <em>Tersedia</em></h2>
                        <p>Berikut adalah beberapa mobil yang siap untuk anda sewa</p>
                    </div>
                </div>
                <div class="col-lg-2 text-right">
                    <a class="btn main-button mb-3 mr-1" data-target="#carouselExample" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn main-button mb-3 " data-target="#carouselExample" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>


                <div class="col-12">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                        <div class="carousel-inner row w-10 mx-auto" role="listbox">
                            <div class="carousel-item col-md-4 active">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 1</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 2</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 3</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 4</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 5</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 6</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 7</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item col-md-4">
                                <div class="card">
                                    <img class="img-fluid" alt="100%x280"
                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                    <div class="card-body">
                                        <h4 class="card-title">Special title treatment 8</h4>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="#" class="btn main-button mt-2">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <div class="left-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="promotion">
        <div class="container">
            <div class="row">
                <div class="left-image col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/user/images/left-image.png" class="rounded img-fluid d-block mx-auto"
                        alt="App">
                </div>
                <div class="right-text offset-lg-1 col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix">
                    <ul>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                            <img src="assets/user/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h4>Vestibulum pulvinar rhoncus</h4>
                                <p>Please do not redistribute this template ZIP file for a download purpose. You may <a
                                        rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact</a>
                                    us for
                                    additional licensing of our template or to get a PSD file.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.5s">
                            <img src="assets/user/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h4>Sed blandit quam in velit</h4>
                                <p>You can <a rel="nofollow"
                                        href="https://templatemo.com/tm-540-lava-landing-page">download Lava
                                        Template</a> from our website. Duis viverra, ipsum et scelerisque placerat, orci
                                    magna consequat ligula.</p>
                            </div>
                        </li>
                        <li data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                            <img src="assets/user/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h4>Aenean faucibus venenatis</h4>
                                <p>Phasellus in imperdiet felis, eget vestibulum nulla. Aliquam nec dui nec augue
                                    maximus porta. Curabitur tristique lacus.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <div class="right-image-decor"></div>
@endsection
