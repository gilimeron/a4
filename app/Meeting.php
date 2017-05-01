<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
  public function games() {
      return $this->belongsToMany('App\Game')->withTimestamps();
  }

  public function players() {
      return $this->belongsToMany('App\Player');
  }
}
