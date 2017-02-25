<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cast extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public $validation = [
        'name' => ['required'],
    ];

    /**
     * The productions that belong to the cast.
     */
    public function productions()
    {
        return $this->belongsToMany('App\Production', 'productions_casts')->withPivot('character_id');
    }
}
