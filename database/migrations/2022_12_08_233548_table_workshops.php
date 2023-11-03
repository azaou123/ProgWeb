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
        schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->string('title');
            $table->longText('description');
            $table->string('university');
            $table->string('country');
            $table->string('city');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('type');
            $table->string('image_workshop')->nullable();
            
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workshops');
    }
};
