<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $table = "table_student";
    protected $fillable = [
        "rno",
        "name",
        "email",
        "gender",
        "hobby",
        "dob",
        "city",
        "password"
    ];
}