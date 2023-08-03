<?php

use Illuminate\Database\Seeder;
use App\Category;
class ScholarshipCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = [
            [
                'id'             => 1,
                'category_name'  => 'Merit Scholarship',
                
            ],
            [
                'id'             => 2,
                'category_name'     => 'Income Based Scholarship',
            ],
            [
                'id'             => 3,
                'category_name'     => 'Merit Cum Means Scholarship',
            ],
            [
                'id'             => 4,
                'category_name'     => 'Sports Scholarship',
            ],
            [
                'id'             => 5,
                'category_name'     => 'Crisis Based Scholarship',
            ],
            [
                'id'             => 6,
                'category_name'     => 'Study Abroad Scholarship',
            ],
            [
                'id'             => 7,
                'category_name'     => 'Loan Scholarship',
            ],
            
        ];

        Category::insert($category);


    }
}
