<?php

namespace App\Models;

use App\Models\User;
use App\Models\Blocks;
use App\Models\Packages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function block(){
        return $this->belongsTo(Blocks::class);
    }

    public function package(){
        return $this->belongsTo(Packages::class);
    }

    public function user(){
        return $this->belongsTo(User::class ,'lineman_id');
    }

    public function department(){
          return $this->belongsTo(Departments::class);
      }
}
