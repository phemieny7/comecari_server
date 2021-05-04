<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
<<<<<<< HEAD
<<<<<<< HEAD

class User extends Authenticatable
{
    use HasFactory, Notifiable;
=======
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
<<<<<<< HEAD
>>>>>>> bac3761 (a new update to our backend server)
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
<<<<<<< HEAD
=======
        'phone',
        'verification_code'
>>>>>>> bac3761 (a new update to our backend server)
=======
        'phone',
        'verification_code'
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
