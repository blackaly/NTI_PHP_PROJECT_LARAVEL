<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class registerUserModel extends Authenticatable
{
    use HasFactory;

    protected $table    = "users";
    protected $fillable = ["user_name", "user_email", "user_password"]; 

    public function getAuthPassword()
{
    return $this->user_password;
}
   
}