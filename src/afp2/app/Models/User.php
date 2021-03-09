<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

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
