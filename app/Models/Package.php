<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = [
        'name',
        'count_invitation',
        'price',
        'value',
        'music',
        'count_galleri',
    ];
    public function weddings()
    {
        return $this->hasMany('App\Models\Wedding');
    }
}
