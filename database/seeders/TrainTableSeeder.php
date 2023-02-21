<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++){
            $new_train = new Train();
            $new_train->azienda = $faker->word();
            $new_train->stazione_partenza = $faker->word();
            $new_train->stazione_arrivo = $faker->word();
            $new_train->orario_partenza = $faker->time();
            $new_train->orario_arrivo = $faker->time();
            $new_train->codice_treno = $faker->randomNumber(9, true);
            $new_train->numero_carrozze = $faker->randomDigit();
            $new_train->in_orario = $faker->randomElement([true, false]);
            $new_train->cancellato = $faker->randomElement([true, false]);

            $new_train->save();
        }
    }
}
