<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Division;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Division::truncate();
        $division = [
            [
               'name' => 'Dhaka',
            ],
            [
               'name' => 'Chittagong',
            ],
            [
               'name' => 'Khulna',
            ],
            [
               'name' => 'Sylhet',
            ],
            [
               'name' => 'Mymensingh',
            ],
            [
               'name' => 'Rajshahi',
            ],
            [
               'name' => 'Barisal',
            ],
            [
               'name' => 'Rangpur',
            ],
        ];
        foreach($division as $div){
            Division::create($div);
        }
    }
}
