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
        Schema::create('reqjobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('major');
            $table->integer('job');
            $table->integer('phone')->unique();
            $table->binary('cv');
            $table->enum('status',['approved','rejected'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqjobs');
    }
};
