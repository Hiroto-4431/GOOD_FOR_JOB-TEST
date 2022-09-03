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
            $table->string('family_name')->comment('姓');
            $table->string('last_name')->comment('名');
            $table->string('family_name_read')->comment('セイ');
            $table->string('last_name_read')->comment('メイ');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->ipAddress('phone')->comment('電話番号');
            // $table->foreignId('prefecture_id')->constrained()->comment('遠道府県);
            // $table->foreignId('city_id')->constrained()->comment('市区町村);
            // $table->foreignId('address_id')->constrained()->comment('町名番地');
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
