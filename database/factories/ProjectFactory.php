<?php

namespace Database\Factories;

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
        $statuses = [
            'Stopped',
            'In progress',
            'Done',
        ];

        return [
            'name' => "Проект: " . fake()->name(),
            'description' => fake()->text(),
            'status' => fake()->randomElement($statuses),
            'expiration_date' => fake()->date(),
        ];
    }
}
