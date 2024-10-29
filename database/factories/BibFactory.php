<?php

namespace Database\Factories;

use App\Models\Bib;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        $raceDurationSeconds = $this->faker->numberBetween(37 * 60, 39 * 60);
        $startTime = Carbon::createFromTime(8, 0, 0);
        $finishTime = $startTime->copy()->addSeconds($raceDurationSeconds);

        //Random data for average pace
        $minutes = $this->faker->numberBetween(3, 6); // Minutes part
        $seconds = $this->faker->numberBetween(0, 59); // Seconds part
        $averagePace = sprintf('%d:%02d min/km', $minutes, $seconds);

        $splits = [
            [
                'name' => 'START',
                'time' => '00:00:00',
                'pace' => 'min/km'
            ],
            [
                'name' => 'KM 3.0',
                'time' => '00:14:47',
                'pace' => sprintf('%d:%02d min/km', $this->faker->numberBetween(3, 6), $this->faker->numberBetween(0, 59))
            ],
            [
                'name' => 'KM 5.0',
                'time' => '00:17:40',
                'pace' => sprintf('%d:%02d min/km', $this->faker->numberBetween(3, 6), $this->faker->numberBetween(0, 59))
            ],
            [
                'name' => 'FINISH',
                'time' => $finishTime->format('H:i:s'),
                'pace' => sprintf('%d:%02d min/km', $this->faker->numberBetween(3, 6), $this->faker->numberBetween(0, 59))
            ]
        ];

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
            'start_time' =>  $startTime->format('H:i:s'),
            'finish_time' => $finishTime->format('H:i:s'),
            'average_pace' => $averagePace,
            'splits' => json_encode($splits)
        ];
    }
}
