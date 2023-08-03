<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *aa
     * @return void
     */
    public function up()
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->integer('profile_percentage')->nullable();
            $table->string('email')->unique();
            $table->string('fullname');
            $table->date('dob');
            $table->string('gender');
            $table->string('religion');
            $table->string('mobile')->unique();
           
            $table->string('handicapped');
            $table->string('single_parent')->nullable();
            $table->string('aadharnumber')->unique();
            $table->string('father_name')->nullable();
            $table->string('father_edu')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_edu')->nullable();
            $table->string('mothers_occupation')->nullable();
            $table->string('parents_mobile')->nullable();
            $table->integer('annual_income')->nullable();
            $table->string('current_add')->nullable();
            $table->string('current_state')->nullable();
            $table->string('current_city')->nullable();
            $table->integer('pincode')->nullable();
            $table->string('permanent_add')->nullable();
            $table->string('permanent_city')->nullable();
            $table->integer('permanent_pincode')->nullable();
            $table->string('permanent_state')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_ifsc')->nullable();
            $table->string('course_pattern')->nullable();
            $table->string('current_inst_name')->nullable();
            $table->string('inst_address')->nullable();
            $table->string('current_year')->nullable();
            $table->date('course_start')->nullable();
            $table->integer('tution_fees')->nullable();
            $table->integer('non_tution_fees')->nullable();
            $table->integer('hostel_fees')->nullable();
            $table->string('you_other_scholarship')->nullable();
            $table->integer('previous_marks_obtained')->nullable();
            $table->integer('previous_marks_total')->nullable();
            $table->float('previous_percentage', 15, 2)->nullable();
            $table->float('cgpa_previous_marks_obtained',15,2)->nullable();
            $table->float('cgpa_previous_marks_total',15,2)->nullable();
            $table->float('cgpa_previous_percentage', 15, 2)->nullable();

            $table->string('class_10_school_name')->nullable();
            $table->string('class_10_state')->nullable();
            $table->date('school_passing')->nullable();
            $table->integer('school_marks_obtained')->nullable();
            $table->integer('school_marks_total')->nullable();
            $table->float('cgpa_school_marks_obtained',15,2)->nullable();
            $table->float('cgpa_school_marks_total',15,2)->nullable();
            $table->float('cgpa_school_percentage', 15, 2)->nullable();
            $table->float('school_percentage', 15, 2)->nullable();
            $table->string('class_12_clg_name')->nullable();
            $table->string('class_12_state')->nullable();
            $table->date('class_12_passing_yeat')->nullable();
            $table->integer('class_12_marks_obtained')->nullable();
            $table->integer('class_12_out_of_total_marks')->nullable();
            $table->float('class_12_percentage', 15, 2)->nullable();
            $table->float('cgpa_class_12_marks_obtained',15,2)->nullable();
            $table->float('cgpa_class_12_marks_total',15,2)->nullable();
            $table->float('cgpa_class_12_percentage', 15, 2)->nullable();
            $table->string('diploma_clg_name')->nullable();
            $table->string('diploma_state')->nullable();
            $table->date('diploma_passing_year')->nullable();
            $table->integer('diploma_total_marks_obtained')->nullable();
            $table->integer('diploma_out_of_total_marks')->nullable();
            $table->float('diploma_percentage', 15, 2)->nullable();
            $table->float('cgpa_diploma_marks_obtained',15,2)->nullable();
            $table->float('cgpa_diploma_marks_total',15,2)->nullable();
            $table->float('cgpa_diploma_percentage', 15, 2)->nullable();

            $table->string('grad_clg_name')->nullable();
            $table->string('grad_state')->nullable();
            $table->date('grad_passing_year')->nullable();
            $table->integer('grad_total_marks')->nullable();
            $table->integer('grad_out_of_total_marks')->nullable();
            $table->float('cgpa_grad_marks_obtained',15,2)->nullable();
            $table->float('cgpa_grad_marks_total',15,2)->nullable();
            $table->float('cgpa_grad_percentage', 15, 2)->nullable();

            $table->float('grad_percentage', 15, 2)->nullable();
            $table->bigInteger('caste_id')->unsigned()->nullable();
            $table->integer('course_type_id')->unsigned()->nullable();
            $table->integer('course_name_id')->unsigned()->nullable();

            $table->string('photo')->nullable();
            $table->string('aadhar_card')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('caste_certificate')->nullable();
            $table->string('physically_handicapped_certificate')->nullable();
            $table->string('death_certificate')->nullable();
            $table->string('address_proof')->nullable();
            $table->string('domicile_certificate')->nullable();
            $table->string('income_certificate')->nullable();
            $table->string('bank_passbook')->nullable();
            $table->string('clg_id_card')->nullable();
            $table->string('bonafide_certificate')->nullable();
            $table->string('admission_letter')->nullable();
            $table->string('currentyear_fees_reciept')->nullable();
            $table->string('hostel_reciept')->nullable();
            $table->string('class10_marksheet')->nullable();
            $table->string('class12_marksheet')->nullable();
            $table->string('diploma_marksheet')->nullable();
            $table->string('graduation_marksheet')->nullable();
            $table->string('paadhar')->nullable();
            $table->string('previous_marksheet')->nullable();
            $table->string('paid_interest')->nullable();
            $table->string('loan_interest')->nullable();
            $table->integer('student_course_name_id')->nullable();
            $table->string('ref_code')->nullable();
            $table->string('paid')->nullable();
            $table->string('orphan')->nullable();
            $table->string('profile_completed')->nullable();
            $table->string('kyc_completed')->nullable();
            $table->string('profile_remarks')->nullable();
            $table->string('active')->nullable();
            $table->string('vidyasaarthi_profile_status')->nullable();
            $table->string('forstu_email')->nullable();
            $table->string('forstu_email_password')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('reg_date')->nullable();
            $table->string('buddy4study_email')->nullable();
            $table->string('buddy4study_password')->nullable();
            $table->string('vidyasaarthi_email')->nullable();
            $table->string('vidyasaarthi_password')->nullable();
            $table->string('profile_upto_date')->nullable();
            $table->string('vidyasaarthi_profile_status')->nullable();
            $table->string('ration_card')->nullable();
            $table->string('personaldetails_completed')->nullable();
            $table->string('familydetails_completed')->nullable();
            $table->string('communicationdetails_completed')->nullable();
            $table->string('bankdetails_completed')->nullable();
            $table->string('currentcoursedetails_completed')->nullable();
            $table->string('class10_details_completed')->nullable();
            $table->string('class12_details_completed')->nullable();
            $table->string('diploma_details_completed')->nullable();
            $table->string('graduation_details_completed')->nullable();
            
            
            
    




            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_profiles');
    }
}
