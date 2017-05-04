<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgeGroup extends Model
{
  /**
  * Relationship method
  */
  public function classrooms() {
  # AgeGroup has many classrooms - one-to-many relationship.
      return $this->hasMany('App\Classroom');
  }

  public function babies() {
  # AgeGroup has many babies - one-to-many relationship.
      return $this->hasMany('App\Baby');
  }

  public static function ageGroupList() {

      $ageGroups = AgeGroup::orderBy('age_group_name','ASC')->get();

      $ageGroupList = [];

      foreach($ageGroups as $ageGroup) {
          $ageGroupList[$ageGroup['id']] = $ageGroup->age_group_name;
      }
      return $ageGroupList;
  }

}
