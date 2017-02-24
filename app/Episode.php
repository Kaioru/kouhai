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

    public $validation = [
        'title' => ['required'],
        'description' => ['required'],
    ];

    /**
     * Get the production that owns the episode.
     */
    public function post()
    {
        return $this->belongsTo('App\Production');
    }
	/**
     * Get the user that owns the episode.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
