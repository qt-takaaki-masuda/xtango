<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel32Seeder extends Seeder
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
            // 0821 - 0840
            [
                'section_id' => 42,
                'word' => 'commnunicate',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>コミュニケーションをとる',
                ]),
                'audio_url' => 'commnunicate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'foot',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>足',
                    '<span class="indent"></span>フィート[約30cm]',
                ]),
                'audio_url' => 'foot.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'smell',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>（〜の）においがする',
                    '<span class="kakomu">名</span>におい',
                ]),
                'audio_url' => 'smell.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'Dr.',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>〜先生、〜博士',
                ]),
                'audio_url' => 'Dr..mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'international',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>国際的な',
                ]),
                'audio_url' => 'international.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'a.m. / A.M.',
                'meaning' => json_encode([
                    '午前',
                ]),
                'audio_url' => 'a.m..mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'against',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>〜に反対して',
                ]),
                'audio_url' => 'against.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'reduce',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を減らす',
                ]),
                'audio_url' => 'reduce.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'stadium',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>競技場',
                ]),
                'audio_url' => 'stadium.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'discover',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を発見する',
                ]),
                'audio_url' => 'discover.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'miss',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜に乗り遅れる',
                    '<span class="indent"></span>(機会)をのがす',
                    '<span class="indent"></span>〜がいなくてさびしい',
                ]),
                'audio_url' => 'miss.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'size',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>大きさ',
                ]),
                'audio_url' => 'size.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'effect',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>効果',
                    '<span class="indent"></span>結果',
                ]),
                'audio_url' => 'effect.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'cow',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(雌)牛',
                ]),
                'audio_url' => 'cow.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'April',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>4月',
                ]),
                'audio_url' => 'April.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'set',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を定める、置く',
                    '<span class="indent"></span>(太陽・月が)沈む',
                    '<span class="kakomu">名</span>一組',
                ]),
                'audio_url' => 'set.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'stage',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>舞台、ステージ',
                    '<span class="indent"></span>段階',
                ]),
                'audio_url' => 'stage.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'service',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>サービス',
                    '<span class="indent"></span>奉仕',
                ]),
                'audio_url' => 'service.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'satellite',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(人工)衛生',
                ]),
                'audio_url' => 'satellite.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 42,
                'word' => 'hurt',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を傷つける',
                    '<span class="indent"></span>痛む',
                ]),
                'audio_url' => 'hurt.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
