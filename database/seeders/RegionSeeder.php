<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = ['Toshkent sh','Qoraqalpog\'iston','Andijon','Farg\'ona','Namangan','Samarqand','Buxoro','Xorazm','Surxondaryo','Qashqadaryo','Jizzax','Sirdaryo','Toshkent vil','Navoiy'];
        foreach($regions as $region){
            DB::table('regions')->insert([
                'name' => $region,
            ]);
        }
    }
}
