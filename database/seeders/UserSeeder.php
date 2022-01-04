<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::truncate();
        $user = [
            [
               'name' => 'admin',
               'email' => 'admin@admin.com',
               'password' =>Hash::make('A989898k'),
               'photo' => 'uploads/users/photos/admin-default.jpg',
               'role' => 1,
            ],
            [
                'name' => 'Bianca Dolan',
                'email' => 'biancadolan@hotmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/avatar-s-2.jpg',
                'role' => 2,
            ],
            [
                'name' => 'Stacie Thomas',
                'email' => 'thomas@yahoo.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/0e2a78f73c16f4ba04fb72b782df92dc.jpg',
                'role' => 2,
            ],
            [
                'name' => 'Kie Collier',
                'email' => 'kiecollier@yahoo.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/avatar-s-1.jpg',
                'role' => 2,
            ],
            [
                'name' => 'Simon Schneider',
                'email' => 'schneidersimon62@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/avatar-s-5.jpg',
                'role' => 2,
            ],  
            [
                'name' => 'Sullivan Dyer',
                'email' => 'sullivandyer@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/avatar-s-11.1a620230.jpg',
                'role' => 2,
            ],  
            [
                'name' => 'Athena Hartley',
                'email' => 'athenahartley@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/avatar-s-6.jpg',
                'role' => 2,
            ],  [
                'name' => 'Salman Reeves',
                'email' => 'salmanreeves@hotmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/images1.jpg',
                'role' => 2,
            ],  
            [
                'name' => 'Jasmine Christensen',
                'email' => 'Jaschris3@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/avatar-s-20.jpg',
                'role' => 2,
            ],  [
                'name' => 'Frederic Southern',
                'email' => 'frederic@yahoo.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/images2.jpg',
                'role' => 2,
            ],  
            [
                'name' => 'Shania Tate',
                'email' => 'shaniatate@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/download.jpg',
                'role' => 2,
            ],  
            [
                'name' => 'Lucinda Roberson',
                'email' => 'roberson@hotmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/images3.jpg',
                'role' => 2,
            ],  
            [
                'name' => 'Yusuf Nash',
                'email' => 'nashyusuf46@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/29504334.jpg',
                'role' => 2,
            ],
            [
                'name' => 'Casper Hess',
                'email' => 'casperhess@yahoo.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/t3.jpg',
                'role' => 2,
            ], 
            [
                'name' => 'Trey Sykes',
                'email' => 'treysykes@gmail.com',
                'password' =>Hash::make('A989898k'),
                'photo' => 'uploads/users/photos/images.jpg',
                'role' => 2,
            ], 
        ];
        foreach($user as $us){
            User::create($us);
        }
    }
}
