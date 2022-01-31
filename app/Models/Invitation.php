<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $table = 'invitations';
    protected $fillable = [
        'code',
        'wedding_id',
        'name',
        'email',
        'phone',
        'count',
        'status',
        'invited_at',
        'opened_at',
        'rsvp_at',
        'deleted_at',
    ];

    // protected $guarded = [];
    protected $attributes = [
        'count' => 0,
    ];

    public function wedding()
    {
        return $this->belongsTo('App\Models\Wedding');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
