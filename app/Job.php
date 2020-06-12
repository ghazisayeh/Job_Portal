<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    public function apply()
    {
        $this->hasMany('App\Apply');
    }

    public function category(){
        $this->belongsTo('App\Category');
    }

    public function company(){
        $this->belongsTo('App\Company');
    }
    public function user(){
        $this->belongsTo('App\User');
    }
}
