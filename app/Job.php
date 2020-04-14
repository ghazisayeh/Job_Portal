<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function category()
    {
        $this->belongsTo('App\Category');
    }

    public function employer()
    {
        $this->belongsTo('App\Employer');
    }
}
