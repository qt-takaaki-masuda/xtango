<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class LogController extends Controller
{
    /**
     * 回答時間の保存
     *
     * @return void
     */
    public function saveAnswerTime(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'word_id' => 'required',
            'answer_time' => 'required',
        ]);

        if ($validator->fails()) {
            Log::debug(print_r($validator,true));
            return response()->json(['error' => $validator->errors()]);
        }

        DB::table('answer_time_logs')->insertOrIgnore([
            'word_id' => $request->input('word_id'),
            'user_id' => Auth::id(),
            'answer_time' => $request->input('answer_time'),
        ]);

        return response()->json(['success'=>'Added new records.']);
    }
}
