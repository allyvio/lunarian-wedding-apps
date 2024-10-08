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
        'nama_calon_pria',
        'nama_calon_wanita',
        'calon_pria_photo',
        'calon_wanita_photo',
        'theme',
        'package_id',
        'quote'
    ];
    protected $attributes = ['theme' => 'classic', 'package_id' => 1, 'status' => 'pending'];
    protected $with = ['events'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function events()
    {
        return $this->hasMany('App\Models\Event');
    }
    public function gallery()
    {
        return $this->hasMany('App\Models\Media')->where('type', 'gallery');
    }
    public function hero()
    {
        return $this->hasMany('App\Models\Media')->where('type', 'hero');
    }
    public function medias()
    {
        return $this->hasMany('App\Models\Media');
    }
    public function stories()
    {
        return $this->hasMany('App\Models\Story');
    }
    public function invitations()
    {
        return $this->hasMany('App\Models\Invitation');
    }
    public function music()
    {
        return $this->belongsToMany('App\Models\Music');
    }
    public function package()
    {
        return $this->belongsTo('App\Models\Package');
    }
    public function comments()
    {
        return $this->hasManyThrough('App\Models\Comments', 'App\Models\Invitation');
    }
}
