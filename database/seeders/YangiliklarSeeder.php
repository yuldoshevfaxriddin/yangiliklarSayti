<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Region;
use App\Models\Yangilik;

class YangiliklarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['images/6O1ZVdtsAS31V3ICkyKB5gWzSRbaBZr7.jpeg'];
        $title = ['Qozog‘iston O‘zbekistonga eksport qilgan neft mahsulotlari haqida ma’lumot berdi'];
        $message = ["2023 yilda Qozog‘iston 90 million tonna neft qazib oldi, shundan 70,5 million tonnasini eksport qildi. Bu haqda Qozog‘iston Energetika vaziri Almasadam Satqaliyev ma’lum qildi. 

        «2023 yilda 90 million tonna neft qazib olindi, bu 2022 yilga nisbatan 6,9 foizga ko‘p... Neft eksporti ham o‘sib, 70,5 million tonna yoki 109,6 foizni tashkil etdi», dedi u. 
        
        Qayd etilishicha, Qozog‘iston nefti temir yo‘l orqali Xitoyga 1,2 million tonna, O‘zbekistonga esa 65 ming tonna eksport qilingan. 
        
        Bundan tashqari, Rossiya neftining mamlakat hududi orqali tranziti Xitoyga 10 million tonna, O‘zbekistonga 150 ming tonnani tashkil qilgan. 
        
        «Drujba» tizimi bo‘yicha 1,2 million tonna, shuningdek, Boku-Tbilisi-Jayhon yo‘nalishi bo‘yicha 2024 yilgacha 1,5 million tonna neftni tashish bo‘yicha kelishuvga erishildi», dedi Satqaliyev."];
        
        for($i=0;$i<20;$i++){
            Yangilik::create([
                'photo' => $images[0],
                'user_id'=>2,
                'title'=>$title[0],
                'message'=>$message[0],
                'category_id'=>random_int(1,8),
                'region_id'=>random_int(1,14),
                // 'category_id'=>3,
                // 'region_id'=>4,
            ]);
        }
        
    }
}
