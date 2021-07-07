<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'id',
        'title',
        'details',
        'description',
        'hashtags',
        'per_post_rate',
        'url',
        'location',
        'start_date',
        'end_date',
        'user_id',
        'category_id',
        'images'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function category() {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
}
