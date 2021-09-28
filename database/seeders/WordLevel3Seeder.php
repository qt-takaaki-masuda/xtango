<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel3Seeder extends Seeder
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
            // 0801 - 0820
            [
                'section_id' => 41,
                'word' => 'clear',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>はっきりした',
                    '<span class="kakomu">動</span>〜をかたづける',
                ]),
                'audio_url' => 'clear.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'August',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>8月',
                ]),
                'audio_url' => 'August.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'percent',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>パーセント',
                ]),
                'audio_url' => 'percent.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'temple',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>寺院',
                ]),
                'audio_url' => 'temple.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'cap',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(ふちのない)帽子',
                    '<span class="indent">(びんの)ふた',
                ]),
                'audio_url' => 'cap.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'past',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>過去',
                    '<span class="kakomu">形</span>過去の',
                    '<span class="kakomu">前</span>〜を過ぎて',
                ]),
                'audio_url' => 'past.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'temperature',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>温度、気温',
                ]),
                'audio_url' => 'temperature.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'advice',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>忠告、アドバイス',
                ]),
                'audio_url' => 'advice.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'nervous',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>神経質な、緊張して',
                    '<span class="indent">神経の',
                ]),
                'audio_url' => 'nervous.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'skill',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>技能、技術',
                ]),
                'audio_url' => 'skill.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'common',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>共通の',
                    '<span class="indent">ふつうの',
                ]),
                'audio_url' => 'common.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'ceremony',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>式典',
                ]),
                'audio_url' => 'ceremony.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'delicious',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>おいしい',
                ]),
                'audio_url' => 'delicious.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'subject',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>科目',
                    '<span class="indent">主題、(Eメールの)件名',
                ]),
                'audio_url' => 'subject.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'exchange',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を交換する',
                ]),
                'audio_url' => 'exchange.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'sugar',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>砂糖',
                ]),
                'audio_url' => 'sugar.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'adult',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>大人',
                ]),
                'audio_url' => 'adult.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'pen',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ペン',
                ]),
                'audio_url' => 'pen.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'notebook',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ノート、メモ帳',
                ]),
                'audio_url' => 'notebook.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 41,
                'word' => 'wonder',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜かしらと思う',
                    '<span class="indent">不思議に思う',
                ]),
                'audio_url' => 'wonder.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
