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
       $packages = new Package();
       @for ($i = 0; $i < 50; $i++) {
           $packages->
       }
    }
}
