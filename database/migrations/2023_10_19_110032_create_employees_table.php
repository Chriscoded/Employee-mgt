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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('image')->nullable();
            $table->string('email',100);
            $table->bigInteger('phone');
            $table->string('address');
            $table->string('gender');
            $table->date('dob');
            $table->date('join_date');
            $table->string('job_type');
            $table->string('city');
            $table->bigInteger('salary');
            $table->string('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
