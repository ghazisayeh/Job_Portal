<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    public function jobs()
    {
        $this->hasMany('App\Job');
    }
}
