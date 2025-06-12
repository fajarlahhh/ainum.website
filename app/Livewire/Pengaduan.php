<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pelayanan\JenisPengaduan;
use App\Models\Pelayanan\RegistrasiPelayananOnline;
use Livewire\Attributes\Url;

class Pengaduan extends Component
{
    #[Url]
    public $nomor;

    public $nama, $alamat, $no_hp, $id_pelanggan, $dataJenisPengaduan, $isi_pengaduan, $jenis_pengaduan_id, $form = "pengaduan";

    public function submitPengaduan()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required|string|min:30',
            'no_hp' => 'required|digits_between:9,13|numeric|regex:/^08[1-9][0-9]{7,10}$/',
            'isi_pengaduan' => 'required|min:30',
            'jenis_pengaduan_id' => 'required',
            'id_pelanggan' => 'nullable|exists:App\Models\Pelayanan\Pelanggan,id',
        ]);
        $dataTerakhir = RegistrasiPelayananOnline::where('created_at', 'ilike', date('Y-m-') . '%')
            ->whereNotNull('jenis_pengaduan_id')
            ->orderBy('id', 'desc')
            ->first();
        if ($dataTerakhir) {
            $nomor = sprintf('%05s', (int) substr($dataTerakhir->nomor, 0, 5) + 1) . "/PENGADUAN/PBL/ONLINE/" . date('m/Y');
        } else {
            $nomor = "00001/PENGADUAN/PBL/ONLINE/" . date('m/Y');
        }

        $data = new RegistrasiPelayananOnline();
        $data->nomor = $nomor;
        $data->nama = $this->nama;
        $data->alamat = $this->alamat;
        $data->no_hp = $this->no_hp;
        $data->pelanggan_id = $this->id_pelanggan;
        $data->jenis_pengaduan_id = $this->jenis_pengaduan_id;
        $data->catatan = $this->isi_pengaduan;
        $data->save();

        $this->form = "tracking";
        $this->nomor = $nomor;
    }

    public function submitTracking()
    {
        $this->validate([
            'nomor' => 'required',
        ]);

        $data = RegistrasiPelayananOnline::where('nomor', $this->nomor)->first();
    }

    public function tracking()
    {
        $this->form = "tracking";
    }

    public function pengaduan()
    {
        $this->nomor = null;
        $this->form = "pengaduan";
    }

    public function mount()
    {
        if ($this->nomor) {
            $this->form = "tracking";
        } else {
            $this->form = "pengaduan";
        }
        $this->dataJenisPengaduan = JenisPengaduan::orderBy('id', 'asc')->get()->toArray();
    }

    public function render()
    {
        return view('livewire.pengaduan');
    }
}
