<div>

    <!-- Slider Section start -->
    <div class="slider-one">

        <div class="sliderbg-1" data-bg-color="#322fb3" data-bg-image="assets/images/slider/sliderbg-one.png">
            <div class="shape-1 shape">
                <img src="assets/images/slider/sliderone-shape/shape1.png" alt="Shape">
            </div>
            <div class="shape-2 shape">
                <img src="assets/images/slider/sliderone-shape/shape2.png" alt="Shape">
            </div>
            <div class="shape-3 shape">
                <img src="assets/images/slider/sliderone-shape/shape3.png" alt="Shape">
            </div>
            <div class="shape-4 shape">
                <img src="assets/images/slider/sliderone-shape/shape4.png" alt="Shape">
            </div>
            <div class="shape-5 shape">
                <img src="assets/images/slider/sliderone-shape/shape5.png" alt="Shape">
            </div>
            <div class="shape-6 shape">
                <img src="assets/images/slider/sliderone-shape/shape6.png" alt="Shape">
            </div>
            <div class="shape-7 shape">
                <img src="assets/images/slider/sliderone-shape/shape7.png" alt="Shape">
            </div>
            <div class="shape-8 shape">
                <img src="assets/images/slider/sliderone-shape/shape8.png" alt="Shape">
            </div>
            <div class="shape-9 shape">
                <img src="assets/images/slider/sliderone-shape/shape9.png" alt="Shape">
            </div>
            <div class="shape-10 shape">
                <img src="assets/images/slider/sliderone-shape/shape10.png" alt="Shape">
            </div>
            <div class="shape-11 shape">
                <img src="assets/images/slider/sliderone-shape/shape11.png" alt="Shape">
            </div>
            <ul class="sliderone-social">
                <li><a href="https://www.facebook.com/rhaden.brighita" class="facebook"><i
                            class="fab fa-facebook-f"></i></a></a></li>
                <li><a href="https://www.instagram.com/perumdam_batulanteh/" class="instagram"><i
                            class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="custom-container">
            <div class="swiper sliderone animation-style-01">
                <div class="swiper-wrapper">
                    @foreach (\App\Models\Publikasi::pengumuman()->get() as $pengumuman)
                        <div class="swiper-slide">
                            <!-- Single Slider Start -->
                            <div class="sliderone-slingle">
                                <div class="slider-content-wrapper">
                                    <div class="sliderone-content">

                                        <!-- Slider Content Start -->
                                        <div class="slider-content">
                                            <span class="subtitle">{{ $pengumuman->sub_judul }}</span>
                                            <h2 class="title">{{ $pengumuman->judul }}</h2>
                                            <a href="/berita/{{ $pengumuman->id }}"
                                                class="btn-style-two">Selengkapnya</a>
                                        </div>
                                        <!-- Slider Content End -->

                                        <!-- Slider Image Start -->
                                        <div class="slider-image">
                                            <div class="slider-image-one">
                                                <img src="{{ Storage::url($pengumuman->foto) }}" alt="Slider Image">
                                            </div>
                                        </div>
                                        <!-- Slider Image End -->

                                    </div>
                                </div>
                            </div>
                            <!-- Single Slider End -->
                        </div>
                    @endforeach
                </div>

                <!-- Swiper Pagination -->
                <div class="swiper-pagination sliderone-pagination"></div>

                <!-- Swiper Navigation -->
                <div class="custom-container button-container d-none d-lg-flex">
                    <div class="container-fluid">
                        <div class="swiper-button">
                            <div class="swiper-button-prev">
                                <div class="prev-arrow">
                                    <img class="prev-arrow-1" src="assets/images/slider/arrow-1.png" alt="">
                                    <img class="prev-arrow-2" src="assets/images/slider/arrow-2.png" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next">
                                <div class="next-arrow">
                                    <img class="next-arrow-1" src="assets/images/slider/arrow-1.png" alt="">
                                    <img class="next-arrow-2" src="assets/images/slider/arrow-2.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Slider Section End -->

    <!-- Strategy Section start -->
    <div class="section-padding strategy">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Heading Start -->
                    <div class="heading-one text-center">
                        <span class="heading-one-subtitle">We are</span>
                        <h2 class="heading-one-title">PERUMDAM BATULANTEH</h2>
                    </div>
                    <!-- Heading End -->
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-n30">

                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Single Strategy Start -->
                    <div class="strategy-single">

                        <!-- Strategy Icon Start -->
                        <div class="strategy-icon">
                            <span></span>
                            <img src="assets/images/icon/icon-1.png" alt="Icon">
                        </div>
                        <!-- Strategy Icon End -->

                        <!-- Strategy content Start -->
                        <div class="strategy-content">
                            <h5 class="title">Memenuhi Standar Pelayanan K3</h5>
                            <ul type="square">
                                <li>Kuantitas</li>
                                <li>Kualitas</li>
                                <li>Kuantinuitas</li>
                            </ul>
                        </div>
                        <!-- Strategy content End -->

                    </div>
                    <!-- Single Strategy gEnd -->
                </div>

                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <!-- Single Strategy Start -->
                    <div class="strategy-single">

                        <!-- Strategy Icon Start -->
                        <div class="strategy-icon">
                            <span></span>
                            <img src="assets/images/icon/icon-2.png" alt="Icon">
                        </div>
                        <!-- Strategy Icon End -->

                        <!-- Strategy content Start -->
                        <div class="strategy-content">
                            <h5 class="title">Distribusi</h5>
                            <p>Memperluas cakupan wilayah distribusi air dan menambah pelanggan</p>
                        </div>
                        <!-- Strategy content End -->

                    </div>
                    <!-- Single Strategy End -->
                </div>

                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".6s">
                    <!-- Single Strategy Start -->
                    <div class="strategy-single">

                        <!-- Strategy Icon Start -->
                        <div class="strategy-icon">
                            <span></span>
                            <img src="assets/images/icon/icon-3.png" alt="Icon">
                        </div>
                        <!-- Strategy Icon End -->

                        <!-- Strategy content Start -->
                        <div class="strategy-content">
                            <h5 class="title">K-3</h5>
                            <p>Penerapan Manajemen K-3 (Kesehatan dan Keselamatan Kerja)</p>
                        </div>
                        <!-- Strategy content End -->

                    </div>
                    <!-- Single Strategy End -->
                </div>

            </div>
        </div>
        <div class="strategy-shape shape-1">
            <img src="assets/images/shape/shape-1.png" alt="Shape">
        </div>
        <div class="strategy-shape shape-2">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
        <div class="strategy-shape shape-3">
            <img src="assets/images/shape/shape-3.png" alt="Shape">
        </div>
        <div class="strategy-shape shape-4">
            <img src="assets/images/shape/shape-4.png" alt="Shape">
        </div>
        <div class="strategy-shape shape-5">
            <img src="assets/images/shape/shape-5.png" alt="Shape">
        </div>

        <h2 class="rotate-title rotate-left d-none d-xxl-block"></h2>
    </div>
    <!-- Strategy Section end -->

    <!-- About Section Start -->
    <div class="about section-padding bg-one">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Heading Start -->
                    <div class="heading-one">
                        <span class="heading-one-subtitle">We are pioneer</span>
                        <h2 class="heading-one-title">Grow Your Business with Avers Today</h2>
                        <p class="heading-one-text-two">Lynci didunt onomes sundo ritoma am nsectetur adipisicing elit,
                            sed do eiusmod tempor inci didunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <!-- Heading End -->

                    <!-- About Details Start -->
                    <div class="about-details">
                        <div class="col-one">
                            <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit a elit, sed do
                                eiusm od tempor incididunt ut labore et dolore magna aliqua quis nostrud exercitation
                                ullamco </p>
                            <blockquote class="about-details-quote">
                                <img src="assets/images/icon/quote-icon.png" alt="QuoteIcon">
                                <p>Adip isicing elit, sed do eiusmod tem por inci didunt ut labore dolore </p>
                            </blockquote>
                        </div>
                        <div class="col-two">
                            <ul class="about-details-list">
                                <li>
                                    <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                    <p>Business automation</p>
                                </li>
                                <li>
                                    <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                    <p>Critical Analytics </p>
                                </li>
                                <li>
                                    <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                    <p>Full detailed report</p>
                                </li>
                                <li>
                                    <img src="assets/images/icon/checked.png" alt="CheckedIcon">
                                    <p>Qualtiy Management</p>
                                </li>
                            </ul>
                            <a href="about.html" class="btn-style-one"><span>Learn More</span></a>
                        </div>
                        <div class="col-three">
                            <div class="about-details-video">
                                <img class="icon-img" src="assets/images/about/videobg.png" alt="Image">
                                <a class="ht-popup-video video-popup"
                                    href="https://player.vimeo.com/video/172601404?autoplay=1">
                                    <img src="assets/images/icon/play.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- About Details End -->
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-counter">
                            <div class="about-counter-1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                                <div class="funfact-inner">
                                    <span class="odometer" data-count-to="22785"></span><span
                                        class="numbtext"></span>
                                </div>
                                <span class="about-counter-title">PELANGGAN</span>
                            </div>
                            <div class="about-counter-2 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <div class="funfact-inner">
                                    <span class="odometer" data-count-to="11"></span>
                                    <span class="niktext">Cabang</span>
                                </div>
                                <span class="about-counter-title">Seluruh Kabupaten</span>
                            </div>
                        </div>
                        <div class="about-image-inner position-relative wow fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay=".1s">
                            <img class="js-tilt" src="assets/images/home/Home 1 (3).png" alt="AboutImage">
                            <div class="about-image-inner-thumb">
                                <span class="text">Since</span>
                                <span class="date">1992</span>
                            </div>
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>
            </div>
        </div>
        <!-- About Nav Tab Start -->
        <!-- <ul class="nav about-tab wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tab-one" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">Strategy</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-two" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">Marketing</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tab-three" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="false">Awards</button>
                </li>
            </ul> -->
        <!-- About Nav Tab End -->
    </div>
    <!-- About Section End -->

    <!-- Tab Content Start -->
    <div class="about-tab-content">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="tab-one">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <!-- About Tab images Start -->
                            <!-- <div class="about-tab-image">
                                    <div class="shape shape-1">
                                        <img src="assets/images/shape/shape-6.png" alt="Shape">
                                    </div>
                                    <div class="shape shape-2">
                                        <img src="assets/images/shape/shape-7.png" alt="Shape">
                                    </div>
                                    <div class="about-tab-image-one js-tilt">
                                        <img src="assets/images/about/about-1.png" alt="AboutImage">
                                    </div>
                                    <div class="about-tab-image-three js-tilt">
                                        <img src="assets/images/about/about-3.png" alt="AboutImage">
                                    </div>
                                    <div class="about-tab-image-two js-tilt">
                                        <img src="assets/images/about/about-2.png" alt="AboutImage">
                                    </div>
                                </div> -->
                            <!-- About Tab images End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="tab-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Tab images Start -->
                            <div class="about-tab-image">
                                <div class="shape shape-1">
                                    <img src="assets/images/shape/shape-6.png" alt="Shape">
                                </div>
                                <div class="shape shape-2">
                                    <img src="assets/images/shape/shape-7.png" alt="Shape">
                                </div>
                                <div class="about-tab-image-one js-tilt">
                                    <img src="assets/images/about/about-1.png" alt="AboutImage">
                                </div>
                                <div class="about-tab-image-three js-tilt">
                                    <img src="assets/images/about/about-3.png" alt="AboutImage">
                                </div>
                                <div class="about-tab-image-two js-tilt">
                                    <img src="assets/images/about/about-2.png" alt="AboutImage">
                                </div>
                            </div>
                            <!-- About Tab images End -->
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <!-- About Tab Content Start -->
                            <div class="heading-one">
                                <span class="heading-one-subtitle">Design Matters</span>
                                <h2 class="heading-one-title">Rapid Prototype and Development</h2>
                                <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore
                                    magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna</p>
                                <a href="about.html" class="btn-style-one"><span>Learn more</span></a>
                            </div>
                            <!-- About Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="tab-three">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- About Tab images Start -->
                            <div class="about-tab-image">
                                <div class="shape shape-1">
                                    <img src="assets/images/shape/shape-6.png" alt="Shape">
                                </div>
                                <div class="shape shape-2">
                                    <img src="assets/images/shape/shape-7.png" alt="Shape">
                                </div>
                                <div class="about-tab-image-one js-tilt">
                                    <img src="assets/images/about/about-1.png" alt="AboutImage">
                                </div>
                                <div class="about-tab-image-three js-tilt">
                                    <img src="assets/images/about/about-3.png" alt="AboutImage">
                                </div>
                                <div class="about-tab-image-two js-tilt">
                                    <img src="assets/images/about/about-2.png" alt="AboutImage">
                                </div>
                            </div>
                            <!-- About Tab images End -->
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <!-- About Tab Content Start -->
                            <div class="heading-one">
                                <span class="heading-one-subtitle">Design Matters</span>
                                <h2 class="heading-one-title">Rapid Prototype and Development</h2>
                                <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor inci didunt ut labore et dolore
                                    magna aliqua.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna</p>
                                <a href="about.html" class="btn-style-one"><span>Learn more</span></a>
                            </div>
                            <!-- About Tab Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape shape-1">
                <img src="assets/images/shape/shape-5.png" alt="Shape">
            </div>
            <div class="shape shape-2">
                <img src="assets/images/shape/shape-7.png" alt="Shape">
            </div>
            <div class="shape shape-3">
                <img src="assets/images/shape/dot-1.png" alt="Shape">
            </div>
        </div>
    </div>
    <!-- Tab Content End -->

    <div class="col-12 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
        <!-- Heading Start -->
        <div class="heading-one text-center">
            <h2 class="heading-one-title">MITRA PEMBAYARAN</h2>
        </div>
        <!-- Heading End -->
    </div>

    <!-- Brand Section 1 Start -->
    <div class="brand-three">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="brand-slider brand-style swiper">
                        <div class="swiper-wrapper">
                            @foreach (\App\Models\Mitra::all() as $mitra)
                                <div class="swiper-slide">
                                    <!-- Single Brand Start -->
                                    <a class="brand-after" href="#"><img
                                            src="{{ Storage::url($mitra->foto1) }}" alt="Brand-Image"></a>
                                    <a class="brand-before"><img src="{{ Storage::url($mitra->foto2) }}"
                                            alt="Brand-Image"></a>
                                    <!-- Single Brand End -->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="assets/images/shape/shape-15.png" alt="Shape">
        </div>
        <div class="shape shape-2">
            <img src="assets/images/shape/shape-16.png" alt="Shape">
        </div>
        <div class="shape shape-3">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
    </div>
    <!-- Brand Section 1 End -->


    <!-- Blog Post Section Starrt -->
    <div class="blog-post section-padding">
        <div class="container">
            <div class="row">
                <div class="blog-post-top">
                    <!-- Heading Start -->
                    <div class="heading-one wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">From Our blog</span>
                        <h2 class="heading-one-title">Latest Updates</h2>
                        <p>Kimod tempoer incididunt onomes sundo ritoma amar Lorem ipsum dolor sit amet, consectetur
                            adipisicing</p>
                    </div>
                    <!-- Heading End -->
                    <a href="blog.html" class="btn-style-one wow fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay=".3s"><span>Go to Blog</span></a>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n30">
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <!-- Single Blogpost Start -->
                    <div class="blogpost">
                        <!-- Blogpost Image Start -->
                        <div class="blogpost-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog1.png" alt="BlogImage"></a>
                            <div class="blogpost-image-thumb">
                                <span class="date">22</span>
                                <span class="text">Apr</span>
                            </div>
                        </div>
                        <!-- Blogpost Image End -->

                        <!-- Blogpost Content Start -->
                        <div class="blogpost-content">
                            <ul class="blogpost-meta">
                                <li>
                                    <i class="fas fa-folder-open"></i>
                                    <a href="blog-details.html">Marketing</a>
                                </li>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <a href="blog-details.html">John doe</a>
                                </li>
                            </ul>
                            <h4 class="blogpost-title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse
                                    dolor sit</a></h4>
                            <a class="blogpost-read-more" href="blog-details.html">Read More</a>
                        </div>
                        <!-- Blogpost Content End -->
                    </div>
                    <!-- Single Blogpost End -->
                </div>
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <!-- Single Blogpost Start -->
                    <div class="blogpost">
                        <!-- Blogpost Image Start -->
                        <div class="blogpost-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog2.png" alt="BlogImage"></a>
                            <div class="blogpost-image-thumb">
                                <span class="date">20</span>
                                <span class="text">Apr</span>
                            </div>
                        </div>
                        <!-- Blogpost Image End -->

                        <!-- Blogpost Content Start -->
                        <div class="blogpost-content">
                            <ul class="blogpost-meta">
                                <li>
                                    <i class="fas fa-folder-open"></i>
                                    <a href="blog-details.html">Marketing</a>
                                </li>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <a href="blog-details.html">John doe</a>
                                </li>
                            </ul>
                            <h4 class="blogpost-title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse
                                    dolor sit</a></h4>
                            <a class="blogpost-read-more" href="blog-details.html">Read More</a>
                        </div>
                        <!-- Blogpost Content End -->
                    </div>
                    <!-- Single Blogpost End -->
                </div>
                <div class="col mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <!-- Single Blogpost Start -->
                    <div class="blogpost">
                        <!-- Blogpost Image Start -->
                        <div class="blogpost-image">
                            <a href="blog-details.html"><img src="assets/images/blog/blog3.png" alt="BlogImage"></a>
                            <div class="blogpost-image-thumb">
                                <span class="date">24</span>
                                <span class="text">Apr</span>
                            </div>
                        </div>
                        <!-- Blogpost Image End -->

                        <!-- Blogpost Content Start -->
                        <div class="blogpost-content">
                            <ul class="blogpost-meta">
                                <li>
                                    <i class="fas fa-folder-open"></i>
                                    <a href="blog-details.html">Marketing</a>
                                </li>
                                <li>
                                    <i class="fas fa-user"></i>
                                    <a href="blog-details.html">John doe</a>
                                </li>
                            </ul>
                            <h4 class="blogpost-title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse
                                    dolor sit</a></h4>
                            <a class="blogpost-read-more" href="blog-details.html">Read More</a>
                        </div>
                        <!-- Blogpost Content End -->
                    </div>
                    <!-- Single Blogpost End -->
                </div>
            </div>
        </div>
        <div class="shape shape-1">
            <img src="assets/images/shape/shape-17.png" alt="Shape">
        </div>
        <div class="shape shape-2">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
        <div class="shape shape-3">
            <img src="assets/images/shape/shape-18.png" alt="Shape">
        </div>
        <div class="shape shape-4">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
        <div class="shape shape-5">
            <img src="assets/images/shape/shape-19.png" alt="Shape">
        </div>
        <div class="shape shape-6">
            <img src="assets/images/shape/shape-18.png" alt="Shape">
        </div>
    </div>
    <!-- Blog Post Section End -->



</div>
