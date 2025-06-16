<?php

namespace App\Livewire;

use App\Models\Mitra;
use App\Models\Publikasi;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view(
            'livewire.home',
            [
                'publikasi' => Publikasi::orderBy('created_at', 'desc')->limit(6)->get(),
                'mitra' => Mitra::all()
            ]
        );
    }
}
