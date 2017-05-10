<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
    * Relationship method between teachers and classrooms is many to many
    */
    public function classrooms() {
        return $this->belongsToMany('App\Classroom');

    }

}
