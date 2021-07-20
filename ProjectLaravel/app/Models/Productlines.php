<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productlines extends Model
{
    use HasFactory;
    protected $table = "productlines";
    public $timestamps = false;

    protected $fillable = [
        'id_productLine',
        'product_line',
        'text_description',
        'html_description',
        'image',

    ];

    public function products(){
        return $this->hasMany(Products::class);
    }
}
