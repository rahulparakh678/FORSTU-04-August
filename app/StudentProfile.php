<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \DateTimeInterface;
use Carbon\Carbon;

class StudentProfile extends Model
{
    //
    public $table='student_profiles';
     public $timestamps = true;
    const HANDICAPPED_RADIO = [
        'yes' => 'Yes',
        'no'  => 'No',
    ];

    const SINGLE_PARENT_RADIO = [
        'Yes' => 'Yes',
        'No'  => 'No',
    ];

    const GENDER_RADIO = [
        'male'   => 'Male',
        'female' => 'Female',
        'other' => 'Other',
    ];

    const SCORING_SYSTEM=[
        'cgpa'=>'CGPA',
        'marks'=>'Marks',

    ];

    const YOU_OTHER_SCHOLARSHIP_RADIO = [
        'Yes' => 'Yes',
        'No'  => 'No',
    ];

    const COURSE_PATTERN_RADIO = [
        'semester' => 'Semester Wise',
        'yearwise' => 'Year wise',
    ];

    const MARITAL_STATUS_SELECT = [
        'single'   => 'Single',
        'Married'  => 'Married',
        'Divorced' => 'Divorced',
        'Others'   => 'Others',
    ];

    const RELIGION_SELECT = [
        'hindu'     => 'Hindu',
        'muslim'    => 'Muslim',
        'jain'      => 'Jain',
        'sikh'      => 'Sikh',
        'christian' => 'christian',
        'Other'     => 'Other',
    ];
    const CURRENT_YEAR = [
        'First Year'       => 'First Year',
        'Second Year'      => 'Second Year',
        'Third Year'       => 'Third Year',
        'Fourth Year'      => 'Fourth Year',
        'Fifth Year'       => 'Fifth Year',
        
    ];
    const STATE_SELECT = [
        'Andaman and Nicobar Islands'     => 'Andaman and Nicobar Islands',
        'Andhra Pradesh'    => 'Andhra Pradesh',
        'Arunachal Pradesh'      => 'Arunachal Pradesh',
        'Assam'      => 'Assam',
        'Bihar' => 'Bihar',
        'Chandigarh'     => 'Chandigarh',
        'Chhattisgarh'     => 'Chhattisgarh',
        'Dadra and Nagar Haveli and Daman and Diu'     => 'Dadra and Nagar Haveli and Daman and Diu',
        'Delhi'     => 'Delhi',
        'Goa'     => 'Goa',
        'Gujarat'     => 'Gujarat',
        'Haryana'     => 'Haryana',
        'Himachal Pradesh'     => 'Himachal Pradesh',
        'Jammu and Kashmir'     => 'Jammu and Kashmir',
        'Jharkhand'     => 'Jharkhand',
        'Karnataka'     => 'Karnataka',
        'Kerala'     => 'Kerala',
        'Ladakh'     => 'Ladakh',
        'Lakshadweep'     => 'Lakshadweep',
        'Madhya Pradesh'     => 'Madhya Pradesh',
        'Maharashtra'     => 'Maharashtra',
        'Manipur'     => 'Manipur',
        'Meghalaya'     => 'Meghalaya',
        'Mizoram'     => 'Mizoram',
        'Nagaland'     => 'Nagaland',
        'Odisha'     => 'Odisha',
        'Puducherry'     => 'Puducherry',
        'Punjab'     => 'Punjab',
        'Rajasthan'     => 'Rajasthan',
        'Sikkim'     => 'Sikkim',
        'Tamil Nadu'     => 'Tamil Nadu',
        'Telangana'     => 'Telangana',
        'Tripura'     => 'Tripura',
        'Uttar Pradesh'     => 'Uttar Pradesh',
        'Uttarakhand'     => 'Uttarakhand',
        'West Bengal'     => 'West Bengal',
    ];

