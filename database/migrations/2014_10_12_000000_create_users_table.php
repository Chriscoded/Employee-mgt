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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();

            // $table->bigIncrements('id');
            $table->bigInteger('leaves_count')->nullable();
            $table->string('username');
            $table->text('image')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('role')->default('admin');
            $table->bigInteger('salary')->nullable();
            $table->string('email',100)->unique();
            $table->string('password');
            $table->boolean('status')->nullable();
            $table->bigInteger('phone');
            $table->string('address');
            $table->string('gender');
            $table->date('dob');
            $table->date('join_date');
            $table->string('job_type');
            $table->string('city');
            $table->bigInteger('age');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
