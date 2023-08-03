<?php

use Illuminate\Database\Seeder;
use App\Coursetype;
class CoursetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $coursetype = [
            [
                'id'             => 1,
                'course_type_name'  => 'Primary & Secondary Education',
                
            ],
            [
                'id'             => 2,
                'course_type_name'     => 'Higher Secondary Education',
            ],
            [
                'id'             => 3,
                'course_type_name'     => 'Diploma',
            ],
            [
                'id'             => 4,
                'course_type_name'     => 'Undergraduate',
            ],
            [
                'id'             => 5,
                'course_type_name'     => 'Postgraduate',
            ],
            [
                'id'             => 6,
                'course_type_name'     => 'ITI',
            ],
            [
                'id'             => 7,
                'course_type_name'     => 'Integrated Courses',
            ],
            [
                'id'             => 8,
                'course_type_name'     => 'Certification Courses',
            ],
        ];

        Coursetype::insert($coursetype);
    }
}
