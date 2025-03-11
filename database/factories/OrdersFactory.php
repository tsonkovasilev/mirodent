<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Status;
use App\Models\Service;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->name(),
            'notes'=>fake()->realText(500),
            'viewed'=>fake()->numberBetween(0,1),
            'status_id'=>Status::inRandomOrder()->first()->id,
            'service_id'=>Service::inRandomOrder()->first()->id,
        ];
    }
}
