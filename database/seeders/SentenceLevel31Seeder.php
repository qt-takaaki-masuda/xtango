<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SentenceLevel31Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1800（例文編） LEVEL3
        DB::table('words')->insert([
            // 0801 - 0810
            [
                'section_id' => 131,
                'word' => 'We need to get a clear answer from him.',
                'meaning' => json_encode([
                    '私たちは彼からはっきりした答えを得る必要がある。',
                ]),
                'audio_url' => '801.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'My summer vacation is from August 10th.',
                'meaning' => json_encode([
                    '私の夏休みは8月10日からだ。',
                ]),
                'audio_url' => '802.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'These old books are 30 percent cheaper today.',
                'meaning' => json_encode([
                    'これらの古本は今日は30パーセント引きだ。',
                ]),
                'audio_url' => '803.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'While I was in kyoto,I visited many temple.',
                'meaning' => json_encode([
                    '京都にいたとき、私は多くの寺を訪れた。',
                ]),
                'audio_url' => '804.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'Take off your cap when you enter the house.',
                'meaning' => json_encode([
                    '家の中に入るときは、帽子を脱ぎなさい。',
                ]),
                'audio_url' => '805.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'We had the same trouble in the past.',
                'meaning' => json_encode([
                    '私達は過去に同じ問題を抱えていた。',
                ]),
                'audio_url' => '806.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'Is the temperature in this room good for you.',
                'meaning' => json_encode([
                    'この部屋の温度はあなたにとって快適ですか。',
                ]),
                'audio_url' => '807.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'My aunt gave me some useful advice.',
                'meaning' => json_encode([
                    'おばは私に役に立つアドバイスをしてくれた。',
                ]),
                'audio_url' => '808.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'I was nervous in front of so many people.',
                'meaning' => json_encode([
                    '私はとてもたくさんの人の前で緊張していた。',
                ]),
                'audio_url' => '809.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 131,
                'word' => 'He has great skill in japanese painting.',
                'meaning' => json_encode([
                    '彼は日本画の素晴らしい技能を持っている。',
                ]),
                'audio_url' => '810.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
