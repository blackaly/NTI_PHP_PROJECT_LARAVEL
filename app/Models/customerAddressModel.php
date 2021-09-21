<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerAddressModel extends Model
{
    use HasFactory;

    protected $table = "customer_address"; 
    protected $fillable = ["user_id", "address_id"]; 
}