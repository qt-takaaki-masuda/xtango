<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1800（単語編） LEVEL1
        DB::table('words')->insert([
            [
                'section_id' => 1,
                'word' => 'the',
                'meaning' => json_encode([
                    '<span class="kakomu">冠</span>その',
                ]),
                'audio_url' => 'the.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'to',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>(到達点・方向)〜へ[に]',
                    '<span class="indent">(範囲・限度)〜まで</span>',
                    '<span class="indent">(不定詞をつくる)</span>',
                ]),
                'audio_url' => 'to.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'I',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>私は[が]'
                ]),
                'audio_url' => 'i.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'a / an',
                'meaning' => json_encode([
                    '<span class="kakomu">冠</span>1つの、ある〜',
                    '<span class="indent">〜につき</span>',
                    '<span class="indent">〜というもの</span>',
                ]),
                'audio_url' => 'a.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
