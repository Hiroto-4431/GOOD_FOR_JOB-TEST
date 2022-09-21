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
        Schema::create('feature_job', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_id')->constrained()->onDelete('cascade')->comment('求人');
            $table->foreignId('feature_id')->constrained()->onDelete('cascade')->comment('特徴');
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
        Schema::dropIfExists('feature_job');
    }
};