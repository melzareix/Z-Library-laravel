<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','author','description'];

    public function borrowed(){
        return $this->belongsToMany('App\User');
    }

}
