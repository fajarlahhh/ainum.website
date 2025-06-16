<?php

namespace App\Livewire;

use Livewire\Component;
use App\Traits\RekeningairTrait;
use App\Models\Pelayanan\Pelanggan;

class Infotagihan extends Component
{
    use RekeningairTrait;
    public $pelanggan, $dataRekeningAir = [];
    public $noLangganan;

    public function submit()
    {
        $this->validate([
            'noLangganan' => 'required|string|max:15|exists:App\Models\Pelayanan\Pelanggan,id',
        ]);

        $this->getPelanggan($this->noLangganan);
    }

    public function getPelanggan($id)
    {
        $this->pelanggan = Pelanggan::find($id);

        $this->dataRekeningAir = $this->getRekeningAir([$this->pelanggan->id], 'desc')->where('terbayar', false);
    }

    public function resetForm()
    {
        $this->reset(['noLangganan', 'pelanggan', 'dataRekeningAir']);
    }

    public function render()
    {
        return view('livewire.infotagihan');
    }
}
