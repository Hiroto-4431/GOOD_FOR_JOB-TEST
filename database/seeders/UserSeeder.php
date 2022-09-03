<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者
        DB::table('users')->insert([
            [
                'family_name' => '橋本',
                'last_name' => '一夫',
                'family_name_read' => 'ハシモト',
                'last_name_read' => 'カズオ',
                'email' => 'test1@test.com',
                'password' => 'test1234',
                'phone' => '07060570478',
            ],
            [
                'family_name' => '中山',
                'last_name' => '竜也',
                'family_name_read' => 'ナカヤマ',
                'last_name_read' => 'タツヤ',
                'email' => 'test2@test.com',
                'password' => 'test1234',
                'phone' => '07094280848',
            ],
            [
                'family_name' => '植田',
                'last_name' => '隆',
                'family_name_read' => 'ウエダ',
                'last_name_read' => 'タカシ',
                'email' => 'test3@test.com',
                'password' => 'test1234',
                'phone' => '07092781918',
            ],
        ]);
    }
}
