<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $table = 'weddings';
    protected $fillable = [
        'slug',
        'title',
        'description',
        'calon_pria',
        'calon_wanita',
        'calon_pria_photo',
        'calon_wanita_photo',
        'theme'
    ];
    protected $attributes = [
        'theme' => 'default',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }
    public function medias()
    {
        return $this->hasMany('App\Models\Medias');
    }
    public function invitations()
    {
        return $this->hasMany('App\Models\Invitation');
    }
    public function comments()
    {
        return $this->hasManyThrough('App\Models\Comments', 'App\Models\Invitation');
    }
}
