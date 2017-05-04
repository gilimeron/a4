<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AgeGroupsTableSeeder::class);
        $this->call(ClassroomsTableSeeder::class);
        $this->call(BabiesTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(ClassroomTeacherTableSeeder::class);
    }
}
