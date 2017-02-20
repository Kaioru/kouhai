<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
	use SoftDeletes;

	protected $fillable = [
        'title',
        'description',
    ];

    /**
     * Get the production that owns the episode.
     */
    public function post()
    {
        return $this->belongsTo('App\Production');
    }
}
