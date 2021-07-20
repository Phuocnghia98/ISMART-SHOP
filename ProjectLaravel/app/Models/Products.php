<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";
    public $timestamps = false;

    protected $fillable = [
        'id_product',
        'product_code',
        'product_name',
        'product_line',
        'product_scale',
        'product_vendor',
        'product_description',
        'quantity_inStock',
        'buy_price',
        'MSRP'
    ];

    public function product_line(){
        return $this->belongsTo(Productlines::class);
    }

    public function orderdetails(){
        return $this->hasMany(Orderdetails::class);
    }


}
