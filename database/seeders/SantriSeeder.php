<?php

namespace Database\Seeders;

use App\Models\Santri;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            Santri::create([
                "surat_dari" => fake()->name(),
                "jenis_surat" => "Surat Masuk",
                "no_surat" => fake()->phoneNumber(),
                "tanggal_surat" => fake()->dateTime(),
                "no_agenda" => fake()->buildingNumber(),
                "tanggal_kegiatan" => fake()->dateTime(),
                "kategori" => fake()->streetName(),
                "perihal" => fake()->realText(20),
                "file" => fake()->mimeType(),
                "file_name" => "Surat Masuk.docx",
                "status" => "",
                "catatan" => fake()->realText(10),
                "dari" => fake()->name(),
            ]);
        }
    }
}
