<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    function companydata()
    {
        return $this->hasOne('App\Models\Company');
    }
    function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    function getemailAttribute($value)
    {
        return "verma".$value;
    }
}
