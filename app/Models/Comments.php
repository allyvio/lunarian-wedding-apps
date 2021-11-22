<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    protected $fillable = [
        'invitation_id',
        'message',
        'is_show'
    ];
    protected $attributes = [
        'is_show' => true
    ];

    public function invitation()
    {
        $this->belongsTo('App\Models\Invitation');
    }
}
