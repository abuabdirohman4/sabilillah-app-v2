<?php

namespace App\Http\Livewire\Pengajian;

use App\Models\Absensi as ModelAbsensi;
use Carbon\Carbon;
use App\Models\Santri;
use Livewire\Component;

class Absensi extends Component
{
    public $hadir = [];
    public $persentase;
    public $tanggal;
    public $arrayId = [];
    public $absensiSantri = [];
    public $store = [];
    public $search;
    public $count;

    public function render()
    {
        $santri = Santri::orderBy("nama", "asc");
        $this->search != null &&
            $santri->where("nama", "like", "%" . $this->search . "%");
        $this->tanggal = Carbon::now()->format("d-m-Y");
        $this->persentase =
            (count(array_filter($this->hadir)) / count(Santri::get())) * 100;

        return view("livewire.pengajian.absensi", [
            "santris" => $santri->get(),
        ]);
    }

    public function getData($id, $hadir)
    {
        // Cek Apabila Ada Klik 2 Kali atau lebih Pada Hadir
        if (in_array($id, $this->arrayId)) {
            $hadir = false;
            foreach ($this->store as $key => $santri) {
                if ($santri["santri_id"] == $id) {
                    $santri["hadir"] == 1 ? ($hadir = false) : ($hadir = true);
                    unset($this->store[$key]);
                }
            }
        }
        array_push($this->arrayId, $id);
        $santris = Santri::where("id", $id)->get();
        $hadir == true ? ($hadir = 1) : ($hadir = 0);
        $this->tanggal = date("Y-m-d H:i:s");
        $absensiSantri = [
            "santri_id" => $santris[0]->id,
            "tanggal" => $this->tanggal,
            "hadir" => $hadir,
            "ijin" => 0,
            "alasan" => "test",
        ];
        array_push($this->store, $absensiSantri);
    }

    public function store()
    {
        $idSantri = [];
        foreach (Santri::get() as $santri) {
            array_push($idSantri, $santri->id);
        }
        if ($this->store == []) {
            for ($i = 0; $i < count($idSantri); $i++) {
                $absensiSantri = [
                    "santri_id" => $idSantri[$i],
                    "tanggal" => Carbon::now(),
                    "hadir" => 0,
                    "ijin" => 0,
                    "alasan" => "test",
                ];
                array_push($this->store, $absensiSantri);
            }
        } else {
            for ($i = 0; $i < count($idSantri); $i++) {
                if ($i >= count($this->store)) {
                    $this->tanggal = date("Y-m-d H:i:s");
                    array_push($this->store, [
                        "santri_id" => $idSantri[$i],
                        "tanggal" => $this->tanggal,
                        "hadir" => 0,
                        "ijin" => 0,
                        "alasan" => "test",
                    ]);
                }
            }
        }
        // dd($this->store);
        ModelAbsensi::insert($this->store);
    }
}
