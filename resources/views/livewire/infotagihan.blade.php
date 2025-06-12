<div>
    <!-- Breadcrumb Section Start -->
    <div class="section-padding breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-center text-center">
                    <!-- Breadcrumb Wrapper Start -->
                    <div class="breadcrumb-wrapper">
                        <h1 class="title">Info Tagihan</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="/">Home</a></li>
                            <li><a href="javascript:;">Pelayanan</a></li>
                            <li><span>Info Tagihan</span></li>
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
            <div class="row">
                <!-- Heading Start -->
                <div class="text-center wow fadeInUp mb-30" data-wow-duration="1.5s" data-wow-delay=".1s">
                    <span class="heading-one-subtitle">Form Info Tagihan</span>
                </div>
                <!-- Heading End -->
            </div>
            <div class="row">
                @if ($pelanggan)
                    <div class="col-md-12 mb-30 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <div class="row">
                            <div class="col-12">
                                <table class="table w-100 table-borderless">
                                    <tr>
                                        <th style="width: 200px;">No. Langganan</th>
                                        <th style="width: 5px;">:</th>
                                        <td>{{ $pelanggan->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <th>:</th>
                                        <td>{{ strtoupper(preg_replace('/(?<!^)([A-Z])/', ' $1', $pelanggan?->status->name)) }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Nama Pelanggan</th>
                                        <th>:</th>
                                        <td>{{ $pelanggan->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <th>:</th>
                                        <td>{{ $pelanggan->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. HP</th>
                                        <th>:</th>
                                        <td>{{ $pelanggan->no_hp }}</td>
                                    </tr>
                                </table>
                                <table class="table w-100 table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="w-100px">Periode</th>
                                            <th>Golongan</th>
                                            <th>Pakai</th>
                                            <th>Administrasi</th>
                                            <th>Harga Air</th>
                                            <th>Denda</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataRekeningAir as $index => $row)
                                            @php
                                                $text = $row['angsuran_rekening_air_id']
                                                    ? 'text-orange-400'
                                                    : (!$row['terbayar']
                                                        ? 'text-red-400'
                                                        : '');
                                            @endphp
                                            <tr>
                                                <td class="{{ $text }} text-nowrap">{{ $row['periode'] }}
                                                </td>
                                                <td class="{{ $text }}">{{ $row['golongan_id'] }}</td>
                                                <td class="{{ $text }}">{{ $row['pakai'] }} </td>
                                                <td class="text-end {{ $text }}">
                                                    {{ number_format($row['dana_meter'] + $row['administrasi']) }}
                                                </td>
                                                <td class="text-end {{ $text }} text-nowrap">
                                                    {{ number_format($row['harga_air']) }} </td>
                                                <td class="text-end {{ $text }}">
                                                    {{ number_format($row['denda']) }} </td>
                                                <td class="text-end {{ $text }}">
                                                    {{ number_format($row['dana_meter'] + $row['administrasi'] + $row['harga_air'] + $row['denda']) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th colspan="6" class="w-100px">Tunggakan</th>
                                            <td class="text-end">
                                                {{ number_format(collect($dataRekeningAir)->where('terbayar', false)->sum(fn($row) => $row['dana_meter'] + $row['administrasi'] + $row['harga_air'] + $row['denda'])) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="6">Lembar</th>
                                            <td class="text-end">
                                                {{ collect($dataRekeningAir)->where('terbayar', false)->count() }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="w-100 text-center">
                                    <button class="btn btn-style-one" wire:click="resetForm" wire:loading.disable>
                                        <span>Reset</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 mb-30 wow fadeInUp text-center" data-wow-duration="1.5s" data-wow-delay=".3s">
                        <form id="contact-form" class="contact-form" wire:submit="submit">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input placeholder="No. Langganan" wire:model="noLangganan" class="form-control"
                                        wire:loading.disable>
                                    @error('noLangganan')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 text-left">
                                    <button class="btn btn-style-one" type="submit" wire:loading.disable>
                                        <span>Submit</span> </button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Info Tagihan Section End -->
</div>
