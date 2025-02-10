<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\BarangLelang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lelang>
 */
class LelangFactory extends Factory
{
    public function definition(): array
    {
        return [
            'barang_id' => BarangLelang::inRandomOrder()->first()->id,
            'admin_id' => User::where('role', 'administrator')->inRandomOrder()->first()->id,
            'status' => $this->faker->randomElement(['dibuka', 'ditutup']),
            'pemenang_id' => User::where('role', 'masyarakat')->inRandomOrder()->first()->id ?? null,
        ];
    }
}

