<?php

namespace App\Models;

use App\Models\User;
use App\Models\AssetsCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assets extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function assetsCategory(){
        return $this->belongsTo(AssetsCategory::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
