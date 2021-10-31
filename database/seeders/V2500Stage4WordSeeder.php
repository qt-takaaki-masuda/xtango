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
            // // 1201 - 1220
            // [
            //     'section_id' => 231,
            //     'word' => 'notice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜に気づく',
            //         '<span class="kakomu">名</span>提示、通知',
            //     ]),
            //     'audio_url' => 'notice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'imagine',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)想像する',
            //     ]),
            //     'audio_url' => 'imagine.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'cheer',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[cheer upで]元気を出す、〜を元気づける',
            //         '<span class="indent"></span>声援を送る',
            //         '<span class="kakomu">名</span>かっさい、声援',
            //     ]),
            //     'audio_url' => 'cheer.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'cheerful',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>快活な、陽気な',
            //     ]),
            //     'audio_url' => 'cheerful.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'perfect',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>完全な、完ぺきな',
            //     ]),
            //     'audio_url' => 'perfect.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'local',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>地元の、その土地の',
            //     ]),
            //     'audio_url' => 'local.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'deep',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>深い、深さが〜の',
            //         '<span class="kakomu">副</span>深く',
            //     ]),
            //     'audio_url' => 'deep.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'deeply',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>深く',
            //     ]),
            //     'audio_url' => 'deeply.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'loud',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[音・声が]大きい(⇔ quiet 静か)',
            //         '<span class="kakomu">副</span>大声で',
            //     ]),
            //     'audio_url' => 'loud.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'quietly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>静かに(= silently)',
            //     ]),
            //     'audio_url' => 'quietly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'however',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>しかし(= but)',
            //         '<span class="indent"></span>どんなに〜でも',
            //     ]),
            //     'audio_url' => 'however.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'graduate',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>卒業する',
            //     ]),
            //     'audio_url' => 'graduate.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'graduation',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名/span>卒業',
            //     ]),
            //     'audio_url' => 'graduation.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'add',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[数](〜を)足す',
            //     ]),
            //     'audio_url' => 'add.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'shine',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>輝く、光る',
            //         '<span class="kakomu">名</span>[日・月などの]光り、輝き',
            //     ]),
            //     'audio_url' => 'shine.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'amusement',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>楽しみ、娯楽',
            //     ]),
            //     'audio_url' => 'amusement.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'gentle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[人柄などが]優しい',
            //         '<span class="indent"></span>[天候・声などが]おだやかな',
            //     ]),
            //     'audio_url' => 'gentle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'gentleman',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>紳士(⇔ lady)',
            //     ]),
            //     'audio_url' => 'gentleman.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'adult',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>成人、大人',
            //         '<span class="kakomu">形</span>成人の、大人の',
            //     ]),
            //     'audio_url' => 'adult.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 231,
            //     'word' => 'style',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>様式、やり方',
            //         '<span class="indent"></span>[服・髪などの]型、スタイル',
            //     ]),
            //     'audio_url' => 'style.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1221 - 1240
            // [
            //     'section_id' => 232,
            //     'word' => 'level',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>水準、レベル',
            //         '<span class="indent"></span>水平、面、(水平面の)高さ',
            //     ]),
            //     'audio_url' => 'level.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'medium',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[大きさなどが]中くらいの、Mサイズの',
            //         '<span class="indent"></span>[肉の焼き具合で]ミディアムの',
            //         '<span class="kakomu">名</span>[通信・表現などの]手段、媒体',
            //     ]),
            //     'audio_url' => 'medium.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'cycle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>自転車に乗る',
            //         '<span class="kakomu">名</span>周期、循環',
            //     ]),
            //     'audio_url' => 'cycle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'cycling',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>サイクリング',
            //     ]),
            //     'audio_url' => 'cycling.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'soft',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>やわらかい(⇔ hard かたい)',
            //         '<span class="indent"></span>おだやかな、静かな、優しい',
            //     ]),
            //     'audio_url' => 'soft.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'softly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>柔らかく',
            //         '<span class="indent"></span>おだやかに、静かに、優しく',
            //     ]),
            //     'audio_url' => 'softly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'bake',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[パンなど]〜を焼く、〜が焼ける',
            //     ]),
            //     'audio_url' => 'bake.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'fry',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を(油で)揚げる、炒める',
            //         '<span class="kakomu">名</span>揚げ物、[複数形で]フライドポテト',
            //     ]),
            //     'audio_url' => 'fry.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'taste',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>味がする、〜の味見をする',
            //         '<span class="kakomu">名</span>味',
            //         '<span class="indent"></span>好み、趣味',
            //     ]),
            //     'audio_url' => 'taste.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'plate',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>皿、薄板',
            //     ]),
            //     'audio_url' => 'plate.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'pan',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[片手用の浅い]平なべ',
            //     ]),
            //     'audio_url' => 'pan.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'fridge',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>冷蔵庫',
            //     ]),
            //     'audio_url' => 'fridge.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'garbage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[主に米]生ごみ',
            //     ]),
            //     'audio_url' => 'garbage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'market',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>市場',
            //     ]),
            //     'audio_url' => 'market.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'steak',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ステーキ',
            //     ]),
            //     'audio_url' => 'steak.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'noodle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[複数形で]めん',
            //     ]),
            //     'audio_url' => 'noodlemp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'snack',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>軽食、おやつ',
            //     ]),
            //     'audio_url' => 'snack.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'chocolate',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>チョコレート',
            //     ]),
            //     'audio_url' => 'chocolate.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'fresh',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>新鮮な、できたての',
            //     ]),
            //     'audio_url' => 'fresh.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 232,
            //     'word' => 'rest',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>休み、休憩(= break)',
            //         '<span class="indent"></span>[the をつけて]残り(の人[物])',
            //         '<span class="kakomu">動</span>休む',
            //     ]),
            //     'audio_url' => 'rest.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1241 - 1260
            // [
            //     'section_id' => 233,
            //     'word' => 'compare',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を比較する、比べる',
            //     ]),
            //     'audio_url' => 'compare.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'record',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>記録',
            //         '<span class="indent"></span>[スポーツなどの]最高記録',
            //         '<span class="kakomu">動</span>〜を記録する、録音[録画]する',
            //     ]),
            //     'audio_url' => 'record.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'champion',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>優勝者、チャンピオン',
            //     ]),
            //     'audio_url' => 'champion.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'championship',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>選手権(大会)、優勝者(の地位)',
            //     ]),
            //     'audio_url' => 'championship.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'choice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>選択、選択肢、選んだもの',
            //     ]),
            //     'audio_url' => 'choice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'shampoo',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>シャンプー',
            //     ]),
            //     'audio_url' => 'shampoo.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'wheel',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>車輪',
            //         '<span class="indent"></span>[the をつけて](自動車の)ハンドル',
            //     ]),
            //     'audio_url' => 'wheel.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'graph',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>グラフ、図表',
            //     ]),
            //     'audio_url' => 'graph.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'colorful',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>色とりどりの、色彩豊かな',
            //     ]),
            //     'audio_url' => 'colorful.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'peaceful',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>平和な、静かな',
            //     ]),
            //     'audio_url' => 'peaceful.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'friendly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>好意的な、親しみのある',
            //         '<span class="indent"></span>[合成語で]〜に優しい',
            //     ]),
            //     'audio_url' => 'friendly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'seem',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜のように見える、〜らしい',
            //     ]),
            //     'audio_url' => 'seem.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'appear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>現れる(⇔ disappear 消える)',
            //         '<span class="indent"></span>[appear to be 〜 で]〜らしく見える',
            //     ]),
            //     'audio_url' => 'appear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'raise',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を上げる',
            //         '<span class="indent"></span>〜を育てる',
            //     ]),
            //     'audio_url' => 'raise.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'trouble',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>困難、心配(事)、悩み',
            //         '<span class="kakomu">動</span>〜を心配させる',
            //         '<span class="indent"></span>〜に迷惑をかける',
            //     ]),
            //     'audio_url' => 'trouble.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'mistake',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>誤り、間違い',
            //         '<span class="kakomu">動</span>〜を間違える',
            //     ]),
            //     'audio_url' => 'mistake.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'traffic',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>交通(量)、(人・事の)往来',
            //     ]),
            //     'audio_url' => 'traffic.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'animation',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>アニメーション、動画',
            //     ]),
            //     'audio_url' => 'animation.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'animator',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>アニメ作家',
            //     ]),
            //     'audio_url' => 'animator.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 233,
            //     'word' => 'figure',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>図、[統計などの]数学',
            //         '<span class="indent"></span>姿、人物',
            //         '<span class="kakomu">動</span>[figure out で]〜を理解する、〜がわかる',
            //     ]),
            //     'audio_url' => 'figure.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1261 - 1280
            // [
            //     'section_id' => 234,
            //     'word' => 'data',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>データ、資料',
            //     ]),
            //     'audio_url' => 'data.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'homepage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ホームページ',
            //     ]),
            //     'audio_url' => 'homepage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'online',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>オンラインで、ネットで',
            //         '<span class="kakomu">形</span>オンラインの、ネットの',
            //     ]),
            //     'audio_url' => 'online.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'print',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)印刷する',
            //         '<span class="kakomu">名</span>印刷(物)',
            //     ]),
            //     'audio_url' => 'print.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'design',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)デザインする、設計する',
            //         '<span class="kakomu">名</span>デザイン、設計',
            //     ]),
            //     'audio_url' => 'design.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'designer',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>デザイナー、設計者',
            //     ]),
            //     'audio_url' => 'designer.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'painter',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>画家',
            //     ]),
            //     'audio_url' => 'painter.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'painting',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[絵の具で描いた]絵、絵を描くこと(= drawing)',
            //     ]),
            //     'audio_url' => 'painting.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'artist',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>芸術家、(特に)画家',
            //     ]),
            //     'audio_url' => 'artist.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'artwork',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>芸術作品',
            //     ]),
            //     'audio_url' => 'artwork.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'postcard',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>はがき',
            //     ]),
            //     'audio_url' => 'postcard.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'act',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>行動する、ふるまう、演じる',
            //         '<span class="kakomu">名</span>行い、行為',
            //     ]),
            //     'audio_url' => 'act.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'actually',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>実際に、本当に、実は',
            //         '<span class="indent"></span>(= really)(= in fact 実際は)',
            //     ]),
            //     'audio_url' => 'actually.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'lamp',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>明かり、ランプ',
            //     ]),
            //     'audio_url' => 'lamp.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'frog',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>カエル',
            //     ]),
            //     'audio_url' => 'frog.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'snake',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ヘビ',
            //     ]),
            //     'audio_url' => 'snake.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'spread',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を広げる、広がる',
            //         '<span class="kakomu">名</span>広がること',
            //     ]),
            //     'audio_url' => 'spread.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'wave',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>波',
            //         '<span class="kakomu">動</span>[手など](〜を)振る',
            //     ]),
            //     'audio_url' => 'wave.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'serve',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[食事など]〜を出す',
            //         '<span class="indent"></span>〜のために働く',
            //     ]),
            //     'audio_url' => 'serve.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 234,
            //     'word' => 'service',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>サービス、奉仕',
            //         '<span class="indent"></span>公共事業',
            //     ]),
            //     'audio_url' => 'service.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1281 - 1300
            // [
            //     'section_id' => 235,
            //     'word' => 'earn',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[金]〜を稼ぐ',
            //     ]),
            //     'audio_url' => 'earn.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'shock',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜に衝撃を与える',
            //         '<span class="kakomu">名</span>衝撃、ショック',
            //     ]),
            //     'audio_url' => 'shock.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'joy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>喜び(⇔ sorrow 悲しみ)',
            //     ]),
            //     'audio_url' => 'joy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'amazing',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>びっくりするような',
            //     ]),
            //     'audio_url' => 'amazing.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'asleep',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>眠って(⇔ awake 目を覚まして)',
            //     ]),
            //     'audio_url' => 'asleep.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'boring',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>退屈な',
            //     ]),
            //     'audio_url' => 'boring.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'symbol',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>象徴',
            //         '<span class="indent"></span>記号',
            //     ]),
            //     'audio_url' => 'symbol.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'system',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>組織、制度、体系',
            //         '<span class="indent"></span>[コンピュータの]システム、方式',
            //     ]),
            //     'audio_url' => 'system.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'view',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>眺め、景色',
            //         '<span class="indent"></span>見方、考え(方)',
            //     ]),
            //     'audio_url' => 'view.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'protect',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を保護する、守る',
            //     ]),
            //     'audio_url' => 'protect.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'connect',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜をつなぐ',
            //     ]),
            //     'audio_url' => 'connect.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'energy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>エネルギー、力',
            //     ]),
            //     'audio_url' => 'energy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'earthquake',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>地震',
            //     ]),
            //     'audio_url' => 'earthquake.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'planet',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>惑星',
            //     ]),
            //     'audio_url' => 'planet.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'biology',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>生物学',
            //     ]),
            //     'audio_url' => 'biology.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'plastic',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>プラスチック製の、ビニール製の',
            //         '<span class="kakomu">名</span>プラスチック',
            //     ]),
            //     'audio_url' => 'plastic.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'trash',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[米]ごみ、くず(= [英]rubbish)',
            //         '<span class="indent"></span>(= garbage ごみ)',
            //     ]),
            //     'audio_url' => 'trash.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'dry',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>乾いた(⇔ wet)',
            //         '<span class="indent"></span>雨の降らない',
            //         '<span class="kakomu">動</span>〜を乾かす、乾く',
            //     ]),
            //     'audio_url' => 'dry.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'wet',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>ぬれた、湿った(⇔ dry)',
            //         '<span class="indent"></span>雨降りの(= rainy)(⇔ dry)',
            //     ]),
            //     'audio_url' => 'wet.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 235,
            //     'word' => 'power',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>力、能力',
            //         '<span class="indent"></span>権力、強国',
            //     ]),
            //     'audio_url' => 'power.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1301 - 1320
            // [
            //     'section_id' => 236,
            //     'word' => 'powerful',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>強力な、力のある',
            //     ]),
            //     'audio_url' => 'powerful.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'magic',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>魔法、手品',
            //         '<span class="kakomu">形</span>魔法の、手品の',
            //     ]),
            //     'audio_url' => 'magic.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'shout',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)大声で叫ぶ',
            //         '<span class="kakomu">名</span>叫び(声)、大声',
            //     ]),
            //     'audio_url' => 'shout.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'handle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を扱う、処理する',
            //         '<span class="kakomu">名</span>取っ手',
            //     ]),
            //     'audio_url' => 'handle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'knock',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>ノックする',
            //         '<span class="indent"></span>〜をたたく、打つ',
            //         '<span class="kakomu"></span>ノック',
            //     ]),
            //     'audio_url' => 'knock.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'stair',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[複数形で](屋内の)階段',
            //     ]),
            //     'audio_url' => 'stair.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'upstairs',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>上の階へ[に]、2階へ[に]',
            //         '<span class="indent"></span>(⇔ downstairs 下の階へ[に])',
            //         '<span class="kakomu">形</span>[名詞の前で]上の階の',
            //     ]),
            //     'audio_url' => 'upstairs.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'gate',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>門、出入り口、改札口',
            //     ]),
            //     'audio_url' => 'gate.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'mat',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>マット、畳',
            //     ]),
            //     'audio_url' => 'mat.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'housework',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>家事',
            //     ]),
            //     'audio_url' => 'housework.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'gesture',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>身ぶり、しぐさ、ジェスチャー',
            //     ]),
            //     'audio_url' => 'gesture.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'joke',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>冗談、ジョーク',
            //         '<span class="kakomu">動</span>冗談を言う',
            //     ]),
            //     'audio_url' => 'joke.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'native',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>出生地の、母国の',
            //         '<span class="indent"></span>生まれつきの',
            //     ]),
            //     'audio_url' => 'native.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'official',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>公式の、公の',
            //         '<span class="kakomu">名</span>公務員',
            //     ]),
            //     'audio_url' => 'official.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'strict',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[人・規則などが]厳しい、厳格な',
            //     ]),
            //     'audio_url' => 'strict.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'impress',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜に感銘を与える、〜を感動させる',
            //         '<span class="indent"></span>〜を印象づける',
            //     ]),
            //     'audio_url' => 'impress.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'improve',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を改善する、上達させる',
            //         '<span class="indent"></span>進歩する',
            //     ]),
            //     'audio_url' => 'improve.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'manage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を経営する、管理する',
            //         '<span class="indent"></span>〜を何とかやり遂げる',
            //     ]),
            //     'audio_url' => 'manage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'manager',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>経営者、支配人',
            //     ]),
            //     'audio_url' => 'manager.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 236,
            //     'word' => 'project',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>計画、企画',
            //         '<span class="indent"></span>(大規模な)事業',
            //     ]),
            //     'audio_url' => 'project.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1321 - 1340
            // [
            //     'section_id' => 237,
            //     'word' => 'research',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>調査、研究',
            //         '<span class="kakomu">動</span>(〜を)調査する、研究する',
            //     ]),
            //     'audio_url' => 'research.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'researcher',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>調査員、研究者',
            //     ]),
            //     'audio_url' => 'researcher.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'president',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>大統領、社長',
            //         '<span class="indent"></span>学長',
            //     ]),
            //     'audio_url' => 'president.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'center',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>中心、センター',
            //     ]),
            //     'audio_url' => 'center.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'central',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>中心の、中央の',
            //     ]),
            //     'audio_url' => 'central.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'courage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>勇気',
            //     ]),
            //     'audio_url' => 'courage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'encourage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を励ます、勇気づける',
            //     ]),
            //     'audio_url' => 'encourage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'toward',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">前</span>〜の方へ、〜に向かって',
            //     ]),
            //     'audio_url' => 'toward.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'count',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)数える、数に入れる',
            //     ]),
            //     'audio_url' => 'count.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'land',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>土地、陸地(⇔ sea)、国',
            //         '<span class="kakomu">動</span>着陸する',
            //     ]),
            //     'audio_url' => 'land.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'flight',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>飛行、空の旅、(飛行機の)便',
            //     ]),
            //     'audio_url' => 'flight.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'pilot',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>パイロット',
            //     ]),
            //     'audio_url' => 'pilot.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'passenger',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>乗客、旅客',
            //     ]),
            //     'audio_url' => 'passenger.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'tour',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>旅行、周遊旅行',
            //     ]),
            //     'audio_url' => 'tour.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'cent',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[通貨単位]セント',
            //         '<span class="indent"></span>100 cents = 1 dollar',
            //     ]),
            //     'audio_url' => 'cent.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'century',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>世紀、100年',
            //     ]),
            //     'audio_url' => 'century.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'similar',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>似ている、同様の',
            //     ]),
            //     'audio_url' => 'similar.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'marry',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜と)結婚する',
            //     ]),
            //     'audio_url' => 'marry.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'wedding',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>結婚式',
            //     ]),
            //     'audio_url' => 'wedding.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 237,
            //     'word' => 'whole',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[whole + 名詞で]全体の、全〜(= all)',
            //         '<span class="kakomu">名</span>全体',
            //     ]),
            //     'audio_url' => 'whole.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1341 - 1360
            // [
            //     'section_id' => 238,
            //     'word' => 'total',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>合計、総額',
            //         '<span class="kakomu">形</span>全体の、総計の、まったくの',
            //     ]),
            //     'audio_url' => 'total.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'steal',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(こっそり)〜を盗む',
            //     ]),
            //     'audio_url' => 'steal.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'attack',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を攻撃する、襲う',
            //         '<span class="kakomu">名</span>攻撃、[病気の]発作',
            //     ]),
            //     'audio_url' => 'attack.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'destroy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を破壊する、壊す',
            //     ]),
            //     'audio_url' => 'destroy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'waste',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>むだ、浪費、ごみ',
            //         '<span class="kakomu">動</span>〜をむだに使う',
            //     ]),
            //     'audio_url' => 'waste.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'suffer',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(苦痛など)を受ける',
            //         '<span class="indent"></span>苦しむ',
            //     ]),
            //     'audio_url' => 'suffer.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'injure',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜にけがをさせる、〜を傷つける',
            //     ]),
            //     'audio_url' => 'injure.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'injury',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>けが、負傷',
            //         '<span class="indent"></span>損害',
            //     ]),
            //     'audio_url' => 'injury.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'environment',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>環境',
            //     ]),
            //     'audio_url' => 'environment.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'dentist',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>歯科医師',
            //     ]),
            //     'audio_url' => 'dentist.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'drugstore',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ドラッグストア',
            //     ]),
            //     'audio_url' => 'drugstore.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'stomach',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>おなか、胃',
            //     ]),
            //     'audio_url' => 'stomach.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'stomachache',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>腹痛',
            //     ]),
            //     'audio_url' => 'stomachache.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'pain',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>痛み、苦痛',
            //     ]),
            //     'audio_url' => 'pain.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'select',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)選ぶ、選択する',
            //     ]),
            //     'audio_url' => 'select.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'gas',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ガス、気体',
            //     ]),
            //     'audio_url' => 'gas.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'oil',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>石油、油',
            //     ]),
            //     'audio_url' => 'oil.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'engine',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>エンジン',
            //     ]),
            //     'audio_url' => 'engine.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'engineering',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>工学',
            //     ]),
            //     'audio_url' => 'engineering.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 238,
            //     'word' => 'electric',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>電気の',
            //     ]),
            //     'audio_url' => 'electric.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1361 - 1380
            // [
            //     'section_id' => 239,
            //     'word' => 'electricity',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>電気',
            //     ]),
            //     'audio_url' => 'electricity.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'sweater',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>セーター',
            //     ]),
            //     'audio_url' => 'sweater.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'belt',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ベルト',
            //     ]),
            //     'audio_url' => 'belt.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'button',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ボタン',
            //     ]),
            //     'audio_url' => 'button.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'overseas',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>海外へ、外国に(= abroad)',
            //         '<span class="kakomu">形</span>海外の(= foreign)',
            //     ]),
            //     'audio_url' => 'overseas.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'ghost',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>幽霊',
            //     ]),
            //     'audio_url' => 'ghost.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'quite',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>まったく',
            //         '<span class="kakomu"></span>かなり、なかなか',
            //     ]),
            //     'audio_url' => 'quite.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'respect',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を尊敬する(= look up to)、尊重する',
            //         '<span class="kakomu">名</span>尊敬、尊重',
            //     ]),
            //     'audio_url' => 'respect.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'discover',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を発見する',
            //     ]),
            //     'audio_url' => 'discover.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'discovery',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>発見、発見されたもの',
            //     ]),
            //     'audio_url' => 'discovery.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'global',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>全世界の、地球(規模)の',
            //     ]),
            //     'audio_url' => 'global.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'social',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>社会の',
            //     ]),
            //     'audio_url' => 'social.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'society',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>社会',
            //         '<span class="indent"></span>協会、団体',
            //     ]),
            //     'audio_url' => 'society.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'freedom',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>自由',
            //     ]),
            //     'audio_url' => 'freedom.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'importance',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>重要性、大切さ',
            //     ]),
            //     'audio_url' => 'importance.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'hunger',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>飢え、空腹',
            //     ]),
            //     'audio_url' => 'hunger.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'training',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>訓練、練習',
            //     ]),
            //     'audio_url' => 'training.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'law',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>法律',
            //         '<span class="indent"></span>法則',
            //     ]),
            //     'audio_url' => 'law.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'lawyer',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>弁護士、法律家',
            //     ]),
            //     'audio_url' => 'lawyer.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 239,
            //     'word' => 'wild',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>野生の、[人などが]乱暴な',
            //         '<span class="kakomu">名</span>[the をつけて]野生(の状態)',
            //     ]),
            //     'audio_url' => 'wild.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1381 - 1400
            // [
            //     'section_id' => 240,
            //     'word' => 'bark',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[犬などが]ほえる',
            //         '<span class="kakomu">名</span>ほえる声',
            //     ]),
            //     'audio_url' => 'bark.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'bite',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)かむ',
            //         '<span class="kakomu">名</span>かむこと、ひと口',
            //     ]),
            //     'audio_url' => 'bite.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'carrot',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ニンジン',
            //     ]),
            //     'audio_url' => 'carrot.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'onion',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>タマネギ',
            //     ]),
            //     'audio_url' => 'onion.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'toast',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>トースト',
            //     ]),
            //     'audio_url' => 'toast.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'dessert',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>デザート',
            //     ]),
            //     'audio_url' => 'dessert.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'desert',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>砂漠',
            //         '<span class="kakomu">形</span>砂漠の',
            //     ]),
            //     'audio_url' => 'desert.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'dolphin',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>イルカ',
            //     ]),
            //     'audio_url' => 'dolphin.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'whale',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>クジラ',
            //     ]),
            //     'audio_url' => 'whale.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'countryside',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[the をつけて]いなか、地方',
            //     ]),
            //     'audio_url' => 'countryside.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'empty',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>からの(⇔ full いっぱいの)',
            //     ]),
            //     'audio_url' => 'empty.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'certainly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>確かに(= surely)',
            //         '<span class="indent"></span>[返事として]いいですよ、もちろん',
            //     ]),
            //     'audio_url' => 'certainly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'perhaps',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>もしかしたら、たぶん',
            //     ]),
            //     'audio_url' => 'perhaps.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'apply',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>申し込む、〜を適用する',
            //         '<span class="kakomu">名</span>申し込み、適用',
            //     ]),
            //     'audio_url' => 'apply.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'accept',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を受け入れる、受け取る',
            //         '<span class="kakomu"></span>容認する',
            //     ]),
            //     'audio_url' => 'accept.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'bury',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を埋める、埋葬する',
            //     ]),
            //     'audio_url' => 'bury.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'fix',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を修理する(= repaire、mend)',
            //         '<span class="indent"></span>〜を固定する',
            //     ]),
            //     'audio_url' => 'fix.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'diary',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>日記',
            //     ]),
            //     'audio_url' => 'diary.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'note',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>メモ、短い手紙',
            //         '<span class="kakomu">動</span>〜を書き留める',
            //     ]),
            //     'audio_url' => 'note.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 240,
            //     'word' => 'prize',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>賞、商品',
            //     ]),
            //     'audio_url' => 'prize.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1401 - 1420
            // [
            //     'section_id' => 241,
            //     'word' => 'novel',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(長編の)小説',
            //     ]),
            //     'audio_url' => 'novel.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'photograph',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>写真',
            //     ]),
            //     'audio_url' => 'photograph.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'presentation',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>発表、プレゼンテーション',
            //     ]),
            //     'audio_url' => 'presentation.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'race',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>競争',
            //         '<span class="indent"></span>人種',
            //     ]),
            //     'audio_url' => 'race.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'lifestyle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>生活様式、ライフスタイル',
            //     ]),
            //     'audio_url' => 'lifestyle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'normal',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>標準の、正常な(⇔ abnormal)',
            //     ]),
            //     'audio_url' => 'normal.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'treat',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を扱う',
            //         '<span class="indent"></span>〜を治療する',
            //     ]),
            //     'audio_url' => 'treat.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'control',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を支配[管理]する、抑制する',
            //         '<span class="kakomu">名</span>支配、管理、抑制',
            //     ]),
            //     'audio_url' => 'control.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'judge',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を判断する、裁く',
            //         '<span class="kakomu">名</span>裁判官、[コンテストなどの]審査員',
            //     ]),
            //     'audio_url' => 'judge.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'anger',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>怒り',
            //     ]),
            //     'audio_url' => 'anger.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'main',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>主な、主要な',
            //     ]),
            //     'audio_url' => 'main.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'direct',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>まっすぐな、直接の',
            //         '<span class="kakomu">動</span>(〜を)指導する、監督する',
            //     ]),
            //     'audio_url' => 'direct.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'direction',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>方向、方角',
            //         '<span class="indent"></span>[複数形で]指示、道順',
            //     ]),
            //     'audio_url' => 'direction.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'ability',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>能力',
            //     ]),
            //     'audio_url' => 'ability.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'capital',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>首都、大文字、資本',
            //     ]),
            //     'audio_url' => 'capital.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'citizen',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>市民、国民',
            //     ]),
            //     'audio_url' => 'citizen.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'probably',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>たぶん、おそらく',
            //     ]),
            //     'audio_url' => 'probably.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'rather',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>むしろ',
            //         '<span class="indent"></span>いくぶん、かなり',
            //     ]),
            //     'audio_url' => 'rather.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'recently',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>最近、近ごろ(= lately)',
            //     ]),
            //     'audio_url' => 'recently.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 241,
            //     'word' => 'remain',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>残る',
            //         '<span class="indent"></span>〜のままでいる',
            //     ]),
            //     'audio_url' => 'remain.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // 1421 - 1440
            [
                'section_id' => 242,
                'word' => 'remind',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に思い出させる、気づかせる',
                    '<span class="indent"></span>remind A of B ： A に Bを思い出させる',
                ]),
                'audio_url' => 'remind.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'wrap',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を包む、巻きつける',
                ]),
                'audio_url' => 'wrap.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'wallet',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>財布、札入れ(= purse)',
                ]),
                'audio_url' => 'wallet.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'chain',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>くさり、チェーン',
                ]),
                'audio_url' => 'chain.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'amount',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>量、額',
                    '<span class="indent"></span>[the をつけて]総量、総額',
                ]),
                'audio_url' => 'amount.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'heat',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>熱',
                    '<span class="indent"></span>熱さ、暑さ(⇔ cold)',
                    '<span class="kakomu">動</span>〜を熱する',
                ]),
                'audio_url' => 'heat.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'shade',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>かげ(⇔ light)',
                ]),
                'audio_url' => 'shade.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'harvest',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[作物などの]収穫',
                    '<span class="indent"></span>成果',
                ]),
                'audio_url' => 'harvest.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'branch',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>枝',
                    '<span class="indent"></span>支店',
                ]),
                'audio_url' => 'branch.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'cage',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>鳥かご、[動物などの]おり',
                ]),
                'audio_url' => 'cage.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'bar',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>棒、棒状のもの',
                    '<span class="indent"></span>[カウンター式の]バー、簡易食堂',
                ]),
                'audio_url' => 'bar.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'elderly',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>年配の',
                ]),
                'audio_url' => 'elderly.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'attend',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に出席する、参加する',
                ]),
                'audio_url' => 'attend.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'behave',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>ふるまう、行機よくする',
                ]),
                'audio_url' => 'behave.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'challenge',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>挑戦、課題',
                    '<span class="kakomu">動</span>[人]〜に挑戦する、いどむ',
                ]),
                'audio_url' => 'challenge.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'greeting',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>あいさつ',
                ]),
                'audio_url' => 'greeting.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'mystery',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>神秘、不思議なこと',
                    '<span class="indent"></span>推理小説、ミステリー',
                ]),
                'audio_url' => 'mystery.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'mysterious',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>神秘的な、不思議な',
                ]),
                'audio_url' => 'mysterious.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'fantastic',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>すばらしい(= wonderful)',
                    '<span class="indent"></span>空想的な',
                ]),
                'audio_url' => 'fantastic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 242,
                'word' => 'polite',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>礼儀正しい、ていねいな(⇔ rude 無礼な)',
                    '<span class="indent"></span>',
                ]),
                'audio_url' => 'polite.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 1441 - 1460
            [
                'section_id' => 243,
                'word' => 'positive',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>積極的な、前向きな(⇔ negative)',
                ]),
                'audio_url' => 'positive.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'negative',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>消極的な(⇔ positive)、否定の',
                    '<span class="indent"></span>悪い、有害な',
                ]),
                'audio_url' => 'negative.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'serious',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>まじめな、本気の',
                    '<span class="indent"></span>重大な、深刻な',
                ]),
                'audio_url' => 'serious.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'truth',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>真実、事実、真理',
                ]),
                'audio_url' => 'truth.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'truly',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>本当に、実に(= really)',
                ]),
                'audio_url' => 'truly.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'increase',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>増える、〜を増やす',
                    '<span class="kakomu">名</span>増加(⇔ decrease)',
                ]),
                'audio_url' => 'increase.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'decrease',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>減る、〜を減らす',
                    '<span class="kakomu">名</span>減少(⇔ increase)',
                ]),
                'audio_url' => 'decrease.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'influence',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に影響を及ぼす',
                    '<span class="kakomu">名</span>影響',
                ]),
                'audio_url' => 'influence.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'bloom',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[花が]咲く',
                    '<span class="kakomu">名</span>[観賞用の]花、開花',
                ]),
                'audio_url' => 'bloom.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'economy',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>経済',
                    '<span class="indent"></span>節約',
                ]),
                'audio_url' => 'economy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'method',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>方法、方式',
                ]),
                'audio_url' => 'method.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'population',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>人口',
                ]),
                'audio_url' => 'population.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'regular',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>通常の、いつもの、定期的な',
                    '<span class="indent"></span>規則正しい(⇔ irregular 不規則な)',
                ]),
                'audio_url' => 'regular.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'various',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>いろいろな、さまざまな',
                ]),
                'audio_url' => 'various.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'base',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜の基礎を置く',
                    '<span class="kakomu">名</span>基礎、土台',
                ]),
                'audio_url' => 'base.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'basic',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>基礎の、基本な',
                ]),
                'audio_url' => 'basic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'basically',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>基本的な',
                ]),
                'audio_url' => 'basically.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'instead',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>(その)代わりに',
                    '<span class="indent"></span>instead of 〜 〜の代わりに',
                ]),
                'audio_url' => 'instead.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'prefer',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜のほうを好む',
                    '<span class="indent"></span>prefer A to B ： B より A を好む',
                ]),
                'audio_url' => 'prefer.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 243,
                'word' => 'provide',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を供給する、与える',
                    '<span class="indent"></span>provide A with B ： A に B を与える',
                ]),
                'audio_url' => 'provide.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

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
