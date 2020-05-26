<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Identification extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'user_id', 'fullname', 'gender', 'preferredenviroment','dateofbirth','availability','summary','jobtitle','yearsofexperience','linkedin'
    ];

    /**
     * Get the user: Consultant that owns the Identification on Digital CV
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
