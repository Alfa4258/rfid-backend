<?php

namespace Database\Factories;

use App\Models\Bib;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BibFactory extends Factory
{
    protected $model = Bib::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bib_number' => $this->faker->unique()->numberBetween(1000, 9999),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['male', 'female', 'other']),
            'date_of_birth' => $this->faker->date('Y-m-d', '2005-12-31'), // Random DOB before 2005
            'address' => $this->faker->address,
            'city' => $this->faker->city,
            'province' => $this->faker->state,
            'country' => $this->faker->country,
            'email' => $this->faker->unique()->safeEmail,
            'cellphone' => $this->faker->phoneNumber,
            'category' => $this->faker->randomElement(['junior', 'senior', 'veteran']),
        ];
    }
}
