<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class adminModel extends Authenticatable
{
    use HasFactory;

    protected $table = "special_users"; 
    protected $fillable = ["user_name", "user_email", "user_password", "special_users_types"];
    

 public function getAuthPassword()
{
    return $this->user_password;
}  

}