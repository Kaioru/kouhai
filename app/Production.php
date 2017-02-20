<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
	protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Get the series that owns the production.
     */
    public function series()
    {
        return $this->belongsTo('App\Series');
    }
    /**
     * Get the episodes for the productions.
     */
    public function episodes()
    {
        return $this->hasMany('App\Episode');
    }
}
