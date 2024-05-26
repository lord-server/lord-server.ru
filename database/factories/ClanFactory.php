<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Player>
 */
class ClanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();

        return [
            'name'          => Str::lower($name),
            'title'         => Str::title($name),
            'about'         => fake('ru_RU')->sentences(asText: true),
            'description'   => fake('ru_RU')->paragraphs(asText: true),
            'leader_id'     => Player::factory(),
            'negotiator_id' => function (array $attributes) {
                return random_int(0, 1) ? $attributes['leader_id'] : Player::factory();
            },
        ];
    }
}
