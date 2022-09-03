<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 業界
        DB::table('industries')->insert([
            // メーカー
            [
                'name' => '食品・農林・水産',
            ],
            [
                'name' => '建設・住宅・インテリア',
            ],
            [
                'name' => '繊維・化学・薬品・化粧品',
            ],
            [
                'name' => '鉄鋼・金属・鉱業',
            ],
            [
                'name' => '機械・プラント',
            ],
            [
                'name' => '電子・電気機器',
            ],
            [
                'name' => '自動車・輸送用機器',
            ],
            [
                'name' => '精密・医療機器',
            ],
            [
                'name' => '印刷・事務機器関連',
            ],
            [
                'name' => 'スポーツ・玩具',
            ],
            // 商社
            [
                'name' => '総合商社',
            ],
            [
                'name' => '専門商社',
            ],
            // 小売
            [
                'name' => '百貨店・スーパ',
            ],
            [
                'name' => 'コンビニ',
            ],
            [
                'name' => '専門店',
            ],
            // 金融
            [
                'name' => '銀行・証券',
            ],
            [
                'name' => 'クレジット',
            ],
            [
                'name' => '信販・リース',
            ],
            [
                'name' => '生保・損保',
            ],
            // サービス・インフラ
            [
                'name' => 'サービス・インフラ',
            ],
            [
                'name' => '不動産',
            ],
            [
                'name' => '鉄道・航空・運輸・物流',
            ],
            [
                'name' => '電力・ガス・エネルギー',
            ],
            [
                'name' => 'フードサービス',
            ],
            [
                'name' => 'ホテル・旅行',
            ],
            [
                'name' => '医療・福祉',
            ],
            [
                'name' => 'アミューズメント・レジャー',
            ],
            [
                'name' => 'コンサルティング・調査',
            ],
            [
                'name' => '人材サービス',
            ],
            [
                'name' => '教育',
            ],
            // ソフトウェア
            [
                'name' => 'ソフトウェア',
            ],
            [
                'name' => 'インターネット',
            ],
            [
                'name' => '通信',
            ],
            // 広告・出版・マスコミ
            [
                'name' => '放送',
            ],
            [
                'name' => '新聞',
            ],
            [
                'name' => '出版',
            ],
            [
                'name' => '広告',
            ],
            // 官公庁・公社・団体
            [
                'name' => '公社・団体',
            ],
            [
                'name' => '官公庁',
            ],
            // その他
            [
                'name' => 'その他業界',
            ],
        ]);
    }
}
