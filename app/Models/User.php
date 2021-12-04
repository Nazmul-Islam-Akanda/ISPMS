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
    use HasFactory;
    protected $guarded=[];

    //relation
    public function department(){
      //who->relation name->to whom  
        // 1 to 1 depenndent = belongsTo
        // 1 to 1 not dependent = hasOne
        return $this->belongsTo(Departments::class);
    }
}
