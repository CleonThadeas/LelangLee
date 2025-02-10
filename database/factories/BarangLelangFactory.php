<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BarangLelang>
 */
class BarangLelangFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(),
            'harga_awal' => $this->faker->numberBetween(100000, 1000000),
            'gambar' => 'default.jpg',
            'status' => $this->faker->randomElement(['dibuka', 'ditutup']),
        ];
    }
}
