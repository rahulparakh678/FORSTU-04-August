<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeSocietiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_societies', function (Blueprint $table) {
            $table->id();
            $table->string('collegetrust_name')->nullable();
            $table->string('collegetrust_address')->nullable();
            $table->string('contactperson_name')->nullable();
            $table->string('contactperson_designation')->nullable();
            $table->string('contact_number')->nullable;
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
        Schema::dropIfExists('college_societies');
    }
}
