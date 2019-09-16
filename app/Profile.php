<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $fillable=['user_id','avatar','phone','email','experience','location','company_name'];
    public function user(){
        return $this->belongsTo('App\User');
        }
}
