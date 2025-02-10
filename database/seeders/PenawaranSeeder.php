<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penawaran;
use App\Models\User;
use App\Models\BarangLelang;

class PenawaranSeeder extends Seeder
{
    public function run(): void
    {
        Penawaran::factory(50)->create(); // Buat 50 data dummy
    }
}