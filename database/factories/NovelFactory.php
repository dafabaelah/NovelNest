<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\Novel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Novel>
 */
class NovelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Novel::class;
    public function definition(): array
    {
        return [
            'nama_novel' => $this->faker->sentence,
            'gambar_novel' => $this->faker->imageUrl(),
            'deskripsi_novel' => '<p>' . implode("</p>\n\n<p>", $this->faker->paragraphs(100)) . '</p>',
            'total_view_novel' => $this->faker->numberBetween(100, 1000),
            'total_like_novel' => $this->faker->numberBetween(50, 500),
            'jumlah_halaman_novel' => $this->faker->numberBetween(100, 1000),
            'id_user' => User::factory(),
            'id_kategori' => Kategori::factory(),
        ];
    }
}
