<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $excerpt = $this->faker->paragraph();

        return [
            'title' => $this->faker->sentence(mt_rand(5, 15)),
            'slug'  => $this->faker->slug(),
            'body'  => $this->faker->paragraph(mt_rand(15, 25)),
            'excerpt' => Str::limit($excerpt, 200, '...'),
            'image' => 'article-images/' . mt_rand(1, 5) . '.jpg',
            'read_count' => 0,
            'user_id' => mt_rand(2, 8),
            'category_id' => mt_rand(1, 4)
        ];
    }
}
