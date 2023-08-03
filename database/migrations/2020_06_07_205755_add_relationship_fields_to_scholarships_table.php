<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('scholarships', function (Blueprint $table) {
            $table->Integer('company_name_id')->nullable()->unsigned();
            $table->foreign('company_name_id', 'company_name_fk_1607734')->references('id')->on('scholarship_providers');
            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id', 'category_fk_1607740')->references('id')->on('categories');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id', 'user_fk_1607740')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scholarships', function (Blueprint $table) {
            //
        });
    }
}
