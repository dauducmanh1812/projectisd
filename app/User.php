<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identification record on Digital CV associated with the user: Consultant
     */
    public function identification()
    {
        return $this->hasOne('App\Identification');
    }

    /**
     * Get the expertise record on Digital CV associated with the user: Consultant
     */
    public function expertise()
    {
        return $this->hasOne('App\Expertise');
    }

    /**
     * Get the project portfolio record on Digital CV associated with the user: Consultant
     */
    public function projectPortfolio()
    {
        return $this->hasOne('App\ProjectPortfolio');
    }

    /**
     * Get the work experience record on Digital CV associated with the user: Consultant
     */
    public function workExperience()
    {
        return $this->hasOne('App\WorkExperience');
    }

    /**
     * Get the education record on Digital CV associated with the user: Consultant
     */
    public function education()
    {
        return $this->hasOne('App\Education');
    }

    /**
     * Get the cerfitication record on Digital CV associated with the user: Consultant
     */
    public function certification()
    {
        return $this->hasOne('App\Certification');
    }
}
