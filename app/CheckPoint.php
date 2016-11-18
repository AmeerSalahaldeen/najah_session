<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckPoint extends Model
{   
    protected $fillable = ['name', 'location'];

 	public function subscribers()
    {
        return $this->belongsToMany('\App\User');
    }
}
