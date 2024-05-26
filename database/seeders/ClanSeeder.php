<?php

namespace Database\Seeders;

use App\Models\Clan;
use App\Models\Player;
use Exception;
use Illuminate\Database\Seeder;

class ClanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws Exception
     */
    public function run(): void
    {
        Clan::factory()
            ->has(Player::factory()->count(random_int(7, 10)))
            ->count(5)
            ->create()
        ;
    }
}
