<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'certname', 'certyear', 'certtech', 'certurl',
    ];

    /**
     * Get the user: Consultant that owns the Certification on Digital CV
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
