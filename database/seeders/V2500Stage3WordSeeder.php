<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class V2500Stage3WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 2500（単語編） Stage3
        DB::table('words')->insert([
            // // 801 - 820
            // [
            //     'section_id' => 211,
            //     'word' => 'pass',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>通る、[時が]たつ、〜を手渡す、(〜に)合格する',
            //         '<span class="indent">名</span>入場許可書、パス',
            //     ]),
            //     'audio_url' => 'pass.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'bank',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>銀行',
            //         '<span class="indent"></span>土手',
            //     ]),
            //     'audio_url' => 'bank.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'bicycle',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>自転車',
            //     ]),
            //     'audio_url' => 'bicycle.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'radio',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>ラジオ',
            //     ]),
            //     'audio_url' => 'radio.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'department store',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>デパート、百貨店',
            //     ]),
            //     'audio_url' => 'department store.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'convenience store',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>コンビニエンスストア',
            //     ]),
            //     'audio_url' => 'convenience store.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'convenient',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>便利な、好都合な',
            //     ]),
            //     'audio_url' => 'convenient.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'jacket',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>上着、ジャケット',
            //         '<span class="indent"></span>[本などの]カバー',
            //     ]),
            //     'audio_url' => 'jacket.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'noise',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>物音、騒音',
            //     ]),
            //     'audio_url' => 'noise.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'noisy',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>騒がしい、うるさい',
            //     ]),
            //     'audio_url' => 'noisy.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'outside',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>外側に',
            //         '<span class="kakomu">形</span>外側の',
            //         '<span class="kakomu">名</span>外側',
            //         '<span class="kakomu">前</span>〜の外側に',
            //     ]),
            //     'audio_url' => 'outside.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'inside',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>内側に',
            //         '<span class="kakomu">形</span>内側の',
            //         '<span class="kakomu">名</span>内側',
            //         '<span class="kakomu">前</span>〜の内側に',
            //     ]),
            //     'audio_url' => 'inside.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'either',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>[否定文のあとで]〜もまた(･･･ない)',
            //     ]),
            //     'audio_url' => 'either.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'surprise',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を驚かす、びっくりさせる',
            //         '<span class="kakomu">名</span>驚き、びっくりさせる[事]',
            //     ]),
            //     'audio_url' => 'surprise.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'peace',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>平和',
            //         '<span class="indent"></span>(⇔ war 戦争)',
            //     ]),
            //     'audio_url' => 'peace.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'police',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>警察[the police で複数扱い]',
            //     ]),
            //     'audio_url' => 'police.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'experience',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>経験、体験',
            //         '<span class="kakomu">動</span>〜を経験する',
            //     ]),
            //     'audio_url' => 'experience.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'part',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>部分、一部(⇔ whole 全体)',
            //         '<span class="indent"></span>役、役割(= role)',
            //     ]),
            //     'audio_url' => 'part.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'area',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>地域、地方',
            //         '<span class="indent"></span>面積',
            //     ]),
            //     'audio_url' => 'area.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 211,
            //     'word' => 'field',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>畑、野原',
            //         '<span class="indent"></span>競技場',
            //         '<span class="indent"></span>分野',
            //     ]),
            //     'audio_url' => 'field.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 821 - 840
            // [
            //     'section_id' => 212,
            //     'word' => 'space',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>空間、スペース',
            //         '<span class="indent"></span>宇宙',
            //     ]),
            //     'audio_url' => 'space.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'fact',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>事実、現実',
            //     ]),
            //     'audio_url' => 'fact.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'absent',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>欠席して、不在の(⇔ present 出席して)',
            //     ]),
            //     'audio_url' => 'absent.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'enough',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>十分な',
            //         '<span class="kakomu">副</span>十分に',
            //     ]),
            //     'audio_url' => 'enough.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'such',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>そのような',
            //         '<span class="indent"></span>[形＋名の前で]とても、そんなに',
            //     ]),
            //     'audio_url' => 'such.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'even',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>〜でさえ',
            //         '<span class="indent"></span>[比較級の前で]さらに',
            //     ]),
            //     'audio_url' => 'even.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'myself',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>私自身(を、に)',
            //     ]),
            //     'audio_url' => 'myself.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'yourself',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>あなた自身(を、に)',
            //     ]),
            //     'audio_url' => 'yourself.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'herself',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>彼女自身(を、に)',
            //     ]),
            //     'audio_url' => 'herself.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'himself',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>彼自身(を、に)',
            //     ]),
            //     'audio_url' => 'himself.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'itself',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>それ自身(を、に)',
            //     ]),
            //     'audio_url' => 'itself.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'ourselves',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>私たち自身(を、に)',
            //     ]),
            //     'audio_url' => 'ourselves.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'yourselves',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>あなたたち自身(を、に)',
            //     ]),
            //     'audio_url' => 'yourselves.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'themselves',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">代</span>彼ら自身(を、に)',
            //     ]),
            //     'audio_url' => 'themselves.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'clear',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>はっきりした、明らかな',
            //         '<span class="indent"></span>澄んだ、晴れた(= fine、sunny)',
            //         '<span class="kakomu">動</span>〜を片づける',
            //     ]),
            //     'audio_url' => 'clear.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'clearly',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>はっきりと、明らかに',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => 'clearly.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'real',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>本当の、現実の',
            //     ]),
            //     'audio_url' => 'real.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'reality',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>現実',
            //     ]),
            //     'audio_url' => 'reality.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'village',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>村',
            //     ]),
            //     'audio_url' => 'village.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 212,
            //     'word' => 'wake',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>目が覚める、〜を起こす',
            //         '<span class="indent"></span>',
            //     ]),
            //     'audio_url' => 'wake.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 841 - 860
            // [
            //     'section_id' => 213,
            //     'word' => 'less',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[little の比較級]より少ない',
            //         '<span class="kakomu">副</span>[little の比較級]より少なく',
            //     ]),
            //     'audio_url' => 'less.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'least',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[little の最上級]最も少ない',
            //         '<span class="kakomu">副</span>[little の最上級]最も少なく',
            //     ]),
            //     'audio_url' => 'least.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'cheap',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>安い(⇔ expensive 高価な)',
            //     ]),
            //     'audio_url' => 'cheap.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'price',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>価格、値段',
            //     ]),
            //     'audio_url' => 'price.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'everywhere',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>どこでも、いたるところで',
            //     ]),
            //     'audio_url' => 'everywhere.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'anywhere',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>[疑問符で]どこかに[へ]',
            //         '<span class="indent"></span>[否定文で]どこにも(〜ない)',
            //         '<span class="indent"></span>[肯定文で]どこへでも',
            //     ]),
            //     'audio_url' => 'anywhere.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'somewhere',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>どこかに[へ]',
            //     ]),
            //     'audio_url' => 'somewhere.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'someday',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>[未来の]いつか、そのうち',
            //     ]),
            //     'audio_url' => 'someday.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'forever',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>永久に、永遠に',
            //     ]),
            //     'audio_url' => 'forever.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'difference',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>違い、差',
            //     ]),
            //     'audio_url' => 'difference.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'pride',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>誇り、自尊心',
            //     ]),
            //     'audio_url' => 'pride.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'proud',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>誇りに思う',
            //     ]),
            //     'audio_url' => 'proud.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'smell',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>においがする、〜のにおいをかぐ',
            //         '<span class="kakomu">名</span>におい',
            //     ]),
            //     'audio_url' => 'smell.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'happen',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(偶然)起こる',
            //     ]),
            //     'audio_url' => 'happen.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'explain',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)説明する',
            //     ]),
            //     'audio_url' => 'explain.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'receive',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を受け取る、受ける(⇔ send 〜を送る)',
            //     ]),
            //     'audio_url' => 'receive.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'return',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>帰る、戻る',
            //         '<span class="indent"></span>〜を返す',
            //         '<span class="kakomu">名</span>帰ること',
            //     ]),
            //     'audio_url' => 'return.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'lend',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)貸す(⇔ borrow 〜を借りる)',
            //     ]),
            //     'audio_url' => 'lend.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'let',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(人)に〜させる',
            //     ]),
            //     'audio_url' => 'let.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 213,
            //     'word' => 'sign',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>標識、看板',
            //         '<span class="indent"></span>合図、身ぶり',
            //         '<span class="kakomu">動</span>(〜に)署名をする',
            //     ]),
            //     'audio_url' => 'sign.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 881 - 880
            // [
            //     'section_id' => 214,
            //     'word' => 'report',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>報告、報告書',
            //         '<span class="kakomu">動</span>(〜を)報告する、知らせる',
            //     ]),
            //     'audio_url' => 'report.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'menu',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>メニュー、献立表',
            //     ]),
            //     'audio_url' => 'menu.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'nervous',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>神経質な、緊張して、心配して',
            //     ]),
            //     'audio_url' => 'nervous.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'lonely',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>寂しい、孤独な',
            //     ]),
            //     'audio_url' => 'lonely.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'alone',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>1人で、単独で',
            //         '<span class="kakomu">形</span>ただ1人で',
            //     ]),
            //     'audio_url' => 'alone.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'cover',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜をおおう、〜にふたをする',
            //         '<span class="kakomu">名</span>おおい、(本の)表紙',
            //     ]),
            //     'audio_url' => 'cover.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'fill',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を満たす、いっぱいにする',
            //     ]),
            //     'audio_url' => 'fill.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'cause',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>原因、理由',
            //         '<span class="kakomu">動</span>〜の原因となる、〜を引き起こす',
            //     ]),
            //     'audio_url' => 'cause.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'hurt',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を傷つける、痛む',
            //     ]),
            //     'audio_url' => 'hurt.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'born',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>[be born で]生まれる',
            //         '<span class="maruku-kakomu">活</span>bear-bore-born 〜を産む',
            //     ]),
            //     'audio_url' => 'born.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'disappointed',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>がっかりした、失望した',
            //     ]),
            //     'audio_url' => 'disappointed.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'accident',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>事故、偶然の出来事',
            //     ]),
            //     'audio_url' => 'accident.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'plant',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>植物',
            //         '<span class="indent"></span>工場(= factory)',
            //         '<span class="kakomu">動</span>〜を植える',
            //     ]),
            //     'audio_url' => 'plant.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'wood',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>木材、[複数形で]森',
            //     ]),
            //     'audio_url' => 'wood.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'wooden',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>木(製)の',
            //     ]),
            //     'audio_url' => 'wooden.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'web',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>[the Web で][インターネットの]ウェブ',
            //         '<span class="indent"></span>クモの巣',
            //     ]),
            //     'audio_url' => 'web.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'site',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>用地、場所',
            //         '<span class="indent"></span>　[インターネットの]サイト(= website ウェブサイト)',
            //     ]),
            //     'audio_url' => 'site.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'step',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>歩み、一歩',
            //         '<span class="indent"></span>[階段の]段、[複数形で](ふつう屋外の)階段',
            //         '<span class="kakomu">動</span>一歩進む、踏み出す',
            //     ]),
            //     'audio_url' => 'step.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'have',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">助</span>[have[has]＋過去分詞で現在完了を表す]',
            //         '<span class="indent"></span>[継続](ずっと)〜している',
            //         '<span class="indent"></span>[完了]〜したところだ、〜してしまった',
            //         '<span class="indent"></span>[経験](今までに)〜したことがある',
            //     ]),
            //     'audio_url' => 'have.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 214,
            //     'word' => 'been',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>be の過去分詞',
            //         '<span class="maruku-kakomu">▶</span>have been to 〜 〜に行ったことがある',
            //     ]),
            //     'audio_url' => 'been.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // // 881 - 900
            // [
            //     'section_id' => 215,
            //     'word' => 'since',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">前</span>〜以来、〜から',
            //         '<span class="kakomu">接</span>〜してから(ずっと)',
            //         '<span class="indent"></span>〜だから(= because)',
            //     ]),
            //     'audio_url' => 'since.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'ever',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>今までに、これまでに、かつて',
            //     ]),
            //     'audio_url' => 'ever.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'twice',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>2度、2回',
            //         '<span class="indent"></span>2倍',
            //     ]),
            //     'audio_url' => 'twice.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'already',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>[肯定文で]すでに、もう',
            //     ]),
            //     'audio_url' => 'already.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'yet',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">副</span>[否定文で]まだ(〜ない)',
            //         '<span class="indent"></span>[疑問文で]もう',
            //     ]),
            //     'audio_url' => 'yet.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'done',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>do の過去分詞',
            //     ]),
            //     'audio_url' => 'done.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'able',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>[be able to 〜で]〜することができる(⇔ unable)、有能な',
            //     ]),
            //     'audio_url' => 'able.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'human',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>人間の、人間的な',
            //         '<span class="kakomu">名</span>[ふつう humanで]人、人間、[human being で]人間',
            //     ]),
            //     'audio_url' => 'human.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'dead',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>死んだ、死んでいる、枯れた(⇔ alive、living 生きている)',
            //     ]),
            //     'audio_url' => 'dead.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'death',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">名</span>死',
            //     ]),
            //     'audio_url' => 'death.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'promise',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>(〜を)約束する',
            //         '<span class="kakomu">名</span>約束',
            //     ]),
            //     'audio_url' => 'promise.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'continue',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>〜を続ける、続く',
            //     ]),
            //     'audio_url' => 'continue.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'save',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">動</span>救う',
            //         '<span class="indent"></span>(〜を)蓄える',
            //         '<span class="indent"></span>(〜を)節約する',
            //     ]),
            //     'audio_url' => 'save.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'surprised',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>驚いた、びっくりした',
            //     ]),
            //     'audio_url' => 'surprised.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'surprising',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>驚くべき、意外な',
            //     ]),
            //     'audio_url' => 'surprising.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'dangerous',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>危険な、危ない(⇔ safe 安全な)',
            //     ]),
            //     'audio_url' => 'dangerous.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'safe',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>安全な、安心な(⇔ dangerous 危険な)',
            //         '<span class="kakomu">名</span>金庫',
            //     ]),
            //     'audio_url' => 'safe.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'possible',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>可能な、ありうる(⇔ impossible)',
            //     ]),
            //     'audio_url' => 'possible.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'impossible',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>不可能な、ありえない(⇔ possible)',
            //     ]),
            //     'audio_url' => 'impossible.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],
            // [
            //     'section_id' => 215,
            //     'word' => 'necessary',
            //     'meaning' => json_encode([
            //         '<span class="kakomu">形</span>必要な、なくてはならない',
            //     ]),
            //     'audio_url' => 'necessary.mp3',
            //     'created_at' => date('Y-m-d H:i:s'),
            //     'updated_at' => date('Y-m-d H:i:s'),
            // ],

            // 901 - 920
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 216,
                'word' => '',
                'meaning' => json_encode([
                    '<span class="kakomu"></span>',
                ]),
                'audio_url' => '.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // 921 - 940

            // 941 - 960

            // 961 - 980

            // 981 - 1000

            // 1001 - 1020

            // 1021 - 1040

            // 1041 - 1060

            // 1061 - 1080

            // 1081 - 1100

            // 1101 - 1120

            // 1121 - 1140

            // 1141 - 1160

            // 1161 - 1180

            // 1181 - 1200
        ]);
    }
}
