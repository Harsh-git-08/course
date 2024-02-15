<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;
    protected $table = "course_member";

    protected $fillable = ['username', 'email', 'password', 'mobile'];


    public static $rule = [
        'mobile' => ['unique:user, mobile',]
    ];
}
