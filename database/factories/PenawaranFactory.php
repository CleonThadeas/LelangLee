<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\BarangLelang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penawaran>
 */
class PenawaranFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'barang_id' => BarangLelang::inRandomOrder()->first()->id,
            'harga_tawaran' => $this->faker->numberBetween(100000, 2000000),
        ];
    }
}

