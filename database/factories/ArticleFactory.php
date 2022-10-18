<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=\App\Models\Article::class;
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(),
            'status'=>$this->faker->randomElement(['1','0']),
        ];
    }
}
