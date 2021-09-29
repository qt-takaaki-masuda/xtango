<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel33Seeder extends Seeder
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
            // 0841 - 0860
            [
                'section_id' => 43,
                'word' => 'view',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>眺め',
                    '<span class="indent">考え(方)',
                ]),
                'audio_url' => 'view.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'touch',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に触る、触れる',
                    '<span class="kakomu">名</span>接触、手ざわり',
                ]),
                'audio_url' => 'touch.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'introduce',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を紹介する',
                ]),
                'audio_url' => 'introduce.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'ring',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(ベルなど)を鳴らす、鳴る',
                    '<span class="kakomu">名</span>輪、指輪',
                ]),
                'audio_url' => 'ring.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'police',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>警察',
                ]),
                'audio_url' => 'police.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'national',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>国家の',
                    '<span class="indent">国民の',
                ]),
                'audio_url' => 'national.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'salt',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>塩',
                ]),
                'audio_url' => 'salt.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'invite',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を招く、招待する',
                ]),
                'audio_url' => 'invite.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'plastic',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>プラスチック製の',
                    '<span class="indent">ビニール製の',
                ]),
                'audio_url' => 'plastic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'lucky',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>運の良い、幸運な',
                ]),
                'audio_url' => 'lucky.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'dry',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>乾いた',
                    '<span class="kakomu">動</span>〜を乾かす、乾く',
                ]),
                'audio_url' => 'dry.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'jump',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(ぴょんと)とぶ',
                ]),
                'audio_url' => 'jump.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'cell',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>細胞',
                ]),
                'audio_url' => 'cell.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'March',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>3月',
                ]),
                'audio_url' => 'March.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'ski',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>スキーをする',
                    '<span class="kakomu">名</span>スキー(板)',
                ]),
                'audio_url' => 'ski.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'sentence',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>文',
                ]),
                'audio_url' => 'sentence.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'print',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を印刷する',
                    '<span class="kakomu">名</span>印刷',
                ]),
                'audio_url' => 'print.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'ocean',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(theをつけて)大洋',
                ]),
                'audio_url' => 'ocean.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'dollar',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(貨幣単位)ドル',
                ]),
                'audio_url' => 'dollar.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 43,
                'word' => 'increase',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>増える、〜を増やす',
                ]),
                'audio_url' => 'increase.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
