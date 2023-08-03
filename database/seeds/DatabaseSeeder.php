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
        
        $this->call([
	       EventsSeeder::class,
           CasteSeeder::class,
           CoursetypeSeeder::class,
	       Studentcourseseeder::class,
           CourseSeeder::class,
            PermissionsTableSeeder::class,
            UsersTableSeeder::class,
            
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            RoleUserTableSeeder::class,
            TicketSeeder::class,
            ScholarshipCategorySeeder::class,

        ]);
    }
}
