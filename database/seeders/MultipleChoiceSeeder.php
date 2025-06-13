<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MultipleChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 5; $i++) {
            DB::table('kraeplins')->insert([
                'name' => 'kraeplin ' . $i,
                'duration' => $faker->randomElement([60, 1800]),
                'description' => $faker->sentence(),
            ]);
        }
    }
}
