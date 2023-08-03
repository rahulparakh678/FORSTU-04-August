<?php

namespace App\Imports;

use App\StudentProfile;
use Maatwebsite\Excel\Concerns\ToModel;
//use App\Imports\Carbon;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentProfileImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected $dateFormat = 'Y-m-d';
    public function model(array $row)
    {
        return new StudentProfile([
            //
            'fullname'=>$row['fullname'],
            'email'=>$row['email'],
            'mobile'=>$row['mobile'],
            'gender'=>$row['gender'],
            'ref_code'=>$row['ref_code'],
            'user_id'=>$row['user_id'],
            //'dob'=>$row['dob'],
            //'dob'=>Carbon::parse($row['dob'])->format(config('panel.date_format')),
            //'dob'=>Carbon::parse($row['dob'])->format('Y-m-d'),
            'religion'=>$row['religion'],
            'handicapped'=>$row['handicapped'],
            'single_parent'=>$row['single_parent'],
            'aadharnumber'=>$row['aadharnumber'],
            'father_name'=>$row['father_name'],
            'father_edu'=>$row['father_edu'],
            'father_occupation'=>$row['father_occupation'],
            'mother_name'=>$row['mother_name'],
            'mother_edu'=>$row['mother_edu'],
            'mothers_occupation'=>$row['mothers_occupation'],
            'parents_mobile'=>$row['parents_mobile'],
            'annual_income'=>$row['annual_income'],
            'current_add'=>$row['current_add'],
            'current_state'=>$row['current_state'],
            'current_city'=>$row['current_city'],
            'pincode'=>$row['pincode'],
            'permanent_add'=>$row['permanent_add'],
            'permanent_city'=>$row['permanent_city'],
            'permanent_pincode'=>$row['permanent_pincode'],
            'permanent_state'=>$row['permanent_state'],
            'account_number'=>$row['account_number'],
            'bank_ifsc'=>$row['bank_ifsc'],
            'current_inst_name'=>$row['current_inst_name'],
            'current_year'=>$row['current_year'],
            'tution_fees'=>$row['tution_fees'],
            'non_tution_fees'=>$row['non_tution_fees'],
            'hostel_fees'=>$row['hostel_fees'],
            'previous_marks_obtained'=>$row['previous_marks_obtained'],
            'previous_marks_total'=>$row['previous_marks_total'],
            'previous_percentage'=>$row['previous_percentage'],
            'class_10_school_name'=>$row['class_10_school_name'],
            'class_10_state'=>$row['class_10_state'],
            //'school_passing'=>$row['school_passing'],
            'school_marks_obtained'=>$row['school_marks_obtained'],
            'school_marks_total'=>$row['school_marks_total'],
            'cgpa_school_marks_obtained'=>$row['cgpa_school_marks_obtained'],
            'cgpa_school_marks_total'=>$row['cgpa_school_marks_total'],
            'school_percentage'=>$row['school_percentage'],
            'class_12_clg_name'=>$row['class_12_clg_name'],
            'class_12_state'=>$row['class_12_state'],
            //'class_12_passing_yeat'=>$row['class_12_passing_yeat'],
            'class_12_marks_obtained'=>$row['class_12_marks_obtained'],
            'class_12_out_of_total_marks'=>$row['class_12_out_of_total_marks'],
            'class_12_percentage'=>$row['class_12_percentage'],
            'cgpa_class_12_marks_obtained'=>$row['cgpa_class_12_marks_obtained'],
            'cgpa_class_12_marks_total'=>$row['cgpa_class_12_marks_total'],
            'diploma_clg_name',=>$row['diploma_clg_name'],
            'diploma_state',=>$row['diploma_state'],
            //'diploma_passing_year'=>$row['diploma_passing_year'],
            'diploma_total_marks_obtained'=>$row['diploma_total_marks_obtained'],
            'diploma_out_of_total_marks'=>$row['diploma_out_of_total_marks'],
            'diploma_percentage'=>$row['diploma_percentage'],
            'cgpa_diploma_marks_obtained'=>$row['cgpa_diploma_marks_obtained'],
            'cgpa_diploma_marks_total'=>$row['cgpa_diploma_marks_total'],
            'grad_clg_name'=>$row['grad_clg_name'],
            'grad_state'=>$row['grad_state'],
            //'grad_passing_year'=>$row['grad_passing_year'],
            'grad_total_marks'=>$row['grad_total_marks'],
            'grad_out_of_total_marks'=>$row['grad_out_of_total_marks'],
            'cgpa_grad_marks_obtained'=>$row['cgpa_grad_marks_obtained'],
            'cgpa_grad_marks_total'=>$row['cgpa_grad_marks_total'],
            'grad_percentage'=>$row['grad_percentage'],
            'caste_id'=>$row['caste_id'],
            'course_type_id'=>$row['course_type_id'],
            'course_name_id'=>$row['course_name_id'],
            'student_course_name_id'=>$row['student_course_name_id']
            'ref_code'=>$row['ref_code'],

        ]);
    }
}
