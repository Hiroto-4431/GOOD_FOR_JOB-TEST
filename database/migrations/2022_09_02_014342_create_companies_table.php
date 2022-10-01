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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('industry_id')->constrained();
            $table->string('president_family_name');
            $table->string('president_last_name');
            $table->string('president_family_name_read');
            $table->string('president_last_name_read');
            // $table->foreignId('prefecture_id')->constrained();
            // $table->foreignId('city_id')->constrained();
            // $table->foreignId('address_id')->constrained();
            // $table->string('image');
            $table->ipAddress('phone');
            $table->integer('employee');
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
        Schema::dropIfExists('companies');
    }
};
