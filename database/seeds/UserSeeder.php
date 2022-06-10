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
            'name' => 'Pindo',
            'last_name' => 'Brinda',
            'matricule' => 'G-124356',
            'option_id' => 11 ,
            'email' => 'brindapindo@gmail.com',
            'phone_number' => '658530435',
            'password' => Hash::make('password'),
            'avatar' => 'br.jpeg', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [1,$user1->id,1]);
        $user2 = User::create([
            'name' => 'Enseignant',
            'last_name' => 'Yvan',
            'matricule' => 'E-23456',
            'option_id' => 11 ,
            'email' => 'Enseignant@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [2,$user2->id,2]);




        $user3 = User::create([
            'name' => 'MATCHIDA',
            'last_name' => 'Elois',
            'matricule' => '19NII032I',
            'option_id' => 3 ,
            'email' => 'matchidaelois@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [3,$user3->id,2]);
        $user4 = User::create([
            'name' => 'ETUDIANT',
            'last_name' => 'Ines',
            'matricule' => 'H-23456',
            'option_id' => 1 ,
            'email' => 'kouesilas3@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [4,$user4->id,3]);

        $user5 = User::create([
            'name' => 'Brinda',
            'last_name' => 'Zoe',
            'matricule' => 'U-23456',
            'option_id' => 1 ,
            'email' => 'brindapindo2@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [5,$user5->id,3]);
        $user6 = User::create([
            'name' => 'Mr MBOCK MALIGA',
            'last_name' => 'Josias',
            'matricule' => 'U-23456',
            'option_id' => 8 ,
            'email' => 'mbockjosias8@gmail.com',
            'phone_number' => '683080739',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [6,$user6->id,2]);

        $user7 = User::create([
            'name' => 'Mayi',
            'last_name' => 'Alan',
            'matricule' => '19NII029I',
            'option_id' => 8 ,
            'email' => 'amayi2070@gmail.com',
            'phone_number' => '699512763',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [7,$user7->id,3]);

        $user8 = User::create([
            'name' => 'Saha',
            'last_name' => 'Tchoffo',
            'matricule' => '19NII017I',
            'option_id' => 8 ,
            'email' => 'tchoffosaha@gmail.com',
            'phone_number' => '651756265',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [8,$user8->id,3]);

        $user9 = User::create([
            'name' => 'Bilock',
            'last_name' => 'Eric',
            'matricule' => '19NII039I',
            'option_id' => 8 ,
            'email' => 'ericbilock985@gmail.com',
            'phone_number' => '692881263',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [9,$user9->id,3]);

        $user10 = User::create([
            'name' => 'Mfegue',
            'last_name' => 'Estrella',
            'matricule' => '19NII049I',
            'option_id' => 8 ,
            'email' => 'estrellamfegue@gmail.com',
            'phone_number' => '657019046',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [10,$user10->id,3]);

        $user11 = User::create([
            'name' => 'Essame',
            'last_name' => 'Angelo',
            'matricule' => '19NII003I',
            'option_id' => 8 ,
            'email' => 'angeloessame@gmail.com',
            'phone_number' => '657949963',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [11,$user11->id,3]);

        $user12 = User::create([
            'name' => 'Djouagou',
            'last_name' => 'Linda',
            'matricule' => '19NTI010I',
            'option_id' => 3 ,
            'email' => 'djouagoul@gmail.com',
            'phone_number' => '677875418',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [12,$user12->id,3]);

        $user13 = User::create([
            'name' => 'Kiam',
            'last_name' => 'Ulrich',
            'matricule' => '19NTI006I',
            'option_id' => 3 ,
            'email' => 'ki17grp@gmail.com',
            'phone_number' => '699339234',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [13,$user13->id,3]);

        $user14 = User::create([
            'name' => 'Danie',
            'last_name' => 'Celine',
            'matricule' => '19NTI017I',
            'option_id' => 3 ,
            'email' => 'daniediang@gmail.com',
            'phone_number' => '673721118',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [14,$user14->id,3]);

        $user15 = User::create([
            'name' => 'Adeline',
            'last_name' => 'Sosso',
            'matricule' => '19NTI033I',
            'option_id' => 3 ,
            'email' => 'adelinesosso@gmail.com',
            'phone_number' => '693040272',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [15,$user15->id,3]);

        $user16 = User::create([
            'name' => 'Dada',
            'last_name' => 'Nelson',
            'matricule' => '19NTI032I',
            'option_id' => 3 ,
            'email' => 'nelsondada@gmail.com',
            'phone_number' => '693477714',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [16,$user16->id,3]);
    
        $user17 = User::create([
            'name' => 'Brinda',
            'last_name' => 'Zoe',
            'matricule' => '19NTI021I',
            'option_id' => 3 ,
            'email' => 'brindazoe@gmail.com',
            'phone_number' => '658530438',
            'password' => Hash::make('password'),
            'avatar' => 'avatar.png', 
        ]);
        DB::insert('insert into role_user(id, user_id, role_id) values(?,?,?)', [17,$user17->id,4]);
    
    
    }

}
