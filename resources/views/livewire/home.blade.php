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

    <div class="service p-4 position-relative">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb-n30">
                <div class="col mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <a href="/pengaduan" class="service-four-single">
                        <div class="service-four-single-top">
                            <div class="icon">
                                <i class="fas fa-headset fa-2x text-primary icon-2"></i>
                                <i class="fas fa-headset fa-2x text-white icon-1"></i>
                            </div>
                            <h4 class="title">Pengaduan Pelanggan</h4>
                        </div>
                    </a>
                </div>
                <div class="col mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <a href="/infotagihan" class="service-four-single">
                        <div class="service-four-single-top">
                            <div class="icon">
                                <i class="fas fa-file-invoice-dollar fa-2x text-primary icon-2"></i>
                                <i class="fas fa-file-invoice-dollar fa-2x text-white icon-1"></i>
                            </div>
                            <h4 class="title">Informasi Tagihan</h4>
                        </div>
                    </a>
                </div>
                <div class="col mb-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <a href="/pasangbaru" class="service-four-single">
                        <div class="service-four-single-top">
                            <div class="icon">
                                <i class="fas fa-faucet fa-2x text-primary icon-2"></i>
                                <i class="fas fa-faucet fa-2x text-white icon-1"></i>
                            </div>
                            <h4 class="title">Pasang Baru</h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="shape shape-1">
            <img src="assets/images/shape/dot-2.png" alt="Shape">
        </div>
        <div class="shape shape-2">
            <img src="assets/images/shape/shape-7.png" alt="Shape">
        </div>
        <div class="shape shape-3">
            <img src="assets/images/shape/shape-2.png" alt="Shape">
        </div>
        <div class="shape shape-4">
            <img src="assets/images/shape/shape-9.png" alt="Shape">
        </div>
        <div class="shape shape-5">
            <img src="assets/images/shape/dot-1.png" alt="Shape">
        </div>
        <div class="shape shape-6">
            <img src="assets/images/shape/shape-10.png" alt="Shape">
        </div>
    </div>
    
    <!-- Blog Post Section Starrt -->
    <div class="blog-post section-padding pt-1">
        <div class="container">
            <div class="row">
                <div class="blog-post-top mb-1" >
                    <!-- Heading Start -->
                    <div class="heading-one wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">Publikasi</span>
                        <h2 class="heading-one-title">Update Terbaru</h2>
                    </div>
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
                            <h4 class="blogpost-title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse dolor sit</a></h4>
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
                            <h4 class="blogpost-title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse dolor sit</a></h4>
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
                            <h4 class="blogpost-title"><a href="blog-details.html">Lorem ipsum dolor sit amet conse dolor sit</a></h4>
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

    <div class="testimonial-one mb-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-one-inner">
                        <div class="testimonial-one-image">
                            <img src="assets/images/direktur.jpeg" alt="TestimonialImage">
                        </div>
                        <div class="testimonial-one-content wow fadeInUp" data-wow-duration="1.5s"
                            data-wow-delay=".1s">
                            <!-- Heading Start -->
                            <div class="heading-one">
                                <span class="heading-one-subtitle">H. Abdul Hakim</span>
                                <h2 class="heading-one-title">Direktur</h2>
                            </div>
                            <!-- Heading End -->
                            <div class="testimonialone">
                                <!--== Start Testimonial Item ==-->
                                <div class="testimonialone-single">
                                    <p class="testimonialone-text"><i>"Dengan semangat pelayanan yang tinggi, kami
                                            berkomitmen memberikan air bersih berkualitas untuk kepuasan pelanggan."</i>
                                    </p>
                                </div>
                                <!--== End Testimonial Item ==-->
                            </div>
                        </div>
                        <div class="testimonial-one-thumb gradient-1 wow flipInY" data-wow-duration="1.5s"
                            data-wow-delay=".1s">
                            <img src="assets/images/testimonial/testimonial-quote.png" alt="QuoteImage">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-three mb-5">
        <div class="shape scene unselectable" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25"
            data-scalar-y="15">
            <div class="shape1" data-depth="0.1">
                <img src="assets/images/team/team-three/1.png" alt="shape">
            </div>
            <div class="shape2 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <img src="assets/images/team/team-three/2.png" alt="shape">
            </div>
            <div class="shape3 wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <img src="assets/images/team/team-three/3.png" alt="shape">
            </div>
            <div class="shape4 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <img src="assets/images/team/team-three/4.png" alt="shape">
            </div>
            <div class="shape5" data-depth="0.06">
                <img src="assets/images/team/team-three/5.png" alt="shape">
            </div>
            <div class="shape6" data-depth="0.14">
                <img src="assets/images/team/team-three/6.png" alt="shape">
            </div>
            <div class="shape7 wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                <img src="assets/images/team/team-three/7.png" alt="shape">
            </div>
            <!-- <div class="shape3" data-depth="0.14">
                <img src="assets/images/progress/shape1.png" alt="shape">
            </div> -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 team-three-single wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <div class="single-team">
                        <div class="single-team-image">
                            <img src="assets/images/team/1.png" alt="TeamImage">
                        </div>
                        <div class="single-team-content">
                            <a href="javascript:;"><span class="name"><small><small>Edy Syah Riansyah, S.E.</small></small></span></a>
                            <span class="desig"><small>Anggota Dewan Pengawas</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 team-three-single wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                    <div class="single-team">
                        <div class="single-team-image">
                            <img src="assets/images/team/2.png" alt="TeamImage">
                        </div>
                        <div class="single-team-content">
                            <a href="javascript:;"><span class="name"><small><small><small><small>Moh. Akbaruddin, S.STP., M.Tr.I.P</small></small></small></small></span></a>
                            <span class="desig"><small>Sekretaris Dewan Pengawas</small></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
