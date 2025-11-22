<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            NraCountrySeeder::class,
            NraGenreSeeder::class,
            NraProdhouseSeeder::class,
            NraProducerSeeder::class,
            NraWebseriesSeeder::class,
            NraContractSeeder::class,
            NraEpisodeSeeder::class,
            NraViewerSeeder::class,
            NraReleaseCountrySeeder::class,
            NraScheduleSeeder::class,
            NraSeriesGenreSeeder::class,
            NraSubSeeder::class,
            NraDubSeeder::class,
            NraProd_HouseSeeder::class,
            NraFeedbackSeeder::class,
        ]);
    }
}
