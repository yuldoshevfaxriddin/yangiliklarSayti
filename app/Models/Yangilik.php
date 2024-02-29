<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yangilik extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'user_id',
        'title',
        'photo',
        'message',
        'category_id',
        'region_id',
    ];

    

}
