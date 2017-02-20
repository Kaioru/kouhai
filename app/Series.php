<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    /**
     * Get the productions for the series.
     */
    public function productions()
    {
        return $this->hasMany('App\Production');
    }
}
