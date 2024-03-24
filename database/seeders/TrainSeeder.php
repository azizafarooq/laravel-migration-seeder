<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i<10000; $i++){

        $train = new Train;
        $train->company= $faker->company();
        $train->departure_station= $faker->adress();
        $train->arrival_station= $faker->address();
        $train->departure_time= $faker->date();
        $train->arrival_time= $faker->date();
        $train_code = "";
        for ($j = 0; $j <3; $j++) {
            $train_code .=$faker->randomletter();
        }
        $train->wagons_number= $faker->numberBetween(4, 30);
        $train->save();
        
        }

    }
}

