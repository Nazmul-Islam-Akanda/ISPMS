<?php

namespace App\Models;

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
}
