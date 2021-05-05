<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;


    protected $fillable = [
        "product_id",
        "order_id",
        "amount"

    ];

    public function OrderId()
    {
        return $this->hasOne(Order::class,'id','order_id');
    }
    public function ProductId()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
