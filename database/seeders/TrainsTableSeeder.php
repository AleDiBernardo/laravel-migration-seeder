<?php

namespace Database\Seeders;

use App\Models\Train;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {

            $faker = Faker::create('it_IT');
            $newTrain = new Train();
            $newTrain->codice_treno = $faker->randomNumber(4, true);
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->numero_carrozze = $faker->numberBetween(0, 10);
            $newTrain->in_orario = ($faker->numberBetween(0, 1) === 1) ? true : false;
            $newTrain->cancellato = ($faker->numberBetween(0, 1) === 1) ? true : false;
            $newTrain->data = $faker->dateTimeBetween('-3 days', '+1 week');
            $newTrain->save();
        }

    }
}
