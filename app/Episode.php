<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    /**
     * Get the production that owns the episode.
     */
    public function post()
    {
        return $this->belongsTo('App\Production');
    }
}
