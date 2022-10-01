<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class servicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'banner_heading' => $this->faker->sentence,
            'banner_paragraph' => $this->faker->paragraph(30),
            'main_content_heading' => $this->faker->sentence(),
            'main_content_paragraph' => $this->faker->paragraph(100),
            'services_main_content' => $this->faker->paragraph(200),
            'user_id' => User::factory()
        ];
    }
}
