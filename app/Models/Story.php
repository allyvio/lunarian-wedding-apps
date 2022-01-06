<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table = 'weddings';
    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'wedding_id',
    ];
    public $timestamps = 'false';
    public function wedding()
    {
        return $this->belongsTo('App\Models\Wedding');
    }
}
