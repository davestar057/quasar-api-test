<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
