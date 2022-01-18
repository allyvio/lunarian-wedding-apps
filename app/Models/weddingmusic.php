<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class weddingmusic extends Model
{
  protected $table = 'weddingmusic';
  protected $fillable = [
      'wedding_id',
      'music_id',
      'status'
  ];
}
