<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Billable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_name',
        'phone',
        'location',
        'avatar_url',
        'gender',
        'category',
        'facebook_id',
        'company_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getId()
    {
        return $this->id;
    }
    public function rating_campaigns()
    {
        return $this->belongsToMany(Campaign::class, 'ratings', 'rater_id', 'leader_id');
    }

    public function campaign_raters()
    {
        return $this->belongsToMany(Campaign::class, 'ratings', 'leader_id', 'rater_id');
    }

}
