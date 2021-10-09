<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class WordController extends Controller
{
    // /**
    //  * 単語 → 意味
    //  *
    //  * @param Request $request
    //  * @param integer $sectionlId
    //  * @return void
    //  */
    // public function w2m(Request $request, $sectionlId)
    // {
    //     $this->index($request, $sectionlId, 'w2m');
    // }

    // /**
    //  * 意味 → 単語
    //  *
    //  * @param Request $request
    //  * @param integer $sectionlId
    //  * @return void
    //  */
    // public function m2w(Request $request, $sectionlId)
    // {
    //     $this->index($request, $sectionlId, 'm2w');
    // }

    /**
     * セクションをキーにランダムに単語データを取得
     *
     * @param Request $request
     * @param integer $mode
     * @param integer $sectionlId
     * @param integer $answerdWordId
     * @param float $answerTime
     * @param boolean $isCorrect
     * @return void
     */
    public function index(Request $request, $mode, $sectionlId, $answerdWordId = null, $answerTime = null, $isCorrect = null)
    {
        // 回答ログに保存
        $this->saveAnswerLog($answerdWordId,$mode, $answerTime, $isCorrect);

        // セッションから取得
        $words = $request->session()->get('words');

        // セッションになければDBから取得
        if (empty($words)) {
            $words = DB::table('words')
                ->select(
                    'tangos.id as tango_id', 'tangos.title as tango_title',
                    'levels.id as level_id','levels.title as level_title',
                    'sections.id as section_id','sections.title as section_title',
                    'words.*'
                )
                ->join('sections', 'sections.id', '=', 'words.section_id')
                ->join('levels', 'levels.id', '=', 'sections.level_id')
                ->join('tangos', 'tangos.id', '=', 'levels.tango_id')
                ->join('user_tangos', 'tangos.id', '=', 'user_tangos.tango_id')
                ->where('user_tangos.user_id', Auth::id())
                ->where('words.section_id', $sectionlId)
                ->inRandomOrder()
                ->get()
                ->all();
        }

        // 先頭の1つを取り出したあと、残りをセッションに保存する。
        $word = array_shift($words);

        // 残りの単語をセッションに保存
        $request->session()->put('words', $words);

        // 音声ファイルのURL生成
        $word->audio_url = sprintf('/audio/tango_%d/level_%d/%s', $word->tango_id, $word->level_id, $word->audio_url);

        // 対象の単語が過去に間違ったことがあるか？
        list($correctCount, $incorrectCount) = $this->getCorrectCount($word->id, $mode);

        return Inertia::render('Word/Index', ['word' => $word, 'mode' => $mode, 'correctCount' => $correctCount, 'incorrectCount' => $incorrectCount]);
    }

    /**
     * 回答ログに保存
     *
     * @param integer $wordId
     * @param float $answerTime
     * @param boolean $isCorrect
     * @return void
     */
    private function saveAnswerLog($wordId, $mode, $answerTime, $isCorrect)
    {
        if (empty($wordId) || empty($answerTime)) {
            return;
        }

        DB::table('answer_logs')->insertOrIgnore([
            'word_id' => $wordId,
            'mode' => $mode,
            'user_id' => Auth::id(),
            'answer_time' => $answerTime,
            'is_correct' => $isCorrect,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * 対象の単語が過去に間違ったことがあるか？
     *
     * @param [type] $wordId
     * @return boolean
     */
    private function getCorrectCount($wordId, $mode)
    {
        $correctCount = DB::table('answer_logs')
            ->where('answer_logs.user_id', Auth::id())
            ->where('answer_logs.word_id', $wordId)
            ->where('answer_logs.mode', $mode)
            ->where('answer_logs.is_correct', 1)
            ->count();

        $incorrectCount = DB::table('answer_logs')
            ->where('answer_logs.user_id', Auth::id())
            ->where('answer_logs.word_id', $wordId)
            ->where('answer_logs.mode', $mode)
            ->where('answer_logs.is_correct', 0)
            ->count();

        return [$correctCount, $incorrectCount];
    }
}
