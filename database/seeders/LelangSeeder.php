<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lelang;
use App\Models\BarangLelang;
use App\Models\User;

class LelangSeeder extends Seeder
{
    public function run(): void
    {
        Lelang::factory(10)->create();
    }
}
