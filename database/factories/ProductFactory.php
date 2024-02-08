<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $satuan = ['pcs', 'lusin', 'dus', 'box', 'karton'];
        return [
            'nama' => fake()->name(),
            'kategori' => fake()->word(),
            'harga' => fake()->randomFloat(),
            'satuan' => $satuan[rand(0,4)],
            'qty' => fake()->randomDigit(),
            'deskripsi' => fake()->word(),
       ];
    }
}
