<footer id="contact-us">
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="pesanWA" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input name="nama" type="text" id="name" placeholder="Nama"
                                            required="" style="background-color: rgba(250,250,250,0.3);">
                                    </fieldset>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="pesan" rows="6" id="message" placeholder="Tulis disini" required=""
                                            style="background-color: rgba(250,250,250,0.3);"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-button">Kirim Pesan</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
                <div class="right-content col-lg-6 col-md-12 col-sm-12">
                    <h2>Layanan Darurat <em>KeRent</em></h2>
                    <p>Isi Form tersebut apabila terdapat kendala dalam proses penyewaan mobil pada website kami, kami
                        melayani 24 jam untuk anda.
                    </p>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sub-footer">
                    <p>Copyright &copy; 2023 keRent</p>
                </div>
            </div>
        </div>
    </div>
</footer>
