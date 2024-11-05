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
        Schema::create('table_student', function (Blueprint $table) {
            $table->id("rno");
            $table->string("name");
            $table->string("email")->unique();
            $table->string("gender");
            $table->string("hobby");
            $table->date("dob");
            $table->string("city");
            $table->string("password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_student');
    }
};