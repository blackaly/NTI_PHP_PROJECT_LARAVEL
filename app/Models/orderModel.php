<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderModel extends Model
{
    use HasFactory;

    protected $table = "customer_order"; 
    protected $fillable = ["customer_id", "product_id", "quantity", "order_price"];

}