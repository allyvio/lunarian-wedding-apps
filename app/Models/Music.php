<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
  protected $table = 'music';
  protected $fillable = [
      'music',
  ];
  // public function wedding()
  // {
  //     return $this->belongsTo('App\Models\Wedding');
  // }
}
