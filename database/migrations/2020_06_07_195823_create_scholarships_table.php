<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('scholarships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('scheme_name');
            $table->longText('scheme_description')->nullable();
            $table->longText('eligibility_criteria')->nullable();
            $table->longText('benefits')->nullable();
            $table->longText('how_to_apply')->nullable();
            $table->date('last_date')->nullable();
            $table->string('expected_month')->nullable();
            $table->longText('docs_required')->nullable();
            $table->string('scholarship_amount')->nullable();
            $table->longText('terms_conditions')->nullable();
            $table->longText('contact_address')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->string('status')->nullable();
            $table->string('mode')->nullable();
            $table->integer('student_count')->nullable();
            $table->integer('scholarship_corpus')->nullable();
            
            $table->string('gender_criteria')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('application_link')->nullable();
            $table->string('video_link')->nullable();
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
        Schema::dropIfExists('scholarships');
    }
}
