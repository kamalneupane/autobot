<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    //
    protected $fillable=[
        'name','image','username','email','description','phone','location',
    ];
}
