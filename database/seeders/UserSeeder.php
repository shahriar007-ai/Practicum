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
               'role' => 1,
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' =>Hash::make('A989898k'),
                'role' => 2,
             ],
        ];
        foreach($user as $us){
            User::create($us);
        }
    }
}
