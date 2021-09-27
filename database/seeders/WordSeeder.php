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
            // 0001 - 0020
            // [
            //     'section_id' => 1,
            //     'word' => 'the',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">冠</span>その',
            //     ]),
            //     'audio_url' => 'the.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 1,
            //     'word' => 'to',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">前</span>(到達点・方向)〜へ[に]',
            //         '<span class="indent">(範囲・限度)〜まで</span>',
            //         '<span class="indent">(不定詞をつくる)</span>',
            //     ]),
            //     'audio_url' => 'to.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 1,
            //     'word' => 'I',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>私は[が]'
            //     ]),
            //     'audio_url' => 'i.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 1,
            //     'word' => 'a / an',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">冠</span>1つの、ある〜',
            //         '<span class="indent">〜につき</span>',
            //         '<span class="indent">〜というもの</span>',
            //     ]),
            //     'audio_url' => 'an.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            [
                'section_id' => 1,
                'word' => 'in',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>(場所)〜の中に[で]',
                    '<span class="indent">(時)〜に、〜たてば</span>',
                    '<span class="indent">(手段・方法)〜で</span>',
                ]),
                'audio_url' => 'in.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'and',
                'meaning' => json_encode([
                    '<span class="kakomu">接</span>〜と',
                    '<span class="indent">そして</span>',
                    '<span class="indent">(命令文のあとで)そうすれば</span>',
                ]),
                'audio_url' => 'and.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'you',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>あなたは[が]、あなたたちは[が]',
                    '<span class="indent">あなたを[に]、あなたたちを[に]</span>',
                    '<span class="indent">(一般に)人は</span>',
                ]),
                'audio_url' => 'you.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'is',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜である',
                    '<span class="indent">ある、いる</span>',
                    '<span class="kakomu">助</span>(進行形・受け身をつくる)',
                ]),
                'audio_url' => 'is.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'of',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>(所有・所属)〜の',
                    '<span class="indent">(部分)〜の中で[の]</span>',
                    '<span class="indent">(関連)〜について</span>',
                ]),
                'audio_url' => 'of.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'it',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>それは[が]',
                    '<span class="indent">それを[に]</span>',
                ]),
                'audio_url' => 'it.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'have',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜を持っている',
                    '<span class="indent">〜を食べる、〜を飲む</span>',
                    '<span class="kakomu">助</span>(現在完了形をつくる)',
                ]),
                'audio_url' => 'have.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'not',
                'meaning' => json_encode([
                    '<span class="kakomu">副</span>〜でない、〜しない',
                ]),
                'audio_url' => 'not.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'was',
                'meaning' => json_encode([
                    '(am、is の過去形)',
                    '<span class="kakomu">動</span>〜だった',
                    '<span class="indent">あった、いた</span>',
                    '<span class="kakomu">助</span>(進行形・受け身をつくる)',
                ]),
                'audio_url' => 'was.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'that',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>あれ、それ',
                    '<span class="indent">(関係代名詞)</span>',
                    '<span class="kakomu">形</span>あの、その',
                    '<span class="kakomu">接</span>〜ということ',
                ]),
                'audio_url' => 'that.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'for',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>(利益)〜のために',
                    '<span class="indent"></span>(目的・準備)〜の目的で',
                    '<span class="indent"></span>(方向)〜へ向かって',
                    '<span class="indent"></span>(時)〜の間',
                ]),
                'audio_url' => 'for.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'he',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>彼は[が]',
                ]),
                'audio_url' => 'he.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'do',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>（〜を）する',
                    '<span class="kakomu">助</span>(疑問文・否定文をつくる)',
                ]),
                'audio_url' => 'do.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'are',
                'meaning' => json_encode([
                    '<span class="kakomu">動</span>〜である',
                    '<span class="indent">ある、いる</span>',
                    '<span class="kakomu">助</span>(進行形・受け身をつくる)',
                ]),
                'audio_url' => 'are.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'we',
                'meaning' => json_encode([
                    '<span class="kakomu">代</span>私達は[が]',
                    '<span class="indent">(自分を含め一般的に)人は</span>',
                ]),
                'audio_url' => 'we.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 1,
                'word' => 'about',
                'meaning' => json_encode([
                    '<span class="kakomu">前</span>〜について',
                    '<span class="kakomu">副</span>およそ',
                ]),
                'audio_url' => 'about.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
