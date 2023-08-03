<?php

use Illuminate\Database\Seeder;
use App\Caste;
class CasteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $caste = [
            [
                'id'             => 1,
                'caste_name'           => 'Open',
                
            ],
            [
                'id'             => 2,
                'caste_name'     => 'OBC (Other Backward Classes)',
            ],
            [
                'id'             => 3,
                'caste_name'     => 'SC (Scheduled Castes)',
            ],
            [
                'id'             => 4,
                'caste_name'     => 'ST (Scheduled Tribes)',
            ],
            [
                'id'             => 5,
                'caste_name'     => 'Others',
            ],
        ];

        Caste::insert($caste);
    }
}
