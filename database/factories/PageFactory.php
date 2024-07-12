<?php

namespace Database\Factories;

use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'title_uz' => $this->faker->words(10, true),
            'title_en' => $this->faker->words(10, true),
            'title_ru' => $this->faker->words(10, true),
            'title_kr' => $this->faker->words(10, true),
            'body_uz' => $this->faker->realText(),
            'body_en' => $this->faker->realText(),
            'body_ru' => $this->faker->realText(),
            'body_kr' => $this->faker->realText()
        ];
    }
}
