<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(WorkshopSeeder::class);
        $this->call(AttendanceSeeder::class);
        // $this->call(UsersTableSeeder::class);
        // $this->call(StudentsTableSeeder::class);
    }
}
