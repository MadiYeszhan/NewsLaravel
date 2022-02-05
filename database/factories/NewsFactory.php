<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => User::all()->random()->id,
            'preview' => $this->faker->sentence(6, true),
            'title' => $this->faker->sentence(6, true),
            'content' => $this->faker->text(200),
        ];
    }
}
