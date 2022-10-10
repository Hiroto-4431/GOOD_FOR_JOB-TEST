<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 管理者
        DB::table('companies')->insert([
            [
                'name' => 'テスト1株式会社',
                'email' => 'test1@test.com',
                'password' => bcrypt('test1234'),
                'industry_id' => 25,
                'president_family_name' => '近藤',
                'president_last_name' => '宏',
                'president_family_name_read' => 'コンドウ',
                'president_last_name_read' => 'ヒロシ',
                'phone' => '07089632840',
                'employee' => 100,
            ],
            [
                'name' => 'テスト2株式会社',
                'email' => 'test2@test.com',
                'password' => bcrypt('test1234'),
                'industry_id' => 15,
                'president_family_name' => '渡辺',
                'president_last_name' => '徹夜',
                'president_family_name_read' => 'ワタナベ',
                'president_last_name_read' => 'テツヤ',
                'phone' => '07098541841',
                'employee' => 10,
            ],
            [
                'name' => 'テスト3株式会社',
                'email' => 'test3@test.com',
                'password' => bcrypt('test1234'),
                'industry_id' => 2,
                'president_family_name' => '山口',
                'president_last_name' => '猛',
                'president_family_name_read' => 'ヤマグチ',
                'president_last_name_read' => 'タケシ',
                'phone' => '07097762382',
                'employee' => 2000,
            ],

        ]);
    }
}
