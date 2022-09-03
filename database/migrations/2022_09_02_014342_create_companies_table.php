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
            $table->string('name')->comment('会社名');
            $table->string('email')->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignId('industry_id')->constrained()->comment('業界カテゴリ');
            $table->string('president_family_name')->comment('代表者(姓)');
            $table->string('president_last_name')->comment('代表者(名)');
            $table->string('president_family_name_read')->comment('代表者(セイ)');
            $table->string('president_last_name_read')->comment('代表者(メイ)');
            // $table->foreignId('prefecture_id')->constrained()->comment('都道府県');
            // $table->foreignId('city_id')->constrained()->comment('市区町村');
            // $table->foreignId('address_id')->constrained()->comment('町名番地');
            // $table->string('image')->comment('ロゴ');
            $table->ipAddress('phone')->comment('電話番号');
            $table->integer('employee')->comment('従業員数');
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
