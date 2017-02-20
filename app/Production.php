<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Production extends Model
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
