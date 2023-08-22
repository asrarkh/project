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
            // $table->integer('job');
            $table->integer('phone')->unique();
            $table->string('cv');
            $table->unsignedBigInteger('list_job_id');
            $table->foreign('list_job_id')->references('id')->on('list_jobs')->cascade('delete');
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
