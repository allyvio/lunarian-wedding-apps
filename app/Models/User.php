<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $attributes = [
        'role' => 'customer'
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function hasRole($role)
    {
        if ($role == $this->role) {
            return true;
        }
        return false;
    }
    public function wedding()
    {
        return $this->hasOne('App\Models\Wedding');
    }
}
