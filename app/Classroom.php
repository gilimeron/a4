<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  /**
  * Relationship method between teachers and classrooms is many to many
  */
  public function teachers() {

      return $this->belongsToMany('App\Teacher');
  }

  /**
  * Get a list of classrooms to choose when adding/editing a teacher or a baby.
  * This will serve both a dropdown and a checkbox list
  */
  public static function classroomList() {

      $classrooms = Classroom::orderBy('classroom_name','ASC')->get();

      $classroomList = [];

      foreach($classrooms as $classroom) {
          $classroomList[$classroom['id']] = $classroom->classroom_name;
      }
      return $classroomList;
  }
}
