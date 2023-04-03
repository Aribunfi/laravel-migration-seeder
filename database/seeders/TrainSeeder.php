<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;

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
        $new_train = new Train;

        $new_train->azienda = $faker->words();
        $new_train->da = $faker->text();
        $new_train->a = $faker->text();
        $new_train->partenza = $faker->dateTime();
        $new_train->arrivo = $faker->dateTime();
        $new_train->codice = $faker->randomNumber(5, false);
        $new_train->carrozze = $faker->randomDigit();
        $new_train->puntuale = true;
        $new_train->cancellato = false;
       
        $new_train->save();

    }
}
