<?php

namespace App\Models;

use App\Models\MobileBanking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payments extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function customer(){
        return $this->belongsTo(Customers::class, 'customer_id_id');
    }

    public function user(){
        return $this->belongsTo(User::class ,'collector_id');
    }

    public function mobileBanking(){
        return $this->belongsTo(MobileBanking::class ,'mobile_banking_id');
    }
}
