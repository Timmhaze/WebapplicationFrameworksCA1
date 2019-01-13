<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function visits()
    {
        return $this->hasMany('App\Visit');
    }
}
