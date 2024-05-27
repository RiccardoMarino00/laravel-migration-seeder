<?php

namespace Database\Seeders;


use App\Models\Transport;
use Faker\Generator as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        DB::table('transports')->truncate();

        //
        for($i = 0; $i < 100; $i++){
            $aziende = [''];
            $new_train = new Transport();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city()." Train Station";
            $new_train->stazione_di_arrivo = $faker->city(). " Train Station";
            $new_train->orario_di_partenza = $faker->dateTimeBetween('-2 week', '+2 week');
            $new_train->orario_di_arrivo = $faker->dateTimeInInterval($new_train->orario_di_partenza, '+6 hours');
            $new_train->codice_treno = $faker->unique()->bothify('??####');
            $new_train->numero_carrozze = $faker->numberBetween(6, 20);
            $new_train->in_orario = $faker->randomElement([true,false]);
            $new_train->cancellato = $faker->randomElement([true,false]);
            $new_train->save();

        }
    }
}
