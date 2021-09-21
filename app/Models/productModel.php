<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;
    
    protected $table = "products"; 
    protected $fillable = ["supplier_id", "product_name", "product_price", "product_condition", "product_image"];
}