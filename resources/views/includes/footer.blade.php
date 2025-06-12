<!-- Footer Section Start -->
<div class="footer">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-4 col-md-5">
                <div class="footer-left">
                    <div class="footer-left-inner" style="margin-bottom: 85px">
                        <div class="footer-left-logo">
                            <a href="/">
                                <img src="assets/images/logo.png" alt="LogoImage">
                            </a>
                        </div>
                        <br>
                        <br>
                        <ul class="footer-left-list-icon">
                            <li><i class="fas fa-map-marker-alt"></i> <span> l. Lingkar Selatan Km. 4 <br> Unter
                                    Iwis</span></li>
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
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="footer-right">
                    <div class="footer-top">
                        <!-- Heading Start -->
                        <div class="heading-one">
                            <span class="heading-one-subtitle">Ada pertanyaan?</span>
                            <h2 class="heading-one-title">Kami siap menjawab</h2>
                            <p>&nbsp;</p>
                        </div>
                        <!-- Heading End -->
                        <a href="/kontak" class="btn-style-three"><span>Klik di sini</span></a>
                    </div>
                    <div class="footer-bottom">
                        <div class="footer-widget">
                            <h5 class="footer-widget-title">Pelayanan</h5>
                            <ul class="footer-widget-list">
                                <li><a href="/pengaduan">Pengaduan</a></li>
                                <li><a href="/infotagihan">Info Tagihan</a></li>
                                <li><a href="/pembangunan">Pasang Baru</a></li>
                                <li><a href="/laporangka">Laporan Angka</a></li>
                            </ul>
                        </div>
                        <div class="footer-widget">
                           &nbsp;
                        </div>
                        <div class="footer-widget-two">
                            <div class="row">
                                @foreach (\App\Models\Mitra::all() as $mitra)
                                    <div class="col-lg-4">
                                        <a href="#">
                                            <img src="{{ Storage::url($mitra->foto1) }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="footer-copyright-inner">
                        <p class="order-md-1 order-2">Designed by <span>© PBL 2025</span></p>

                        <ul class="footer-bootm-list order-md-2 order-1">
                            <li><a href="javascript:void(0)">Terms &amp; Condition</a></li>
                            <li><a href="javascript:void(0)">Privecy Policy</a></li>
                            <li><a href="javascript:void(0)">Legal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Section End -->
