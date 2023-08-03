<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Faker\Factory as Faker;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Change 10 to the number of events you want to seed
            Event::create([
                'event_name' => $faker->sentence(3),
                'description' => $faker->paragraph(3),
                'start_date' => $faker->dateTimeBetween('now', '+1 year'),
                'end_date' => $faker->dateTimeBetween('now', '+2 years'),
                'location' => $faker->city,
                'amount' => $faker->randomFloat(2, 100, 50000),
            ]);
        }
    }
}
