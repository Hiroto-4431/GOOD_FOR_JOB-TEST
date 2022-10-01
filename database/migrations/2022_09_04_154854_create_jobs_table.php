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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('company_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->text('message');
            $table->foreignId('occupation_id')->constrained();
            $table->foreignId('employment_type_id')->constrained();
            $table->string('image')->nullable();
            // $table->foreignId('prefecture_id')->constrained();
            // $table->foreignId('city_id')->constrained();
            // $table->foreignId('address_id')->constrained();
            $table->text('access');
            $table->text('salary');
            $table->foreignId('feature_id')->constrained();
            $table->text('job_description');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
