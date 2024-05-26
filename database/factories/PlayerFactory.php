<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory<Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'race' => "array|mixed|null", 'last_login' => "\DateTime"])]
    public function definition(): array
    {
        return [
            'name' => fake()->userName(),
            'race' => Arr::random(Player\Race::cases()),
            'last_login' => fake()->dateTimeBetween('-120 days'),
        ];
    }
}
