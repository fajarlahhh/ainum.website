<div>
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
            @if ($form == 'pengaduan')
                <div class="row">
                    <!-- Heading Start -->
                    <div class="text-center wow fadeInUp mb-30" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">Form Pengaduan</span>
                    </div>
                    <!-- Heading End -->
                </div>
                <div class="row">
                    <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <form id="contact-form" class="contact-form" wire:submit="submitPengaduan">
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
                        </form>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="text-center wow fadeInUp mb-30" data-wow-duration="1.5s" data-wow-delay=".1s">
                        <span class="heading-one-subtitle">Form Tracking Pengaduan</span>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            @if ($nomor)
                                <div class="row">
                                    <div class="col-12 mb-3 text-center">
                                        <strong>No. Pengaduan: {{ $nomor }}</strong>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" wire:click="pengaduan" class="btn btn-style-two">
                                    <span>Kembali</span>
                                </a>
                            @else
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
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Info Tagihan Section End -->
</div>
