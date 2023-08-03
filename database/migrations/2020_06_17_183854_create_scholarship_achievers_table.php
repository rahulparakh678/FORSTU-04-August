<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarshipAchieversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholarship_achievers', function (Blueprint $table) {
             $table->increments('id');
            $table->string('student_name');
            $table->string('collegename')->nullable();
            $table->string('course')->nullable();
            $table->string('students_city')->nullable();
            $table->longText('schemename')->nullable();
            $table->integer('scholarshipamount')->nullable();
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
        Schema::dropIfExists('scholarship_achievers');
    }
}
