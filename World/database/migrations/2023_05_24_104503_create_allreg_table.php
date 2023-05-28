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
        Schema::create('allreg', function (Blueprint $table) {
            $table->id();
            $table->integer("CourseID");
            $table->string("Name");
            $table->string("email");
            $table->string("country");
            $table->integer("phone");
            $table->string("address");
            $table->string("statuse");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allreg');
    }
};
