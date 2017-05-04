<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  /**
  * Relationship method
  */
  public function teachers() {

      return $this->belongsToMany('App\Teacher');
  }

  public static function classroomList() {

      $classrooms = Classroom::orderBy('classroom_name','ASC')->get();

      $classroomList = [];

      foreach($classrooms as $classroom) {
          $classroomList[$classroom['id']] = $classroom->classroom_name;
      }
      return $classroomList;
  }
}
