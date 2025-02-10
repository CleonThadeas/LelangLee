<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BarangLelang;

class BarangLelangSeeder extends Seeder
{
    public function run(): void
    {
        BarangLelang::factory(20)->create(); // Buat 20 data dummy
    }
}
