<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSfcScholarshipProjectUserPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_f_c_scholarship_project_user', function (Blueprint $table) {
            $table->unsignedBigInteger('s_f_c_scholarship_project_id');
            $table->foreign('s_f_c_scholarship_project_id', 'sfc_project_id_fk_5074413')->references('id')->on('s_f_c_scholarship_projects')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_5074413')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_f_c_scholarship_project_user');
    }
}
