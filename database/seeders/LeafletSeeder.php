<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeafletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Leaflet::factory(15)->create();
    }
}
