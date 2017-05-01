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
      return $this->belongsToMany('App\Classroom');
  }

  public function babies() {
  # AgeGroup has many babies - one-to-many relationship.
      return $this->belongsToMany('App\Baby');
  }

  public static function AgeGroupsForDropdown() {

      $ageGroups = AgeGroup::orderBy('age_group_name','ASC')->get();

      $ageGroupsForDropdown = [];

      foreach($ageGroups as $ageGroup) {
          $ageGroupsForDropdown[$ageGroup['id']] = $ageGroup->age_group_name;
      }
      return $ageGroupsForDropdown;
  }

}
