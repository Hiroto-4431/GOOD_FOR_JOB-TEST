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
            [
                'title' => 'テスト4',
                'company_id' => 1,
                'message' => 'テスト4メッセージ',
                'occupation_id' => 4,
                'employment_type_id' => 4,
                'image' => '',
                'access' => 'テスト4アクセス',
                'salary' => 'テスト4給与',
                // 'feature_id' => 1, 2, 3, 4, 5,
                'job_description' => 'テスト4仕事内容',
                'status' => true,
            ],
            [
                'title' => 'テスト5',
                'company_id' => 1,
                'message' => 'テスト5メッセージ',
                'occupation_id' => 5,
                'employment_type_id' => 5,
                'image' => '',
                'access' => 'テスト5アクセス',
                'salary' => 'テスト5給与',
                // 'feature_id' => 2, 3, 4, 5, 6,
                'job_description' => 'テスト5仕事内容',
                'status' => true,
            ],
            [
                'title' => 'テスト6',
                'company_id' => 2,
                'message' => 'テスト6メッセージ',
                'occupation_id' => 6,
                'employment_type_id' => 6,
                'image' => '',
                'access' => 'テスト6アクセス',
                'salary' => 'テスト6給与',
                // 'feature_id' => 3, 4, 5, 6, 7,
                'job_description' => 'テスト6仕事内容',
                'status' => false,
            ], [
                'title' => 'テスト7',
                'company_id' => 1,
                'message' => 'テスト7メッセージ',
                'occupation_id' => 7,
                'employment_type_id' => 1,
                'image' => '',
                'access' => 'テスト7アクセス',
                'salary' => 'テスト7給与',
                // 'feature_id' => 1, 2, 3, 4, 5,
                'job_description' => 'テスト7仕事内容',
                'status' => true,
            ],
            [
                'title' => 'テスト8',
                'company_id' => 1,
                'message' => 'テスト8メッセージ',
                'occupation_id' => 8,
                'employment_type_id' => 2,
                'image' => '',
                'access' => 'テスト8アクセス',
                'salary' => 'テスト8給与',
                // 'feature_id' => 2, 3, 4, 5, 6,
                'job_description' => 'テスト8仕事内容',
                'status' => true,
            ],
            [
                'title' => 'テスト9',
                'company_id' => 2,
                'message' => 'テスト9メッセージ',
                'occupation_id' => 9,
                'employment_type_id' => 3,
                'image' => '',
                'access' => 'テスト9アクセス',
                'salary' => 'テスト9給与',
                // 'feature_id' => 3, 4, 5, 6, 7,
                'job_description' => 'テスト9仕事内容',
                'status' => false,
            ], [
                'title' => 'テスト10',
                'company_id' => 1,
                'message' => 'テスト10メッセージ',
                'occupation_id' => 10,
                'employment_type_id' => 1,
                'image' => '',
                'access' => 'テスト10アクセス',
                'salary' => 'テスト10給与',
                // 'feature_id' => 1, 2, 3, 4, 5,
                'job_description' => 'テスト10仕事内容',
                'status' => true,
            ],

        ]);
    }
}
