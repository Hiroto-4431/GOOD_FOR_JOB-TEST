<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmploymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 雇用形態
        DB::table('employment_types')->insert([
            [
                'name' => '正社員'
            ],
            [
                'name' => '契約者員'
            ],
            [
                'name' => '業務委託'
            ],
            [
                'name' => 'FCオーナー'
            ],
            [
                'name' => 'アルバイト・パート'
            ],
            [
                'name' => 'インターン'
            ],
        ]);
    }
}
