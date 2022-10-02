<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 求人
        DB::table('jobs')->insert([
            [
                'title' => 'テスト1',
                'company_id' => 1,
                'message' => 'テスト1メッセージ',
                'occupation_id' => 1,
                'employment_type_id' => 1,
                'image' => '',
                'access' => 'テスト1アクセス',
                'salary' => 'テスト1給与',
                // 'feature_id' => 1, 2, 3, 4, 5,
                'job_description' => 'テスト1仕事内容',
                'status' => true,
            ],
            [
                'title' => 'テスト2',
                'company_id' => 1,
                'message' => 'テスト2メッセージ',
                'occupation_id' => 2,
                'employment_type_id' => 2,
                'image' => '',
                'access' => 'テスト2アクセス',
                'salary' => 'テスト2給与',
                // 'feature_id' => 2, 3, 4, 5, 6,
                'job_description' => 'テスト2仕事内容',
                'status' => true,
            ],
            [
                'title' => 'テスト3',
                'company_id' => 2,
                'message' => 'テスト3メッセージ',
                'occupation_id' => 3,
                'employment_type_id' => 3,
                'image' => '',
                'access' => 'テスト3アクセス',
                'salary' => 'テスト3給与',
                // 'feature_id' => 3, 4, 5, 6, 7,
                'job_description' => 'テスト3仕事内容',
                'status' => false,
            ],

        ]);
    }
}
