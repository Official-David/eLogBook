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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->nullable();
            $table->string('email');
            $table->string('role')->default('student');
            $table->string('school')->nullable();
            $table->string('matriculation_number')->nullable();
            $table->string('year_of_study')->nullable();
            $table->string('company_name')->nullable();
            $table->string('supervisors_name')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('passport')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
