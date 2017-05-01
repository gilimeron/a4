<?php

use Illuminate\Database\Seeder;
use App\Baby;
use App\Classroom;

class BabyClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
       $classrooms =[
           '1' => ['1','2'],
           '2' => ['3']
       ];

       foreach($classrooms as $id => $babies) {
           $classroom = Classroom::where('id','like',$id)->first();
           foreach($babies as $babyId) {
                $baby = Baby::where('id','LIKE',$babyId)->first();
                $classroom->babies()->save($baby);
           }

       }
}
}
