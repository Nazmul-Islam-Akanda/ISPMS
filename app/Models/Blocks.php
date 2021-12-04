<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blocks extends Model
{
    use HasFactory;
    protected $guarded=[];

    //relation
    public function user(){
      //who->relation name->to whom  
        // 1 to 1 depenndent = belongsTo
        return $this->belongsTo(User::class);
    }
}
