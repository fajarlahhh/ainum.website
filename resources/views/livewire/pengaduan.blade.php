<div>
    @push('css')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
            integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

        <style>
            #map {
                height: 500px;
            }
        </style>
    @endpush
    <!-- Breadcrumb Section Start -->
    <div class="section-padding breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <h1 class="title">Pengaduan</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="javascript:;">Pelayanan</a></li>
                            <li><span>Pengaduan</span></li>
                        </ul>
                    </div>
                    <!-- Breadcrumb Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Info Tagihan Section Start -->
    @switch($form)
        @case('result')
            <div class="why-choose-us section-margin-top mb-5">
                <div class="container">
                    <div class="wow fadeInUp mb-30 text-center" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle"> Tracking Pengaduan</span>
                        <p><small>{{ $data?->nomor }}</small></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="why-choose-us_inner p-5">
                                <!-- Why Choose us content Start -->
                                <div class="why-choose-us_content wow fadeInUp" data-wow-duration="1.5s"
                                    data-wow-delay=".1s"
                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <!-- Heading Start -->
                                    <div class="heading-one">
                                        <!-- Heading End -->
                                        <div class="check-content mb-3">
                                            <h4 class="check-content_title text-white">Nama</h4>
                                            <p class="check-content_text text-white">{{ $data?->nama }}</p>
                                        </div>
                                        <div class="check-content mb-3">
                                            <h4 class="check-content_title text-white">Alamat</h4>
                                            <p class="check-content_text text-white">{{ $data?->alamat }}</p>
                                        </div>
                                        <div class="check-content mb-3">
                                            <h4 class="check-content_title text-white">No. HP</h4>
                                            <p class="check-content_text text-white">{{ $data?->no_hp }}</p>
                                        </div>
                                        <div class="check-content mb-3">
                                            <h4 class="check-content_title text-white">Jenis Pengaduan</h4>
                                            <p class="check-content_text text-white">{{ $data?->jenisPengaduan?->nama }}</p>
                                        </div>
                                        <div class="check-content mb-3">
                                            <h4 class="check-content_title text-white">Isi Pengaduan</h4>
                                            <p class="check-content_text text-white">{{ $data?->catatan }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Why Choose us content End -->
                                <!-- Why Choose us List Start -->
                                <ul class="why-choose-us_list">
                                    @if ($data->validation_at)
                                        <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                            data-wow-delay=".3s"
                                            style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            <span class="check-icon">
                                                <i class="fas fa-check text-success fa-lg"></i>
                                            </span>
                                            <div class="check-content">
                                                <h4 class="check-content_title">Validasi</h4>
                                                <p class="check-content_text">Pengaduan anda telah divalidasi oleh admin<br>
                                                    <small><small>{{ $data->validation_at->format('d F Y H:i:s') }}</small></small>
                                                </p>
                                            </div>
                                        </li>
                                    @else
                                        <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                            data-wow-delay=".3s"
                                            style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            <span class="check-icon">
                                                <i class="fas fa-times text-danger fa-lg"></i>
                                            </span>
                                            <div class="check-content">
                                                <h4 class="check-content_title">Validasi</h4>
                                                <p class="check-content_text">Mohon bersabar, pengaduan anda sedang dalam proses
                                                    validasi</p>
                                            </div>
                                        </li>
                                    @endif

                                    @if ($data->jenisPengaduan?->spk)
                                        @if ($data->registrasiPelayanan)
                                            @if ($data->registrasiPelayanan->spkPelayanan)
                                                <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                    data-wow-delay=".3s"
                                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <span class="check-icon">
                                                        <i class="fas fa-check text-success fa-lg"></i>
                                                    </span>
                                                    <div class="check-content">
                                                        <h4 class="check-content_title">Penugasan</h4>
                                                        <p class="check-content_text">Penugasan sudah dilakukan oleh admin<br>
                                                            <small><small>{{ $data->registrasiPelayanan->spkPelayanan->created_at->format('d F Y H:i:s') }}</small></small>
                                                        </p>
                                                    </div>
                                                </li>
                                            @else
                                                <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                    data-wow-delay=".3s"
                                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <span class="check-icon">
                                                        <i class="fas fa-times text-danger fa-lg"></i>
                                                    </span>
                                                    <div class="check-content">
                                                        <h4 class="check-content_title">Penugasan</h4>
                                                        <p class="check-content_text">
                                                            Mohon bersabar, pengaduan anda sedang dalam proses penugasan
                                                        </p>
                                                    </div>
                                                </li>
                                            @endif
                                        @else
                                            <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                data-wow-delay=".3s"
                                                style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                <span class="check-icon">
                                                    <i class="fas fa-times text-danger fa-lg"></i>
                                                </span>
                                                <div class="check-content">
                                                    <h4 class="check-content_title">Penugasan</h4>
                                                    <p class="check-content_text">
                                                        Ditunggu proses validasi dulu ya
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    @endif

                                    @if ($data->jenisPengaduan?->survey)
                                        @if ($data->registrasiPelayanan)
                                            @if ($data->registrasiPelayanan?->surveyPelayanan)
                                                <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                    data-wow-delay=".3s"
                                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <span class="check-icon">
                                                        <i class="fas fa-check text-success fa-lg"></i>
                                                    </span>
                                                    <div class="check-content">
                                                        <h4 class="check-content_title">Pengerjaan</h4>
                                                        <p class="check-content_text">Pengaduan anda sendang dalam proses
                                                            pengerjaan<br>
                                                            <small><small>{{ $data->registrasiPelayanan->surveyPelayanan->created_at->format('d F Y H:i:s') }}</small></small>
                                                        </p>
                                                    </div>
                                                </li>
                                            @else
                                                <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                    data-wow-delay=".3s"
                                                    style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                    <span class="check-icon">
                                                        <i class="fas fa-times text-danger fa-lg"></i>
                                                    </span>
                                                    <div class="check-content">
                                                        <h4 class="check-content_title">Pengerjaan</h4>
                                                        <p class="check-content_text">
                                                            Ditunggu proses penugasan dulu ya
                                                        </p>
                                                    </div>
                                                </li>
                                            @endif
                                        @else
                                            <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                data-wow-delay=".3s"
                                                style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                <span class="check-icon">
                                                    <i class="fas fa-times text-danger fa-lg"></i>
                                                </span>
                                                <div class="check-content">
                                                    <h4 class="check-content_title">Pengerjaan</h4>
                                                    <p class="check-content_text">
                                                        Ditunggu proses penugasan dulu ya
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    @endif

                                    @if ($data->registrasiPelayanan)
                                        @if ($data->registrasiPelayanan?->beritaAcaraPelayanan)
                                            <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                data-wow-delay=".3s"
                                                style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                <span class="check-icon">
                                                    <i class="fas fa-check text-success fa-lg"></i>
                                                </span>
                                                <div class="check-content">
                                                    <h4 class="check-content_title">Penyelesaian</h4>
                                                    <p class="check-content_text">Pengaduan anda sudah selesai dikerjakan<br>
                                                        <small><small>{{ $data->registrasiPelayanan->beritaAcaraPelayanan->created_at->format('d F Y H:i:s') }}</small></small>
                                                    </p>
                                                </div>
                                            </li>
                                        @else
                                            <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                                data-wow-delay=".3s"
                                                style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                                <span class="check-icon">
                                                    <i class="fas fa-times text-danger fa-lg"></i>
                                                </span>
                                                <div class="check-content">
                                                    <h4 class="check-content_title">Penyelesaian</h4>
                                                    <p class="check-content_text">
                                                        Ditunggu proses pengerjaan dulu ya
                                                    </p>
                                                </div>
                                            </li>
                                        @endif
                                    @else
                                        <li class="why-choose-us_list__single wow fadeInUp" data-wow-duration="1.5s"
                                            data-wow-delay=".3s"
                                            style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
                                            <span class="check-icon">
                                                <i class="fas fa-times text-danger fa-lg"></i>
                                            </span>
                                            <div class="check-content">
                                                <h4 class="check-content_title">Pengerjaan</h4>
                                                <p class="check-content_text">
                                                    Ditunggu proses pengerjaan dulu ya
                                                </p>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                                <!-- Why Choose us List End -->
                            </div>
                            <br>
                            <div class="text-center mt-3">
                                <x-alert />
                                <a href="/pengaduan" class="btn btn-style-two">
                                    <span>Kembali</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="why-choose-us_shape scene"
                    style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; pointer-events: inherit;">
                    <img class="shape shape1 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".1s"
                        src="assets/images/choose/circle.png" alt="shape"
                        style="transform: translate3d(0px, 0px, 0px); visibility: visible; animation-duration: 1.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <img class="shape shape2" src="assets/images/choose/shape1.png" alt="shape"
                        style="transform: translate3d(0px, 0px, 0px);">
                    <img data-depth="0.20" class="shape shape3" src="assets/images/choose/shape2.png" alt="shape"
                        style="transform: translate3d(-31.6px, 7.3px, 0px);">
                </div>
            </div>
        @break

        @case('tracking')
            <div class="contact-us section-margin">
                <div class="container position-relative">
                    <div class="text-center wow fadeInUp mb-30" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">Form Tracking Pengaduan</span>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <form id="contact-form" class="contact-form" wire:submit="submitTracking">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input placeholder="No. Pengaduan" wire:model="nomor" class="form-control"
                                            wire:loading.disable>
                                        @error('nomor')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 text-left">
                                        <button class="btn btn-style-one" type="submit" wire:loading.disable>
                                            <span>Submit</span> </button>
                                        <a href="/pengaduan" class="btn btn-style-two">
                                            <span>Kembali</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @break

        @default
            <div class="contact-us section-margin">
                <div class="container position-relative">
                    <div class="row">
                        <!-- Heading Start -->
                        <div class="text-center wow fadeInUp mb-30" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <span class="heading-one-subtitle">Form Pengaduan</span>
                        </div>
                        <!-- Heading End -->
                    </div>
                    <form id="contact-form" class="contact-form" wire:submit="submitPengaduan">
                        <div class="row">
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input placeholder="Nama *" wire:model="nama" class="form-control"
                                            wire:loading.disable>
                                        @error('nama')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input placeholder="Alamat *" wire:model="alamat" class="form-control"
                                            wire:loading.disable>
                                        @error('alamat')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input placeholder="No. Hp *" wire:model="no_hp" class="form-control"
                                            wire:loading.disable>
                                        @error('no_hp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <select wire:model="jenis_pengaduan_id" class="form-control">
                                            <option value="">-- Pilih Jenis Pengaduan --</option>
                                            @foreach ($dataJenisPengaduan as $jenis)
                                                <option value="{{ $jenis['id'] }}">{{ $jenis['nama'] }}</option>
                                            @endforeach
                                        </select>
                                        @error('jenis_pengaduan_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input placeholder="ID Pelanggan" wire:model="id_pelanggan" class="form-control"
                                            wire:loading.disable>
                                        @error('id_pelanggan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea name="isi_pengaduan" placeholder="Isi Pengaduan *" wire:model="isi_pengaduan" class="form-control"
                                            wire:loading.disable></textarea>
                                        @error('isi_pengaduan')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <div id="map" wire:ignore class="mb-3"></div>
                            </div>
                            <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <button class="btn btn-style-one" type="submit" wire:loading.disable>
                                    <span>Submit</span> </button>
                                <a href="javascript:void(0);" wire:click="tracking" class="btn btn-style-two">
                                    <span>Tracking</span>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @break

    @endswitch
    <!-- Info Tagihan Section End -->
</div>

@push('scripts')
    <script>
        var map = L.map('map').setView([{{ $latitude }}, {{ $longitude }}], {{ $zoom }});

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var marker = L.marker([{{ $latitude }}, {{ $longitude }}], {
            draggable: 'true'
        }).addTo(map);

        marker.on('dragend', function(event) {
            var position = marker.getLatLng();
            marker.setLatLng(position, {
                draggable: 'true'
            }).bindPopup(position).update();

            Livewire.dispatch('koordinat', {
                long: position.lng,
                lat: position.lat
            })
        });

        $(".coordinate").change(function() {
            var lat = document.getElementById('latitude').value;
            var lng = document.getElementById('longitude').value;
            // Validasi nilai input
            if (!isNaN(lat) && !isNaN(lng) && lat !== '' && lng !== '') {
                var newLatLng = new L.LatLng(lat, lng);

                // Pindahkan marker ke lokasi baru
                marker.setLatLng(newLatLng);

                // Fokuskan peta ke lokasi baru
                map.setView(newLatLng, 13);
            } else {
                alert('Please enter valid latitude and longitude.');
            }
        });
    </script>
@endpush
