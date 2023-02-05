<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    public function run()
    {
        $kelamin = ["Laki-Laki", "Perempuan"];
        $anggota = ["GNBS", "Brangsong"];
        for ($i = 0; $i < 20; $i++) {
            Santri::create([
                "nama" => fake()->name(),
                "kelamin" => $kelamin[array_rand($kelamin)],
                "umur" => rand(15, 25),
                "asal" => fake()->city(),
                "pekerjaan" => fake()->jobTitle(),
                "anggota" => $anggota[array_rand($anggota)],
                "archived" => rand(0, 1),
            ]);
        }
    }
}
