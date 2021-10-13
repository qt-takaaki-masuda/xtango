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

            // 1281 - 1300
            [
                'section_id' => 235,
                'word' => 'earn',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[金]〜を稼ぐ',
                ]),
                'audio_url' => 'earn.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'shock',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に衝撃を与える',
                    '<span class="kakomu">名</span>衝撃、ショック',
                ]),
                'audio_url' => 'shock.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'joy',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>喜び(⇔ sorrow 悲しみ)',
                ]),
                'audio_url' => 'joy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'amazing',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>びっくりするような',
                ]),
                'audio_url' => 'amazing.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'asleep',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>眠って(⇔ awake 目を覚まして)',
                ]),
                'audio_url' => 'asleep.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'boring',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>退屈な',
                ]),
                'audio_url' => 'boring.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'symbol',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>象徴',
                    '<span class="indent"></span>記号',
                ]),
                'audio_url' => 'symbol.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'system',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>組織、制度、体系',
                    '<span class="indent"></span>[コンピュータの]システム、方式',
                ]),
                'audio_url' => 'system.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'view',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>眺め、景色',
                    '<span class="indent"></span>見方、考え(方)',
                ]),
                'audio_url' => 'view.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'protect',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を保護する、守る',
                ]),
                'audio_url' => 'protect.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'connect',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜をつなぐ',
                ]),
                'audio_url' => 'connect.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'energy',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>エネルギー、力',
                ]),
                'audio_url' => 'energy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'earthquake',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>地震',
                ]),
                'audio_url' => 'earthquake.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'planet',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>惑星',
                ]),
                'audio_url' => 'planet.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'biology',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>生物学',
                ]),
                'audio_url' => 'biology.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'plastic',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>プラスチック製の、ビニール製の',
                    '<span class="kakomu">名</span>プラスチック',
                ]),
                'audio_url' => 'plastic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'trash',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[米]ごみ、くず(= [英]rubbish)',
                    '<span class="indent"></span>(= garbage ごみ)',
                ]),
                'audio_url' => 'trash.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'dry',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>乾いた(⇔ wet)',
                    '<span class="indent"></span>雨の降らない',
                    '<span class="kakomu">動</span>〜を乾かす、乾く',
                ]),
                'audio_url' => 'dry.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'wet',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>ぬれた、湿った(⇔ dry)',
                    '<span class="indent"></span>雨降りの(= rainy)(⇔ dry)',
                ]),
                'audio_url' => 'wet.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 235,
                'word' => 'power',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>力、能力',
                    '<span class="indent"></span>権力、強国',
                ]),
                'audio_url' => 'power.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 1301 - 1320
            [
                'section_id' => 236,
                'word' => 'powerful',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>強力な、力のある',
                ]),
                'audio_url' => 'powerful.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'magic',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>魔法、手品',
                    '<span class="kakomu">形</span>魔法の、手品の',
                ]),
                'audio_url' => 'magic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'shout',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(〜を)大声で叫ぶ',
                    '<span class="kakomu">名</span>叫び(声)、大声',
                ]),
                'audio_url' => 'shout.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'handle',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を扱う、処理する',
                    '<span class="kakomu">名</span>取っ手',
                ]),
                'audio_url' => 'handle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'knock',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>ノックする',
                    '<span class="indent"></span>〜をたたく、打つ',
                    '<span class="kakomu"></span>ノック',
                ]),
                'audio_url' => 'knock.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'stair',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[複数形で](屋内の)階段',
                ]),
                'audio_url' => 'stair.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'upstairs',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>上の階へ[に]、2階へ[に]',
                    '<span class="indent"></span>(⇔ downstairs 下の階へ[に])',
                    '<span class="kakomu">形</span>[名詞の前で]上の階の',
                ]),
                'audio_url' => 'upstairs.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'gate',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>門、出入り口、改札口',
                ]),
                'audio_url' => 'gate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'mat',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>マット、畳',
                ]),
                'audio_url' => 'mat.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'housework',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>家事',
                ]),
                'audio_url' => 'housework.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'gesture',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>身ぶり、しぐさ、ジェスチャー',
                ]),
                'audio_url' => 'gesture.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'joke',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>冗談、ジョーク',
                    '<span class="kakomu">動</span>冗談を言う',
                ]),
                'audio_url' => 'joke.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'native',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>出生地の、母国の',
                    '<span class="indent"></span>生まれつきの',
                ]),
                'audio_url' => 'native.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'official',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>公式の、公の',
                    '<span class="kakomu">名</span>公務員',
                ]),
                'audio_url' => 'official.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'strict',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>[人・規則などが]厳しい、厳格な',
                ]),
                'audio_url' => 'strict.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'impress',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に感銘を与える、〜を感動させる',
                    '<span class="indent"></span>〜を印象づける',
                ]),
                'audio_url' => 'impress.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'improve',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を改善する、上達させる',
                    '<span class="indent"></span>進歩する',
                ]),
                'audio_url' => 'improve.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'manage',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を経営する、管理する',
                    '<span class="indent"></span>〜を何とかやり遂げる',
                ]),
                'audio_url' => 'manage.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'manager',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>経営者、支配人',
                ]),
                'audio_url' => 'manager.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 236,
                'word' => 'project',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>計画、企画',
                    '<span class="indent"></span>(大規模な)事業',
                ]),
                'audio_url' => 'project.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

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
