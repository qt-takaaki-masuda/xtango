<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordLevel36Seeder extends Seeder
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
            // 0941 - 0960
            [
                'section_id' => 48,
                'word' => 'arm',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>腕',
                ]),
                'audio_url' => 'arm.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'video',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>ビデオ',
                    '<span class="kakomu">形</span>映像の',
                ]),
                'audio_url' => 'video.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'flight',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>飛行便、飛ぶこと',
                ]),
                'audio_url' => 'flight.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'corner',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>角、すみ',
                ]),
                'audio_url' => 'corner.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'appear',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>現れる',
                ]),
                'audio_url' => 'appear.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'add',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を加える',
                ]),
                'audio_url' => 'add.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'note',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>メモ',
                ]),
                'audio_url' => 'note.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'clock',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>時計',
                ]),
                'audio_url' => 'clock.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'conversation',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>会話',
                ]),
                'audio_url' => 'conversation.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'bread',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>パン',
                ]),
                'audio_url' => 'bread.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'encourage',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜をはげます',
                    '<span class="indent"></span>〜をすすめる',
                ]),
                'audio_url' => 'encourage.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'law',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>法律',
                ]),
                'audio_url' => 'law.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'heavy',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>重い',
                    '<span class="indent"></span>はげしい',
                ]),
                'audio_url' => 'heavy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'tool',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>道具',
                ]),
                'audio_url' => 'tool.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'teammate',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>チームメイト',
                ]),
                'audio_url' => 'teammate.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'rest',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>休憩、休養',
                    '<span class="kakomu">動</span>休む',
                ]),
                'audio_url' => 'rest.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'ancient',
                'meaning' => json_encode([
                    '<span class="kakomu">形</span>古代の',
                ]),
                'audio_url' => 'ancient.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'promise',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>約束',
                    '<span class="kakomu">動</span>(〜を)約束する',
                ]),
                'audio_url' => 'promise.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'castle',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>城',
                ]),
                'audio_url' => 'castle.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 48,
                'word' => 'tresure',
                'meaning' => json_encode([
                    '<span class="kakomu">名</span>宝物、財宝',
                ]),
                'audio_url' => 'tresure.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
