<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
	protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Get the productions for the series.
     */
    public function productions()
    {
        return $this->hasMany('App\Production');
    }
}
