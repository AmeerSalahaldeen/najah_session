<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['code', 'user_id', 'check_point_id'];

 	public function creator()
    {
        return $this->belongsToOne('\App\User');
    }

    public function checkPoint()
    {
        return $this->belongsToOne('\App\CheckPoint');
    }
}
