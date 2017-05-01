<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  /**
  * Relationship method
  */
  public function teachers() {

      return $this->belongsToMany('App\Teacher')->withTimestamps();
  }

  public static function classroomsForDropdown() {

      $classrooms = Classroom::orderBy('classroom_name','ASC')->get();

      $classroomsForDropdown = [];

      foreach($classrooms as $classroom) {
          $classroomsForDropdown[$classroom['id']] = $classroom->classroom_name;
      }
      return $classroomsForDropdown;
  }
}
