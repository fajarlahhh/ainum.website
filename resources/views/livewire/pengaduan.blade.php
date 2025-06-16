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
    <div class="contact-us section-margin">
        <div class="container position-relative">
            @if ($form != 'tracking')
                <div class="row">
                    <!-- Heading Start -->
                    <div class="text-center wow fadeInUp mb-30" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">Form Pengaduan</span>
                    </div>
                    <!-- Heading End -->
                </div>
                <form id="contact-form" class="contact-form" wire:submit="submitPengaduan">
                    <div class="row">
                        <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
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
                                <div class="col-12 text-left">
                                    <button class="btn btn-style-one" type="submit" wire:loading.disable>
                                        <span>Submit</span> </button>
                                    <a href="javascript:void(0);" wire:click="tracking" class="btn btn-style-two">
                                        <span>Tracking</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div id="map" wire:ignore class="mb-3"></div>
                        </div>
                    </div>
                </form>
            @else
                <div class="row">
                    @if ($nomor)
                        <div class="wow fadeInUp mb-30 text-center" data-wow-duration="1.5s" data-wow-delay=".1s">
                            <span class="heading-one-subtitle">Form Tracking Pengaduan</span>
                            <p><strong>No. Pengaduan: {{ $nomor }}</strong></p>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 150px;">Validasi</th>
                                        <th style="width: 10px;">:</th>
                                        <td>{{ $data?->validation_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>SPK</th>
                                        <th>:</th>
                                        <td>{{ $data?->registrasiPelayanan?->spkPelayanan?->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Survey</th>
                                        <th>:</th>
                                        <td>{{ $data?->registrasiPelayanan?->surveyPelayanan?->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>RAB</th>
                                        <th>:</th>
                                        <td>{{ $data?->registrasiPelayanan?->rabPelayanan?->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Berita Acara</th>
                                        <th>:</th>
                                        <td>{{ $data?->registrasiPelayanan?->beritaAcaraPelayanan?->created_at }}</td>
                                    </tr>
                                </table>
                                <a href="/pengaduan" class="btn btn-style-two">
                                    <span>Kembali</span>
                                </a>
                            </div>
                        </div>
                        <x-alert />
                    @else
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
                                            <a href="javascript:void(0);" wire:click="pengaduan"
                                                class="btn btn-style-two">
                                                <span>Kembali</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
    <!-- Info Tagihan Section End -->
</div>

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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
