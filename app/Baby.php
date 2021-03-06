<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
  /**
  * Relationship method
  */
  public function classroom() {
  # Baby belongs to one classroom - inverse one-to-many relationship.
      return $this->belongsTo('App\Classroom');
  }

}
