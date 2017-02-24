<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Series extends Model
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
     * Get the productions for the series.
     */
    public function productions()
    {
        return $this->hasMany('App\Production');
    }
	/**
     * Get the user that owns the series.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
