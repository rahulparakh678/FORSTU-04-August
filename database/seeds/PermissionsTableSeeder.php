<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [

            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'caste_create',
            ],
            [
                'id'    => '18',
                'title' => 'caste_edit',
            ],
            [
                'id'    => '19',
                'title' => 'caste_show',
            ],
            [
                'id'    => '20',
                'title' => 'caste_delete',
            ],
            [
                'id'    => '21',
                'title' => 'caste_access',
            ],
            [
                'id'    => '22',
                'title' => 'coursetype_create',
            ],
            [
                'id'    => '23',
                'title' => 'coursetype_edit',
            ],
            [
                'id'    => '24',
                'title' => 'coursetype_show',
            ],
            [
                'id'    => '25',
                'title' => 'coursetype_delete',
            ],
            [
                'id'    => '26',
                'title' => 'coursetype_access',
            ],
            [
                'id'    => '27',
                'title' => 'course_create',
            ],
            [
                'id'    => '28',
                'title' => 'course_edit',
            ],
            [
                'id'    => '29',
                'title' => 'course_show',
            ],
            [
                'id'    => '30',
                'title' => 'course_delete',
            ],
            [
                'id'    => '31',
                'title' => 'course_access',
            ],
            [
                'id'    => '32',
                'title' => 'master_data_access',
            ],
            [
                'id'    => '33',
                'title' => 'category_create',
            ],
            [
                'id'    => '34',
                'title' => 'category_edit',
            ],
            [
                'id'    => '35',
                'title' => 'category_show',
            ],
            [
                'id'    => '36',
                'title' => 'category_delete',
            ],
            [
                'id'    => '37',
                'title' => 'category_access',
            ],
            [
                'id'    => '38',
                'title' => 'scholarship_provider_create',
            ],
            [
                'id'    => '39',
                'title' => 'scholarship_provider_edit',
            ],
            [
                'id'    => '40',
                'title' => 'scholarship_provider_show',
            ],
            [
                'id'    => '41',
                'title' => 'scholarship_provider_delete',
            ],
            [
                'id'    => '42',
                'title' => 'scholarship_provider_access',
            ],
            [
                'id'    => '43',
                'title' => 'scholarship_create',
            ],
            [
                'id'    => '44',
                'title' => 'scholarship_edit',
            ],
            [
                'id'    => '45',
                'title' => 'scholarship_show',
            ],
            [
                'id'    => '46',
                'title' => 'scholarship_delete',
            ],
            [
                'id'    => '47',
                'title' => 'scholarship_access',
            ],
            [
                'id'    => '48',
                'title' => 'profile_create',
            ],
            [
                'id'    => '49',
                'title' => 'profile_edit',
            ],
            [
                'id'    => '50',
                'title' => 'profile_show',
            ],
            [
                'id'    => '51',
                'title' => 'profile_delete',
            ],
            [
                'id'    => '52',
                'title' => 'profile_access',
            ],
            [
                'id'    => '53',
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => '54',
                'title' => 'scholarship_achiever_create',
            ],
            [
                'id'    => '55',
                'title' => 'scholarship_achiever_edit',
            ],
            [
                'id'    => '56',
                'title' => 'scholarship_achiever_show',
            ],
            [
                'id'    => '57',
                'title' => 'scholarship_achiever_delete',
            ],
            [
                'id'    => '58',
                'title' => 'scholarship_achiever_access',
            ],
            [
                'id'    => '59',
                'title' => 'support_access',
            ],
            [
                'id'    => '60',
                'title' => 'ticketcategory_create',
            ],
            [
                'id'    => '61',
                'title' => 'ticketcategory_edit',
            ],
            [
                'id'    => '62',
                'title' => 'ticketcategory_create',
            ],
            [
                'id'    => '63',
                'title' => 'ticketcategory_edit',
            ],
            [
                'id'    => '64',
                'title' => 'ticketcategory_show',
            ],
            [
                'id'    => '65',
                'title' => 'ticketcategory_delete',
            ],
            [
                'id'    => '66',
                'title' => 'ticketcategory_access',
            ],
            [
                'id'    => '67',
                'title' => 'ticket_create',
            ],
            [
                'id'    => '68',
                'title' => 'ticket_edit',
            ],
            [
                'id'    => '69',
                'title' => 'ticket_show',
            ],
            [
                'id'    => '70',
                'title' => 'ticket_delete',
            ],
            [
                'id'    => '71',
                'title' => 'ticket_access',
            ],
            [
                'id'    => '72',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '73',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '74',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '75',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '76',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '77',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '78',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '79',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '80',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '81',
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => '82',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '83',
                'title' => 'enquiry_access',
            ],
            [
                'id'    => '84',
                'title' => 'sfc_profile_access',
            ],
        ];

        Permission::insert($permissions);
    }
}