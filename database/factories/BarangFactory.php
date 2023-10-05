<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang'=>$this->faker->sentence(mt_rand(1,2)),
            'harga'=>mt_rand(1,20)*10000,
            'stok'=>mt_rand(1,100),
            'id_supplier'=>mt_rand(1,5)
        ];
    }
}
