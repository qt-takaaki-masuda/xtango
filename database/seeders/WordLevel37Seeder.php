<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel37Seeder extends Seeder
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
            // 0961 - 0980
            [
                'section_id' => 49,
                'word' => 'astronaut',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>宇宙飛行士',
                ]),
                'audio_url' => 'astronaut.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'step',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>一歩、歩み',
                    '<span class="indent"></span>(階段の)段',
                ]),
                'audio_url' => 'step.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'code',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>符号',
                ]),
                'audio_url' => 'code.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'toward',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>〜のほうへ',
                    '<span class="indent"></span>〜に向かって',
                ]),
                'audio_url' => 'toward.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'drop',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>落ちる、〜を落とす',
                    '<span class="kakomu">名</span>落下、しずく',
                ]),
                'audio_url' => 'drop.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'leaf',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(木・草の)葉',
                ]),
                'audio_url' => 'leaf.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'clerk',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>店員、職員',
                ]),
                'audio_url' => 'clerk.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'guitar',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ギター',
                ]),
                'audio_url' => 'guitar.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'knowledge',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>知識',
                ]),
                'audio_url' => 'knowledge.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'radio',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ラジオ',
                ]),
                'audio_url' => 'radio.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'perhaps',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>たぶん',
                ]),
                'audio_url' => 'perhaps.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'living',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>生きている',
                ]),
                'audio_url' => 'living.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'quiet',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>静かな',
                    '<span class="indent"></span>おだやかな',
                ]),
                'audio_url' => 'quiet.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'express',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を表現する',
                    '<span class="kakomu">形</span>急行の',
                ]),
                'audio_url' => 'express.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'dinosaur',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>恐竜',
                ]),
                'audio_url' => 'dinosaur.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'ariport',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>空港',
                ]),
                'audio_url' => 'ariport.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'case',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>場合',
                    '<span class="indent"></span>箱',
                ]),
                'audio_url' => 'case.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'whole',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>全体の',
                    '<span class="kakomu">名</span>全体',
                ]),
                'audio_url' => 'whole.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'bookstore',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span><<米>>書店',
                ]),
                'audio_url' => 'bookstore.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 49,
                'word' => 'impress',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を感動させる',
                ]),
                'audio_url' => 'impress.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
