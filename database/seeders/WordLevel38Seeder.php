<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel38Seeder extends Seeder
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
            // 0981 - 1000
            [
                'section_id' => 50,
                'word' => 'toy',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>おもちゃ',
                ]),
                'audio_url' => 'toy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'although',
                'meaning' => json_encode([
                    '<span class="kakomu">接</span>〜だけれども',
                ]),
                'audio_url' => 'although.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'experiment',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>実験',
                ]),
                'audio_url' => 'experiment.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'effort',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>努力',
                ]),
                'audio_url' => 'effort.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'movement',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>動き、動作',
                    '<span class="indent"></span>(政治的、社会的)運動',
                ]),
                'audio_url' => 'movement.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'choice',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>選択',
                    '<span class="indent"></span>選んだもの[人]',
                ]),
                'audio_url' => 'choice.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'supermarket',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>スーパーマーケット',
                ]),
                'audio_url' => 'supermarket.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'mouth',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>口',
                ]),
                'audio_url' => 'mouth.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'nobody',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>だれも〜ない',
                ]),
                'audio_url' => 'nobody.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'society',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>社会',
                ]),
                'audio_url' => 'society.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'meter',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[長さの単位]メートル',
                ]),
                'audio_url' => 'meter.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'eihter',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>(〜か･･･)のどちらか、[否定文で]〜もまた(･･･ない)',
                    '<span class="kakomu">代</span>どちらでも',
                ]),
                'audio_url' => 'eihter.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'boat',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ボート、船',
                ]),
                'audio_url' => 'boat.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'staff',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>職員、スタッフ',
                ]),
                'audio_url' => 'staff.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'sense',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>感覚',
                    '<span class="indent"></span>意味',
                ]),
                'audio_url' => 'sense.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'recycle',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を再生利用する',
                ]),
                'audio_url' => 'recycle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'soybean',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>大豆',
                ]),
                'audio_url' => 'soybean.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'shout',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(〜を)大声で叫ぶ',
                    '<span class="kakomu">名</span>叫び声',
                ]),
                'audio_url' => 'shout.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'various',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>いろいろな',
                ]),
                'audio_url' => 'various.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 50,
                'word' => 'interest',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>興味、関心',
                ]),
                'audio_url' => 'interest.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 1001 - 1020
            [
                'section_id' => 51,
                'word' => 'drum',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>たいこ、ドラム',
                ]),
                'audio_url' => 'drum.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'soldier',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>軍人、兵士',
                ]),
                'audio_url' => 'soldier.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'slow',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>[速度が]遅い',
                ]),
                'audio_url' => 'slow.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'influence',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>影響',
                    '<span class="kakomu">動</span>〜に影響を及ぼす',
                ]),
                'audio_url' => 'influence.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'website',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ウェブサイト',
                ]),
                'audio_url' => 'website.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'tomato',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>トマト',
                ]),
                'audio_url' => 'tomato.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'traffic',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>交通(量)',
                ]),
                'audio_url' => 'traffic.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'steal',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>[こっそり]〜を盗む',
                ]),
                'audio_url' => 'steal.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'luck',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>運',
                ]),
                'audio_url' => 'luck.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'deer',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>シカ',
                ]),
                'audio_url' => 'deer.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'CD',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>コンパクトディスク',
                ]),
                'audio_url' => 'CD.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'god',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>神',
                ]),
                'audio_url' => 'god.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'eleven',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>11の',
                    '<span class="kakomu">名</span>11',
                ]),
                'audio_url' => 'eleven.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'aurora',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>オーロラ',
                ]),
                'audio_url' => 'aurora.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'fill',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を満たす',
                ]),
                'audio_url' => 'fill.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'band',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>楽団、バンド',
                    '<span class="indent"></span>帯、ひも',
                ]),
                'audio_url' => 'band.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'painting',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[絵の具で描いた]絵',
                ]),
                'audio_url' => 'painting.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'bank',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>銀行',
                    '<span class="indent"></span>土手',
                ]),
                'audio_url' => 'bank.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'stick',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>棒切れ',
                    '<span class="indent"></span>つえ',
                ]),
                'audio_url' => 'stick.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 51,
                'word' => 'hat',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>[ふちのある]帽子',
                ]),
                'audio_url' => 'hat.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
