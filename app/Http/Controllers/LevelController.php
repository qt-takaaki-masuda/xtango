<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LevelController extends Controller
{
    /**
     * レベル一覧
     *
     * @param Request $request
     * @param integer $tangoId
     * @return void
     */
    public function index(Request $request, $tangoId)
    {
        if ($request->session()->has('words')) {
            $request->session()->forget('words');
        }

        $tango = DB::table('tangos')
            ->where('tangos.id', $tangoId)
            ->first();

        $levels = DB::table('levels')
            ->select('levels.id','levels.title')
            ->join('tangos', 'tangos.id', '=', 'levels.tango_id')
            ->join('user_tangos', 'tangos.id', '=', 'user_tangos.tango_id')
            ->where('user_tangos.user_id', Auth::id())
            ->where('user_tangos.tango_id', $tangoId)
            ->orderBy('levels.sort')
            ->get();

        return Inertia::render('Level/Index', ['levels' => $levels, 'tango' => $tango]);
    }
}
