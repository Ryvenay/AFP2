<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'birthdate',
        'billing_address',
        'shipping_address'
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

    public function Orders()
    {
        return $this->hasMany(Order::class,'user_id','id');
    }
   
}
