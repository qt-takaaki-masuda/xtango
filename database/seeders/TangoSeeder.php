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
            [
                'title' => 'ターゲット 中学英単語 1800(単語編)',
                'sort' => 1,
                'image_file_name' => '/images/dashboard/target_1800.png',
                'description' => '高校入試の過去問題を分析して選んだ、頻出度の高い1800語を「でる順」に5つのレベルに分けて配列しました。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title' => 'ターゲット 中学英単語 1800(例文編)',
                'sort' => 2,
                'image_file_name' => '/images/dashboard/target_1800.png',
                'description' => '高校入試の過去問題を分析して選んだ、頻出度の高い1800語を「でる順」に5つのレベルに分けて配列しました。',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
