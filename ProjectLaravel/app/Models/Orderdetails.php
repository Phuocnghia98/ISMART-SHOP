<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    use HasFactory;
    protected $table = "orderdetails";
    public $timestamps = false;

    protected $fillable = [
        'order_number',
        'product_code',
        'quantity_ordered',
        'price_each',
        'order_lineNumber',
    ];

    public function products(){
        return $this->belongsTo(Products::class);
    }
    public function orders(){
        return $this->belongsTo(Orders::class);
    }
}
