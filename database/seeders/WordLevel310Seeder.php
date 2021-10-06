<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel310Seeder extends Seeder
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
            // 1061 - 1080
            [
                'section_id' => 54,
                'word' => 'puppy',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>子イヌ',
                ]),
                'audio_url' => 'puppy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'terrible',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>恐ろしい',
                    '<span class="indent"></span>ひどい',
                ]),
                'audio_url' => 'terrible.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'fear',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>恐れ',
                    '<span class="kakomu">動</span>〜を恐れる',
                ]),
                'audio_url' => 'fear.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'raise',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を上げる',
                    '<span class="indent"></span>〜を育てる',
                ]),
                'audio_url' => 'raise.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'record',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>記録',
                    '<span class="kakomu">動</span>〜を記録[録音]する',
                ]),
                'audio_url' => 'record.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'wake',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>目がさめる',
                    '<span class="indent"></span>〜を起こす',
                ]),
                'audio_url' => 'wake.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'position',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>位置、地位',
                ]),
                'audio_url' => 'position.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'clearly',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>はっきりと、明らかに',
                ]),
                'audio_url' => 'clearly.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'twice',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>2度[回]',
                ]),
                'audio_url' => 'twice.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'December',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>12月',
                ]),
                'audio_url' => 'December.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'list',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>一覧表、リスト',
                ]),
                'audio_url' => 'list.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'pollution',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>汚染',
                ]),
                'audio_url' => 'pollution.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'site',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>用地',
                    '<span class="indent"></span>[インターネットの]サイト',
                ]),
                'audio_url' => 'site.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'usual',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>いつもの、ふつうの',
                ]),
                'audio_url' => 'usual.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'yours',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>[youの所有代名詞]あなた(たち)のもの',
                ]),
                'audio_url' => 'yours.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'camera',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>カメラ',
                ]),
                'audio_url' => 'camera.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'least',
                'meaning' => json_encode([
                    '[littleの最上級]',
                    '<span class="kakomu">形</span>最も少ない',
                    '<span class="kakomu">副</span>最も少なく',
                ]),
                'audio_url' => 'least.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'dead',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>死んでいる',
                ]),
                'audio_url' => 'dead.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'bath',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>入浴',
                ]),
                'audio_url' => 'bath.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 54,
                'word' => 'shy',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>内気な、恥ずかしがりの',
                ]),
                'audio_url' => 'shy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
