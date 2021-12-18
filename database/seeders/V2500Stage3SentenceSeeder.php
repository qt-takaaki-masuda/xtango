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
            // // R161 - R180
            // [
            //     'section_id' => 189,
            //     'word' => 'be proud of 〜<br>ex)She <span class="border-b text-red-500">is proud of</span> her children.',
            //     'meaning' => json_encode([
            //         '〜を誇りに思う',
            //         '例)彼女は子どもたち<span class="border-b text-red-500">を誇りに思っています</span>。'
            //     ]),
            //     'audio_url' => '161.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'ask (A) for B<br>ex1)I <span class="border-b text-red-500">asked for</span> her help.<br>ex2)We <span class="border-b text-red-500">asked</span> him <span class="border-b text-red-500">for</span> advice.',
            //     'meaning' => json_encode([
            //         '(A に)B を求める',
            //         '例1)私は彼女の助け<span class="border-b text-red-500">を求めました</span>。',
            //         '例2)私たちは彼<span class="border-b text-red-500">に</span>助言<span class="border-b text-red-500">を求めました</span>。'
            //     ]),
            //     'audio_url' => '162.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'cut down 〜 / cut 〜 down<br>ex)They <span class="border-b text-red-500">cut down</span> many trees every year.',
            //     'meaning' => json_encode([
            //         '〜を切り倒す',
            //         '例)彼らは毎年たくさんの木<span class="border-b text-red-500">を切り倒します</span>。'
            //     ]),
            //     'audio_url' => '163.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be able to<br>ex1)My father <span class="border-b text-red-500">is able to</span> speak Chinese.<br>ex2)She will <span class="border-b text-red-500">be able to</span> swim soon.',
            //     'meaning' => json_encode([
            //         '〜をすることができる(= can)(⇔ be unable to)',
            //         '例1)私の父は中国語を話す<span class="border-b text-red-500">ことができます</span>。',
            //         '例2)彼女はすぐに泳ぐ<span class="border-b text-red-500">ことができる</span>でしょう。'
            //     ]),
            //     'audio_url' => '164.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'more than 〜<br>ex)My sister has <span class="border-b text-red-500">more than</span> one hundred CDs.',
            //     'meaning' => json_encode([
            //         '〜より多くの、〜以上の(⇔ less than 〜)',
            //         '例)私の姉[妹]は CD を100 枚<span class="border-b text-red-500">以上</span>持っています。'
            //     ]),
            //     'audio_url' => '165.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'as 〜 as ... can<br>ex)She ran <span class="border-b text-red-500">as</span> fast <span class="border-b text-red-500">as</span> she <span class="border-b text-red-500">could</span>.',
            //     'meaning' => json_encode([
            //         'できるだけ〜(= as 〜 as possible)',
            //         '例)彼女は<span class="border-b text-red-500">できるだけ</span>速く走りました。'
            //     ]),
            //     'audio_url' => '166.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => '〜 as well<br>ex)He speaks English, and Chinese <span class="border-b text-red-500">as well</span>.',
            //     'meaning' => json_encode([
            //         '〜もまた(= too)、そのうえ〜も',
            //         '例)彼は英語を話し、<span class="border-b text-red-500">そのうえ</span>中国語<span class="border-b text-red-500">も</span>話します。'
            //     ]),
            //     'audio_url' => '167.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'a friend of mine<br>ex)Riku is <span class="border-b text-red-500">a friend of mine</span>.',
            //     'meaning' => json_encode([
            //         '私の友達(の1人)',
            //         '例)陸は<span class="border-b text-red-500">私の友達</span>です。'
            //     ]),
            //     'audio_url' => '168.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'by oneself<br>ex)She is traveling in Japan <span class="border-b text-red-500">by herself</span>.',
            //     'meaning' => json_encode([
            //         '1人で(= alone)、独力で',
            //         '例)彼女は<span class="border-b text-red-500">1人で</span>にほんを旅行しています。'
            //     ]),
            //     'audio_url' => '169.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'do one\'s best<br>ex)I\'ll <span class="border-b text-red-500">do my best</span>.',
            //     'meaning' => json_encode([
            //         '最善を尽くす、全力を尽くす',
            //         '例)私は<span class="border-b text-red-500">最善を尽くし</span>ます。'
            //     ]),
            //     'audio_url' => '170.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'look like 〜<br>ex1)It <span class="border-b text-red-500">looks like</span> a dictionary.<br>ex2)It <span class="border-b text-red-500">looks like</span> rain.',
            //     'meaning' => json_encode([
            //         '〜のように見える、〜に似ている、〜になりそうだ',
            //         '例1)それは辞書<span class="border-b text-red-500">のように見え</span>ます。',
            //         '例2)雨に<span class="border-b text-red-500">なりそうです</span>。',
            //     ]),
            //     'audio_url' => '171.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'look after 〜<br>ex)She always <span class="border-b text-red-500">looks after</span> her cat.',
            //     'meaning' => json_encode([
            //         '〜の世話をする(= take care of 〜)',
            //         '例)彼女はいつも自分<span class="border-b text-red-500">のネコの世話をします</span>。'
            //     ]),
            //     'audio_url' => '172.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be covered with 〜<br>ex)The mountain <span class="border-b text-red-500">is covered with</span> snow.',
            //     'meaning' => json_encode([
            //         '〜でおおわれている',
            //         '例)その山は雪<span class="border-b text-red-500">でおおわれています</span>。'
            //     ]),
            //     'audio_url' => '173.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be made from 〜<br>ex)Wine <span class="border-b text-red-500">is made from</span> grapes.',
            //     'meaning' => json_encode([
            //         '〜から作られる、〜でできている(材料の質がかなり変化している場合)',
            //         '例)ワインはぶどう<span class="border-b text-red-500">から作られています</span>。'
            //     ]),
            //     'audio_url' => '174.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be made of 〜<br>ex)This table <span class="border-b text-red-500">is made of</span> wood.',
            //     'meaning' => json_encode([
            //         '〜でできている(材料の質がかなり変化しない場合)',
            //         '例)このテーブルは木<span class="border-b text-red-500">でできています</span>。'
            //     ]),
            //     'audio_url' => '175.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be known as 〜<br>ex)He <span class="border-b text-red-500">is</span> well <span class="border-b text-red-500">known as</span> a great eye doctor.',
            //     'meaning' => json_encode([
            //         '〜として知られている',
            //         '例)彼は名眼科医<span class="border-b text-red-500">として</span>よく<span class="border-b text-red-500">知られています</span>。'
            //     ]),
            //     'audio_url' => '176.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be known to 〜<br>ex)Mr. Brown <span class="border-b text-red-500">is known to</span> everyone in this town.',
            //     'meaning' => json_encode([
            //         '〜に知られている',
            //         '例)ブラウンさんはこの町のみんな<span class="border-b text-red-500">に知られています</span>。'
            //     ]),
            //     'audio_url' => '177.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be surprised at[by] 〜<br>ex)Jane <span class="border-b text-red-500">was</span> very <span class="border-b text-red-500">surprised at</span> the size of the building.',
            //     'meaning' => json_encode([
            //         '〜に驚く',
            //         '例)ジェーンはその建物の大きさ<span class="border-b text-red-500">に</span>とても<span class="border-b text-red-500">驚きました</span>。'
            //     ]),
            //     'audio_url' => '178.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be surprised to 〜<br>ex)I <span class="border-b text-red-500">was surprised to</span> hear the news.',
            //     'meaning' => json_encode([
            //         '〜して驚く',
            //         '例)私はその知らせを<span class="border-b text-red-500">聞いて驚きました</span>。'
            //     ]),
            //     'audio_url' => '179.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 189,
            //     'word' => 'be pleased with 〜<br>ex)Kumi <span class="border-b text-red-500">is pleased with</span> her new shoes.',
            //     'meaning' => json_encode([
            //         '〜を喜ぶ、〜が気に入っている',
            //         '例)久美は新しい靴<span class="border-b text-red-500">が気に入っています</span>。'
            //     ]),
            //     'audio_url' => '180.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // R181 - R200
            // [
            //     'section_id' => 190,
            //     'word' => 'be filled with 〜<br>ex)The box <span class="border-b text-red-500">was filled with</span> toys.',
            //     'meaning' => json_encode([
            //         '〜でいっぱいである(= be full of 〜)',
            //         '例)その箱はおもちゃ<span class="border-b text-red-500">でいっぱいでした</span>。',
            //     ]),
            //     'audio_url' => '181.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 190,
            //     'word' => 'be full of 〜<br>ex)The stadium <span class="border-b text-red-500">was full of</span> people.',
            //     'meaning' => json_encode([
            //         '〜でいっぱいである(= be filled with 〜)',
            //         '例)そのスタジアムは人<span class="border-b text-red-500">でいっぱいでした</span>。'
            //     ]),
            //     'audio_url' => '182.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 190,
            //     'word' => 'be late for 〜<br>ex)Get up now, or you\'ll <span class="border-b text-red-500">be late for</span> school.',
            //     'meaning' => json_encode([
            //         '〜に遅れる、遅刻する(⇔ be in time for)',
            //         '例)今すぐ起きなさい。そうしなければ学校<span class="border-b text-red-500">に遅れます</span>よ。'
            //     ]),
            //     'audio_url' => '183.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 190,
            //     'word' => 'be popular with[among] 〜<br>ex)The comic book <span class="border-b text-red-500">is popular with</span> young people.',
            //     'meaning' => json_encode([
            //         '〜に人気がある',
            //         '例)そのマンガは若い人たち<span class="border-b text-red-500">の間で人気があります</span>。'
            //     ]),
            //     'audio_url' => '184.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 190,
            //     'word' => 'be tired of 〜<br>ex)He <span class="border-b text-red-500">is tired of</span> country life.',
            //     'meaning' => json_encode([
            //         '〜に飽き(てい)る、うんざりする',
            //         '例)彼は田舎の生活に<span class="border-b text-red-500">うんざりしています</span>。'
            //     ]),
            //     'audio_url' => '185.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            [
                'section_id' => 190,
                'word' => 'be afraid of 〜<br>ex)I <span class="border-b text-red-500">was afraid of</span> dogs when I was a child.',
                'meaning' => json_encode([
                    '〜をこわがる、恐れる',
                    '例)子供の頃私は犬を<span class="border-b text-red-500">怖がっていました</span>。'
                ]),
                'audio_url' => '186.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'have been to 〜<br>ex)I <span class="border-b text-red-500">have been to</span> Korea once.',
                'meaning' => json_encode([
                    '〜へ行ったことがある',
                    '例)私は1度韓国<span class="border-b text-red-500">へ行ったことがあります</span>。'
                ]),
                'audio_url' => '187.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'since then<br>ex)We haven\'t heard anything about him <span class="border-b text-red-500">since then</span>.',
                'meaning' => json_encode([
                    'それ以来',
                    '例)私達は<span class="border-b text-red-500">それ以来</span>彼について何も聞いていません。'
                ]),
                'audio_url' => '188.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'for a long time<br>ex)I haven\'t seen you <span class="border-b text-red-500">for a long time</span>.',
                'meaning' => json_encode([
                    '長い間',
                    '例)私はあなたに<span class="border-b text-red-500">長い間</span>会いませんでした。[お久しぶりです。]'
                ]),
                'audio_url' => '189.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'for the first time<br>ex)Mary has loved tofu since she had it <span class="border-b text-red-500">for the first time</span>.',
                'meaning' => json_encode([
                    '初めて',
                    '例)メアリーは<span class="border-b text-red-500">初めて</span>食べて以来、豆腐が大好きです。'
                ]),
                'audio_url' => '190.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'many times<br>ex)I have visited the museum <span class="border-b text-red-500">many times.</span>',
                'meaning' => json_encode([
                    '何度も',
                    '例)私は博物館を<span class="border-b text-red-500">何度も</span>訪れたことがあります。'
                ]),
                'audio_url' => '191.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'at first<br>ex)<span class="border-b text-red-500">At first</span> I didn\'t understand him.',
                'meaning' => json_encode([
                    '最初は、初めは',
                    '例)<span class="border-b text-red-500">最初</span>、私は彼の言うことがわかりませんでした。'
                ]),
                'audio_url' => '192.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'at last<br>ex)<span class="border-b text-red-500">At last</span> she became a singer.',
                'meaning' => json_encode([
                    'ついに、とうとう',
                    '例)彼女は<span class="border-b text-red-500">ついに</span>歌手になりました。'
                ]),
                'audio_url' => '193.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'at once<br>ex)He called me <span class="border-b text-red-500">at once</span>.',
                'meaning' => json_encode([
                    'すぐに、一度に',
                    '例)彼は<span class="border-b text-red-500">すぐに</span>私に電話してくれました。'
                ]),
                'audio_url' => '194.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'at the same time<br>ex)The students began to speak <span class="border-b text-red-500">at the same time</span>.',
                'meaning' => json_encode([
                    '同時に',
                    '例)その生徒たちは<span class="border-b text-red-500">同時に</span>話し始めました。'
                ]),
                'audio_url' => '195.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'once a week[year]<br>ex)I play the piano <span class="border-b text-red-500">once a week</span>.',
                'meaning' => json_encode([
                    '週に1回[年に1回]',
                    '例)私は<span class="border-b text-red-500">1週間に1回</span>ピアノを弾きます。'
                ]),
                'audio_url' => '196.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'right now<br>ex)Do it <span class="border-b text-red-500">right now</span>.',
                'meaning' => json_encode([
                    'ちょうど今、今すぐ',
                    '例)<span class="border-b text-red-500">今すぐ</span>それをしなさい。'
                ]),
                'audio_url' => '197.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'these days<br>ex)I am very busy <span class="border-b text-red-500">these days</span>.',
                'meaning' => json_encode([
                    '最近、近ごろ',
                    '例)<span class="border-b text-red-500">近ごろ</span>私はとても忙しいです。'
                ]),
                'audio_url' => '198.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'be happy[glad] to 〜<br>ex)I <span class="border-b text-red-500">am happy to</span> talk with you.',
                'meaning' => json_encode([
                    '〜してうれしい、喜んで〜する',
                    '例)あなたとお話し<span class="border-b text-red-500">してうれしいです</span>。'
                ]),
                'audio_url' => '199.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 190,
                'word' => 'how to 〜<br>ex)Could you tell me <span class="border-b text-red-500">how to</span> get to the station?',
                'meaning' => json_encode([
                    '〜のしかた、どのように〜したらよいか',
                    '例)駅への行<span class="border-b text-red-500">き方</span>を教えてくださいませんか？'
                ]),
                'audio_url' => '200.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // R201 - R220
            [
                'section_id' => 191,
                'word' => 'what to 〜<br>ex)I didn\'t know <span class="border-b text-red-500">what to</span> do next.',
                'meaning' => json_encode([
                    '何を〜したらよいか',
                    '例)私は次に<span class="border-b text-red-500">何をしたらよいか</span>わかりませんでした。'
                ]),
                'audio_url' => '201.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'when to 〜<br>ex)Tell me <span class="border-b text-red-500">when to</span> begin.',
                'meaning' => json_encode([
                    'いつ〜すべきか[したらよいか]',
                    '例)<span class="border-b text-red-500">いつ</span>始め<span class="border-b text-red-500">たらよいか</span>教えてください。'
                ]),
                'audio_url' => '202.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'where to 〜<br>ex)He asked me <span class="border-b text-red-500">where to</span> go to get the CD.',
                'meaning' => json_encode([
                    'どこで[へ]〜すべきか[したらよいか]',
                    '例)彼はそのCDを買うには<span class="border-b text-red-500">どこ</span>行っ<span class="border-b text-red-500">たらよいか</span>私にたずねました。'
                ]),
                'audio_url' => '203.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'ask A to 〜<br>ex)He <span class="border-b text-red-500">asked</span> me <span class="border-b text-red-500">to</span> wait a few minutes.',
                'meaning' => json_encode([
                    'Aに〜するように頼む',
                    '例)彼は私<span class="border-b text-red-500">に</span>数分待って<span class="border-b text-red-500">くれるように頼みました</span>。'
                ]),
                'audio_url' => '204.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'tell A to 〜<br>ex)He <span class="border-b text-red-500">told</span> us not <span class="border-b text-red-500">to</span> use the room.',
                'meaning' => json_encode([
                    'Aに〜するように言う',
                    '例)彼は私たち<span class="border-b text-red-500">に</span>その部屋を使わない<span class="border-b text-red-500">ように言いました</span>。'
                ]),
                'audio_url' => '205.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'want A to 〜<br>ex)Do you <span class="border-b text-red-500">want</span> me <span class="border-b text-red-500">to</span> go with you?',
                'meaning' => json_encode([
                    'Aに〜してほしい',
                    '例)私<span class="border-b text-red-500">に</span>いっしょに行っ<span class="border-b text-red-500">てほしい</span>のですか？'
                ]),
                'audio_url' => '206.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'enough to 〜<br>ex)He was kind <span class="border-b text-red-500">enough to</span> help me.',
                'meaning' => json_encode([
                    '〜するほど十分に･･･',
                    '例)彼は親切<span class="border-b text-red-500">にも</span>私を手伝っ<span class="border-b text-red-500">てくれました</span>。'
                ]),
                'audio_url' => '207.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'too 〜 (for A) to ...<br>ex1)I\'m <span class="border-b text-red-500">too</span> busy <span class="border-b text-red-500">to</span> watch TV.<br>ex2)This problem is <span class="border-b text-red-500">too</span> difficult <span class="border-b text-red-500">for</span> me <span class="border-b text-red-500">to</span> solve.',
                'meaning' => json_encode([
                    '〜すぎて(Aが)･･･できない',
                    '例1)私は忙し<span class="border-b text-red-500">すぎて</span>テレビを見ることが<span class="border-b text-red-500">できません</span>。',
                    '例2)この問題は難し<span class="border-b text-red-500">すぎて</span>私<span class="border-b text-red-500">には</span>解くことが<span class="border-b text-red-500">できません</span>。'
                ]),
                'audio_url' => '208.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'so 〜 that ...<br>ex)This problem is <span class="border-b text-red-500">so</span> difficult <span class="border-b text-red-500">that</span> I can\'t solve it.',
                'meaning' => json_encode([
                    'とても〜なので...',
                    '例)この問題は<span class="border-b text-red-500">とても</span>難しい<span class="border-b text-red-500">ので</span>私には解くことができません。'
                ]),
                'audio_url' => '209.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 191,
                'word' => 'and so on<br>ex)I bought a book, two pens, an eraser <span class="border-b text-red-500">and so on</span>.',
                'meaning' => json_encode([
                    '〜など',
                    '例)私は本1冊、ペン2本、消しゴム1つ<span class="border-b text-red-500">など</span>を買いました。'
                ]),
                'audio_url' => '210.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
