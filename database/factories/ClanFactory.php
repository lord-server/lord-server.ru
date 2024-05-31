<?php

namespace Database\Factories;

use App\Models\Clan;
use App\Models\Player;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

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
    #[ArrayShape([
        'name'          => "string",
        'title'         => "string",
        'about'         => "array|string",
        'description'   => "array|string",
        'leader_id'     => "\Closure",
        'negotiator_id' => "\Closure",
    ])]
    public function definition(): array
    {
        $name = fake()->unique()->name();

        return [
            'name'          => Str::lower($name),
            'title'         => Str::title($name),
            'about'         => fake('ru_RU')->sentences(asText: true),
            'description'   => fake('ru_RU')->paragraphs(asText: true),
            'leader_id'     => fn(array $attributes) => Player::all()->random(),
            'negotiator_id' => fn(array $attributes) => random_int(0, 1) ? $attributes['leader_id'] : Player::all()->random(),
        ];
    }

    /**
     * @throws Exception
     */
    public function configure(): ClanFactory
    {
        return $this
            ->has(Player::factory()->count(random_int(3, 6)))
            ->afterCreating(function (Clan $clan) {
                Player::find($clan->leader_id)->update(['clan_id' => $clan->id]);
                Player::find($clan->negotiator_id)->update(['clan_id' => $clan->id]);
            })
        ;
    }
}
