<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPortfolio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'projectname', 'referenceurl', 'projecttechnology','attachment'
    ];

    /**
     * Get the user: Consultant that owns the ProjectPorfolio on Digital CV
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
