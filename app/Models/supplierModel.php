<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplierModel extends Model
{
    use HasFactory;

    protected $table = "suppliers"; 
    protected $fillable = ["supplier_name"];
}