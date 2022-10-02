<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //メッセージ
        DB::table('messages')->insert([
            [
                'content' => 'メッセージ1',
                'user_id' => 1,
                'company_id' => 1,
            ],
            [
                'content' => 'メッセージ2',
                'user_id' => 2,
                'company_id' => 2,
            ],
            [
                'content' => 'メッセージ3',
                'user_id' => 3,
                'company_id' => 3,
            ],
        ]);
    }
}
