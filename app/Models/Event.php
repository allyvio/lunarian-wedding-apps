<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    protected $fillable = [
        'wedding_id',
        'title',
        'description',
        'date',
        'start',
        'end',
        'location',
        'is_main'
    ];

    public function wedding()
    {
        return $this->belongsTo('App\Models\Wedding');
    }
}
