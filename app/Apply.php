<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }

    public function job(){
        $this->belongsTo('App\Job');
    }
}
