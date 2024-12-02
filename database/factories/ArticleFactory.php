<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'title' => fake()->sentence(15), // on veut 15 mots
        'image' => fake()->image('public/images'),
        'content' => fake()->paragraph(50, true ), // on veut 50 phrases
        'file_path' => fake()->filePath(), // Chemin fictif de fichier
        'user_id' => function () {
            return User::inRandomOrder()->first()->id;
        },
    ];
}
}
