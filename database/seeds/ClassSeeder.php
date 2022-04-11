<?php

use App\Jour;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jour::create([
            'jour' => 'Lundi',
        ]);
        Jour::create([
            'jour' => 'Mardi',
        ]);
        Jour::create([
            'jour' => 'Mercredi',
        ]);
        Jour::create([
            'jour' => 'Jeudi',
        ]);
        Jour::create([
            'jour' => 'Vendredi',
        ]);
        Jour::create([
            'jour' => 'Samedi',
        ]);
        Jour::create([
            'jour' => 'Dimanche',
        ]);


    }
}
