<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel35Seeder extends Seeder
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
            // 0901 - 0920
            [
                'section_id' => 46,
                'word' => 'marathon',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>マラソン',
                ]),
                'audio_url' => 'marathon.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'Tuesday',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>火曜日',
                ]),
                'audio_url' => 'Tuesday.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'symbol',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>象徴',
                ]),
                'audio_url' => 'symbol.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'apple',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>リンゴ',
                ]),
                'audio_url' => 'apple.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'global',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>地球上の、国際的な',
                ]),
                'audio_url' => 'global.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'fishing',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>釣り',
                ]),
                'audio_url' => 'fishing.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'October',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>10月',
                ]),
                'audio_url' => 'October.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'yellow',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>黄色の',
                    '<span class="kakomu">名</span>黄色',
                ]),
                'audio_url' => 'yellow.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'researcher',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>調査員、研究者',
                ]),
                'audio_url' => 'researcher.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'main',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>主な、主要な',
                ]),
                'audio_url' => 'main.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'public',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>公の、公共の',
                ]),
                'audio_url' => 'public.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'article',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>記事',
                ]),
                'audio_url' => 'article.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'pull',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(〜を)引く、引っぱる',
                ]),
                'audio_url' => 'pull.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'shape',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>形',
                ]),
                'audio_url' => 'shape.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'straight',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>まっすぐに',
                    '<span class="kakomu">形</span>まっすぐな',
                ]),
                'audio_url' => 'straight.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'ship',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(大型の)船',
                ]),
                'audio_url' => 'ship.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'fifty',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>50の',
                    '<span class="kakomu">名</span>50',
                ]),
                'audio_url' => 'fifty.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'September',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>9月',
                ]),
                'audio_url' => 'September.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'damage',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>損害、被害',
                    '<span class="kakomu">動</span>〜に損害を与える',
                ]),
                'audio_url' => 'damage.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 46,
                'word' => 'planet',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>惑星',
                ]),
                'audio_url' => 'planet.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 0921 - 0940
            [
                'section_id' => 47,
                'word' => 'professional',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>専門職の、プロの',
                    '<span class="kakomu">名</span>専門家',
                ]),
                'audio_url' => 'professional.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'elderly',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>年配の',
                ]),
                'audio_url' => 'elderly.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'cookie',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>クッキー',
                ]),
                'audio_url' => 'cookie.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'sweet',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>甘い',
                ]),
                'audio_url' => 'sweet.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'rose',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>バラ',
                    '<span class="kakomu">動</span>(rise の過去形)',
                ]),
                'audio_url' => 'rose.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'chair',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>いす',
                ]),
                'audio_url' => 'chair.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'disappear',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>消える',
                ]),
                'audio_url' => 'disappear.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'mine',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>(I の所有代名詞)私のもの',
                ]),
                'audio_url' => 'mine.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'cute',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>かわいい',
                ]),
                'audio_url' => 'cute.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'factory',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>工場',
                ]),
                'audio_url' => 'factory.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'proud',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>誇りに思う',
                ]),
                'audio_url' => 'proud.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'bicycle',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>自転車',
                ]),
                'audio_url' => 'bicycle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'Thursday',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>木曜日',
                ]),
                'audio_url' => 'Thursday.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'dear',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>親愛なる',
                ]),
                'audio_url' => 'dear.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'cost',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(費用)がかかる',
                    '<span class="kakomu">名</span>値段、費用',
                ]),
                'audio_url' => 'cost.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'level',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>水準',
                ]),
                'audio_url' => 'level.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'juice',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ジュース',
                    '<span class="indent"></span>(果物・野菜の)汁',
                ]),
                'audio_url' => 'juice.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'cheap',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>安い',
                ]),
                'audio_url' => 'cheap.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'coat',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>上着、コート',
                ]),
                'audio_url' => 'coat.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 47,
                'word' => 'sunny',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>快晴の',
                ]),
                'audio_url' => 'sunny.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
