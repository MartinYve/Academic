<?php

use App\Option;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Option::create([
            'name' => 'TIC 1 ',
            'niveau_id' => 1 ,
        ]);
        Option::create([
            'name' => 'TIC 2 ',
            'niveau_id' => 2 ,
        ]);
        Option::create([
            'name' => 'TIC 3 ',
            'niveau_id' => 3 ,
        ]);
        Option::create([
            'name' => 'TIC 4 ',
            'niveau_id' => 4 ,
        ]);
        Option::create([
            'name' => 'TIC 5 ',
            'niveau_id' => 5 ,
        ]);


        Option::create([
            'name' => 'II 1 ',
            'niveau_id' => 1 ,
        ]);
        Option::create([
            'name' => 'II 2 ',
            'niveau_id' => 2 ,
        ]);
        Option::create([
            'name' => 'II 3 ',
            'niveau_id' => 3 ,
        ]);
        Option::create([
            'name' => 'II 4 ',
            'niveau_id' => 4 ,
        ]);
        Option::create([
            'name' => 'II 5 ',
            'niveau_id' => 5 ,
        ]);
        Option::create([
            'name' => 'RAS',
            'niveau_id' => 6 ,
        ]);
    }
}
