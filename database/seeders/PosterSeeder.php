<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Poster::factory(15)->create();
    }
}
