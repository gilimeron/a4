<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use App\Classroom;

class ClassroomTeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $teachers =[
           '1' => ['1','2'],
           '2' => ['5','1'],
           '3' => ['8'],
           '4' => ['4'],
           '5' => ['4','7'],
           '6' => ['1','3'],
           '7' => ['3'],
           '8' => ['6','5'],
       ];

       foreach($teachers as $id => $classrooms) {
           $teacher = Teacher::where('id','like',$id)->first();
           foreach($classrooms as $classroomId) {
                $classroom = Classroom::where('id','LIKE',$classroomId)->first();
                $teacher->classrooms()->save($classroom);
           }

       }
}
}
