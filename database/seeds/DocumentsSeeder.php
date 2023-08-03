<?php

use Illuminate\Database\Seeder;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $documents = [
            [
                'document_name' => 'Photo',
            ],
            [
                'document_name' => 'Parents Aadhar Card',
            ],
            [
                'document_name' => 'Aadhar card',
            ],
            [
                'document_name' => 'Address Proof',
            ],
            [
                'document_name' => 'Caste Certificate',
            ],
            [
                'document_name' => 'Domicile Certificate',
            ],
            [
                'document_name' => 'Income Certificate',
            ],
            [
                'document_name' => 'Bank Passbook',
            ],
            [
                'document_name' => 'Fee Structure',
            ],
            [
                'document_name' => 'College/School ID Card',
            ],
            [
                'document_name' => 'Bonafide Certificate',
            ],
            [
                'document_name' => 'Admission Letter/ Allotment Letter',
            ],
            [
                'document_name' => 'Current Year Fees Reciept',
            ],
            [
                'document_name' => 'Hostel Fees Reciept',
            ],
            [
                'document_name' => 'Class 10 Marksheet',
            ],
            [
                'document_name' => 'Previous Year/Previous Semester Marksheet',
            ],
            [
                'document_name' => 'Recommendation Letter',
            ],
            [
                'document_name' => 'Ration Card',
            ],
            [
                'document_name' => 'Class 12 Marksheet',
            ],
            [
                'document_name' => 'Diploma Marksheet',
            ],
            [
                'document_name' => 'Graduation Marksheet',
            ],
            
            
            
            
            
            // Add more documents as needed
        ];
            DB::table('documents')->insert($documents);
    }
}
