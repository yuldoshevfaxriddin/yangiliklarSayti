<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorys = ['Uzbekistan','Jahon','Iqtisodiyot','Jamiyat','Fan-texnika','Sport','Nuqtai-nazar','Audio'];
        foreach($categorys as $category){

            DB::table('categorys')->insert([
                'name' => $category
            ]);
        }
    }
}
