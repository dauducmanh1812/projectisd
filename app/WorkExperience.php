<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'companyname', 'experiencejobtitle', 'timefrom','timeto','worklocation','jobdescription',
     ];

    /**
     * Get the user: Consultant that owns the Work Experience on Digital CV
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
