<?php

use App\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 15; $i++) {
            Produit::create([
                'nomprod'=> $faker->sentence(2),
                'slug'=>$faker->slug,
                'description'=> $faker->text,
                'prix'=> $faker->numberBetween(10, 500000),
                'image'=>'https://via.placeholder.com/150 C/O https://placeholder.com/ '

            ])->categories()->attach([
                rand(1, 6),
            ]);
        }
    }
}
