<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class V2500Stage4SentenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2500（連語編） Stage4
        DB::table('words')->insert([
            // R261 - R280
            [
                'section_id' => 194,
                'word' => 'go into 〜<br>・Kate and I <span class="border-b text-red-500">went into</span> the room.',
                'meaning' => json_encode([
                    '〜(の中)に入る',
                    '・ケイトと私はその部屋<span class="border-b text-red-500">の中に入って行きました。</span>',
                ]),
                'audio_url' => '261.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'go through 〜<br>・They <span class="border-b text-red-500">went through</span> the ticket gate.<br>・My grandfather <span class="border-b text-red-500">went through</span> a lot of difficulties.',
                'meaning' => json_encode([
                    '〜を通り抜ける、〜を経験する',
                    '・彼らは改札口<span class="border-b text-red-500">を通り抜けました。</span>',
                    '・祖父はたくさんの苦難を<span class="border-b text-red-500">経験しました。</span>',
                ]),
                'audio_url' => '262.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'go by (〜)<br>・Many years <span class="border-b text-red-500">went by.</span><br>・Yuji has just <span class="border-b text-red-500">gone by</span> the window.',
                'meaning' => json_encode([
                    '<<時が>>過ぎ去る、〜のそばを通り過ぎる',
                    '・長い年月が<span class="border-b text-red-500">過ぎ去りました。</span>',
                    '・ゆうじがちょうど窓の<span class="border-b text-red-500">そばを通り過ぎました。</span>',
                ]),
                'audio_url' => '263.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'go on a trip<br>・Mr. and Mrs. Jones <span class="border-b text-red-500">went on a trip</span> yesterday.',
                'meaning' => json_encode([
                    '旅行に出かける',
                    '・ジョーンズ夫妻は昨日<span class="border-b text-red-500">旅行に出かけました。</span>',
                ]),
                'audio_url' => '264.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come on<br>・<span class="border-b text-red-500">Come on</span>, let\'s hurry.<br>・Spring is <span class="border-b text-red-500">Coming on.</span>',
                'meaning' => json_encode([
                    '<<命令文で>>さあ, 〜、やってくる',
                    '・<span class="border-b text-red-500">さあ</span>, 急ぎましょう。',
                    '・春が<span class="border-b text-red-500">やってきます。</span>',
                ]),
                'audio_url' => '265.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come out<br>・Many stars <span class="border-b text-red-500">come out</span> in the sky.',
                'meaning' => json_encode([
                    '出てくる、現れる',
                    '・たくさんの星が空に<span class="border-b text-red-500">現れました。</span>',
                ]),
                'audio_url' => '266.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come true<br>・Your dream will <span class="border-b text-red-500">come true.</span>',
                'meaning' => json_encode([
                    '<<夢などが>>実現する',
                    '・あなたの夢は<span class="border-b text-red-500">実現する</span>でしょう。',
                ]),
                'audio_url' => '267.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come up (to 〜)<br>・A stranger <span class="border-b text-red-500">came up to</span> me.',
                'meaning' => json_encode([
                    '(〜に)近づく',
                    '・見知らぬ人が私<span class="border-b text-red-500">に近づいてきました。</span>',
                ]),
                'audio_url' => '268.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'B as well as A<br>・She plays the piano <span class="border-b text-red-500">as well as</span> the violin.',
                'meaning' => json_encode([
                    'A だけでなく B も',
                    '・彼女はバイオリン<span class="border-b text-red-500">だけでなく</span>ピアノ<span class="border-b text-red-500">も</span>弾きます。',
                ]),
                'audio_url' => '269.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'more and more 〜<br>・<span class="border-b text-red-500">More and more</span> foreign people are visiting Japan.',
                'meaning' => json_encode([
                    'ますます多くの〜',
                    '・<span class="border-b text-red-500">ますます多くの</span>外国の人々が日本を訪れています。',
                ]),
                'audio_url' => '270.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'no more 〜<br>・There is <span class="border-b text-red-500">no more</span> milk in the refrigerator.',
                'meaning' => json_encode([
                    'もう〜ない、これ以上〜ない',
                    '・冷蔵庫に牛乳は<span class="border-b text-red-500">もう</span>あり<span class="border-b text-red-500">ません。</span>',
                ]),
                'audio_url' => '271.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'not 〜 any more<br>・I\'m <span class="border-b text-red-500">not</span> angry with you <span class="border-b text-red-500">any more.</span>',
                'meaning' => json_encode([
                    'もはや〜ない、これ以上〜ない',
                    '・私は<span class="border-b text-red-500">もう</span>あなたのことを怒って<span class="border-b text-red-500">いません。</span>',
                ]),
                'audio_url' => '272.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be based on 〜<br>・His story <span class="border-b text-red-500">was based on</span> his own experiences.',
                'meaning' => json_encode([
                    '〜に基づいている、〜を基にする',
                    '・彼の物語は自分自身の体験<span class="border-b text-red-500">に基づいたものでした。</span>',
                ]),
                'audio_url' => '273.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be impressed with [by] 〜<br>・I <span class="border-b text-red-500">was</span> very <span class="border-b text-red-500">impressed with</span> her speech.<br>・I <span class="border-b text-red-500">was</span> deeply <span class="border-b text-red-500">impresseed by</span> the story.',
                'meaning' => json_encode([
                    '〜に感銘を受ける、〜に感動する',
                    '・私は彼女のスピーチ<span class="border-b text-red-500">に</span>とても<span class="border-b text-red-500">感銘を受けました。</span>',
                    '・私はその話に深く<span class="border-b text-red-500">感動しました。</span>',
                ]),
                'audio_url' => '274.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be satisfied with 〜<br>・<span class="border-b text-red-500">Are</span> you <span class="border-b text-red-500">satisfied with</span> the result of the exam?',
                'meaning' => json_encode([
                    '〜に満足している',
                    '・あなたはその経験の結果<span class="border-b text-red-500">に満足しています</span>か？',
                ]),
                'audio_url' => '275.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be shocked to 〜<br>・She <span class="border-b text-red-500">is shocked to</span> hear the news.',
                'meaning' => json_encode([
                    '〜して衝撃(ショック)を受ける',
                    '・彼女はその知らせを聞い<span class="border-b text-red-500">でショックを受けています。</span>',
                ]),
                'audio_url' => '276.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be absent from 〜<br>・Mary has <span class="border-b text-red-500">been absent from</span> school for three days.',
                'meaning' => json_encode([
                    '〜を欠席する、〜を休む',
                    '・メアリーは3日間学校<span class="border-b text-red-500">を休んでいます。</span>',
                ]),
                'audio_url' => '277.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be busy 〜ing<br>・My brother <span class="border-b text-red-500">is busy</span> looking for a job.',
                'meaning' => json_encode([
                    '〜するのに忙しい',
                    '・私の兄[弟]は職探し<span class="border-b text-red-500">に忙しい。</span>',
                ]),
                'audio_url' => '278.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be sure (that) 〜<br>・We <span class="border-b text-red-500">are sure that</span> Tom will succeed.',
                'meaning' => json_encode([
                    '〜であることを確信している',
                    '・私達はトムが成功する<span class="border-b text-red-500">ことを確信しています。</span>',
                ]),
                'audio_url' => '279.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be wrong with 〜<br>・Something <span class="border-b text-red-500">is wrong with</span> my bike.',
                'meaning' => json_encode([
                    '〜の具合が悪い',
                    '・私の自転車<span class="border-b text-red-500">は</span>どこか<span class="border-b text-red-500">故障しています。</span>',
                ]),
                'audio_url' => '280.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
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
