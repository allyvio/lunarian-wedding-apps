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
        'start_date',
        'end_date',
        'location',
        'is_main'
    ];
    protected $atrribute = [
        'is_main' => false
    ];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function wedding()
    {
        return $this->belongsTo('App\Models\Wedding');
    }
}
