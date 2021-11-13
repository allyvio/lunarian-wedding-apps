<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    protected $tables = 'weddings';
    protected $fillable = [
        'id',
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

    function getRouteKeyName()
    {
        return 'slug';
    }
}
