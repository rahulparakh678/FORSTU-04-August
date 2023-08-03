<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseScholarshipPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_scholarship', function (Blueprint $table) {
            $table->bigInteger('scholarship_id')->unsigned();
            $table->foreign('scholarship_id', 'scholarship_id_fk_1607741')->references('id')->on('scholarships')->onDelete('cascade');
            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id', 'course_id_fk_1607741')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_scholarship', function (Blueprint $table) {
            //
        });
    }
}
