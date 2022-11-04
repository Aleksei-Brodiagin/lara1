<?php

namespace Database\Factories;

use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'message' => fake()->text(),
            'user_id' => User::query()->inRandomOrder()->first()->id,
            'theme_id' => Theme::query()->inRandomOrder()->first()->id,
        ];
    }
}
