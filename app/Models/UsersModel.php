<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
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
