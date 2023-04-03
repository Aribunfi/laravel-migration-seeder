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
    public function run()
    {
        $new_train = new Train;

        $new_train->azienda = "Trenitalia";
        $new_train->da = "Milano";
        $new_train->a = "Genova";
        $new_train->partenza = "Mercoledì ore 16:25";
        $new_train->arrivo = "Mercoledì ore 18:18";
        $new_train->codice = "A3730";
        $new_train->carrozze = "8";
        $new_train->puntuale = true;
        $new_train->cancellato = false;
       
        $new_train->save();

    }
}
