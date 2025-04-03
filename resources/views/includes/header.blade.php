<header class="header-wrapper header-one sticky-header">
    <div class="custom-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="flex-center justify-content-between">
                        <!-- Header Logo Start -->
                        <div class="logo">
                            <a wire:navigate href="/">
                                <img class="logo-1" src="/assets/images/logo.png" alt="logoImage">
                                <img class="logo-2" src="/assets/images/logo2.png" alt="logoImage">
                            </a>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Actions Start -->
                        <div class="flex-center header-right">
                            <!-- Header Menu Start -->
                            <div class="flex-center header-right">
                                <!-- Header Menu Start -->
                                <div class="d-none d-lg-flex header-right_menu">
                                    <nav class="main-menu">
                                        <ul>
                                            <li class="has-children">
                                                <a wire:navigate href="/">Home</a>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Tentang Kami</a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a wire:navigate href="/sejarah">Sejarah</a>
                                                    </li>
                                                    <li>
                                                        <a wire:navigate href="/visimisi">Visi Misi</a>
                                                    </li>
                                                    <li>
                                                        <a wire:navigate href="/strukturorganisasi">Struktur
                                                            Organisasi</a>
                                                    </li>
                                                    <li>
                                                        <a wire:navigate href="/kantorcabang">Kantor Cabang</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Pelayanan</a>
                                                <ul class="sub-menu">
                                                    <li><a wire:navigate href="/infotagihan">Info Tagihan</a>
                                                    </li>
                                                    <li><a wire:navigate href="/laporangka">Lapor Angka</a>
                                                    </li>
                                                    <li><a wire:navigate href="/pasangbaru">Pasang Baru</a>
                                                    </li>
                                                    <li><a wire:navigate href="/pengaduan">Pengaduan</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-children">
                                                <a href="#">Publikasi</a>
                                                <ul class="sub-menu">
                                                    <li><a wire:navigate href="/berita">Berita</a></li>
                                                    <li><a wire:navigate href="/pengumuman">Pengumuman</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a wire:navigate href="/kontak">Kontak Kami </a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Menu End -->

                                <!-- Header Actions Start -->
                                <div class="header-right_actions flex-center">

                                    <div class="hamburger d-block d-lg-none">
                                        <!-- Mobile Menu Hambarger Action Button Start -->
                                        <a class="header-action-btn header-action-btn-menu hamburger_button d-flex"
                                            href="#/" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvas-header">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                        <!-- Mobile Menu Hambarger Action Button End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Header Social Actions End -->
                        </div>
                        <!-- Header Menu End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-end" id="offcanvas-header">

    <div class="offcanvas-header">
        <!-- Header Logo Start -->
        <div class="logo">
            <a href="/">
                <img src="/assets/images/logo.png" alt="">
            </a>
        </div>
        <!-- Header Logo End -->
        <button type="button" class="btn-close text-reset mobilemenu-close" data-bs-dismiss="offcanvas"
            aria-label="Close"><i class="fas fa-times"></i></button>
    </div>
    <div class="offcanvas-body">
        <!-- mobile menu navigation start -->
        <nav>
            <ul class="mobile-menu">
                <li class="menu-item-has-children">
                    <a wire:navigate href="/">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Tentang Kami</a>
                    <ul class="dropdown">
                        <li>
                            <a wire:navigate href="/sejarah">Sejarah</a>
                        </li>
                        <li>
                            <a wire:navigate href="/visimisi">Visi Misi</a>
                        </li>
                        <li>
                            <a wire:navigate href="/strukturorganisasi">Struktur Organisasi</a>
                        </li>
                        <li>
                            <a wire:navigate href="/kantorcabang">Kantor Cabang</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="">Pelayanan</a>
                    <ul class="dropdown">
                        <li><a href="/pelayanan/infotagihan">Info Tagihan</a></li>
                        <li><a href="/pelayanan/laporangka">Lapor Angka</a></li>
                        <li><a href="/pelayanan/pasangbaru">Pasang Baru</a></li>
                        <li><a href="/pelayanan/pengaduan">Pengaduan</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Publikasi</a>
                    <ul class="dropdown">
                        <li><a wire:navigate href="/berita">Berita</a></li>
                        <li><a wire:navigate href="/pengumuman">Pengumuman</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/kontak">Kontak Kami </a></li>
            </ul>
        </nav>
        <!-- mobile menu navigation end -->
    </div>

</div>
