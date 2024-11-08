<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('bib')->insert([
            'bib_number' => '9525',
            'first_name' => 'Amba',
            'last_name' => 'Leon',
            'gender' => 'Male',
            'date_of_birth'=> '2000-04-20',
            'address' => 'Jl. Disana X.69',
            'city' => 'Ngawi',
            'province' => 'Jawa Timur',
            'country'=> 'Indonesia',
            'email' => 'ambatukam69@gmail.com',
            'cellphone' => '0898989898',
            'category' => 'senior',
            'start_time' => '08:00:00', 
            'finish_time' => '08:20:00', 
            'average_pace'=> '3:28 min/km',
        ]);
        DB::table('bib')->insert([
            'bib_number' => '4849',
            'first_name' => 'Mas',
            'last_name' => 'Rusdi',
            'gender' => 'Male',
            'date_of_birth'=> '2000-04-20',
            'address' => 'Jl. Disitu X.420',
            'city' => 'Nganjuk',
            'province' => 'Jawa Timur',
            'country'=> 'Indonesia',
            'email' => 'ambatuaaa42069@gmail.com',
            'cellphone' => '0896123421',
            'category' => 'senior',
            'start_time' => '08:00:00', 
            'finish_time' => '08:29:00', 
            'average_pace'=> '6:28 min/km',
        ]);
    }
}
