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
                'word' => 'go into 〜<br>ex)Kate and I <span class="border-b text-red-500">went into</span> the room.',
                'meaning' => json_encode([
                    '〜(の中)に入る',
                    '例)ケイトと私はその部屋<span class="border-b text-red-500">の中に入って行きました。</span>',
                ]),
                'audio_url' => '261.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'go through 〜<br>ex1)They <span class="border-b text-red-500">went through</span> the ticket gate.<br>ex2)My grandfather <span class="border-b text-red-500">went through</span> a lot of difficulties.',
                'meaning' => json_encode([
                    '〜を通り抜ける、〜を経験する',
                    '例1)彼らは改札口<span class="border-b text-red-500">を通り抜けました。</span>',
                    '例2)祖父はたくさんの苦難を<span class="border-b text-red-500">経験しました。</span>',
                ]),
                'audio_url' => '262.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'go by (〜)<br>ex1)Many years <span class="border-b text-red-500">went by.</span><br>ex2)Yuji has just <span class="border-b text-red-500">gone by</span> the window.',
                'meaning' => json_encode([
                    '[時が]過ぎ去る、〜のそばを通り過ぎる',
                    '例1)長い年月が<span class="border-b text-red-500">過ぎ去りました。</span>',
                    '例2)ゆうじがちょうど窓の<span class="border-b text-red-500">そばを通り過ぎました。</span>',
                ]),
                'audio_url' => '263.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'go on a trip<br>ex)Mr. and Mrs. Jones <span class="border-b text-red-500">went on a trip</span> yesterday.',
                'meaning' => json_encode([
                    '旅行に出かける',
                    '例)ジョーンズ夫妻は昨日<span class="border-b text-red-500">旅行に出かけました。</span>',
                ]),
                'audio_url' => '264.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come on<br>ex1)<span class="border-b text-red-500">Come on</span>, let\'s hurry.<br>ex2)Spring is <span class="border-b text-red-500">Coming on.</span>',
                'meaning' => json_encode([
                    '[命令文で]さあ, 〜、やってくる',
                    '例1)<span class="border-b text-red-500">さあ</span>, 急ぎましょう。',
                    '例2)春が<span class="border-b text-red-500">やってきます。</span>',
                ]),
                'audio_url' => '265.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come out<br>ex)Many stars <span class="border-b text-red-500">come out</span> in the sky.',
                'meaning' => json_encode([
                    '出てくる、現れる',
                    '例)たくさんの星が空に<span class="border-b text-red-500">現れました。</span>',
                ]),
                'audio_url' => '266.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come true<br>ex)Your dream will <span class="border-b text-red-500">come true.</span>',
                'meaning' => json_encode([
                    '[夢などが]実現する',
                    '例)あなたの夢は<span class="border-b text-red-500">実現する</span>でしょう。',
                ]),
                'audio_url' => '267.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'come up (to 〜)<br>ex)A stranger <span class="border-b text-red-500">came up to</span> me.',
                'meaning' => json_encode([
                    '(〜に)近づく',
                    '例)見知らぬ人が私<span class="border-b text-red-500">に近づいてきました。</span>',
                ]),
                'audio_url' => '268.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'B as well as A<br>ex)She plays the piano <span class="border-b text-red-500">as well as</span> the violin.',
                'meaning' => json_encode([
                    'A だけでなく B も',
                    '例)彼女はバイオリン<span class="border-b text-red-500">だけでなく</span>ピアノ<span class="border-b text-red-500">も</span>弾きます。',
                ]),
                'audio_url' => '269.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'more and more 〜<br>ex)<span class="border-b text-red-500">More and more</span> foreign people are visiting Japan.',
                'meaning' => json_encode([
                    'ますます多くの〜',
                    '例)<span class="border-b text-red-500">ますます多くの</span>外国の人々が日本を訪れています。',
                ]),
                'audio_url' => '270.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'no more 〜<br>ex)There is <span class="border-b text-red-500">no more</span> milk in the refrigerator.',
                'meaning' => json_encode([
                    'もう〜ない、これ以上〜ない',
                    '例)冷蔵庫に牛乳は<span class="border-b text-red-500">もう</span>あり<span class="border-b text-red-500">ません。</span>',
                ]),
                'audio_url' => '271.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'not 〜 any more<br>ex)I\'m <span class="border-b text-red-500">not</span> angry with you <span class="border-b text-red-500">any more.</span>',
                'meaning' => json_encode([
                    'もはや〜ない、これ以上〜ない',
                    '例)私は<span class="border-b text-red-500">もう</span>あなたのことを怒って<span class="border-b text-red-500">いません。</span>',
                ]),
                'audio_url' => '272.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be based on 〜<br>ex)His story <span class="border-b text-red-500">was based on</span> his own experiences.',
                'meaning' => json_encode([
                    '〜に基づいている、〜を基にする',
                    '例)彼の物語は自分自身の体験<span class="border-b text-red-500">に基づいたものでした。</span>',
                ]),
                'audio_url' => '273.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be impressed with [by] 〜<br>ex1)I <span class="border-b text-red-500">was</span> very <span class="border-b text-red-500">impressed with</span> her speech.<br>ex2)I <span class="border-b text-red-500">was</span> deeply <span class="border-b text-red-500">impresseed by</span> the story.',
                'meaning' => json_encode([
                    '〜に感銘を受ける、〜に感動する',
                    '例1)私は彼女のスピーチ<span class="border-b text-red-500">に</span>とても<span class="border-b text-red-500">感銘を受けました。</span>',
                    '例2)私はその話に深く<span class="border-b text-red-500">感動しました。</span>',
                ]),
                'audio_url' => '274.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be satisfied with 〜<br>ex)<span class="border-b text-red-500">Are</span> you <span class="border-b text-red-500">satisfied with</span> the result of the exam?',
                'meaning' => json_encode([
                    '〜に満足している',
                    '例)あなたはその経験の結果<span class="border-b text-red-500">に満足しています</span>か？',
                ]),
                'audio_url' => '275.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be shocked to 〜<br>ex)She <span class="border-b text-red-500">is shocked to</span> hear the news.',
                'meaning' => json_encode([
                    '〜して衝撃(ショック)を受ける',
                    '例)彼女はその知らせを聞い<span class="border-b text-red-500">でショックを受けています。</span>',
                ]),
                'audio_url' => '276.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be absent from 〜<br>ex)Mary has <span class="border-b text-red-500">been absent from</span> school for three days.',
                'meaning' => json_encode([
                    '〜を欠席する、〜を休む',
                    '例)メアリーは3日間学校<span class="border-b text-red-500">を休んでいます。</span>',
                ]),
                'audio_url' => '277.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be busy 〜ing<br>ex)My brother <span class="border-b text-red-500">is busy</span> looking for a job.',
                'meaning' => json_encode([
                    '〜するのに忙しい',
                    '例)私の兄[弟]は職探し<span class="border-b text-red-500">に忙しい。</span>',
                ]),
                'audio_url' => '278.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be sure (that) 〜<br>ex)We <span class="border-b text-red-500">are sure that</span> Tom will succeed.',
                'meaning' => json_encode([
                    '〜であることを確信している',
                    '例)私達はトムが成功する<span class="border-b text-red-500">ことを確信しています。</span>',
                ]),
                'audio_url' => '279.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 194,
                'word' => 'be wrong with 〜<br>ex)Something <span class="border-b text-red-500">is wrong with</span> my bike.',
                'meaning' => json_encode([
                    '〜の具合が悪い',
                    '例)私の自転車<span class="border-b text-red-500">は</span>どこか<span class="border-b text-red-500">故障しています。</span>',
                ]),
                'audio_url' => '280.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // R281 - R300
            [
                'section_id' => 195,
                'word' => 'be similar to 〜<br>ex)Your coat <span class="border-b text-red-500">is similar to</span> hers.',
                'meaning' => json_encode([
                    '〜に似ている',
                    '例)あなたのコートは彼女のもの<span class="border-b text-red-500">と似ています。</span>',
                ]),
                'audio_url' => '281.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'the same as 〜<br>ex)His opinion is <span class="border-b text-red-500">the same as</span> mine.',
                'meaning' => json_encode([
                    '〜と同じ、〜と同様な',
                    '例)彼の意見は私の意見<span class="border-b text-red-500">と同じです。</span>',
                ]),
                'audio_url' => '282.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'worry about 〜<br>ex)She <span class="border-b text-red-500">worries about</span> her future.',
                'meaning' => json_encode([
                    '〜を心配する、〜を気にする',
                    '例)彼女は自分の将来<span class="border-b text-red-500">を心配しています。</span>',
                ]),
                'audio_url' => '283.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'write down 〜 ／ write 〜 down<br>ex)I <span class="border-b text-red-500">wrote down</span> her words in my notebook.',
                'meaning' => json_encode([
                    '〜を書き留める、〜を記録する',
                    '例)私は彼女の言うことをノートに<span class="border-b text-red-500">書き留めました。</span>',
                ]),
                'audio_url' => '284.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'write to 〜<br>ex)I sometimes <span class="border-b text-red-500">write to</span> my grandmother.',
                'meaning' => json_encode([
                    '〜に手紙を書く',
                    '例)私は時々祖母<span class="border-b text-red-500">に手紙を書きます。</span>',
                ]),
                'audio_url' => '285.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'say to oneself<br>ex)I always <span class="border-b text-red-500">say to myself</span> that I can do it.',
                'meaning' => json_encode([
                    '心の中で思う、(心の中で)自分に言い聞かせる',
                    '例)私はいつも、私はできると<span class="border-b text-red-500">自分に言い聞かせます</span>。',
                ]),
                'audio_url' => '286.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'help onself (to 〜)<br>ex)Please <span class="border-b text-red-500">help yourself</span> to the cookies.',
                'meaning' => json_encode([
                    '(〜を)自分で取って食べる[飲む]',
                    '例)クッキー<span class="border-b text-red-500">を自由にお取り</span>ください。',
                ]),
                'audio_url' => '287.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'keep one\'s promise[word]<br>ex)John always <span class="border-b text-red-500">keep his promise</span>.',
                'meaning' => json_encode([
                    '約束を守る',
                    '例)ジョンはいつも<span class="border-b text-red-500">約束を守ります</span>。',
                ]),
                'audio_url' => '288.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'lose one\'s way<br>ex)They <span class="border-b text-red-500">lost their way</span> in the woods.',
                'meaning' => json_encode([
                    '道に迷う',
                    '例)彼らは森の中で<span class="border-b text-red-500">道に迷いました</span>。',
                ]),
                'audio_url' => '289.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'make up one\'s mind to 〜<br>ex)He <span class="border-b text-red-500">made up his mind to</span> study science at college.',
                'meaning' => json_encode([
                    '〜しようと決心する',
                    '例)彼は大学で科学を勉強<span class="border-b text-red-500">しようと決心しました</span>。',
                ]),
                'audio_url' => '290.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'change one\'s mind<br>ex)She <span class="border-b text-red-500">changed her mind</span> about him after that.',
                'meaning' => json_encode([
                    '考えを変える',
                    '例)彼女はそれ以後、彼に対する<span class="border-b text-red-500">考え方を変えました</span>。',
                ]),
                'audio_url' => '291.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'remind A of B<br>ex)This song <span class="border-b text-red-500">reminds</span> him <span class="border-b text-red-500">of</span> his hometown.',
                'meaning' => json_encode([
                    'AにBを思い出させる',
                    '例)この歌は彼<span class="border-b text-red-500">に</span>自分の故郷<span class="border-b text-red-500">を思い出させます</span>。',
                ]),
                'audio_url' => '292.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'to tell the truth<br>ex)<span class="border-b text-red-500">To tell the truth</span>, I told a lie to her.',
                'meaning' => json_encode([
                    '実は、実を言うと',
                    '例)<span class="border-b text-red-500">実を言うと</span>、私は彼女に嘘をつきました。',
                ]),
                'audio_url' => '293.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'as you know<br>ex)<span class="border-b text-red-500">As you know</span>, I have a big sister and a little brother.',
                'meaning' => json_encode([
                    '知ってのとおり、ご存知のように',
                    '例)<span class="border-b text-red-500">知ってのとおり</span>、私には姉と弟がいます。',
                ]),
                'audio_url' => '294.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'by the way<br>ex)<span class="border-b text-red-500">By the way</span>, are you free this afternoon?',
                'meaning' => json_encode([
                    'ところで',
                    '例)<span class="border-b text-red-500">ところで</span>、あなたは今日の午後ひまですか？',
                ]),
                'audio_url' => '295.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'at the age of 〜<br>ex)He suddenly became sick <span class="border-b text-red-500">at the age of</span> 10.',
                'meaning' => json_encode([
                    '〜歳のとき、〜歳で',
                    '例)彼は<span class="border-b text-red-500">10歳のときに</span>突然病気になりました。',
                ]),
                'audio_url' => '296.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'at the end of 〜<br>ex)We went to Kamakura <span class="border-b text-red-500">at the end of</span> August.',
                'meaning' => json_encode([
                    '〜の終わりに',
                    '例)私たちは8月<span class="border-b text-red-500">の終わりに</span>鎌倉に行きました。',
                ]),
                'audio_url' => '297.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'far from 〜<br>ex)It is <span class="border-b text-red-500">far from</span> the case.',
                'meaning' => json_encode([
                    '〜にはほど遠い、とても〜ではない',
                    '例)それは事実<span class="border-b text-red-500">とはほど遠い</span>。',
                ]),
                'audio_url' => '298.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'look into 〜<br>ex1)The boy <span class="border-b text-red-500">looked into</span> the box.<br>ex2)The police are <span class="border-b text-red-500">looking into</span> the case.',
                'meaning' => json_encode([
                    '〜の中をのぞく、〜を(よく)調べる',
                    '例1)その少年は箱<span class="border-b text-red-500">の中をのぞきました</span>。',
                    '例2)警察はその事件<span class="border-b text-red-500">を調べている</span>ところです。',
                ]),
                'audio_url' => '299.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 195,
                'word' => 'look up (〜)<br>ex1)She <span class="border-b text-red-500">looked up</span> at the sky.<br>ex2)She <span class="border-b text-red-500">looked up</span> the word in her dictionary.',
                'meaning' => json_encode([
                    '見上げる、[辞書などで]〜を調べる',
                    '例1)彼女は空を<span class="border-b text-red-500">見上げました</span>。',
                    '例2)彼女はその単語<span class="border-b text-red-500">を</span>自分の辞書で<span class="border-b text-red-500">調べました</span>。',
                ]),
                'audio_url' => '300.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // R301 - R200
            [
                'section_id' => 196,
                'word' => 'care for 〜<br>ex1)I must <span class="border-b text-red-500">care for</span> my little brother this afternoon.<br>ex2)Would you <span class="border-b text-red-500">care for</span> some tea?',
                'meaning' => json_encode([
                    '〜の世話をする、[主に否定文・疑問文で]〜が好きだ、〜がほしい',
                    '例1)今日の午後、私は弟<span class="border-b text-red-500">の世話をし</span>なければなりません。',
                    '例2)お茶は<span class="border-b text-red-500">いかがですか</span>？',
                ]),
                'audio_url' => '301.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'cheer up (A)<br>ex)<span class="border-b text-red-500">Cheer up</span>! You can still win.',
                'meaning' => json_encode([
                    '元気を出す、A[人]を元気づける[励ます]',
                    '例)<span class="border-b text-red-500">元気を出して</span>！ あなたたちはまだ勝てますよ。',
                ]),
                'audio_url' => '302.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'clean up (〜)／clean 〜 up<br>ex)You must <span class="border-b text-red-500">clean up</span> your room.',
                'meaning' => json_encode([
                    '(〜を)きれいに掃除する、(〜を)片づける',
                    '例)あなたは自分の部屋<span class="border-b text-red-500">をきれいに掃除し</span>なければなりません。',
                ]),
                'audio_url' => '303.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'graduate from 〜<br>ex)He <span class="border-b text-red-500">graduated from</span> junior high school last year.',
                'meaning' => json_encode([
                    '〜を卒業する',
                    '例)彼は去年中学校<span class="border-b text-red-500">を卒業しました</span>。',
                ]),
                'audio_url' => '304.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'hear from 〜<br>ex)I <span class="border-b text-red-500">heard from</span> my friend in Germany.',
                'meaning' => json_encode([
                    '〜から便り[連絡]をもらう',
                    '例)私はドイツにいる友だち<span class="border-b text-red-500">から便りをもらいました</span>。',
                ]),
                'audio_url' => '305.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'sound like 〜<br>ex)That <span class="border-b text-red-500">sounds like</span> a good idea.',
                'meaning' => json_encode([
                    '〜のように思われる[聞こえる]',
                    '例)それはいい考え<span class="border-b text-red-500">のように思われます</span>。',
                ]),
                'audio_url' => '306.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'take part in 〜<br>ex)Did he <span class="border-b text-red-500">take part in</span> the contest?',
                'meaning' => json_encode([
                    '〜に参加する',
                    '例)彼はコンテスト<span class="border-b text-red-500">に参加し</span>ましたか？',
                ]),
                'audio_url' => '307.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'in addition<br>ex)It will cost too much. <span class="border-b text-red-500">In addition</span>, there are some problems with our plan itself.',
                'meaning' => json_encode([
                    'さらに、その上',
                    '例)それには費用がかかりすぎます。<span class="border-b text-red-500">さらに</span>、私たちの計画自体にいくつか問題があります。',
                ]),
                'audio_url' => '308.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'work on 〜<br>ex)We are <span class="border-b text-red-500">working on</span> the new project.',
                'meaning' => json_encode([
                    '〜に取り組む',
                    '例)私たちは新しいプロジェクト<span class="border-b text-red-500">に取り組んでいる</span>ところです。',
                ]),
                'audio_url' => '309.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 196,
                'word' => 'throw away 〜／throw 〜 away<br>ex)Don\'t <span class="border-b text-red-500">throw away</span> these boxes.',
                'meaning' => json_encode([
                    '〜を捨てる',
                    '例)これらの箱<span class="border-b text-red-500">を捨て</span>ないで。',
                ]),
                'audio_url' => '310.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
