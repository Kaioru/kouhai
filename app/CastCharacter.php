<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CastCharacter extends Model
{
    use SoftDeletes;

    /**
     * Get the character that owns the cast character.
     */
    public function character()
    {
        return $this->belongsTo('App\Character');
    }
}
