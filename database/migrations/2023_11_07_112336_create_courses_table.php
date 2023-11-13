<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('price');   
            $table->integer('rating');
            $table->string('image');
            $table->string('instructurename');
            $table->string('role');
            $table->string('courseoverview',1000);
            $table->string('reason',1000);
            $table->timestamps();

            // $table->foreign('course_details_id')->references('id')->on('course_details');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
