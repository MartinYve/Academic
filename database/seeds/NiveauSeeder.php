<?php

use App\Niveau;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Niveau::create([
            'name' => 'niveau 1 ',
        ]);
        Niveau::create([
            'name' => 'niveau 2 ',
        ]);
        Niveau::create([
            'name' => 'niveau 3 ',
        ]);
        Niveau::create([
            'name' => 'niveau 4 ',
        ]);
        Niveau::create([
            'name' => 'niveau 5 ',
        ]);
        Niveau::create([
            'name' => 'Enseignant',
        ]);
    }
}
