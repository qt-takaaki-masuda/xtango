<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TangoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tangos')->insert([
            // [
            //     'title' => 'ターゲット 中学英単語 1800(単語編)',
            //     'sort' => 1,
            //     'image_file_name' => '/images/dashboard/target_1800.png',
            //     'description' => '高校入試の過去問題を分析して選んだ、頻出度の高い1800語を「でる順」に5つのレベルに分けて配列しました。',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'title' => 'ターゲット 中学英単語 1800(例文編)',
            //     'sort' => 2,
            //     'image_file_name' => '/images/dashboard/target_1800.png',
            //     'description' => '高校入試の過去問題を分析して選んだ、頻出度の高い1800語を「でる順」に5つのレベルに分けて配列しました。',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'title' => 'Vocabulary GRIT 2500(連語編)',
            //     'sort' => 3,
            //     'image_file_name' => '/images/dashboard/vocabulary_2500.png',
            //     'description' => '単語をイメージしながら覚える、新しい時代の連想型英単語帳。見出し語2000に連語表現を530収録。',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            [
                'title' => 'その他英単語／連語',
                'sort' => 99,
                'image_file_name' => '/images/dashboard/other.png',
                'description' => 'その他の英単語、連語を収録。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
