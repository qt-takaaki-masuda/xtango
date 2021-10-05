<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel39Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1800（単語編） LEVEL3
        DB::table('words')->insert([
            // 1021 - 1040
            [
                'section_id' => 52,
                'word' => 'quite',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>かなり',
                    '<span class="indent"></span>すっかり',
                ]),
                'audio_url' => 'quite.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'death',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>死',
                ]),
                'audio_url' => 'death.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'presentation',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>発表',
                ]),
                'audio_url' => 'presentation.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'page',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[本の]ページ',
                ]),
                'audio_url' => 'page.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'market',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>市場',
                ]),
                'audio_url' => 'market.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'active',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>活動的な、活発な',
                ]),
                'audio_url' => 'active.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'date',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>日付',
                    '<span class="indent"></span>デート',
                ]),
                'audio_url' => 'date.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'glass',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ガラス',
                    '<span class="indent"></span>コップ',
                ]),
                'audio_url' => 'glass.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'February',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>2月',
                ]),
                'audio_url' => 'February.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'New Zealand',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ニュージーランド',
                ]),
                'audio_url' => 'New Zealand.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'middle',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>まん中',
                    '<span class="kakomu">形</span>まん中の',
                ]),
                'audio_url' => 'middle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'average',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>平均の',
                    '<span class="indent">名</span>平均',
                ]),
                'audio_url' => 'average.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'ability',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>能力',
                ]),
                'audio_url' => 'ability.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'similar',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>似ている、同様の',
                ]),
                'audio_url' => 'similar.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'action',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>行動',
                ]),
                'audio_url' => 'action.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'smart',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>りこうな',
                ]),
                'audio_url' => 'smart.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'above',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>〜の上に[へ]',
                    '<span class="kakomu">副</span>上方に',
                ]),
                'audio_url' => 'above.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'matter',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>問題、事がら',
                ]),
                'audio_url' => 'matter.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'twelve',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>12の',
                    '<span class="kakomu">名</span>12',
                ]),
                'audio_url' => 'twelve.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 52,
                'word' => 'umbrella',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>かさ',
                ]),
                'audio_url' => 'umbrella.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 1041 -1060
            [
                'section_id' => 53,
                'word' => 'lady',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>婦人',
                ]),
                'audio_url' => 'lady.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'friendship',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>友情',
                ]),
                'audio_url' => 'friendship.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'desert',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>砂漠',
                ]),
                'audio_url' => 'desert.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'disease',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>病気',
                ]),
                'audio_url' => 'disease.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'bear',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>クマ',
                    '<span class="kakomu">動</span>〜を産む',
                ]),
                'audio_url' => 'bear.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'complete',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を完成する',
                    '<span class="kakomu">形</span>完全な、完成した',
                ]),
                'audio_url' => 'complete.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'doll',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>人形',
                ]),
                'audio_url' => 'doll.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'tournament',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>トーナメント',
                ]),
                'audio_url' => 'tournament.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'hurry',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>急ぐ',
                    '<span class="kakomu">名</span>急ぎ',
                ]),
                'audio_url' => 'hurry.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'herself',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>彼女自身(を[に])',
                ]),
                'audio_url' => 'herself.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'accident',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>事故',
                ]),
                'audio_url' => 'accident.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'artist',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>芸術家',
                ]),
                'audio_url' => 'artist.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'wish',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>願い',
                    '<span class="kakomu">動</span>〜を望む、願う',
                ]),
                'audio_url' => 'wish.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'gym',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>体育館',
                ]),
                'audio_url' => 'gym.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'schedule',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>予定(表)、スケジュール',
                ]),
                'audio_url' => 'schedule.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'coach',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>監督、コーチ',
                ]),
                'audio_url' => 'coach.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'gas',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>気体、[燃料用の]ガス',
                    '<span class="indent"></span><<米>>ガソリン',
                ]),
                'audio_url' => 'gas.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'data',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>データ、資料',
                ]),
                'audio_url' => 'data.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'north',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[theをつけて]北、北部',
                    '<span class="kakomu">形</span>北の',
                    '<span class="kakomu">副</span>北へ[に]',
                ]),
                'audio_url' => 'north.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 53,
                'word' => 'chorus',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>合唱(団)',
                ]),
                'audio_url' => 'chorus.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
