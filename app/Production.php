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
    /**
     * The casts that belong to the production.
     */
    public function casts()
    {
        return $this->belongsToMany('App\Cast', 'productions_casts')->withPivot('character_id');
    }
    /**
     * The casts that belong to the production.
     */
    public function characters()
    {
        return $this->belongsToMany('App\Character', 'productions_casts')->withPivot('cast_id');
    }
    /**
     * Get the user that created the production.
     */
    public function creator()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the user that updated the production.
     */
    public function updater()
    {
        return $this->belongsTo('App\User');
    }
}
