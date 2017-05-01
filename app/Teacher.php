<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function classrooms() {
        return $this->belongsToMany('App\Classroom')->withTimestamps();

    }

}
