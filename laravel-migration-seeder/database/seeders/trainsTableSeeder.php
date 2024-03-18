<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Trains;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for($i=0; $i<10; $i++){
        $newTrains = new Trains();

        $newTrains->Azienda = $faker->company();
        $newTrains->Stazione_di_partenza = $faker->randomElement(['Milano','Roma','Napoli']);
        $newTrains->Stazione_di_arrivo = $faker->randomElement(['Milano','Roma','Napoli']);
        $newTrains->Orario_di_partenza = $faker->dateTimeBetween('+1 ora','-1 ora');
        $newTrains->Orario_di_arrivo = $faker->dateTimeBetween('+1 ora','-1 ora');
        $newTrains->Codice_Treno = $faker->randomDigit();
        $newTrains->Numero_Carrozze = $faker->randomDigit();
        $newTrains->In_orario = $faker->boolean(50);
        $newTrains->Cancellato = $faker->boolean(50);

        $newTrains->save();
       }
    }
}
