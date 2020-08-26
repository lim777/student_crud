<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected  $fillable = [
        'name','gender','phone','address'
    ];

    public static function lastest()
    {
        Teacher::lastest();
    }


}
