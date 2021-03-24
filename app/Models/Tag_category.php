<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_category extends Model
{
    use HasFactory;
    protected $fillable= [
        'id',
        'name',
        'description',
        'img_url',
        'user_id',
        'page_title'
    ];

}
