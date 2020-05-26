<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'expertise', 'featuredskill', 'otherskill',
     ];

    /**
     * Get the user: Consultant that owns the Expertise on Digital CV
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
