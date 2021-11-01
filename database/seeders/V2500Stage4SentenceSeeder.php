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
            // // R261 - R280
            // [
            //     'section_id' => 194,
            //     'word' => 'go into 〜<br>ex)Kate and I <span class="border-b text-red-500">went into</span> the room.',
            //     'meaning' => json_encode([
            //         '〜(の中)に入る',
            //         '例)ケイトと私はその部屋<span class="border-b text-red-500">の中に入って行きました。</span>',
            //     ]),
            //     'audio_url' => '261.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'go through 〜<br>ex1)They <span class="border-b text-red-500">went through</span> the ticket gate.<br>ex2)My grandfather <span class="border-b text-red-500">went through</span> a lot of difficulties.',
            //     'meaning' => json_encode([
            //         '〜を通り抜ける、〜を経験する',
            //         '例1)彼らは改札口<span class="border-b text-red-500">を通り抜けました。</span>',
            //         '例2)祖父はたくさんの苦難を<span class="border-b text-red-500">経験しました。</span>',
            //     ]),
            //     'audio_url' => '262.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'go by (〜)<br>ex1)Many years <span class="border-b text-red-500">went by.</span><br>ex2)Yuji has just <span class="border-b text-red-500">gone by</span> the window.',
            //     'meaning' => json_encode([
            //         '[時が]過ぎ去る、〜のそばを通り過ぎる',
            //         '例1)長い年月が<span class="border-b text-red-500">過ぎ去りました。</span>',
            //         '例2)ゆうじがちょうど窓の<span class="border-b text-red-500">そばを通り過ぎました。</span>',
            //     ]),
            //     'audio_url' => '263.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'go on a trip<br>ex)Mr. and Mrs. Jones <span class="border-b text-red-500">went on a trip</span> yesterday.',
            //     'meaning' => json_encode([
            //         '旅行に出かける',
            //         '例)ジョーンズ夫妻は昨日<span class="border-b text-red-500">旅行に出かけました。</span>',
            //     ]),
            //     'audio_url' => '264.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'come on<br>ex1)<span class="border-b text-red-500">Come on</span>, let\'s hurry.<br>ex2)Spring is <span class="border-b text-red-500">Coming on.</span>',
            //     'meaning' => json_encode([
            //         '[命令文で]さあ, 〜、やってくる',
            //         '例1)<span class="border-b text-red-500">さあ</span>, 急ぎましょう。',
            //         '例2)春が<span class="border-b text-red-500">やってきます。</span>',
            //     ]),
            //     'audio_url' => '265.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'come out<br>ex)Many stars <span class="border-b text-red-500">come out</span> in the sky.',
            //     'meaning' => json_encode([
            //         '出てくる、現れる',
            //         '例)たくさんの星が空に<span class="border-b text-red-500">現れました。</span>',
            //     ]),
            //     'audio_url' => '266.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'come true<br>ex)Your dream will <span class="border-b text-red-500">come true.</span>',
            //     'meaning' => json_encode([
            //         '[夢などが]実現する',
            //         '例)あなたの夢は<span class="border-b text-red-500">実現する</span>でしょう。',
            //     ]),
            //     'audio_url' => '267.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'come up (to 〜)<br>ex)A stranger <span class="border-b text-red-500">came up to</span> me.',
            //     'meaning' => json_encode([
            //         '(〜に)近づく',
            //         '例)見知らぬ人が私<span class="border-b text-red-500">に近づいてきました。</span>',
            //     ]),
            //     'audio_url' => '268.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'B as well as A<br>ex)She plays the piano <span class="border-b text-red-500">as well as</span> the violin.',
            //     'meaning' => json_encode([
            //         'A だけでなく B も',
            //         '例)彼女はバイオリン<span class="border-b text-red-500">だけでなく</span>ピアノ<span class="border-b text-red-500">も</span>弾きます。',
            //     ]),
            //     'audio_url' => '269.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'more and more 〜<br>ex)<span class="border-b text-red-500">More and more</span> foreign people are visiting Japan.',
            //     'meaning' => json_encode([
            //         'ますます多くの〜',
            //         '例)<span class="border-b text-red-500">ますます多くの</span>外国の人々が日本を訪れています。',
            //     ]),
            //     'audio_url' => '270.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'no more 〜<br>ex)There is <span class="border-b text-red-500">no more</span> milk in the refrigerator.',
            //     'meaning' => json_encode([
            //         'もう〜ない、これ以上〜ない',
            //         '例)冷蔵庫に牛乳は<span class="border-b text-red-500">もう</span>あり<span class="border-b text-red-500">ません。</span>',
            //     ]),
            //     'audio_url' => '271.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'not 〜 any more<br>ex)I\'m <span class="border-b text-red-500">not</span> angry with you <span class="border-b text-red-500">any more.</span>',
            //     'meaning' => json_encode([
            //         'もはや〜ない、これ以上〜ない',
            //         '例)私は<span class="border-b text-red-500">もう</span>あなたのことを怒って<span class="border-b text-red-500">いません。</span>',
            //     ]),
            //     'audio_url' => '272.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be based on 〜<br>ex)His story <span class="border-b text-red-500">was based on</span> his own experiences.',
            //     'meaning' => json_encode([
            //         '〜に基づいている、〜を基にする',
            //         '例)彼の物語は自分自身の体験<span class="border-b text-red-500">に基づいたものでした。</span>',
            //     ]),
            //     'audio_url' => '273.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be impressed with [by] 〜<br>ex1)I <span class="border-b text-red-500">was</span> very <span class="border-b text-red-500">impressed with</span> her speech.<br>ex2)I <span class="border-b text-red-500">was</span> deeply <span class="border-b text-red-500">impresseed by</span> the story.',
            //     'meaning' => json_encode([
            //         '〜に感銘を受ける、〜に感動する',
            //         '例1)私は彼女のスピーチ<span class="border-b text-red-500">に</span>とても<span class="border-b text-red-500">感銘を受けました。</span>',
            //         '例2)私はその話に深く<span class="border-b text-red-500">感動しました。</span>',
            //     ]),
            //     'audio_url' => '274.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be satisfied with 〜<br>ex)<span class="border-b text-red-500">Are</span> you <span class="border-b text-red-500">satisfied with</span> the result of the exam?',
            //     'meaning' => json_encode([
            //         '〜に満足している',
            //         '例)あなたはその経験の結果<span class="border-b text-red-500">に満足しています</span>か？',
            //     ]),
            //     'audio_url' => '275.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be shocked to 〜<br>ex)She <span class="border-b text-red-500">is shocked to</span> hear the news.',
            //     'meaning' => json_encode([
            //         '〜して衝撃(ショック)を受ける',
            //         '例)彼女はその知らせを聞い<span class="border-b text-red-500">でショックを受けています。</span>',
            //     ]),
            //     'audio_url' => '276.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be absent from 〜<br>ex)Mary has <span class="border-b text-red-500">been absent from</span> school for three days.',
            //     'meaning' => json_encode([
            //         '〜を欠席する、〜を休む',
            //         '例)メアリーは3日間学校<span class="border-b text-red-500">を休んでいます。</span>',
            //     ]),
            //     'audio_url' => '277.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be busy 〜ing<br>ex)My brother <span class="border-b text-red-500">is busy</span> looking for a job.',
            //     'meaning' => json_encode([
            //         '〜するのに忙しい',
            //         '例)私の兄[弟]は職探し<span class="border-b text-red-500">に忙しい。</span>',
            //     ]),
            //     'audio_url' => '278.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be sure (that) 〜<br>ex)We <span class="border-b text-red-500">are sure that</span> Tom will succeed.',
            //     'meaning' => json_encode([
            //         '〜であることを確信している',
            //         '例)私達はトムが成功する<span class="border-b text-red-500">ことを確信しています。</span>',
            //     ]),
            //     'audio_url' => '279.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 194,
            //     'word' => 'be wrong with 〜<br>ex)Something <span class="border-b text-red-500">is wrong with</span> my bike.',
            //     'meaning' => json_encode([
            //         '〜の具合が悪い',
            //         '例)私の自転車<span class="border-b text-red-500">は</span>どこか<span class="border-b text-red-500">故障しています。</span>',
            //     ]),
            //     'audio_url' => '280.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // // R281 - R300
            // [
            //     'section_id' => 195,
            //     'word' => 'be similar to 〜<br>ex)Your coat <span class="border-b text-red-500">is similar to</span> hers.',
            //     'meaning' => json_encode([
            //         '〜に似ている',
            //         '例)あなたのコートは彼女のもの<span class="border-b text-red-500">と似ています。</span>',
            //     ]),
            //     'audio_url' => '281.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'the same as 〜<br>ex)His opinion is <span class="border-b text-red-500">the same as</span> mine.',
            //     'meaning' => json_encode([
            //         '〜と同じ、〜と同様な',
            //         '例)彼の意見は私の意見<span class="border-b text-red-500">と同じです。</span>',
            //     ]),
            //     'audio_url' => '282.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'worry about 〜<br>ex)She <span class="border-b text-red-500">worries about</span> her future.',
            //     'meaning' => json_encode([
            //         '〜を心配する、〜を気にする',
            //         '例)彼女は自分の将来<span class="border-b text-red-500">を心配しています。</span>',
            //     ]),
            //     'audio_url' => '283.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'write down 〜 ／ write 〜 down<br>ex)I <span class="border-b text-red-500">wrote down</span> her words in my notebook.',
            //     'meaning' => json_encode([
            //         '〜を書き留める、〜を記録する',
            //         '例)私は彼女の言うことをノートに<span class="border-b text-red-500">書き留めました。</span>',
            //     ]),
            //     'audio_url' => '284.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'write to 〜<br>ex)I sometimes <span class="border-b text-red-500">write to</span> my grandmother.',
            //     'meaning' => json_encode([
            //         '〜に手紙を書く',
            //         '例)私は時々祖母<span class="border-b text-red-500">に手紙を書きます。</span>',
            //     ]),
            //     'audio_url' => '285.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'say to oneself<br>ex)I always <span class="border-b text-red-500">say to myself</span> that I can do it.',
            //     'meaning' => json_encode([
            //         '心の中で思う、(心の中で)自分に言い聞かせる',
            //         '例)私はいつも、私はできると<span class="border-b text-red-500">自分に言い聞かせます</span>。',
            //     ]),
            //     'audio_url' => '286.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'help onself (to 〜)<br>ex)Please <span class="border-b text-red-500">help yourself</span> to the cookies.',
            //     'meaning' => json_encode([
            //         '(〜を)自分で取って食べる[飲む]',
            //         '例)クッキー<span class="border-b text-red-500">を自由にお取り</span>ください。',
            //     ]),
            //     'audio_url' => '287.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'keep one\'s promise[word]<br>ex)John always <span class="border-b text-red-500">keep his promise</span>.',
            //     'meaning' => json_encode([
            //         '約束を守る',
            //         '例)ジョンはいつも<span class="border-b text-red-500">約束を守ります</span>。',
            //     ]),
            //     'audio_url' => '288.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'lose one\'s way<br>ex)They <span class="border-b text-red-500">lost their way</span> in the woods.',
            //     'meaning' => json_encode([
            //         '道に迷う',
            //         '例)彼らは森の中で<span class="border-b text-red-500">道に迷いました</span>。',
            //     ]),
            //     'audio_url' => '289.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'make up one\'s mind to 〜<br>ex)He <span class="border-b text-red-500">made up his mind to</span> study science at college.',
            //     'meaning' => json_encode([
            //         '〜しようと決心する',
            //         '例)彼は大学で科学を勉強<span class="border-b text-red-500">しようと決心しました</span>。',
            //     ]),
            //     'audio_url' => '290.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'change one\'s mind<br>ex)She <span class="border-b text-red-500">changed her mind</span> about him after that.',
            //     'meaning' => json_encode([
            //         '考えを変える',
            //         '例)彼女はそれ以後、彼に対する<span class="border-b text-red-500">考え方を変えました</span>。',
            //     ]),
            //     'audio_url' => '291.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'remind A of B<br>ex)This song <span class="border-b text-red-500">reminds</span> him <span class="border-b text-red-500">of</span> his hometown.',
            //     'meaning' => json_encode([
            //         'AにBを思い出させる',
            //         '例)この歌は彼<span class="border-b text-red-500">に</span>自分の故郷<span class="border-b text-red-500">を思い出させます</span>。',
            //     ]),
            //     'audio_url' => '292.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'to tell the truth<br>ex)<span class="border-b text-red-500">To tell the truth</span>, I told a lie to her.',
            //     'meaning' => json_encode([
            //         '実は、実を言うと',
            //         '例)<span class="border-b text-red-500">実を言うと</span>、私は彼女に嘘をつきました。',
            //     ]),
            //     'audio_url' => '293.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'as you know<br>ex)<span class="border-b text-red-500">As you know</span>, I have a big sister and a little brother.',
            //     'meaning' => json_encode([
            //         '知ってのとおり、ご存知のように',
            //         '例)<span class="border-b text-red-500">知ってのとおり</span>、私には姉と弟がいます。',
            //     ]),
            //     'audio_url' => '294.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'by the way<br>ex)<span class="border-b text-red-500">By the way</span>, are you free this afternoon?',
            //     'meaning' => json_encode([
            //         'ところで',
            //         '例)<span class="border-b text-red-500">ところで</span>、あなたは今日の午後ひまですか？',
            //     ]),
            //     'audio_url' => '295.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'at the age of 〜<br>ex)He suddenly became sick <span class="border-b text-red-500">at the age of</span> 10.',
            //     'meaning' => json_encode([
            //         '〜歳のとき、〜歳で',
            //         '例)彼は<span class="border-b text-red-500">10歳のときに</span>突然病気になりました。',
            //     ]),
            //     'audio_url' => '296.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'at the end of 〜<br>ex)We went to Kamakura <span class="border-b text-red-500">at the end of</span> August.',
            //     'meaning' => json_encode([
            //         '〜の終わりに',
            //         '例)私たちは8月<span class="border-b text-red-500">の終わりに</span>鎌倉に行きました。',
            //     ]),
            //     'audio_url' => '297.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'far from 〜<br>ex)It is <span class="border-b text-red-500">far from</span> the case.',
            //     'meaning' => json_encode([
            //         '〜にはほど遠い、とても〜ではない',
            //         '例)それは事実<span class="border-b text-red-500">とはほど遠い</span>。',
            //     ]),
            //     'audio_url' => '298.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'look into 〜<br>ex1)The boy <span class="border-b text-red-500">looked into</span> the box.<br>ex2)The police are <span class="border-b text-red-500">looking into</span> the case.',
            //     'meaning' => json_encode([
            //         '〜の中をのぞく、〜を(よく)調べる',
            //         '例1)その少年は箱<span class="border-b text-red-500">の中をのぞきました</span>。',
            //         '例2)警察はその事件<span class="border-b text-red-500">を調べている</span>ところです。',
            //     ]),
            //     'audio_url' => '299.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 195,
            //     'word' => 'look up (〜)<br>ex1)She <span class="border-b text-red-500">looked up</span> at the sky.<br>ex2)She <span class="border-b text-red-500">looked up</span> the word in her dictionary.',
            //     'meaning' => json_encode([
            //         '見上げる、[辞書などで]〜を調べる',
            //         '例1)彼女は空を<span class="border-b text-red-500">見上げました</span>。',
            //         '例2)彼女はその単語<span class="border-b text-red-500">を</span>自分の辞書で<span class="border-b text-red-500">調べました</span>。',
            //     ]),
            //     'audio_url' => '300.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // R301 - R320
            // [
            //     'section_id' => 196,
            //     'word' => 'care for 〜<br>ex1)I must <span class="border-b text-red-500">care for</span> my little brother this afternoon.<br>ex2)Would you <span class="border-b text-red-500">care for</span> some tea?',
            //     'meaning' => json_encode([
            //         '〜の世話をする、[主に否定文・疑問文で]〜が好きだ、〜がほしい',
            //         '例1)今日の午後、私は弟<span class="border-b text-red-500">の世話をし</span>なければなりません。',
            //         '例2)お茶は<span class="border-b text-red-500">いかがですか</span>？',
            //     ]),
            //     'audio_url' => '301.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'cheer up (A)<br>ex)<span class="border-b text-red-500">Cheer up</span>! You can still win.',
            //     'meaning' => json_encode([
            //         '元気を出す、A[人]を元気づける[励ます]',
            //         '例)<span class="border-b text-red-500">元気を出して</span>！ あなたたちはまだ勝てますよ。',
            //     ]),
            //     'audio_url' => '302.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'clean up (〜)／clean 〜 up<br>ex)You must <span class="border-b text-red-500">clean up</span> your room.',
            //     'meaning' => json_encode([
            //         '(〜を)きれいに掃除する、(〜を)片づける',
            //         '例)あなたは自分の部屋<span class="border-b text-red-500">をきれいに掃除し</span>なければなりません。',
            //     ]),
            //     'audio_url' => '303.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'graduate from 〜<br>ex)He <span class="border-b text-red-500">graduated from</span> junior high school last year.',
            //     'meaning' => json_encode([
            //         '〜を卒業する',
            //         '例)彼は去年中学校<span class="border-b text-red-500">を卒業しました</span>。',
            //     ]),
            //     'audio_url' => '304.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'hear from 〜<br>ex)I <span class="border-b text-red-500">heard from</span> my friend in Germany.',
            //     'meaning' => json_encode([
            //         '〜から便り[連絡]をもらう',
            //         '例)私はドイツにいる友だち<span class="border-b text-red-500">から便りをもらいました</span>。',
            //     ]),
            //     'audio_url' => '305.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'sound like 〜<br>ex)That <span class="border-b text-red-500">sounds like</span> a good idea.',
            //     'meaning' => json_encode([
            //         '〜のように思われる[聞こえる]',
            //         '例)それはいい考え<span class="border-b text-red-500">のように思われます</span>。',
            //     ]),
            //     'audio_url' => '306.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'take part in 〜<br>ex)Did he <span class="border-b text-red-500">take part in</span> the contest?',
            //     'meaning' => json_encode([
            //         '〜に参加する',
            //         '例)彼はコンテスト<span class="border-b text-red-500">に参加し</span>ましたか？',
            //     ]),
            //     'audio_url' => '307.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'in addition<br>ex)It will cost too much. <span class="border-b text-red-500">In addition</span>, there are some problems with our plan itself.',
            //     'meaning' => json_encode([
            //         'さらに、その上',
            //         '例)それには費用がかかりすぎます。<span class="border-b text-red-500">さらに</span>、私たちの計画自体にいくつか問題があります。',
            //     ]),
            //     'audio_url' => '308.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'work on 〜<br>ex)We are <span class="border-b text-red-500">working on</span> the new project.',
            //     'meaning' => json_encode([
            //         '〜に取り組む',
            //         '例)私たちは新しいプロジェクト<span class="border-b text-red-500">に取り組んでいる</span>ところです。',
            //     ]),
            //     'audio_url' => '309.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'throw away 〜／throw 〜 away<br>ex)Don\'t <span class="border-b text-red-500">throw away</span> these boxes.',
            //     'meaning' => json_encode([
            //         '〜を捨てる',
            //         '例)これらの箱<span class="border-b text-red-500">を捨て</span>ないで。',
            //     ]),
            //     'audio_url' => '310.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'wait for 〜<br>ex)I was <span class="border-b text-red-500">waiting for</span> him at the bus.',
            //     'meaning' => json_encode([
            //         '〜を待つ',
            //         '例)私はバスの停留所で彼<span class="border-b text-red-500">を待って</span>いました。'
            //     ]),
            //     'audio_url' => '311.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'bring up 〜<br>ex1)I was born and <span class="border-b text-red-500">brought up</span> in Tokyo.<br>ex2)A new plan was <span class="border-b text-red-500">brought up</span> at the meeting.',
            //     'meaning' => json_encode([
            //         '〜を育てる、[問題など]〜を持ち出す',
            //         '例1)私は生まれも<span class="border-b text-red-500">育ちも</span>東京です。',
            //         '例2)新しい計画が会合で<span class="border-b text-red-500">提起され</span>ました。'
            //     ]),
            //     'audio_url' => '312.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'bring about 〜<br>ex)The Internet has <span class="border-b text-red-500">brought about</span> changes in our daily lives.',
            //     'meaning' => json_encode([
            //         '〜を引き起こす、もたらす',
            //         '例)インターネットは私たちの日常生活に変化<span class="border-b text-red-500">をもたらし</span>ました。'
            //     ]),
            //     'audio_url' => '313.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'introduce A to B<br>ex)Please <span class="border-b text-red-500">introduce</span> yourself <span class="border-b text-red-500">to</span> everyone.',
            //     'meaning' => json_encode([
            //         'AをBに紹介する',
            //         '例)みなさん<span class="border-b text-red-500">に</span>自己<span class="border-b text-red-500">紹介をし</span>てください。'
            //     ]),
            //     'audio_url' => '314.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'say hello[hi] to 〜<br>ex)Please <span class="border-b text-red-500">say hello to</span> Mike.',
            //     'meaning' => json_encode([
            //         '〜によろしくと言う',
            //         '例)マイク<span class="border-b text-red-500">によろしくと言って</span>ください。'
            //     ]),
            //     'audio_url' => '315.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'spend A on B<br>ex)He <span class="border-b text-red-500">spends</span> a lot of money <span class="border-b text-red-500">on</span> video games.',
            //     'meaning' => json_encode([
            //         '[お金や時間]AをBに使う[費やす]',
            //         '例)彼はたくさんのお金<span class="border-b text-red-500">を</span>テレビゲーム<span class="border-b text-red-500">に費やします</span>。'
            //     ]),
            //     'audio_url' => '316.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'get over 〜<br>ex)She hasn\'t <span class="border-b text-red-500">got over</span> the shock yet.',
            //     'meaning' => json_encode([
            //         '〜を乗り越える、〜から立ち直る、[病気など]〜を克服する',
            //         '例)彼女はまだショック<span class="border-b text-red-500">から立ち直って</span>いません。'
            //     ]),
            //     'audio_url' => '317.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'suffer from 〜<br>ex)He is <span class="border-b text-red-500">suffering from</span> a bad cold.',
            //     'meaning' => json_encode([
            //         '〜で苦しむ',
            //         '例)彼はひどい風邪<span class="border-b text-red-500">で苦しんで</span>います。'
            //     ]),
            //     'audio_url' => '318.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'fall asleep<br>ex)The baby <span class="border-b text-red-500">fell asleep</span> soon.',
            //     'meaning' => json_encode([
            //         '寝入る、眠り込む',
            //         '例)その赤ん坊はすぐに<span class="border-b text-red-500">寝入りました</span>。'
            //     ]),
            //     'audio_url' => '319.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 196,
            //     'word' => 'stay up<br>ex)Don\'t <span class="border-b text-red-500">stay up</span> late at night.',
            //     'meaning' => json_encode([
            //         '(寝ないで)起きている',
            //         '例)<span class="border-b text-red-500">夜更しして</span>はいけません。'
            //     ]),
            //     'audio_url' => '320.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // R321 - R340
            // [
            //     'section_id' => 197,
            //     'word' => 'find out 〜<br>ex)I <span class="border-b text-red-500">found out</span> that her name was Lucy.',
            //     'meaning' => json_encode([
            //         '〜を見つけ出す、発見する',
            //         '例)私は彼女の名前がルーシーだと<span class="border-b text-red-500">わかりました</span>。'
            //     ]),
            //     'audio_url' => '321.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'hold on<br>ex1)May I speak to Aya, please? ー <span class="border-b text-red-500">Hold on</span>, please.<br>ex2)<span class="border-b text-red-500">Hold on</span> until help comes.',
            //     'meaning' => json_encode([
            //         '(電話を切らないで)待つ、持ちこたえる、がんばる',
            //         '例1)彩さんをお願いします。ー<span class="border-b text-red-500">お待ち</span>下さい。',
            //         '例2)助けが来るまで<span class="border-b text-red-500">がんばれ</span>。'
            //     ]),
            //     'audio_url' => '322.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'take off (〜)<br>ex1)Please <span class="border-b text-red-500">take off</span> youre shoes here.<br>ex2)Theire plane <span class="border-b text-red-500">took off</span> at 10 o\'clock.',
            //     'meaning' => json_encode([
            //         '〜を脱ぐ、取り外す、離陸する',
            //         '例1)ここで靴<span class="border-b text-red-500">を脱いで</span>ください。',
            //         '例2)彼らの飛行機は10時に<span class="border-b text-red-500">離陸しました</span>。'
            //     ]),
            //     'audio_url' => '323.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'put on 〜 / put 〜 on<br>ex)My aunt <span class="border-b text-red-500">put on</span> her new hat and went out.',
            //     'meaning' => json_encode([
            //         '〜を身につける、着る、[くつなど]〜をはく',
            //         '例)私のおばは新しい帽子<span class="border-b text-red-500">をかぶって</span>出かけました。'
            //     ]),
            //     'audio_url' => '324.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'try on 〜 / try 〜 on<br>ex)Can I <span class="border-b text-red-500">try on</span> this shirt?',
            //     'meaning' => json_encode([
            //         '〜を試着する',
            //         '例)このシャツ<span class="border-b text-red-500">を試着して</span>もいいですか？'
            //     ]),
            //     'audio_url' => '325.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'turn off 〜 / turn 〜 off<br>ex)<span class="border-b text-red-500">Turn off</span> the light when you go to bed.',
            //     'meaning' => json_encode([
            //         '[テレビ・明かりなど]〜を消す、[スイッチ]〜を切る',
            //         '例)寝るときは明かり<span class="border-b text-red-500">を消し</span>なさい。'
            //     ]),
            //     'audio_url' => '326.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'put off 〜 / put 〜 off<br>ex)The game will be <span class="border-b text-red-500">put off</span> until next week.',
            //     'meaning' => json_encode([
            //         '〜を延期する',
            //         '例)その試合は来週まで<span class="border-b text-red-500">延期さ</span>れるでしょう。'
            //     ]),
            //     'audio_url' => '327.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'put out 〜 / put 〜 out<br>ex)Don\'t forget to <span class="border-b text-red-500">put out</span> the fire.',
            //     'meaning' => json_encode([
            //         '[明かりなど]〜を消す',
            //         '例)火を<span class="border-b text-red-500">消し</span>忘れないように。'
            //     ]),
            //     'audio_url' => '328.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'compare A with B<br>ex)I <span class="border-b text-red-500">compared</span> his picture <span class="border-b text-red-500">with</span> hers.',
            //     'meaning' => json_encode([
            //         'AをBと比較する[比べる]',
            //         '例)私は彼の絵[写真]<span class="border-b text-red-500">と</span>彼女の絵[写真]を<span class="border-b text-red-500">比べました</span>。'
            //     ]),
            //     'audio_url' => '329.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'confuse A with B<br>ex)I often <span class="border-b text-red-500">confuse</span> Mary <span class="border-b text-red-500">with</span> her sister.',
            //     'meaning' => json_encode([
            //         'AをBと混同する',
            //         '例)私はよくメアリーを彼女のお姉さん(妹さん)と<span class="border-b text-red-500">混同します</span>。'
            //     ]),
            //     'audio_url' => '330.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'pay for 〜 / pay 〜 for<br>ex)She <span class="border-b text-red-500">paid</span> 10,000 yen <span class="border-b text-red-500">for</span> the bag.',
            //     'meaning' => json_encode([
            //         '〜の代金を払う',
            //         '例)彼女はそおんかばん<span class="border-b text-red-500">に</span>1万円<span class="border-b text-red-500">を払いました</span>。'
            //     ]),
            //     'audio_url' => '331.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'pick up 〜 / pick 〜 up<br>ex1)The girl <span class="border-b text-red-500">picked up</span> a coin.<br>ex2)My mother <span class="border-b text-red-500">picked</span> me <span class="border-b text-red-500">up</span> at the station.',
            //     'meaning' => json_encode([
            //         '〜を拾い上げる、取り上げる、〜を(車で)迎えに行く',
            //         '例1)その女の子は硬貨<span class="border-b text-red-500">を拾いました</span>。',
            //         '例2)私の母は車で駅まで私を<span class="border-b text-red-500">迎えに来てくれました</span>。'
            //     ]),
            //     'audio_url' => '332.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'protect A from B<br>ex)You should <span class="border-b text-red-500">protect</span> your eyes <span class="border-b text-red-500">from</span> the sun.',
            //     'meaning' => json_encode([
            //         'AをBから守る',
            //         '例)あなたは目<span class="border-b text-red-500">を</span>太陽<span class="border-b text-red-500">から守る</span>べきです。'
            //     ]),
            //     'audio_url' => '333.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'keep in touch (with 〜)<br>ex)Let\'s <span class="border-b text-red-500">keep in touch</span>.',
            //     'meaning' => json_encode([
            //         '(〜と)連絡を取り続ける',
            //         '例)<span class="border-b text-red-500">連絡を取り続け</span>ましょう。'
            //     ]),
            //     'audio_url' => '334.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 197,
            //     'word' => 'make a mistake<br>ex)Don\'t be afraid of <span class="border-b text-red-500">making a mistake</span> when you speak English.',
            //     'meaning' => json_encode([
            //         '間違える',
            //         '例)英語を話すとき、<span class="border-b text-red-500">間違えること</span>をこわがってはいけません。'
            //     ]),
            //     'audio_url' => '335.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            [
                'section_id' => 197,
                'word' => 'by mistake<br>ex)I\'ve taken someone\'s shoes <span class="border-b text-red-500">by mistake</span>.',
                'meaning' => json_encode([
                    '間違って、誤って',
                    '例)私は<span class=""border-b text-red-500"">間違って</span>誰かのくつをはいてきてしまいました。'
                ]),
                'audio_url' => '336.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 197,
                'word' => 'by chance<br>ex)I met her <span class="border-b text-red-500">by chance</span> at the station.',
                'meaning' => json_encode([
                    '偶然に、たまたま',
                    '例)私は駅で<span class="border-b text-red-500">偶然に</span>彼女に会いました。'
                ]),
                'audio_url' => '337.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 197,
                'word' => 'for free<br>ex)I got this old computer <span class="border-b text-red-500">for free</span> from my aunt.',
                'meaning' => json_encode([
                    '無料で、ただで',
                    '例)私はこの古いコンピュータをおばから<span class="border-b text-red-500">無料で</span>もらいました。'
                ]),
                'audio_url' => '338.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 197,
                'word' => 'little by little<br>ex)She is getting better <span class="border-b text-red-500">little by little</span>.',
                'meaning' => json_encode([
                    '少しずつ、徐々に',
                    '例)彼女は<span class="border-b text-red-500">少しずつ</span>よくなってます。'
                ]),
                'audio_url' => '339.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 197,
                'word' => 'on the phone<br>ex)I sometimes talk with him <span class="border-b text-red-500">on the phone</span>.',
                'meaning' => json_encode([
                    '電話で',
                    '例)私はときどき彼と<span class="border-b text-red-500">電話で</span>話します。'
                ]),
                'audio_url' => '340.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // R341 - R360
            [
                'section_id' => 198,
                'word' => 'in (a) line<br>ex)Many people were waiting <span class="border-b text-red-500">in line</span> for the last bus.',
                'meaning' => json_encode([
                    '一列になって、並んで',
                    '例)たくさんの人々が<span class="border-b text-red-500">並んで</span>最終バスを待っていました。'
                ]),
                'audio_url' => '341.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'in all<br>ex)How many subjects do you study <span class="border-b text-red-500">in all</span>?',
                'meaning' => json_encode([
                    '全部で',
                    '例)あなたは<span class="border-b text-red-500">全部で</span>いくつの教科を勉強していますか？'
                ]),
                'audio_url' => '342.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => '(in) this way<br>ex1)<span class="border-b text-red-500">In this way</span>, he improved his English skill.<br>ex2)Do it <span class="border-b text-red-500">this way</span>.',
                'meaning' => json_encode([
                    'このようにして',
                    '例1)<span class="border-b text-red-500">このようにして</span>、彼は英語力を上達させました。',
                    '例2)それを<span class="border-b text-red-500">こにょうにして</span>やってごらん。'
                ]),
                'audio_url' => '343.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'in other words<br>ex)<span class="border-b text-red-500">In other words</span>, you were lucky.',
                'meaning' => json_encode([
                    '言いかえると',
                    '例)<span class="border-b text-red-500">言いかえると</span>、あなたは幸運だったということです。'
                ]),
                'audio_url' => '344.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'not only A but (also) B<br>ex)I bought her <span class="border-b text-red-500">not only</span> a card <span class="border-b text-red-500">but also</span> a small present.',
                'meaning' => json_encode([
                    'AでなくBも',
                    '例)私は彼女にカード<span class="border-b text-red-500">だけでなく</span>ささやかなプレゼント<span class="border-b text-red-500">も</span>買いました。'
                ]),
                'audio_url' => '345.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'first of all<br>ex)<span class="border-b text-red-500">First of all</span>, we have to finish our homework.',
                'meaning' => json_encode([
                    'まず第一に',
                    '例)<span class="border-b text-red-500">まず第一に</span>、私たちは宿題を終わらせなければなりません。'
                ]),
                'audio_url' => '346.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'after all<br>ex)The train left ten minutes late, but it arrived on time <span class="border-b text-red-500">after all</span>.',
                'meaning' => json_encode([
                    '結局(は)',
                    '例)電車は10分遅れて出発しましたが、<span class="border-b text-red-500">結局</span>時間通りに到着しました。'
                ]),
                'audio_url' => '347.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'get married<br>ex)They will <span class="border-b text-red-500">get married</span> next month.',
                'meaning' => json_encode([
                    '結婚する',
                    '例)彼らは来月<span class="border-b text-red-500">結婚します</span>。'
                ]),
                'audio_url' => '348.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'a great[large] number of 〜<br>ex)<span class="border-b text-red-500">A great number of</span> foreign people visit Japan every year.',
                'meaning' => json_encode([
                    'とてもたくさん[多数]の〜',
                    '例)<span class="border-b text-red-500">とてもたくさんの</span>外国人が毎年日本を訪れています。'
                ]),
                'audio_url' => '349.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'the number of 〜<br>ex)<span class="border-b text-red-500">The number of</span> foreign tourists visiting Japan is increasing.',
                'meaning' => json_encode([
                    '〜の数',
                    '例)日本を訪れる外国人観光客<span class="border-b text-red-500">の数</span>が増えています。'
                ]),
                'audio_url' => '350.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'thousands of 〜<br>ex)My father has <span class="border-b text-red-500">thousands of</span> books.',
                'meaning' => json_encode([
                    '何千もの〜、多数の〜',
                    '例)私の父は<span class="border-b text-red-500">数千冊の</span>本を持っています。'
                ]),
                'audio_url' => '351.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'millions of 〜<br>ex)<span class="border-b text-red-500">Millions of</span> people came to the festival.',
                'meaning' => json_encode([
                    '何百万もの〜',
                    '例)<span class="border-b text-red-500">何百万という</span>人がその祭りに来ました。'
                ]),
                'audio_url' => '352.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'again and again<br>ex)The man knocked on the door <span class="border-b text-red-500">again and again</span>.',
                'meaning' => json_encode([
                    '何度も何度も',
                    '例)その男の人は<span class="border-b text-red-500">何度も何度も</span>ドアをたたきました。'
                ]),
                'audio_url' => '353.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'all the time<br>ex)She smiled <span class="border-b text-red-500">all the time</span>.',
                'meaning' => json_encode([
                    'いつも、常に、その間ずっと',
                    '例)彼女は<span class="border-b text-red-500">いつも</span>ほほえんでいました。'
                ]),
                'audio_url' => '354.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'all year round<br>ex)You can see beautiful flowers <span class="border-b text-red-500">all year round</span> here.',
                'meaning' => json_encode([
                    '1年中',
                    '例)ここでは美しい花を<span class="border-b text-red-500">1年中</span>見ることができます。'
                ]),
                'audio_url' => '355.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'from now on<br>ex)I\'ll do my best <span class="border-b text-red-500">from now on</span>.',
                'meaning' => json_encode([
                    'これからは、今後',
                    '例)<span class="border-b text-red-500">これからは</span>私は最善を尽くします。'
                ]),
                'audio_url' => '356.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'in time<br>ex)We were <span class="border-b text-red-500">in time</span> for the bus.',
                'meaning' => json_encode([
                    'やがて、間に合って',
                    '例)私たちはそのバスに<span class="border-b text-red-500">間に合い</span>ました。'
                ]),
                'audio_url' => '357.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'once more<br>ex)Why don\'t you try <span class="border-b text-red-500">once more</span>?',
                'meaning' => json_encode([
                    'もう1度[1回]、再び',
                    '例)<span class="border-b text-red-500">もう1度</span>やってみたらどうですか？'
                ]),
                'audio_url' => '358.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'one\'s point of view<br>ex)From <span class="border-b text-red-500">my point of view</span>, this idea can solve the problem.',
                'meaning' => json_encode([
                    '〜の観点、〜の見解',
                    '例)<span class="border-b text-red-500">私の見解</span>では、このアイデアはその問題を解決できます。'
                ]),
                'audio_url' => '359.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 198,
                'word' => 'What\'s the matter (with you) ?<br>ex)You don\'t look well. <span class="border-b text-red-500">What\'s the matter</span>?',
                'meaning' => json_encode([
                    'どうしたのですか？',
                    '例)調子がよくなさそうですね。<span class="border-b text-red-500">どうしたのですか</span>？'
                ]),
                'audio_url' => '360.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
