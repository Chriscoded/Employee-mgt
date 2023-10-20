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
        Schema::create('advancepayments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->date('date');
            $table->bigInteger('amount');
            $table->foreign('employee_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advancepayments');
    }
};
