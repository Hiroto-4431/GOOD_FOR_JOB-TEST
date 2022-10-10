<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者
        DB::table('admins')->insert([
            [
                'family_name' => '加藤',
                'last_name' => '誠',
                'family_name_read' => 'カトウ',
                'last_name_read' => 'マコト',
                'email' => 'test1@test.com',
                'password' => bcrypt('test1234'),
            ],
            [
                'family_name' => '伊藤',
                'last_name' => '正樹',
                'family_name_read' => 'イトウ',
                'last_name_read' => 'マサキ',
                'email' => 'test2@test.com',
                'password' => bcrypt('test1234'),
            ],
            [
                'family_name' => '和田',
                'last_name' => '太郎',
                'family_name_read' => 'ワダ',
                'last_name_read' => 'タロウ',
                'email' => 'test3@test.com',
                'password' => bcrypt('test1234'),
            ],
        ]);
    }
}
