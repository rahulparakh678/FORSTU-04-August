<?php

namespace App\Exports;

use App\StudentProfile;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

//class ExportStudentProfiles implements FromCollection
class ExportStudentProfiles implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function headings(): array
    {
        return [
            'id','user_id','profile_percentage','email','fullname','dob','gender','religion','mobile','handicapped','single_parent','aadharnumber','father_name','father_edu','father_occupation','mother_name','mother_edu','mothers_occupation','parents_mobile','annual_income','current_add','current_state','current_city','pincode','permanent_add','permanent_city','permanent_pincode','permanent_state','account_number','bank_ifsc','course_pattern','current_inst_name','inst_address','current_year','course_start','tution_fees','non_tution_fees','hostel_fees','you_other_scholarship','previous_marks_obtained','previous_marks_total','previous_percentage','cgpa_previous_marks_obtained','cgpa_previous_marks_total','cgpa_previous_percentage','class_10_school_name','class_10_state','school_passing','school_marks_obtained','school_marks_total','cgpa_school_marks_obtained','cgpa_school_marks_total','cgpa_school_percentage','school_percentage','class_12_clg_name','class_12_state','class_12_passing_yeat','class_12_marks_obtained','class_12_out_of_total_marks','class_12_percentage','cgpa_class_12_marks_obtained','cgpa_class_12_marks_total','cgpa_class_12_percentage','diploma_clg_name','diploma_state','diploma_passing_year','diploma_total_marks_obtained','diploma_out_of_total_marks','diploma_percentage','cgpa_diploma_marks_obtained','cgpa_diploma_marks_total','cgpa_diploma_percentage','grad_clg_name','grad_state','grad_passing_year','grad_total_marks','grad_out_of_total_marks','cgpa_grad_marks_obtained','cgpa_grad_marks_total','cgpa_grad_percentage','grad_percentage','caste_id','course_type_id','course_name_id','photo','aadhar_card','pan_card','caste_certificate','physically_handicapped_certificate','death_certificate','address_proof','domicile_certificate','income_certificate','bank_passbook','clg_id_card','bonafide_certificate','admission_letter','currentyear_fees_reciept','hostel_reciept','class10_marksheet','class12_marksheet','diploma_marksheet','graduation_marksheet','paadhar','previous_marksheet','paid_interest','loan_interest','student_course_name_id','ref_code','paid','orphan','profile_completed','kyc_completed','created_at','updated_at','deleted_at','profile_remarks','profile_upto_date','active','vidyasaarthi_profile_status',

        ];
    }
    public function collection()
    {
        return StudentProfile::all();
    }
    
}
