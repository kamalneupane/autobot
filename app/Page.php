<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable=[
        'title'
    ];
    public function categories()
    {
        return $this->hasMany('App\Category');
    }
}
