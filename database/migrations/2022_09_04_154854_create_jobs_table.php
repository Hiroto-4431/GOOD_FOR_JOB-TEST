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
            $table->string('title')->comment('タイトル');
            $table->foreignId('company_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('会社');
            $table->text('message')->comment('メッセージ');
            $table->foreignId('occupation_id')->constrained()->comment('募集職種');
            $table->foreignId('employment_type_id')->constrained()->comment('雇用形態');
            // $table->string('image')->comment('イメージ');
            // $table->foreignId('prefecture_id')->constrained()->comment('都道府県');
            // $table->foreignId('city_id')->constrained()->comment('市区町村');
            // $table->foreignId('address_id')->constrained()->comment('町名番地');
            $table->text('access')->comment('アクセス');
            $table->text('salary')->comment('給与');
            $table->foreignId('feature_id')->constrained()->comment('特徴');
            $table->text('job_description')->comment('仕事内容');
            $table->boolean('status')->comment('公開設定');
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
