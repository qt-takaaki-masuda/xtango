<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T1800Level3SentenceSeeder extends Seeder
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
            // [
            //     'section_id' => 131,
            //     'word' => 'We need to get a clear answer from him.',
            //     'meaning' => json_encode([
            //         '私たちは彼からはっきりした答えを得る必要がある。',
            //     ]),
            //     'audio_url' => '801.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'My summer vacation is from August 10th.',
            //     'meaning' => json_encode([
            //         '私の夏休みは8月10日からだ。',
            //     ]),
            //     'audio_url' => '802.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'These old books are 30 percent cheaper today.',
            //     'meaning' => json_encode([
            //         'これらの古本は今日は30パーセント引きだ。',
            //     ]),
            //     'audio_url' => '803.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'While I was in kyoto,I visited many temple.',
            //     'meaning' => json_encode([
            //         '京都にいたとき、私は多くの寺を訪れた。',
            //     ]),
            //     'audio_url' => '804.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'Take off your cap when you enter the house.',
            //     'meaning' => json_encode([
            //         '家の中に入るときは、帽子を脱ぎなさい。',
            //     ]),
            //     'audio_url' => '805.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'We had the same trouble in the past.',
            //     'meaning' => json_encode([
            //         '私達は過去に同じ問題を抱えていた。',
            //     ]),
            //     'audio_url' => '806.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'Is the temperature in this room good for you?',
            //     'meaning' => json_encode([
            //         'この部屋の温度はあなたにとって快適ですか？',
            //     ]),
            //     'audio_url' => '807.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'My aunt gave me some useful advice.',
            //     'meaning' => json_encode([
            //         'おばは私に役に立つアドバイスをしてくれた。',
            //     ]),
            //     'audio_url' => '808.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'I was nervous in front of so many people.',
            //     'meaning' => json_encode([
            //         '私はとてもたくさんの人の前で緊張していた。',
            //     ]),
            //     'audio_url' => '809.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'He has great skill in japanese painting.',
            //     'meaning' => json_encode([
            //         '彼は日本画の素晴らしい技能を持っている。',
            //     ]),
            //     'audio_url' => '810.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'English is the world\'s  common language.',
            //     'meaning' => json_encode([
            //         '英語は世界の共通語だ。',
            //     ]),
            //     'audio_url' => '811.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'There was a ceremony on the first day of school.',
            //     'meaning' => json_encode([
            //         '学校の最初の日に式典があった。',
            //     ]),
            //     'audio_url' => '812.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'We had delicious school lunch today.',
            //     'meaning' => json_encode([
            //         '今日、美味しい給食を食べた。',
            //     ]),
            //     'audio_url' => '813.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'What subject do you like the best?',
            //     'meaning' => json_encode([
            //         'あなたはどの科目が一番好きですか。',
            //     ]),
            //     'audio_url' => '814.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'I exchanged e-mails with him many times.',
            //     'meaning' => json_encode([
            //         '私は彼と何度もEメールを交換した。',
            //     ]),
            //     'audio_url' => '815.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'Do you put suger in your coffee?',
            //     'meaning' => json_encode([
            //         'あなたはコーヒーに砂糖を入れますか。',
            //     ]),
            //     'audio_url' => '816.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'Ken looks like an adult when he wears a suit.',
            //     'meaning' => json_encode([
            //         'ケンはスーツを着ていると大人のように見える。',
            //     ]),
            //     'audio_url' => '817.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'Please write your name with a black pen.',
            //     'meaning' => json_encode([
            //         '黒のペンで名前を書いてください。',
            //     ]),
            //     'audio_url' => '818.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'Can you show me your notebook?',
            //     'meaning' => json_encode([
            //         'あなたのノートを見せてもらえますか？',
            //     ]),
            //     'audio_url' => '819.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 131,
            //     'word' => 'I wonder why Ann didn\'t come to the party.',
            //     'meaning' => json_encode([
            //         'アンはなぜパーティーに来なかったのだろうか',
            //     ]),
            //     'audio_url' => '820.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // 0821 - 0840
            [
                'section_id' => 132,
                'word' => 'Many people <span class="border-b text-red-500">communicate</span> by e-mail.',
                'meaning' => json_encode([
                    '多くの人々がEメールで<span class="border-b text-red-500">コミニケーション</span>をとっている。',
                ]),
                'audio_url' => '821.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'She injured her right <span class="border-b text-red-500">foot</span> in th tennis match.',
                'meaning' => json_encode([
                    '彼女はテニスの試合で右<span class="border-b text-red-500">足</span>を痛めた。',
                ]),
                'audio_url' => '822.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'The soup in the pot <span class="border-b text-red-500">smells</span> good.',
                'meaning' => json_encode([
                    'そのなべのスープはいい<span class="border-b text-red-500">においがする。</span>',
                ]),
                'audio_url' => '823.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'I\'d like to see <span class="border-b text-red-500">Dr.</span> Matsumoto.',
                'meaning' => json_encode([
                    'マツモト<span class="border-b text-red-500">先生</span>に診察していただきたいのですが。',
                ]),
                'audio_url' => '824.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'I went to an <span class="border-b text-red-500">international</span> festival.',
                'meaning' => json_encode([
                    '私は<span class="border-b text-red-500">国際的</span>な祭りに行った。',
                ]),
                'audio_url' => '825.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'The store opens at 10:30 <span class="border-b text-red-500">a.m.</span>',
                'meaning' => json_encode([
                    'その店は<span class="border-b text-red-500">午前</span>10時30分に開店する。',
                ]),
                'audio_url' => '826.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'My father is <span class="border-b text-red-500">against</span> my plan to study abroad.',
                'meaning' => json_encode([
                    '父は留学するという私の計画<span class="border-b text-red-500">に反対</span>している。',
                ]),
                'audio_url' => '827.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'We must <span class="border-b text-red-500">reduce</span> the cost of our product.',
                'meaning' => json_encode([
                    '私たちは製品のコスト<span class="border-b text-red-500">を減らさ</span>なければならない。',
                ]),
                'audio_url' => '828.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'The <span class="border-b text-red-500">stadium</span> was crowded with soccer fans.',
                'meaning' => json_encode([
                    '<span class="border-b text-red-500">競技場</span>はサッカーファンで混雑していた。',
                ]),
                'audio_url' => '829.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => 'He <span class="border-b text-red-500">discovered</span> a new planet a hundred years ago.',
                'meaning' => json_encode([
                    '彼は100年前に新しい惑星を<span class="border-b text-red-500">発見した。</span>',
                ]),
                'audio_url' => '830.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '831.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '832.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '833.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '834.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '835.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '836.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '837.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '838.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '839.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 132,
                'word' => '',
                'meaning' => json_encode([
                    '',
                ]),
                'audio_url' => '840.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