    protected $dates = [
        'dob',
        'course_start',
        'school_passing',
        'class_12_passing_yeat',
        'diploma_passing_year',
        'grad_passing_year',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const MOTHER_EDU_SELECT = [
        'Below 10th Passed'        => 'Below 10th Passed',
        '10th Passed'      => '10th Passed',
        'Class 11-12 Passed/Diploma/ITI'       => 'Class 11-12 Passed/Diploma/ITI',
        'Graduation'       => 'Graduation',
        'Above Graduation' => 'Above Graduation',
    ];

    const FATHER_EDU_SELECT = [
        'Below 10th Passed'          => 'Below 10th Passed',
        '10th Passed'      => '10th Passed',
        'Class 11-12 Passed/Diploma/ITI'       => 'Class 11-12 Passed/Diploma/ITI Passed',
        'Graduation'       => 'Graduation',
        'Above Graduation' => 'Above Graduation',
    ];

    protected $fillable = [
        'profile_percentage',
        'user_id',
        'email',
        'fullname',
        'mobile',
        'dob',
        'gender',
        'religion',
        'caste_id',
        'marital_status',
        'handicapped',
        'orphan',
        'single_parent',
        'aadharnumber',
        'father_name',
        'father_edu',
        'father_occupation',
        'mother_name',
        'mother_edu',
        'mothers_occupation',
        'parents_mobile',
        'annual_income',
        'current_add',
        'current_state',
        'current_city',
        'pincode',
        'permanent_add',
        'permanent_city',
        'permanent_pincode',
        'permanent_state',
        'account_number',
        'bank_ifsc',
        'course_type_id',
        'course_name_id',
        'current_year',
        'course_pattern',
        'current_inst_name',
        'inst_address',
        'course_start',
        'tution_fees',
        'non_tution_fees',
        'hostel_fees',
        'you_other_scholarship',
        'previous_marks_obtained',
        'previous_marks_total',
        'previous_percentage',
        'cgpa_previous_marks_obtained',
        'cgpa_previous_marks_total',
        'class_10_school_name',
        'class_10_state',
        'school_passing',
        'school_marks_obtained',
        'school_marks_total',
        'cgpa_school_marks_obtained',
        'cgpa_school_marks_total',
        'school_percentage',
        'class_12_clg_name',
        'class_12_state',
        'class_12_passing_yeat',
        'class_12_marks_obtained',
        'class_12_out_of_total_marks',
        'class_12_percentage',
        'cgpa_class_12_marks_obtained',
        'cgpa_class_12_marks_total',    
        'diploma_clg_name',
        'diploma_state',
        'diploma_passing_year',
        'diploma_total_marks_obtained',
        'diploma_out_of_total_marks',
        'cgpa_diploma_marks_obtained',
        'cgpa_diploma_marks_total',
        'diploma_percentage',
        'grad_clg_name',
        'grad_state',
        'grad_passing_year',
        'grad_total_marks',
        'grad_out_of_total_marks',
        'cgpa_grad_marks_obtained',
        'cgpa_grad_marks_total',
        'grad_percentage',
        'loan_interest',
        'paid_interest',
        'created_at',
        'updated_at',
        'deleted_at',
        'ref_code',
        'student_course_name_id',
        'forstu_email',
        'invoice_number',
        'reg_date',
        'forstu_email_password',
        'buddy4study_email',
        'buddy4study_password',
        'vidyasaarthi_email',
        'vidyasaarthi_password',
        'death_year',
        'death_relationship',
        'reason_death',
        'house_type',
        'agricultural_land',
        'profile_upto_date',
        'profile_remarks',
        'vidyasaarthi_profile_status',
        'active',
        'is_hidden',
        'ration_card',
        'vidyasaarthi_profile_status',
        'personaldetails_completed',
        'familydetails_completed',
        'communicationdetails_completed',
        'bankdetails_completed',
        'currentcoursedetails_completed',
        'class10_details_completed',
        'class12_details_completed',
        'diploma_details_completed',
        'graduation_details_completed',
        
        
    ];
    public function caste()
    {
        return $this->belongsTo(Caste::class, 'caste_id');
    }

   public function course_type()
    {
        return $this->belongsTo(Coursetype::class, 'course_type_id');
    }

    public function course_name()
    {
        return $this->belongsTo(Course::class, 'course_name_id');
    }
    public function student_course_name()
    {
        return $this->belongsTo(StudentCourses::class,'student_course_name_id');
    }
    /*

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    */

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCourseStartAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }
    public function setCourseStartAttribute($value)
    {
        $this->attributes['course_start'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getSchoolPassingAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setSchoolPassingAttribute($value)
    {
        $this->attributes['school_passing'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getClass12PassingYeatAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setClass12PassingYeatAttribute($value)
    {
        $this->attributes['class_12_passing_yeat'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getDiplomaPassingYearAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDiplomaPassingYearAttribute($value)
    {
        $this->attributes['diploma_passing_year'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getGradPassingYearAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setGradPassingYearAttribute($value)
    {
        $this->attributes['grad_passing_year'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }

}
