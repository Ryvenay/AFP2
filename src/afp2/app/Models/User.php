<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function BAddress()
    {
        return $this->hasOne(Address::class,'id','billing_address');
    }
    public function SAddress()
    {
        return $this->hasOne(Address::class,'id','shipping_address');
    }

    public function OrderBack()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
   
}
