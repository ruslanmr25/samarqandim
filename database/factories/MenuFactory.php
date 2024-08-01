<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $level = $this->faker->randomElement([2, 2, 3, 3, 3]);
        return [
            "name_uz" => $this->faker->words(5, true),
            "name_en" => $this->faker->words(5, true),
            "name_ru" => $this->faker->words(5, true),
            "name_kr" => $this->faker->words(5, true),

            "level" => $level,
            "path" => $this->faker->unique()->randomAscii()
        ];
    }
}
