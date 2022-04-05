<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Koue ',
            'last_name' => 'Martin',
            'matricule' => 'G-124356',
            'option_id' => 1 ,
            'email' => 'kouesilas@gmail.com',
            'phone_number' => '656867655',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [1,$user1->id,1]);
    }
}
