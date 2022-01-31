<?php

namespace App\Models;

use Carbon\Carbon;
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
        'is_main' => false,
    ];
    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_main' => 'boolean',
    ];
    protected $appends = ['date'];

    public function getStartDateAttribute()
    {
        return Carbon::parse($this->attributes['start_date'])->format('H:i');
    }
    public function getEndDateAttribute()
    {
        return $this->attributes['end_date'] ? Carbon::parse($this->attributes['end_date'])->format('H:i') : $this->attributes['end_date'];
    }
    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['start_date'])->format('d-m-Y');
    }
    public function getDatetimeAttribute()
    {
        return $this->attributes['start_date'];
    }
    public function wedding()
    {
        return $this->belongsTo('App\Models\Wedding');
    }
}
