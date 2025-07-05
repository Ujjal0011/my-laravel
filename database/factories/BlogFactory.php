<?php

// database/factories/BlogFactory.php
namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->paragraph(),
            'author' => $this->faker->name(),
            'status' => $this->faker->boolean(),
        ];
    }
}
