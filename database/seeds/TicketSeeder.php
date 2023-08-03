<?php

use Illuminate\Database\Seeder;
use App\Ticketcategory;
class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tickets = [
            [
                'id'             => 1,
                'name'  => 'Forgot Password',
                
            ],
            [
                'id'             => 2,
                'name'     => 'Regarding Scholarship Scheme',
            ],
            [
                'id'             => 3,
                'type_name'     => 'Regarding Application Status',
            ],
            [
                'id'             => 4,
                'type_name'     => 'Regarding Documents to be uploaded/provided',
            ],
            [
                'id'             => 5,
                'type_name'     => 'Regarding Bank Details',
            ],
            [
                'id'             => 6,
                'type_name'     => 'Facing Issue in Profile Form',
            ],
            [
                'id'             => 7,
                'type_name'     => 'Related to Registration Fees',
            ],
            [
                'id'             => 8,
                'type_name'     => 'Related to Scholarship Fund Disbursement',
            ],
        ];

        Ticketcategory::insert($tickets);
    }
}
