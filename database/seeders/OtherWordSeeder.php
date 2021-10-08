<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OtherWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            // make 208
            [
                'section_id' => 208,
                'word' => 'make a mistake',
                'meaning' => json_encode([
                    '間違える',
                ]),
                'audio_url' => 'make a mistake.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make room',
                'meaning' => json_encode([
                    '場所をあける',
                ]),
                'audio_url' => 'make room.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a decision',
                'meaning' => json_encode([
                    '決定する',
                ]),
                'audio_url' => 'make a decision.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make progress',
                'meaning' => json_encode([
                    '進歩する',
                ]),
                'audio_url' => 'make progress.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a contribution',
                'meaning' => json_encode([
                    '貢献する',
                ]),
                'audio_url' => 'make a contribution.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a report',
                'meaning' => json_encode([
                    '報告する',
                ]),
                'audio_url' => 'make a report.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a plan',
                'meaning' => json_encode([
                    '計画を立てる',
                ]),
                'audio_url' => 'make a plan.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a draft',
                'meaning' => json_encode([
                    '素案を作る',
                ]),
                'audio_url' => 'make a draft.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a change',
                'meaning' => json_encode([
                    '変更する',
                ]),
                'audio_url' => 'make a change.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a reservation',
                'meaning' => json_encode([
                    '予約をする',
                ]),
                'audio_url' => 'make a reservation.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make an appointment',
                'meaning' => json_encode([
                    '約束をとる',
                ]),
                'audio_url' => 'make an appointment.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a judgment',
                'meaning' => json_encode([
                    '判断を下す',
                ]),
                'audio_url' => 'make a judgment.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a copy',
                'meaning' => json_encode([
                    'コピーを作る',
                ]),
                'audio_url' => 'make a copy.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a discount',
                'meaning' => json_encode([
                    '値引きする',
                ]),
                'audio_url' => 'make a discount.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a effort',
                'meaning' => json_encode([
                    '努力する',
                ]),
                'audio_url' => 'make a effort.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a trial',
                'meaning' => json_encode([
                    '試行する',
                ]),
                'audio_url' => 'make a trial.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a call',
                'meaning' => json_encode([
                    '電話する',
                ]),
                'audio_url' => 'make a call.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a start',
                'meaning' => json_encode([
                    'スタートする',
                ]),
                'audio_url' => 'make a start.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a stop',
                'meaning' => json_encode([
                    '停止する',
                ]),
                'audio_url' => 'make a stop.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a turn',
                'meaning' => json_encode([
                    'ターンする',
                ]),
                'audio_url' => 'make a turn.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a noise',
                'meaning' => json_encode([
                    '騒音を出す',
                ]),
                'audio_url' => 'make a noise.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a remark',
                'meaning' => json_encode([
                    '発言する',
                ]),
                'audio_url' => 'make a remark.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a comment',
                'meaning' => json_encode([
                    'コメントする',
                ]),
                'audio_url' => 'make a comment.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a suggestion',
                'meaning' => json_encode([
                    '発案する',
                ]),
                'audio_url' => 'make a suggestion.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a commitment',
                'meaning' => json_encode([
                    '確約する',
                ]),
                'audio_url' => 'make a commitment.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a confession',
                'meaning' => json_encode([
                    '自白する',
                ]),
                'audio_url' => 'make a confession.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a compromise',
                'meaning' => json_encode([
                    '妥協する',
                ]),
                'audio_url' => 'make a compromise.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 208,
                'word' => 'make a request',
                'meaning' => json_encode([
                    '要求する',
                ]),
                'audio_url' => 'make a request.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // give 209
            [
                'section_id' => 209,
                'word' => 'give an answer',
                'meaning' => json_encode([
                    '回答する',
                ]),
                'audio_url' => 'give an answer.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a hand',
                'meaning' => json_encode([
                    '手を貸す',
                ]),
                'audio_url' => 'give a hand.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a refusal',
                'meaning' => json_encode([
                    '断る',
                ]),
                'audio_url' => 'give a refusal.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a warning',
                'meaning' => json_encode([
                    '警告する',
                ]),
                'audio_url' => 'give a warning.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give an indication that',
                'meaning' => json_encode([
                    '示す',
                ]),
                'audio_url' => 'give an indication that.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give an explanation',
                'meaning' => json_encode([
                    '説明する',
                ]),
                'audio_url' => 'give an explanation.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give an expression',
                'meaning' => json_encode([
                    '印象を与える',
                ]),
                'audio_url' => 'give an expression.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a presentation',
                'meaning' => json_encode([
                    'プレゼンテーションする',
                ]),
                'audio_url' => 'give a presentation.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a speech (makeも)',
                'meaning' => json_encode([
                    'スピーチする',
                ]),
                'audio_url' => 'give a speech.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a talk',
                'meaning' => json_encode([
                    '話す',
                ]),
                'audio_url' => 'give a talk.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a lecture',
                'meaning' => json_encode([
                    '講話をする',
                ]),
                'audio_url' => 'give a lecture.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a performance',
                'meaning' => json_encode([
                    '演技する',
                ]),
                'audio_url' => 'give a performance.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give consideration',
                'meaning' => json_encode([
                    '配慮する',
                ]),
                'audio_url' => 'give consideration.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give thought',
                'meaning' => json_encode([
                    '一考する',
                ]),
                'audio_url' => 'give thought.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a decision',
                'meaning' => json_encode([
                    '判決を下す',
                ]),
                'audio_url' => 'give a decision.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a jump',
                'meaning' => json_encode([
                    'ジャンプする',
                ]),
                'audio_url' => 'give a jump.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a kick',
                'meaning' => json_encode([
                    '蹴る',
                ]),
                'audio_url' => 'give a kick.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a push',
                'meaning' => json_encode([
                    '押す',
                ]),
                'audio_url' => 'give a push.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a pull',
                'meaning' => json_encode([
                    '引く',
                ]),
                'audio_url' => 'give a pull.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a shake',
                'meaning' => json_encode([
                    'ゆする',
                ]),
                'audio_url' => 'give a shake.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a bow',
                'meaning' => json_encode([
                    '礼をする',
                ]),
                'audio_url' => 'give a bow.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a stretch',
                'meaning' => json_encode([
                    '背伸びする',
                ]),
                'audio_url' => 'give a stretch.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give knocks',
                'meaning' => json_encode([
                    'ノックする',
                ]),
                'audio_url' => 'give knocks.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a shout',
                'meaning' => json_encode([
                    '叫ぶ',
                ]),
                'audio_url' => 'give a shout.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a cry',
                'meaning' => json_encode([
                    '一声叫ぶ',
                ]),
                'audio_url' => 'give a cry.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a scream',
                'meaning' => json_encode([
                    '悲鳴を上げる',
                ]),
                'audio_url' => 'give a scream.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a laugh',
                'meaning' => json_encode([
                    '笑う',
                ]),
                'audio_url' => 'give a laugh.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a smile',
                'meaning' => json_encode([
                    '微笑む',
                ]),
                'audio_url' => 'give a smile.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a yawn',
                'meaning' => json_encode([
                    'あくびする',
                ]),
                'audio_url' => 'give a yawn.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 209,
                'word' => 'give a cough',
                'meaning' => json_encode([
                    'せきをする',
                ]),
                'audio_url' => 'give a cough.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            // do 210
            [
                'section_id' => 210,
                'word' => 'do homework',
                'meaning' => json_encode([
                    '宿題する',
                ]),
                'audio_url' => 'do homework.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 210,
                'word' => 'do exercise',
                'meaning' => json_encode([
                    '運動する',
                ]),
                'audio_url' => 'do exercise.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 210,
                'word' => 'do business',
                'meaning' => json_encode([
                    'ビジネスを行う',
                ]),
                'audio_url' => 'do business.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 210,
                'word' => 'do a deal with',
                'meaning' => json_encode([
                    'と取り引きする',
                ]),
                'audio_url' => 'do a deal with.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 210,
                'word' => 'do a favor for',
                'meaning' => json_encode([
                    '手を貸す',
                ]),
                'audio_url' => 'do a favor for.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'section_id' => 210,
                'word' => 'do the dishes',
                'meaning' => json_encode([
                    '皿洗いをする',
                ]),
                'audio_url' => 'do the dishes.mp3',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
