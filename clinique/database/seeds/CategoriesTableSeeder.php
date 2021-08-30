<?php

use App\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
            'nom' => 'Analgésiques',
            'slug' => 'analgésiques',
        ]);

        Categorie::create([
            'nom' => 'Anti-inflamatoires',
            'slug' => 'antiinflamatoires',
        ]);

        Categorie::create([
            'nom' => 'Antibiotiques',
            'slug' => 'antibiotiques',
        ]);

        Categorie::create([
            'nom' => 'Antibactériens',
            'slug' => 'antibactériens',
        ]);
        Categorie::create([
            'nom' => 'Antimicosiques',
            'slug' => 'antimicosiques',
        ]);
        Categorie::create([
            'nom' => 'Antiviraux',
            'slug' => 'antiviraux',
        ]);
    }

}
