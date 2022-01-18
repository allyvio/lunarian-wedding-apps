<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
  protected $table = 'music';
  protected $fillable = [
      'music',
      'music_tema'
  ];
  public function wedding()
  {
      return $this->belongsToMany('App\Models\Wedding');
  }
}
