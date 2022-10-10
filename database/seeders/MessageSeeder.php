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
                'entry_id' => 1,
                'content' => 'メッセージ1-1',
                'send_by' => 1,
                'receive_by' => 2,
            ],
            [
                'entry_id' => 1,
                'content' => 'メッセージ1-2',
                'send_by' => 1,
                'receive_by' => 2,
            ],
            [
                'entry_id' => 1,
                'content' => 'メッセージ1-3',
                'send_by' => 2,
                'receive_by' => 1,
            ],

        ]);
    }
}
