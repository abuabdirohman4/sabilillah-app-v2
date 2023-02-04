<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i = 0; $i < 3; $i++) {
                Surat::create([
                    "surat_dari" => fake()->name(),
                    "jenis_surat" => "Surat Masuk",
                    "no_surat" => fake()->phoneNumber(),
                    "tanggal_surat" => fake()->dateTime(),
                    "sifat" => $sifat[array_rand($sifat)],
                    "no_agenda" => fake()->buildingNumber(),
                    "tanggal_kegiatan" => fake()->dateTime(),
                    "kategori" => fake()->streetName(),
                    "perihal" => fake()->realText(20),
                    "file" => fake()->mimeType(),
                    "file_name" => "Surat Masuk.docx",
                    "disposisi" => $disposisi[array_rand($disposisi)],
                    "status" => "",
                    "diteruskan_ke" => $unit,
                    "catatan" => fake()->realText(10),
                    "dari" => fake()->name(),
                ]);
        }
    }
}
