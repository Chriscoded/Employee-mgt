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
        Schema::create('managesalaries', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name');
            $table->string('designation_type');
            $table->string('working_days');
            $table->string('tax');
            $table->string('gross_salary');
//            $table->foreign('employee_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('managesalaries');
    }
};
