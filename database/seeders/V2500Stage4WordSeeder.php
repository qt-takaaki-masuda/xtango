<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class V2500Stage4WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2500（単語編） Stage4
        DB::table('words')->insert([
            // 1201 - 1220
            [
                'section_id' => 231,
                'word' => 'notice',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に気づく',
                    '<span class="kakomu">名</span>提示、通知',
                ]),
                'audio_url' => 'notice.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'imagine',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(〜を)想像する',
                ]),
                'audio_url' => 'imagine.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'cheer',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[cheer upで]元気を出す、〜を元気づける',
                    '<span class="indent"></span>声援を送る',
                    '<span class="kakomu">名</span>かっさい、声援',
                ]),
                'audio_url' => 'cheer.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'cheerful',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>快活な、陽気な',
                ]),
                'audio_url' => 'cheerful.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'perfect',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>完全な、完ぺきな',
                ]),
                'audio_url' => 'perfect.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'local',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>地元の、その土地の',
                ]),
                'audio_url' => 'local.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'deep',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>深い、深さが〜の',
                    '<span class="kakomu">副</span>深く',
                ]),
                'audio_url' => 'deep.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'deeply',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>深く',
                ]),
                'audio_url' => 'deeply.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'loud',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>[音・声が]大きい(⇔ quiet 静か)',
                    '<span class="kakomu">副</span>大声で',
                ]),
                'audio_url' => 'loud.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'quietly',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>静かに(= silently)',
                ]),
                'audio_url' => 'quietly.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'however',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>しかし(= but)',
                    '<span class="indent"></span>どんなに〜でも',
                ]),
                'audio_url' => 'however.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'graduate',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>卒業する',
                ]),
                'audio_url' => 'graduate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'graduation',
                'meaning' => json_encode([
                    '<span class="kakomu">名/span>卒業',
                ]),
                'audio_url' => 'graduation.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'add',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[数](〜を)足す',
                ]),
                'audio_url' => 'add.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'shine',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>輝く、光る',
                    '<span class="kakomu">名</span>[日・月などの]光り、輝き',
                ]),
                'audio_url' => 'shine.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'amusement',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>楽しみ、娯楽',
                ]),
                'audio_url' => 'amusement.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'gentle',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>[人柄などが]優しい',
                    '<span class="indent"></span>[天候・声などが]おだやかな',
                ]),
                'audio_url' => 'gentle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'gentleman',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>紳士(⇔ lady)',
                ]),
                'audio_url' => 'gentleman.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'adult',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>成人、大人',
                    '<span class="kakomu">形</span>成人の、大人の',
                ]),
                'audio_url' => 'adult.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 231,
                'word' => 'style',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>様式、やり方',
                    '<span class="indent"></span>[服・髪などの]型、スタイル',
                ]),
                'audio_url' => 'style.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 1221 - 1240
            [
                'section_id' => 232,
                'word' => 'level',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>水準、レベル',
                    '<span class="indent"></span>水平、面、(水平面の)高さ',
                ]),
                'audio_url' => 'level.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'medium',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>[大きさなどが]中くらいの、Mサイズの',
                    '<span class="indent"></span>[肉の焼き具合で]ミディアムの',
                    '<span class="kakomu">名</span>[通信・表現などの]手段、媒体',
                ]),
                'audio_url' => 'medium.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'cycle',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>自転車に乗る',
                    '<span class="kakomu">名</span>周期、循環',
                ]),
                'audio_url' => 'cycle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'cycling',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>サイクリング',
                ]),
                'audio_url' => 'cycling.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'soft',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>やわらかい(⇔ hard かたい)',
                    '<span class="indent"></span>おだやかな、静かな、優しい',
                ]),
                'audio_url' => 'soft.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'softly',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>柔らかく',
                    '<span class="indent"></span>おだやかに、静かに、優しく',
                ]),
                'audio_url' => 'softly.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'bake',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[パンなど]〜を焼く、〜が焼ける',
                ]),
                'audio_url' => 'bake.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'fry',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を(油で)揚げる、炒める',
                    '<span class="kakomu">名</span>揚げ物、[複数形で]フライドポテト',
                ]),
                'audio_url' => 'fry.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'taste',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>味がする、〜の味見をする',
                    '<span class="kakomu">名</span>味',
                    '<span class="indent"></span>好み、趣味',
                ]),
                'audio_url' => 'taste.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'plate',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>皿、薄板',
                ]),
                'audio_url' => 'plate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'pan',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[片手用の浅い]平なべ',
                ]),
                'audio_url' => 'pan.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'fridge',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>冷蔵庫',
                ]),
                'audio_url' => 'fridge.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'garbage',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[主に米]生ごみ',
                ]),
                'audio_url' => 'garbage.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'market',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>市場',
                ]),
                'audio_url' => 'market.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'steak',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ステーキ',
                ]),
                'audio_url' => 'steak.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'noodle',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[複数形で]めん',
                ]),
                'audio_url' => 'noodlemp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'snack',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>軽食、おやつ',
                ]),
                'audio_url' => 'snack.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'chocolate',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>チョコレート',
                ]),
                'audio_url' => 'chocolate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'fresh',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>新鮮な、できたての',
                ]),
                'audio_url' => 'fresh.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 232,
                'word' => 'rest',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>休み、休憩(= break)',
                    '<span class="indent"></span>[the をつけて]残り(の人[物])',
                    '<span class="kakomu">動</span>休む',
                ]),
                'audio_url' => 'rest.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // // 1241 - 1260
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1261 - 1280
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1281 - 1300
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => '',
            //     'meaning' => json_encode([
            //         '<span class="kakomu"></span>',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => '.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // 1301 - 1320

            // 1321 - 1340

            // 1341 - 1360

            // 1361 - 1380

            // 1381 - 1400

            // 1401 - 1420

            // 1421 - 1440

            // 1441 - 1460

            // 1461 - 1480

            // 1481 - 1500

            // 1501 - 1520

            // 1521 - 1540

            // 1541 - 1560

            // 1561 - 1580

            // 1581 - 1600

            // 1601 - 1620

            // 1621 - 1640

            // 1641 - 1660

            // 1661 - 1680

            // 1681 - 1700
        ]);
    }
}
