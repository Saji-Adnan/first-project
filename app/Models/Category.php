<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','show'];
    public function news(){
     return $this->hasMany('App\Models\News');
    }
}
