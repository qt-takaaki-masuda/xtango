<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSection42Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2500（連語編） Section4
        DB::table('words')->insert([
            // R281 - R300
            [
                'section_id' => 195,
                'word' => 'be similar to 〜<br>・Your coat <span class="border-b text-red-500">is similar to</span> hers.',
                'meaning' => json_encode([
                    '〜に似ている',
                    '・あなたのコートは彼女のもの<span class="border-b text-red-500">と似ています。</span>',
                ]),
                'audio_url' => '281.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'the same as 〜<br>・His opinion is <span class="border-b text-red-500">the same as</span> mine.',
                'meaning' => json_encode([
                    '〜と同じ、〜と同様な',
                    '・彼の意見は私の意見<span class="border-b text-red-500">と同じです。</span>',
                ]),
                'audio_url' => '282.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'worry about 〜<br>・She <span class="border-b text-red-500">worries about</span> her future.',
                'meaning' => json_encode([
                    '〜を心配する、〜を気にする',
                    '・彼女は自分の将来<span class="border-b text-red-500">を心配しています。</span>',
                ]),
                'audio_url' => '283.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'write down 〜 ／ write 〜 down<br>・I <span class="border-b text-red-500">wrote down</span> her words in my notebook.',
                'meaning' => json_encode([
                    '〜を書き留める、〜を記録する',
                    '・私は彼女の言うことをノートに<span class="border-b text-red-500">書き留めました。</span>',
                ]),
                'audio_url' => '284.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'write to 〜<br>・I sometimes <span class="border-b text-red-500">write to</span> my grandmother.',
                'meaning' => json_encode([
                    '〜に手紙を書く',
                    '・私は時々祖母<span class="border-b text-red-500">に手紙を書きます。</span>',
                ]),
                'audio_url' => '285.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
