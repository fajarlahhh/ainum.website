
<div class="footer-two footer-two-bg mt-5" style="padding-top: 100px">
    <div class="container">
        <div class="row mb-n30">
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <!-- Footer Widget Start -->
                <div class="footer-widget-two">
                    <div class="logo negative-margin">
                        <a href="/">
                            <img src="assets/images/logo2.png" alt="">
                        </a>
                    </div>
                    <ul class="footer-widget-two-list-icon">
                        <li><i class="fas fa-map-marker-alt"></i> <span> Jl. Lingkar Selatan Km. 4 <br>Desa Pungka, Kec. Unter Iwis </span></li>
                        <li><i class="fas fa-envelope"></i> <span>pdam.sumbawa@yahoo.com</span> </li>
                        <li><i class="fas fa-phone"></i><span>+6285191442092</span> </li>
                    </ul>
                    <ul class="social-icon d-flex flex-start">
                        <li><a href="https://www.facebook.com/rhaden.brighita" class="facebook"><i
                                    class="fab fa-facebook-f"></i></a></a></li>
                        <li><a href="https://www.instagram.com/perumdam_batulanteh/" class="instagram"><i
                                    class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- Footer Widget End -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                <!-- Footer Widget Start -->
                <div class="footer-widget-two">
                    <h5 class="footer-widget-two-title">Mitra :</h5>
                    <div class="row">
                        @foreach (\App\Models\Mitra::all() as $mitra)
                            <div class="col-lg-3 col-4 col-sm-4 mb-2">
                                <a href="#">
                                    <img src="{{ Storage::url($mitra->foto1) }}">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Footer Widget End -->
            </div>
        </div>
        <div class="row footer-two-copyright">
            <div class="col-12 position-relative">
                <div class="footer-two-copyright-inner">
                    <p class="order-md-1 order-2">Designed by <span>© PBL 2025</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
