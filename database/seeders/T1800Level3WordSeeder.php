<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T1800Level3WordSeeder extends Seeder
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
            // // 0801 - 0820
            // [
            //     'section_id' => 41,
            //     'word' => 'clear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>はっきりした',
            //         '<span class="kakomu">動</span>〜をかたづける',
            //     ]),
            //     'audio_url' => 'clear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'August',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>8月',
            //     ]),
            //     'audio_url' => 'August.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'percent',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>パーセント',
            //     ]),
            //     'audio_url' => 'percent.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'temple',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>寺院',
            //     ]),
            //     'audio_url' => 'temple.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'cap',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(ふちのない)帽子',
            //         '<span class="indent">(びんの)ふた',
            //     ]),
            //     'audio_url' => 'cap.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'past',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>過去',
            //         '<span class="kakomu">形</span>過去の',
            //         '<span class="kakomu">前</span>〜を過ぎて',
            //     ]),
            //     'audio_url' => 'past.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'temperature',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>温度、気温',
            //     ]),
            //     'audio_url' => 'temperature.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'advice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>忠告、アドバイス',
            //     ]),
            //     'audio_url' => 'advice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'nervous',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>神経質な、緊張して',
            //         '<span class="indent">神経の',
            //     ]),
            //     'audio_url' => 'nervous.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'skill',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>技能、技術',
            //     ]),
            //     'audio_url' => 'skill.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'common',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>共通の',
            //         '<span class="indent">ふつうの',
            //     ]),
            //     'audio_url' => 'common.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'ceremony',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>式典',
            //     ]),
            //     'audio_url' => 'ceremony.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'delicious',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>おいしい',
            //     ]),
            //     'audio_url' => 'delicious.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'subject',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>科目',
            //         '<span class="indent">主題、(Eメールの)件名',
            //     ]),
            //     'audio_url' => 'subject.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'exchange',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を交換する',
            //     ]),
            //     'audio_url' => 'exchange.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'sugar',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>砂糖',
            //     ]),
            //     'audio_url' => 'sugar.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'adult',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>大人',
            //     ]),
            //     'audio_url' => 'adult.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'pen',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ペン',
            //     ]),
            //     'audio_url' => 'pen.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'notebook',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ノート、メモ帳',
            //     ]),
            //     'audio_url' => 'notebook.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 41,
            //     'word' => 'wonder',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜かしらと思う',
            //         '<span class="indent">不思議に思う',
            //     ]),
            //     'audio_url' => 'wonder.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0821 - 0840
            // [
            //     'section_id' => 42,
            //     'word' => 'commnunicate',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>コミュニケーションをとる',
            //     ]),
            //     'audio_url' => 'commnunicate.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'foot',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>足',
            //         '<span class="indent"></span>フィート[約30cm]',
            //     ]),
            //     'audio_url' => 'foot.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'smell',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>（〜の）においがする',
            //         '<span class="kakomu">名</span>におい',
            //     ]),
            //     'audio_url' => 'smell.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'Dr.',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>〜先生、〜博士',
            //     ]),
            //     'audio_url' => 'Dr..mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'international',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>国際的な',
            //     ]),
            //     'audio_url' => 'international.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'a.m. / A.M.',
            //     'meaning' => json_encode([
            //         '午前',
            //     ]),
            //     'audio_url' => 'a.m..mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'against',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">前</span>〜に反対して',
            //     ]),
            //     'audio_url' => 'against.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'reduce',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を減らす',
            //     ]),
            //     'audio_url' => 'reduce.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'stadium',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>競技場',
            //     ]),
            //     'audio_url' => 'stadium.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'discover',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を発見する',
            //     ]),
            //     'audio_url' => 'discover.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'miss',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜に乗り遅れる',
            //         '<span class="indent"></span>(機会)をのがす',
            //         '<span class="indent"></span>〜がいなくてさびしい',
            //     ]),
            //     'audio_url' => 'miss.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'size',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>大きさ',
            //     ]),
            //     'audio_url' => 'size.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'effect',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>効果',
            //         '<span class="indent"></span>結果',
            //     ]),
            //     'audio_url' => 'effect.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'cow',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(雌)牛',
            //     ]),
            //     'audio_url' => 'cow.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'April',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>4月',
            //     ]),
            //     'audio_url' => 'April.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'set',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を定める、置く',
            //         '<span class="indent"></span>(太陽・月が)沈む',
            //         '<span class="kakomu">名</span>一組',
            //     ]),
            //     'audio_url' => 'set.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'stage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>舞台、ステージ',
            //         '<span class="indent"></span>段階',
            //     ]),
            //     'audio_url' => 'stage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'service',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>サービス',
            //         '<span class="indent"></span>奉仕',
            //     ]),
            //     'audio_url' => 'service.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'satellite',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(人工)衛生',
            //     ]),
            //     'audio_url' => 'satellite.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 42,
            //     'word' => 'hurt',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を傷つける',
            //         '<span class="indent"></span>痛む',
            //     ]),
            //     'audio_url' => 'hurt.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0841 - 0860
            // [
            //     'section_id' => 43,
            //     'word' => 'view',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>眺め',
            //         '<span class="indent">考え(方)',
            //     ]),
            //     'audio_url' => 'view.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'touch',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜に触る、触れる',
            //         '<span class="kakomu">名</span>接触、手ざわり',
            //     ]),
            //     'audio_url' => 'touch.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'introduce',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を紹介する',
            //     ]),
            //     'audio_url' => 'introduce.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'ring',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(ベルなど)を鳴らす、鳴る',
            //         '<span class="kakomu">名</span>輪、指輪',
            //     ]),
            //     'audio_url' => 'ring.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'police',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>警察',
            //     ]),
            //     'audio_url' => 'police.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'national',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>国家の',
            //         '<span class="indent">国民の',
            //     ]),
            //     'audio_url' => 'national.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'salt',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>塩',
            //     ]),
            //     'audio_url' => 'salt.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'invite',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を招く、招待する',
            //     ]),
            //     'audio_url' => 'invite.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'plastic',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>プラスチック製の',
            //         '<span class="indent">ビニール製の',
            //     ]),
            //     'audio_url' => 'plastic.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'lucky',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>運の良い、幸運な',
            //     ]),
            //     'audio_url' => 'lucky.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'dry',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>乾いた',
            //         '<span class="kakomu">動</span>〜を乾かす、乾く',
            //     ]),
            //     'audio_url' => 'dry.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'jump',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(ぴょんと)とぶ',
            //     ]),
            //     'audio_url' => 'jump.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'cell',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>細胞',
            //     ]),
            //     'audio_url' => 'cell.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'March',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>3月',
            //     ]),
            //     'audio_url' => 'March.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'ski',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>スキーをする',
            //         '<span class="kakomu">名</span>スキー(板)',
            //     ]),
            //     'audio_url' => 'ski.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'sentence',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>文',
            //     ]),
            //     'audio_url' => 'sentence.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'print',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を印刷する',
            //         '<span class="kakomu">名</span>印刷',
            //     ]),
            //     'audio_url' => 'print.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'ocean',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(theをつけて)大洋',
            //     ]),
            //     'audio_url' => 'ocean.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'dollar',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(貨幣単位)ドル',
            //     ]),
            //     'audio_url' => 'dollar.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 43,
            //     'word' => 'increase',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>増える、〜を増やす',
            //     ]),
            //     'audio_url' => 'increase.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0861 - 0880
            // [
            //     'section_id' => 44,
            //     'word' => 'exercise',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>運動',
            //         '<span class="indent"></span>練習',
            //     ]),
            //     'audio_url' => 'exercise.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'captain',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(チームの)主将',
            //         '<span class="indent"></span>船長',
            //     ]),
            //     'audio_url' => 'captain.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'volleyball',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>バレーボール',
            //     ]),
            //     'audio_url' => 'volleyball.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'meat',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(食用)肉',
            //     ]),
            //     'audio_url' => 'meat.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'price',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>価格',
            //     ]),
            //     'audio_url' => 'price.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'distance',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>距離',
            //     ]),
            //     'audio_url' => 'distance.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'bridge',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>橋',
            //     ]),
            //     'audio_url' => 'bridge.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'England',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>イングランド',
            //     ]),
            //     'audio_url' => 'England.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'lead',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を導く、案内する',
            //     ]),
            //     'audio_url' => 'lead.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'moment',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>瞬間、ちょっとの間',
            //     ]),
            //     'audio_url' => 'moment.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'hair',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>髪の毛、毛',
            //     ]),
            //     'audio_url' => 'hair.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'banana',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>バナナ',
            //     ]),
            //     'audio_url' => 'banana.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'deep',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>深い',
            //         '<span class="indent"></span>(色が)濃い',
            //     ]),
            //     'audio_url' => 'deep.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'king',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>王、国王',
            //     ]),
            //     'audio_url' => 'king.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'war',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>戦争',
            //     ]),
            //     'audio_url' => 'war.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'meal',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>食事',
            //     ]),
            //     'audio_url' => 'meal.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'husband',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>夫',
            //     ]),
            //     'audio_url' => 'husband.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'June',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>6月',
            //     ]),
            //     'audio_url' => 'June.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'taste',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>味',
            //         '<span class="kakomu">動</span>(〜の)味がする、〜を味わう',
            //     ]),
            //     'audio_url' => 'taste.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 44,
            //     'word' => 'solar',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>太陽の',
            //     ]),
            //     'audio_url' => 'solar.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 0881 - 0900
            // [
            //     'section_id' => 45,
            //     'word' => 'wash',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)洗う',
            //     ]),
            //     'audio_url' => 'wash.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'photo',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>写真',
            //     ]),
            //     'audio_url' => 'photo.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'Wednesday',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>水曜日',
            //     ]),
            //     'audio_url' => 'Wednesday.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'relax',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>くつろぐ',
            //     ]),
            //     'audio_url' => 'relax.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'guide',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を案内する',
            //         '<span class="kakomu">名</span>ガイド',
            //     ]),
            //     'audio_url' => 'guide.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'camp',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>キャンプする',
            //         '<span class="kakomu">名</span>キャンプ',
            //     ]),
            //     'audio_url' => 'camp.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'fire',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>火',
            //         '<span class="indent"></span>火事',
            //     ]),
            //     'audio_url' => 'fire.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'serious',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>まじめな',
            //         '<span class="indent"></span>深刻な',
            //     ]),
            //     'audio_url' => 'serious.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'India',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>インド',
            //     ]),
            //     'audio_url' => 'India.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'community',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>地域社会、共同体',
            //     ]),
            //     'audio_url' => 'community.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'fifteen',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>15の',
            //         '<span class="kakomu">名</span>15',
            //     ]),
            //     'audio_url' => 'fifteen.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'period',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>期間',
            //         '<span class="indent"></span>時代',
            //     ]),
            //     'audio_url' => 'period.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'rock',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>岩、岩石',
            //     ]),
            //     'audio_url' => 'rock.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'France',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>フランス',
            //     ]),
            //     'audio_url' => 'France.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'blood',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>血、血液',
            //     ]),
            //     'audio_url' => 'blood.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'Christmas',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>クリスマス',
            //     ]),
            //     'audio_url' => 'Christmas.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'Kilometer',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>キロメートル',
            //     ]),
            //     'audio_url' => 'Kilometer.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'allow',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を許す',
            //     ]),
            //     'audio_url' => 'allow.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'beginning',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>初め、始まり',
            //     ]),
            //     'audio_url' => 'beginning.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 45,
            //     'word' => 'fresh',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>新鮮な',
            //     ]),
            //     'audio_url' => 'fresh.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0901 - 0920
            // [
            //     'section_id' => 46,
            //     'word' => 'marathon',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>マラソン',
            //     ]),
            //     'audio_url' => 'marathon.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'Tuesday',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>火曜日',
            //     ]),
            //     'audio_url' => 'Tuesday.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'symbol',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>象徴',
            //     ]),
            //     'audio_url' => 'symbol.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'apple',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>リンゴ',
            //     ]),
            //     'audio_url' => 'apple.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'global',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>地球上の、国際的な',
            //     ]),
            //     'audio_url' => 'global.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'fishing',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>釣り',
            //     ]),
            //     'audio_url' => 'fishing.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'October',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>10月',
            //     ]),
            //     'audio_url' => 'October.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'yellow',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>黄色の',
            //         '<span class="kakomu">名</span>黄色',
            //     ]),
            //     'audio_url' => 'yellow.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'researcher',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>調査員、研究者',
            //     ]),
            //     'audio_url' => 'researcher.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'main',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>主な、主要な',
            //     ]),
            //     'audio_url' => 'main.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'public',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>公の、公共の',
            //     ]),
            //     'audio_url' => 'public.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'article',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>記事',
            //     ]),
            //     'audio_url' => 'article.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'pull',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)引く、引っぱる',
            //     ]),
            //     'audio_url' => 'pull.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'shape',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>形',
            //     ]),
            //     'audio_url' => 'shape.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'straight',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>まっすぐに',
            //         '<span class="kakomu">形</span>まっすぐな',
            //     ]),
            //     'audio_url' => 'straight.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'ship',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(大型の)船',
            //     ]),
            //     'audio_url' => 'ship.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'fifty',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>50の',
            //         '<span class="kakomu">名</span>50',
            //     ]),
            //     'audio_url' => 'fifty.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'September',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>9月',
            //     ]),
            //     'audio_url' => 'September.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'damage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>損害、被害',
            //         '<span class="kakomu">動</span>〜に損害を与える',
            //     ]),
            //     'audio_url' => 'damage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 46,
            //     'word' => 'planet',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>惑星',
            //     ]),
            //     'audio_url' => 'planet.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 0921 - 0940
            // [
            //     'section_id' => 47,
            //     'word' => 'professional',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>専門職の、プロの',
            //         '<span class="kakomu">名</span>専門家',
            //     ]),
            //     'audio_url' => 'professional.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'elderly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>年配の',
            //     ]),
            //     'audio_url' => 'elderly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'cookie',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>クッキー',
            //     ]),
            //     'audio_url' => 'cookie.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'sweet',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>甘い',
            //     ]),
            //     'audio_url' => 'sweet.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'rose',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>バラ',
            //         '<span class="kakomu">動</span>(rise の過去形)',
            //     ]),
            //     'audio_url' => 'rose.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'chair',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>いす',
            //     ]),
            //     'audio_url' => 'chair.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'disappear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>消える',
            //     ]),
            //     'audio_url' => 'disappear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'mine',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>(I の所有代名詞)私のもの',
            //     ]),
            //     'audio_url' => 'mine.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'cute',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>かわいい',
            //     ]),
            //     'audio_url' => 'cute.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'factory',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>工場',
            //     ]),
            //     'audio_url' => 'factory.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'proud',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>誇りに思う',
            //     ]),
            //     'audio_url' => 'proud.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'bicycle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>自転車',
            //     ]),
            //     'audio_url' => 'bicycle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'Thursday',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>木曜日',
            //     ]),
            //     'audio_url' => 'Thursday.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'dear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>親愛なる',
            //     ]),
            //     'audio_url' => 'dear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'cost',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(費用)がかかる',
            //         '<span class="kakomu">名</span>値段、費用',
            //     ]),
            //     'audio_url' => 'cost.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'level',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>水準',
            //     ]),
            //     'audio_url' => 'level.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'juice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ジュース',
            //         '<span class="indent"></span>(果物・野菜の)汁',
            //     ]),
            //     'audio_url' => 'juice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'cheap',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>安い',
            //     ]),
            //     'audio_url' => 'cheap.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'coat',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>上着、コート',
            //     ]),
            //     'audio_url' => 'coat.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 47,
            //     'word' => 'sunny',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>快晴の',
            //     ]),
            //     'audio_url' => 'sunny.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0941 - 0960
            // [
            //     'section_id' => 48,
            //     'word' => 'arm',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>腕',
            //     ]),
            //     'audio_url' => 'arm.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'video',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ビデオ',
            //         '<span class="kakomu">形</span>映像の',
            //     ]),
            //     'audio_url' => 'video.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'flight',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>飛行便、飛ぶこと',
            //     ]),
            //     'audio_url' => 'flight.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'corner',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>角、すみ',
            //     ]),
            //     'audio_url' => 'corner.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'appear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>現れる',
            //     ]),
            //     'audio_url' => 'appear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'add',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を加える',
            //     ]),
            //     'audio_url' => 'add.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'note',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>メモ',
            //     ]),
            //     'audio_url' => 'note.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'clock',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>時計',
            //     ]),
            //     'audio_url' => 'clock.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'conversation',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>会話',
            //     ]),
            //     'audio_url' => 'conversation.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'bread',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>パン',
            //     ]),
            //     'audio_url' => 'bread.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'encourage',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜をはげます',
            //         '<span class="indent"></span>〜をすすめる',
            //     ]),
            //     'audio_url' => 'encourage.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'law',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>法律',
            //     ]),
            //     'audio_url' => 'law.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'heavy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>重い',
            //         '<span class="indent"></span>はげしい',
            //     ]),
            //     'audio_url' => 'heavy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'tool',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>道具',
            //     ]),
            //     'audio_url' => 'tool.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'teammate',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>チームメイト',
            //     ]),
            //     'audio_url' => 'teammate.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'rest',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>休憩、休養',
            //         '<span class="kakomu">動</span>休む',
            //     ]),
            //     'audio_url' => 'rest.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'ancient',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>古代の',
            //     ]),
            //     'audio_url' => 'ancient.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'promise',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>約束',
            //         '<span class="kakomu">動</span>(〜を)約束する',
            //     ]),
            //     'audio_url' => 'promise.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'castle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>城',
            //     ]),
            //     'audio_url' => 'castle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 48,
            //     'word' => 'tresure',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>宝物、財宝',
            //     ]),
            //     'audio_url' => 'tresure.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0961 - 0980
            // [
            //     'section_id' => 49,
            //     'word' => 'astronaut',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>宇宙飛行士',
            //     ]),
            //     'audio_url' => 'astronaut.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'step',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>一歩、歩み',
            //         '<span class="indent"></span>(階段の)段',
            //     ]),
            //     'audio_url' => 'step.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'code',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>符号',
            //     ]),
            //     'audio_url' => 'code.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'toward',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">前</span>〜のほうへ',
            //         '<span class="indent"></span>〜に向かって',
            //     ]),
            //     'audio_url' => 'toward.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'drop',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>落ちる、〜を落とす',
            //         '<span class="kakomu">名</span>落下、しずく',
            //     ]),
            //     'audio_url' => 'drop.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'leaf',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>(木・草の)葉',
            //     ]),
            //     'audio_url' => 'leaf.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'clerk',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>店員、職員',
            //     ]),
            //     'audio_url' => 'clerk.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'guitar',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ギター',
            //     ]),
            //     'audio_url' => 'guitar.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'knowledge',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>知識',
            //     ]),
            //     'audio_url' => 'knowledge.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'radio',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ラジオ',
            //     ]),
            //     'audio_url' => 'radio.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'perhaps',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>たぶん',
            //     ]),
            //     'audio_url' => 'perhaps.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'living',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>生きている',
            //     ]),
            //     'audio_url' => 'living.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'quiet',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>静かな',
            //         '<span class="indent"></span>おだやかな',
            //     ]),
            //     'audio_url' => 'quiet.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'express',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を表現する',
            //         '<span class="kakomu">形</span>急行の',
            //     ]),
            //     'audio_url' => 'express.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'dinosaur',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>恐竜',
            //     ]),
            //     'audio_url' => 'dinosaur.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'ariport',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>空港',
            //     ]),
            //     'audio_url' => 'ariport.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'case',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>場合',
            //         '<span class="indent"></span>箱',
            //     ]),
            //     'audio_url' => 'case.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'whole',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>全体の',
            //         '<span class="kakomu">名</span>全体',
            //     ]),
            //     'audio_url' => 'whole.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'bookstore',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span><<米>>書店',
            //     ]),
            //     'audio_url' => 'bookstore.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 49,
            //     'word' => 'impress',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を感動させる',
            //     ]),
            //     'audio_url' => 'impress.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 0981 - 1000
            // [
            //     'section_id' => 50,
            //     'word' => 'toy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>おもちゃ',
            //     ]),
            //     'audio_url' => 'toy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'although',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">接</span>〜だけれども',
            //     ]),
            //     'audio_url' => 'although.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'experiment',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>実験',
            //     ]),
            //     'audio_url' => 'experiment.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'effort',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>努力',
            //     ]),
            //     'audio_url' => 'effort.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'movement',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>動き、動作',
            //         '<span class="indent"></span>(政治的、社会的)運動',
            //     ]),
            //     'audio_url' => 'movement.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'choice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>選択',
            //         '<span class="indent"></span>選んだもの[人]',
            //     ]),
            //     'audio_url' => 'choice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'supermarket',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>スーパーマーケット',
            //     ]),
            //     'audio_url' => 'supermarket.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'mouth',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>口',
            //     ]),
            //     'audio_url' => 'mouth.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'nobody',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>だれも〜ない',
            //     ]),
            //     'audio_url' => 'nobody.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'society',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>社会',
            //     ]),
            //     'audio_url' => 'society.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'meter',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[長さの単位]メートル',
            //     ]),
            //     'audio_url' => 'meter.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'eihter',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>(〜か･･･)のどちらか、[否定文で]〜もまた(･･･ない)',
            //         '<span class="kakomu">代</span>どちらでも',
            //     ]),
            //     'audio_url' => 'eihter.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'boat',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ボート、船',
            //     ]),
            //     'audio_url' => 'boat.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'staff',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>職員、スタッフ',
            //     ]),
            //     'audio_url' => 'staff.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'sense',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>感覚',
            //         '<span class="indent"></span>意味',
            //     ]),
            //     'audio_url' => 'sense.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'recycle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を再生利用する',
            //     ]),
            //     'audio_url' => 'recycle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'soybean',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>大豆',
            //     ]),
            //     'audio_url' => 'soybean.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'shout',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)大声で叫ぶ',
            //         '<span class="kakomu">名</span>叫び声',
            //     ]),
            //     'audio_url' => 'shout.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'various',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>いろいろな',
            //     ]),
            //     'audio_url' => 'various.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 50,
            //     'word' => 'interest',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>興味、関心',
            //     ]),
            //     'audio_url' => 'interest.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1001 - 1020
            // [
            //     'section_id' => 51,
            //     'word' => 'drum',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>たいこ、ドラム',
            //     ]),
            //     'audio_url' => 'drum.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'soldier',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>軍人、兵士',
            //     ]),
            //     'audio_url' => 'soldier.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'slow',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[速度が]遅い',
            //     ]),
            //     'audio_url' => 'slow.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'influence',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>影響',
            //         '<span class="kakomu">動</span>〜に影響を及ぼす',
            //     ]),
            //     'audio_url' => 'influence.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'website',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ウェブサイト',
            //     ]),
            //     'audio_url' => 'website.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'tomato',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>トマト',
            //     ]),
            //     'audio_url' => 'tomato.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'traffic',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>交通(量)',
            //     ]),
            //     'audio_url' => 'traffic.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'steal',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[こっそり]〜を盗む',
            //     ]),
            //     'audio_url' => 'steal.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'luck',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>運',
            //     ]),
            //     'audio_url' => 'luck.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'deer',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>シカ',
            //     ]),
            //     'audio_url' => 'deer.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'CD',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>コンパクトディスク',
            //     ]),
            //     'audio_url' => 'CD.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'god',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>神',
            //     ]),
            //     'audio_url' => 'god.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'eleven',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>11の',
            //         '<span class="kakomu">名</span>11',
            //     ]),
            //     'audio_url' => 'eleven.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'aurora',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>オーロラ',
            //     ]),
            //     'audio_url' => 'aurora.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'fill',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を満たす',
            //     ]),
            //     'audio_url' => 'fill.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'band',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>楽団、バンド',
            //         '<span class="indent"></span>帯、ひも',
            //     ]),
            //     'audio_url' => 'band.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'painting',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[絵の具で描いた]絵',
            //     ]),
            //     'audio_url' => 'painting.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'bank',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>銀行',
            //         '<span class="indent"></span>土手',
            //     ]),
            //     'audio_url' => 'bank.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'stick',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>棒切れ',
            //         '<span class="indent"></span>つえ',
            //     ]),
            //     'audio_url' => 'stick.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 51,
            //     'word' => 'hat',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[ふちのある]帽子',
            //     ]),
            //     'audio_url' => 'hat.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // 1021 - 1040
            // [
            //     'section_id' => 52,
            //     'word' => 'quite',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>かなり',
            //         '<span class="indent"></span>すっかり',
            //     ]),
            //     'audio_url' => 'quite.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'death',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>死',
            //     ]),
            //     'audio_url' => 'death.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'presentation',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>発表',
            //     ]),
            //     'audio_url' => 'presentation.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'page',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[本の]ページ',
            //     ]),
            //     'audio_url' => 'page.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'market',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>市場',
            //     ]),
            //     'audio_url' => 'market.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'active',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>活動的な、活発な',
            //     ]),
            //     'audio_url' => 'active.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'date',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>日付',
            //         '<span class="indent"></span>デート',
            //     ]),
            //     'audio_url' => 'date.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'glass',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ガラス',
            //         '<span class="indent"></span>コップ',
            //     ]),
            //     'audio_url' => 'glass.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'February',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>2月',
            //     ]),
            //     'audio_url' => 'February.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'New Zealand',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ニュージーランド',
            //     ]),
            //     'audio_url' => 'New Zealand.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'middle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>まん中',
            //         '<span class="kakomu">形</span>まん中の',
            //     ]),
            //     'audio_url' => 'middle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'average',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>平均の',
            //         '<span class="indent">名</span>平均',
            //     ]),
            //     'audio_url' => 'average.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'ability',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>能力',
            //     ]),
            //     'audio_url' => 'ability.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'similar',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>似ている、同様の',
            //     ]),
            //     'audio_url' => 'similar.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'action',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>行動',
            //     ]),
            //     'audio_url' => 'action.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'smart',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>りこうな',
            //     ]),
            //     'audio_url' => 'smart.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'above',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">前</span>〜の上に[へ]',
            //         '<span class="kakomu">副</span>上方に',
            //     ]),
            //     'audio_url' => 'above.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'matter',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>問題、事がら',
            //     ]),
            //     'audio_url' => 'matter.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'twelve',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>12の',
            //         '<span class="kakomu">名</span>12',
            //     ]),
            //     'audio_url' => 'twelve.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 52,
            //     'word' => 'umbrella',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>かさ',
            //     ]),
            //     'audio_url' => 'umbrella.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 1041 -1060
            // [
            //     'section_id' => 53,
            //     'word' => 'lady',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>婦人',
            //     ]),
            //     'audio_url' => 'lady.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'friendship',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>友情',
            //     ]),
            //     'audio_url' => 'friendship.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'desert',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>砂漠',
            //     ]),
            //     'audio_url' => 'desert.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'disease',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>病気',
            //     ]),
            //     'audio_url' => 'disease.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'bear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>クマ',
            //         '<span class="kakomu">動</span>〜を産む',
            //     ]),
            //     'audio_url' => 'bear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'complete',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を完成する',
            //         '<span class="kakomu">形</span>完全な、完成した',
            //     ]),
            //     'audio_url' => 'complete.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'doll',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>人形',
            //     ]),
            //     'audio_url' => 'doll.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'tournament',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>トーナメント',
            //     ]),
            //     'audio_url' => 'tournament.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'hurry',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>急ぐ',
            //         '<span class="kakomu">名</span>急ぎ',
            //     ]),
            //     'audio_url' => 'hurry.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'herself',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>彼女自身(を[に])',
            //     ]),
            //     'audio_url' => 'herself.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'accident',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>事故',
            //     ]),
            //     'audio_url' => 'accident.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'artist',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>芸術家',
            //     ]),
            //     'audio_url' => 'artist.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'wish',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>願い',
            //         '<span class="kakomu">動</span>〜を望む、願う',
            //     ]),
            //     'audio_url' => 'wish.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'gym',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>体育館',
            //     ]),
            //     'audio_url' => 'gym.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'schedule',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>予定(表)、スケジュール',
            //     ]),
            //     'audio_url' => 'schedule.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'coach',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>監督、コーチ',
            //     ]),
            //     'audio_url' => 'coach.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'gas',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>気体、[燃料用の]ガス',
            //         '<span class="indent"></span><<米>>ガソリン',
            //     ]),
            //     'audio_url' => 'gas.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'data',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>データ、資料',
            //     ]),
            //     'audio_url' => 'data.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'north',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[theをつけて]北、北部',
            //         '<span class="kakomu">形</span>北の',
            //         '<span class="kakomu">副</span>北へ[に]',
            //     ]),
            //     'audio_url' => 'north.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 53,
            //     'word' => 'chorus',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>合唱(団)',
            //     ]),
            //     'audio_url' => 'chorus.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            //
            // // 1061 - 1080
            // [
            //     'section_id' => 54,
            //     'word' => 'puppy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>子イヌ',
            //     ]),
            //     'audio_url' => 'puppy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'terrible',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>恐ろしい',
            //         '<span class="indent"></span>ひどい',
            //     ]),
            //     'audio_url' => 'terrible.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'fear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>恐れ',
            //         '<span class="kakomu">動</span>〜を恐れる',
            //     ]),
            //     'audio_url' => 'fear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
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
            //     'section_id' => 54,
            //     'word' => 'record',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>記録',
            //         '<span class="kakomu">動</span>〜を記録[録音]する',
            //     ]),
            //     'audio_url' => 'record.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'wake',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>目がさめる',
            //         '<span class="indent"></span>〜を起こす',
            //     ]),
            //     'audio_url' => 'wake.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'position',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>位置、地位',
            //     ]),
            //     'audio_url' => 'position.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'clearly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>はっきりと、明らかに',
            //     ]),
            //     'audio_url' => 'clearly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'twice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>2度[回]',
            //     ]),
            //     'audio_url' => 'twice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'December',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>12月',
            //     ]),
            //     'audio_url' => 'December.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'list',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>一覧表、リスト',
            //     ]),
            //     'audio_url' => 'list.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'pollution',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>汚染',
            //     ]),
            //     'audio_url' => 'pollution.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'site',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>用地',
            //         '<span class="indent"></span>[インターネットの]サイト',
            //     ]),
            //     'audio_url' => 'site.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'usual',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>いつもの、ふつうの',
            //     ]),
            //     'audio_url' => 'usual.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'yours',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>[youの所有代名詞]あなた(たち)のもの',
            //     ]),
            //     'audio_url' => 'yours.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'camera',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>カメラ',
            //     ]),
            //     'audio_url' => 'camera.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'least',
            //     'meaning' => json_encode([
            //         '[littleの最上級]',
            //         '<span class="kakomu">形</span>最も少ない',
            //         '<span class="kakomu">副</span>最も少なく',
            //     ]),
            //     'audio_url' => 'least.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'dead',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>死んでいる',
            //     ]),
            //     'audio_url' => 'dead.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'bath',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>入浴',
            //     ]),
            //     'audio_url' => 'bath.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 54,
            //     'word' => 'shy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>内気な、恥ずかしがりの',
            //     ]),
            //     'audio_url' => 'shy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            //
            // 1081 - 1100
            [
                'section_id' => 55,
                'word' => 'January',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>1月',
                ]),
                'audio_url' => 'January.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'repair',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を修理する',
                    '<span class="kakomu">名</span>修理',
                ]),
                'audio_url' => 'repair.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'roll',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜をころがす、ころがる',
                    '<span class="kakomu">名</span>巻いたもの',
                ]),
                'audio_url' => 'roll.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'British',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>イギリス(人)の',
                ]),
                'audio_url' => 'British.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'serve',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[食事]を出す',
                    '<span class="indent"></span>〜に仕える',
                ]),
                'audio_url' => 'serve.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'someday',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>いつか、そのうちに',
                ]),
                'audio_url' => 'someday.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'everyday',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>毎日の',
                ]),
                'audio_url' => 'everyday.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'respect',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を尊敬する',
                    '<span class="kakomu">名</span>尊敬',
                ]),
                'audio_url' => 'respect.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'south',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[theをつけて]南、南部',
                    '<span class="kakomu">形</span>南の',
                    '<span class="kakomu">副</span>南へ[に]',
                ]),
                'audio_url' => 'south.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'forty',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>40の',
                    '<span class="kakomu">名</span>40',
                ]),
                'audio_url' => 'forty.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'textbook',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>教科書',
                ]),
                'audio_url' => 'textbook.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'comic',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>マンガ(本)',
                ]),
                'audio_url' => 'comic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'act',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>行動する',
                    '<span class="indent"></span>[役]を演じる',
                ]),
                'audio_url' => 'act.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'fan',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[スポーツ・音楽などの]ファン',
                    '<span class="indent"></span>扇、うちわ',
                ]),
                'audio_url' => 'fan.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'tonight',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>今夜(は)',
                    '<span class="kakomu">名</span>今夜',
                ]),
                'audio_url' => 'tonight.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'holiday',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>休日、祭日',
                ]),
                'audio_url' => 'holiday.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'chocolate',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>チョコレート',
                ]),
                'audio_url' => 'chocolate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'post office',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>郵便局',
                ]),
                'audio_url' => 'post office.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'form',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>形、形式',
                    '<span class="kakomu">動</span>〜を形づくる',
                ]),
                'audio_url' => 'form.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 55,
                'word' => 'teenager',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ティーンエージャー',
                ]),
                'audio_url' => 'teenager.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
