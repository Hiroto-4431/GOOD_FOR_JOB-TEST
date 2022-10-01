<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // エントリー
        DB::table('entries')->insert([
            [
                'user_id' => 1,
                'job_id' => 1,
                'status' => 1,
            ],
            [
                'user_id' => 2,
                'job_id' => 2,
                'status' => 1,
            ],
            [
                'user_id' => 3,
                'job_id' => 3,
                'status' => 1,
            ],

        ]);
    }
}
