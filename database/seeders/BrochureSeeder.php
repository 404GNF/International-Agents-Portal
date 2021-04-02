<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrochureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Brochure::factory(15)->create();
    }
}
