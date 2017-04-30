<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
  public function books() {
      return $this->belongsToMany('App\Game')->withTimestamps();
      return $this->belongsToMany('App\Player')->withTimestamps();
  }
}
