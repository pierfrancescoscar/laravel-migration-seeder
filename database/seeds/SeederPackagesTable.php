<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class SeederPackagesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i = 0; $i < 50; $i++) {

        $packages = new Package();

           $packages->destination = $faker->text(50);
           $packages->price = $faker->randomNumber(4, true);
           $packages->number_of_days = $faker->randomNumber(2, true);
           $packages->description = $faker->word();

           $packages->save();
       }
    }
}
