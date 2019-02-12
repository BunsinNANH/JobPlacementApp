<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->text('stu_fName');
            $table->text('stu_lName');
            $table->text('email');
            $table->text('password');
            $table->string('gender');
            $table->text('phone');
            $table->text('batch');
            $table->text('specialezation');
            $table->text('avatar');
            $table->text('coverLetter');
            $table->text('ciriculumnVitea');
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
        Schema::dropIfExists('students');
    }
}
