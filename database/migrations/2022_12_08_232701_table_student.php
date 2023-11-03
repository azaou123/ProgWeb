<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
    {
        Schema::create('students', function (Blueprint $table) {
                $table->id();
                $table->string('firstname');
                $table->string('lastname');
                $table->string('nationnality');
                $table->string('university');
                $table->string('email_student')->unique();
                $table->date('date_birth');
                $table->string('phone_number');
                $table->unsignedBigInteger('exchange_s_id')->nullable();
                $table->unsignedBigInteger('internship_id')->nullable();

                $table->foreign('exchange_s_id')->references('id')->on('exchange_s')->onDelete('set null');
                $table->foreign('internship_id')->references('id')->on('internships')->onDelete('set null');

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
};
