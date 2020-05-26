<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'schoolname', 'major', 'schoolfrom', 'schoolto', 'edulocation',
    ];


    /**
     * Get the user: Consultant that owns the Education on Digital CV
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
