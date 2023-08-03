<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_interviews', function (Blueprint $table) {
            $table->id();
            $table->string('interview_title');
            $table->string('interview_duration');
            $table->datetime('interview_date_time');
            $table->string('interview_type');
            $table->string('description')->nullable();
            $table->string('interview_status')->nullable();
            $table->string('interview_remarks')->nullable();
            $table->string('user_id')->nullable();
            $table->string('scheme_id')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholarship_interviews');
    }
}
