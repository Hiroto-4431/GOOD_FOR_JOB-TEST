<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 特徴
        DB::table('features')->insert([
            [
                'name' => 'フレックス勤務'
            ],
            [
                'name' => '第二新卒可'
            ],
            [
                'name' => '外資系企業'
            ],
            [
                'name' => '年間休日120日以上'
            ],
            [
                'name' => '海外勤務'
            ],
            [
                'name' => '管理職'
            ],
            [
                'name' => '設立5年以内'
            ],
            [
                'name' => '学歴不問'
            ],
            [
                'name' => '中途入社50%以上'
            ],
            [
                'name' => '平均年齢20代'
            ],
            [
                'name' => '転勤なし'
            ],
            [
                'name' => 'ストック・オプション'
            ],
            [
                'name' => '従業員数500名以上'
            ],

            [
                'name' => '従業員数1000名以上'
            ],
            [
                'name' => '2年連続成長'
            ],
            [
                'name' => '服装自由'
            ],
            [
                'name' => '女性が活躍'
            ],
            [
                'name' => '歩合給制'
            ],
            [
                'name' => '年俸制'
            ],
            [
                'name' => '社内ベンチャー制度'
            ],
            [
                'name' => 'U・Iターン歓迎'
            ],
            [
                'name' => '独立支援制度'
            ],
            [
                'name' => '持株会制度'
            ],
            [
                'name' => '長期休暇制度'
            ],
            [
                'name' => '完全週休2日制'
            ],
            [
                'name' => '住宅・家賃補助制度'
            ],
            [
                'name' => '資格所得支援制度'
            ],
            [
                'name' => '研修制度充実'
            ],
            [
                'name' => '育児支援制度あり'
            ],
            [
                'name' => '女性管理職登用実績あり'
            ],
            [
                'name' => '残業少なめ'
            ],
            [
                'name' => '上場企業'
            ],
            [
                'name' => '自社サービス製品あり'
            ],
            [
                'name' => '上場を目指す'
            ],
            [
                'name' => '未経験歓迎'
            ],
            [
                'name' => '経験者優遇'
            ],
            [
                'name' => '日払い・週払い可'
            ],
            [
                'name' => '車・バイク通勤可'
            ],
            [
                'name' => '無料送迎バスあり'
            ],
            [
                'name' => '駅から徒歩10分以内'
            ],
            [
                'name' => '交通費別途支給'
            ],
            [
                'name' => '寮完備'
            ],
            [
                'name' => '社会保険完備'
            ],
            [
                'name' => '週3日以内勤務'
            ],
            [
                'name' => '扶養控除内勤務'
            ],
            [
                'name' => '短時間勤務'
            ],
            [
                'name' => '賞与あり'
            ],
        ]);
    }
}
