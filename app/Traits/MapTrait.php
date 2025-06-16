<?php

namespace App\Traits;

use Livewire\Attributes\On;

trait MapTrait
{
    //
    public $longitude = "117.331052", $latitude = "-8.5796229";
    public $zoom = 10;

    #[On('koordinat')]
    public function koordinat($long, $lat)
    {
        $this->latitude = $lat;
        $this->longitude = $long;
    }
}
