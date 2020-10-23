<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeachersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fathername');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('email');
            $table->string('qualificatioon');
            $table->string('subject_to_teach');
            $table->string('experience');
            $table->string('username');
            $table->string('password');
            $table->string('teacher_code');
            $table->string('country');
            $table->string('city');
            $table->string('profile_pic');
            $table->string('cnic');
            $table->string('status');
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
        Schema::drop('teachers');
    }
}
