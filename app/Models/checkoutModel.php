<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkoutModel extends Model
{
    use HasFactory;

    protected $table = "customer_address"; 
    protected $fillable = ["customer_first_name", "customer_last_name", "customer_city", "customer_county", "customer_street", "customer_building", "customer_phone"];

}