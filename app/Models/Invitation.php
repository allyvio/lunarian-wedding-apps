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
        'is_vip',
        'count',
        'status',
        'invited_at',
        'opened_at',
        'rsvp_at'
    ];
    protected $attributes = [
        'is_vip' => false,
        'count' => 1,
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
