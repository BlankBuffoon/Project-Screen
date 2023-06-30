<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Генерируем дату начала аренды с диапазоном в 365 дней
        $expirationDate = fake()->dateTimeBetween($startDate = 'now', $endDate = '+90 days', $timezone = null);

        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'status' => rand(0, 3),
            'expiration_date' => $expirationDate,
        ];
    }
}
