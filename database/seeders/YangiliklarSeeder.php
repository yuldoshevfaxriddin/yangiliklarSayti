<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Region;

class YangiliklarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['images/qeDY2nniSrP0gsoRhSZqNQN6NQ41O2QZafslrlGH.png'];
        $title = ['O‘zbekistondagi eng yirik gaz omborining ta’sischisi o‘zgardi'];
        $message = ["Kun.uz O‘zbekistondagi eng yirik yerosti gaz saqlash ombori – Gazli inshootining sig‘imi 3 barobardan ko‘proqqa oshirilishi haqida xabar bergan edi. Ma’lum bo‘lishicha, gaz omboriga egalik qiluvchi kompaniyaning ta’sischisi o‘zgargan.2023 yil 25 iyul holatiga, “Gazli Gas Storage” MChJ QKning 40 foiz ulushi “O‘ztransgaz” AJga, 60 foizi Rossiyaning “Forus” aksiyadorlik jamiyatiga tegishli bo‘lgan. 2024 yilning 24 fevrali holatida esa, “Forus” ta’sischilar tarkibidan chiqqani, unga tegishli bo‘lgan 60 foizlik ulush Daxon Holdings Limited'ga o‘tganini ko‘rish mumkin. Korxona ustav fondi hajmida (297,9 mrld so‘m) o‘zgarish bo‘lmagan.O‘zbekistondagi eng yirik gaz omborining majoritar huquqqa ega ta’sischisi qachon o‘zgargani, Rossiya kompaniyasi o‘z ulushini qay tarzda begonalashtirgani va bu qarorini “O‘ztransgaz” bilan kelishgani yoki yo‘qligi ma’lum emas. Bu o‘zgarish haqida hozirgacha rasman xabar berilmagan."];
        
        for($i=0;$i<20;$i++){
            DB::table('news')->insert([
                'photo' => $images[0],
                'user_id'=>random_int(0,10),
                'title'=>$title[0],
                'message'=>$message[0],
                // 'category_id'=>random_int(0,7),
                // 'region_id'=>random_int(0,6),
                'category_id'=>Category::find(random_int(1,count(Category::all())))->name,
                'region_id'=>Region::find(random_int(1,count(Region::all())))->name,
            ]);
        }
        
    }
}
