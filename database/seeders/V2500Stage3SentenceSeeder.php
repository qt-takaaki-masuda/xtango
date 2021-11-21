<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class V2500Stage3SentenceSeeder extends Seeder
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
            // R161 - R180
            [
                'section_id' => 189,
                'word' => 'be proud of 〜<br>ex)She <span class="border-b text-red-500">is proud of</span> her children.',
                'meaning' => json_encode([
                    '〜を誇りに思う',
                    '例)彼女は子どもたち<span class="border-b text-red-500">を誇りに思っています</span>。'
                ]),
                'audio_url' => '161.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'ask (A) for B<br>ex1)I <span class="border-b text-red-500">asked for</span> her help.<br>ex2)We <span class="border-b text-red-500">asked</span> him <span class="border-b text-red-500">for</span> advice.',
                'meaning' => json_encode([
                    '(A に)B を求める',
                    '例1)私は彼女の助け<span class="border-b text-red-500">を求めました</span>。',
                    '例2)私たちは彼<span class="border-b text-red-500">に</span>助言<span class="border-b text-red-500">を求めました</span>。'
                ]),
                'audio_url' => '162.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'cut down 〜 / cut 〜 down<br>ex)They <span class="border-b text-red-500">cut down</span> many trees every year.',
                'meaning' => json_encode([
                    '〜を切り倒す',
                    '例)彼らは毎年たくさんの木<span class="border-b text-red-500">を切り倒します</span>。'
                ]),
                'audio_url' => '163.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be able to<br>ex1)My father <span class="border-b text-red-500">is able to</span> speak Chinese.<br>ex2)She will <span class="border-b text-red-500">be able to</span> swim soon.',
                'meaning' => json_encode([
                    '〜をすることができる(= can)(⇔ be unable to)',
                    '例1)私の父は中国語を話す<span class="border-b text-red-500">ことができます</span>。',
                    '例2)彼女はすぐに泳ぐ<span class="border-b text-red-500">ことができる</span>でしょう。'
                ]),
                'audio_url' => '164.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'more than 〜<br>ex)My sister has <span class="border-b text-red-500">more than</span> one hundred CDs.',
                'meaning' => json_encode([
                    '〜より多くの、〜以上の(⇔ less than 〜)',
                    '例)私の姉[妹]は CD を100 枚<span class="border-b text-red-500">以上</span>持っています。'
                ]),
                'audio_url' => '165.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'as 〜 as ... can<br>ex)She ran <span class="border-b text-red-500">as</span> fast <span class="border-b text-red-500">as</span> she <span class="border-b text-red-500">could</span>.',
                'meaning' => json_encode([
                    'できるだけ〜(= as 〜 as possible)',
                    '例)彼女は<span class="border-b text-red-500">できるだけ</span>速く走りました。'
                ]),
                'audio_url' => '166.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => '〜 as well<br>ex)He speaks English, and Chinese <span class="border-b text-red-500">as well</span>.',
                'meaning' => json_encode([
                    '〜もまた(= too)、そのうえ〜も',
                    '例)彼は英語を話し、<span class="border-b text-red-500">そのうえ</span>中国語<span class="border-b text-red-500">も</span>話します。'
                ]),
                'audio_url' => '167.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'a friend of mine<br>ex)Riku is <span class="border-b text-red-500">a friend of mine</span>.',
                'meaning' => json_encode([
                    '私の友達(の1人)',
                    '例)陸は<span class="border-b text-red-500">私の友達</span>です。'
                ]),
                'audio_url' => '168.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'by oneself<br>ex)She is traveling in Japan <span class="border-b text-red-500">by herself</span>.',
                'meaning' => json_encode([
                    '1人で(= alone)、独力で',
                    '例)彼女は<span class="border-b text-red-500">1人で</span>にほんを旅行しています。'
                ]),
                'audio_url' => '169.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'do one\'s best<br>ex)I\'ll <span class="border-b text-red-500">do my best</span>.',
                'meaning' => json_encode([
                    '最善を尽くす、全力を尽くす',
                    '例)私は<span class="border-b text-red-500">最善を尽くし</span>ます。'
                ]),
                'audio_url' => '170.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'look like 〜<br>ex1)It <span class="border-b text-red-500">looks like</span> a dictionary.<br>ex2)It <span class="border-b text-red-500">looks like</span> rain.',
                'meaning' => json_encode([
                    '〜のように見える、〜に似ている、〜になりそうだ',
                    '例1)それは辞書<span class="border-b text-red-500">のように見え</span>ます。',
                    '例2)雨に<span class="border-b text-red-500">なりそうです</span>。',
                ]),
                'audio_url' => '171.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'look after 〜<br>ex)She always <span class="border-b text-red-500">looks after</span> her cat.',
                'meaning' => json_encode([
                    '〜の世話をする(= take care of 〜)',
                    '例)彼女はいつも自分<span class="border-b text-red-500">のネコの世話をします</span>。'
                ]),
                'audio_url' => '172.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be covered with 〜<br>ex)The mountain <span class="border-b text-red-500">is covered with</span> snow.',
                'meaning' => json_encode([
                    '〜でおおわれている',
                    '例)その山は雪<span class="border-b text-red-500">でおおわれています</span>。'
                ]),
                'audio_url' => '173.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be made from 〜<br>ex)Wine <span class="border-b text-red-500">is made from</span> grapes.',
                'meaning' => json_encode([
                    '〜から作られる、〜でできている(材料の質がかなり変化している場合)',
                    '例)ワインはぶどう<span class="border-b text-red-500">から作られています</span>。'
                ]),
                'audio_url' => '174.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be made of 〜<br>ex)This table <span class="border-b text-red-500">is made of</span> wood.',
                'meaning' => json_encode([
                    '〜でできている(材料の質がかなり変化しない場合)',
                    '例)このテーブルは木<span class="border-b text-red-500">でできています</span>。'
                ]),
                'audio_url' => '175.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be known as 〜<br>ex)He <span class="border-b text-red-500">is</span> well <span class="border-b text-red-500">known as</span> a great eye doctor.',
                'meaning' => json_encode([
                    '〜として知られている',
                    '例)彼は名眼科医<span class="border-b text-red-500">として</span>よく<span class="border-b text-red-500">知られています</span>。'
                ]),
                'audio_url' => '176.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be known to 〜<br>ex)Mr. Brown <span class="border-b text-red-500">is known to</span> everyone in this town.',
                'meaning' => json_encode([
                    '〜に知られている',
                    '例)ブラウンさんはこの町のみんな<span class="border-b text-red-500">に知られています</span>。'
                ]),
                'audio_url' => '177.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be surprised at[by] 〜<br>ex)Jane <span class="border-b text-red-500">was</span> very <span class="border-b text-red-500">surprised at</span> the size of the building.',
                'meaning' => json_encode([
                    '〜に驚く',
                    '例)ジェーンはその建物の大きさ<span class="border-b text-red-500">に</span>とても<span class="border-b text-red-500">驚きました</span>。'
                ]),
                'audio_url' => '178.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be surprised to 〜<br>ex)I <span class="border-b text-red-500">was surprised to</span> hear the news.',
                'meaning' => json_encode([
                    '〜して驚く',
                    '例)私はその知らせを<span class="border-b text-red-500">聞いて驚きました</span>。'
                ]),
                'audio_url' => '179.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 189,
                'word' => 'be pleased with 〜<br>ex)Kumi <span class="border-b text-red-500">is pleased with</span> her new shoes.',
                'meaning' => json_encode([
                    '〜を喜ぶ、〜が気に入っている',
                    '例)久美は新しい靴<span class="border-b text-red-500">が気に入っています</span>。'
                ]),
                'audio_url' => '180.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // R181 - R200
            [
                'section_id' => 190,
                'word' => 'be filled with 〜<br>ex)The box <span class="border-b text-red-500">was filled with</span> toys.',
                'meaning' => json_encode([
                    '〜でいっぱいである(= be full of 〜)',
                    '例)その箱はおもちゃ<span class="border-b text-red-500">でいっぱいでした</span>。',
                ]),
                'audio_url' => '181.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'be full of 〜<br>ex)The stadium <span class="border-b text-red-500">was full of</span> people.',
                'meaning' => json_encode([
                    '〜でいっぱいである(= be filled with 〜)',
                    '例)そのスタジアムは人<span class="border-b text-red-500">でいっぱいでした</span>。'
                ]),
                'audio_url' => '182.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'be late for 〜<br>ex)Get up now, or you\'ll <span class="border-b text-red-500">be late for</span> school.',
                'meaning' => json_encode([
                    '〜に遅れる、遅刻する(⇔ be in time for)',
                    '例)今すぐ起きなさい。そうしなければ学校<span class="border-b text-red-500">に遅れます</span>よ。'
                ]),
                'audio_url' => '183.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'be popular with[among] 〜<br>ex)The comic book <span class="border-b text-red-500">is popular with</span> young people.',
                'meaning' => json_encode([
                    '〜に人気がある',
                    '例)そのマンガは若い人たち<span class="border-b text-red-500">の間で人気があります</span>。'
                ]),
                'audio_url' => '184.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'be tired of 〜<br>ex)He <span class="border-b text-red-500">is tired of</span> country life.',
                'meaning' => json_encode([
                    '〜に飽き(てい)る、うんざりする',
                    '例)彼は田舎の生活に<span class="border-b text-red-500">うんざりしています</span>。'
                ]),
                'audio_url' => '185.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
