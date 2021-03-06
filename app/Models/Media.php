<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = [
        'wedding_id',
        'filename',
        'type'
    ];

    public function wedding()
    {
        return $this->belongsTo('App\Models\Wedding');
    }
}
