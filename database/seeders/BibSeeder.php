<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bib;

class BibSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 50 dummy records
        Bib::factory()->count(50)->create();
    }
}
