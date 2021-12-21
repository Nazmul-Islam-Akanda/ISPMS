<?php

namespace App\Models;

use App\Models\Customers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomersIPMAC extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function customer(){
        return $this->belongsTo(Customers::class, 'id');
    }
}
