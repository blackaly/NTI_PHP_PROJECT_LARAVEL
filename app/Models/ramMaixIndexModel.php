<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ramMaixIndexModel extends Model
{
    use HasFactory;

    protected $table = "ram"; 
    protected $fillable = ["product_id", "model_number", "memory_size", "memory_speed", "type_of_ram", "compatible_with", "number_of_pins", "kit_includes"];
}