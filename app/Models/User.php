<?php

namespace App\Models;

use App\Models\Departments;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'contact_no',
        'email',
        'user_id',
        'password',
        'department_id',
        'role',
        'image',
        'facebook_id',
        'reset_token',
        'reset_token_expire_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    //relation
    public function department(){
      //who->relation name->to whom  
        // 1 to 1 depenndent = belongsTo
        // 1 to 1 not dependent = hasOne
        return $this->belongsTo(Departments::class);
    }



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
