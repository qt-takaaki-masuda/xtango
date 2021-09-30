<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel34Seeder extends Seeder
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
            // 0861 - 0880
            [
                'section_id' => 44,
                'word' => 'exercise',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>運動',
                    '<span class="kakomu"></span>練習',
                ]),
                'audio_url' => 'exercise.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'captain',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(チームの)主将',
                    '<span class="kakomu"></span>船長',
                ]),
                'audio_url' => 'captain.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'volleyball',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>バレーボール',
                ]),
                'audio_url' => 'volleyball.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'meat',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>(食用)肉',
                ]),
                'audio_url' => 'meat.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'price',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>価格',
                ]),
                'audio_url' => 'price.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'distance',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>距離',
                ]),
                'audio_url' => 'distance.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'bridge',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>橋',
                ]),
                'audio_url' => 'bridge.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'England',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>イングランド',
                ]),
                'audio_url' => 'England.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'lead',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を導く、案内する',
                ]),
                'audio_url' => 'lead.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'moment',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>瞬間、ちょっとの間',
                ]),
                'audio_url' => 'moment.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'hair',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>髪の毛、毛',
                ]),
                'audio_url' => 'hair.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'banana',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>バナナ',
                ]),
                'audio_url' => 'banana.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'deep',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>深い',
                    '<span class="indent"></span>(色が)濃い',
                ]),
                'audio_url' => 'deep.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'king',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>王、国王',
                ]),
                'audio_url' => 'king.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'war',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>戦争',
                ]),
                'audio_url' => 'war.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'meal',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>食事',
                ]),
                'audio_url' => 'meal.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'husband',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>夫',
                ]),
                'audio_url' => 'husband.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'June',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>6月',
                ]),
                'audio_url' => 'June.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'taste',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>味',
                    '<span class="kakomu">動</span>(〜の)味がする、〜を味わう',
                ]),
                'audio_url' => 'taste.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 44,
                'word' => 'solar',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>太陽の',
                ]),
                'audio_url' => 'solar.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 0881 - 0900
            [
                'section_id' => 45,
                'word' => 'wash',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>(〜を)洗う',
                ]),
                'audio_url' => 'wash.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'photo',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>写真',
                ]),
                'audio_url' => 'photo.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'Wednesday',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>水曜日',
                ]),
                'audio_url' => 'Wednesday.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'relax',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>くつろぐ',
                ]),
                'audio_url' => 'relax.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'guide',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を案内する',
                    '<span class="kakomu">名</span>ガイド',
                ]),
                'audio_url' => 'guide.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'camp',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>キャンプする',
                    '<span class="kakomu">名</span>キャンプ',
                ]),
                'audio_url' => 'camp.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'fire',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>火',
                    '<span class="indent"></span>火事',
                ]),
                'audio_url' => 'fire.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'serious',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>まじめな',
                    '<span class="indent"></span>深刻な',
                ]),
                'audio_url' => 'serious.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'India',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>インド',
                ]),
                'audio_url' => 'India.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'community',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>地域社会、共同体',
                ]),
                'audio_url' => 'community.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'fifteen',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>15の',
                    '<span class="kakomu">名</span>15',
                ]),
                'audio_url' => 'fifteen.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'period',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>期間',
                    '<span class="indent"></span>時代',
                ]),
                'audio_url' => 'period.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'rock',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>岩、岩石',
                ]),
                'audio_url' => 'rock.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'France',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>フランス',
                ]),
                'audio_url' => 'France.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'blood',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>血、血液',
                ]),
                'audio_url' => 'blood.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'Christmas',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>クリスマス',
                ]),
                'audio_url' => 'Christmas.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'Kilometer',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>キロメートル',
                ]),
                'audio_url' => 'Kilometer.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'allow',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を許す',
                ]),
                'audio_url' => 'allow.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'beginning',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>初め、始まり',
                ]),
                'audio_url' => 'beginning.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 45,
                'word' => 'fresh',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>新鮮な',
                ]),
                'audio_url' => 'fresh.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
