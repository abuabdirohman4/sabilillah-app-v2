<?php

namespace App\Http\Livewire\Pengajian;

use Livewire\Component;

class Absensi extends Component
{
    public $data = 0;
    public function render()
    {
        return view('livewire.pengajian.absensi');
    }
}
