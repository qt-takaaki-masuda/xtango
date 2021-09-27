<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class SectionController extends Controller
{
    /**
     * セクション一覧
     *
     * @param Request $request
     * @param integer $levelId
     * @return void
     */
    public function index(Request $request, $levelId)
    {
        if ($request->session()->has('words')) {
            $request->session()->forget('words');
        }

        $sections = DB::table('sections')
            ->select('sections.id','sections.title')
            ->join('levels', 'levels.id', '=', 'sections.level_id')
            ->join('tangos', 'tangos.id', '=', 'levels.tango_id')
            ->join('user_tangos', 'tangos.id', '=', 'user_tangos.tango_id')
            ->where('user_tangos.user_id', Auth::id())
            ->where('sections.level_id', $levelId)
            ->orderBy('sections.sort')
            ->get();

        $level = DB::table('levels')
            ->where('levels.id', $levelId)
            ->first();

        $tango = DB::table('tangos')
            ->where('tangos.id', $level->tango_id)
            ->first();

        $modes = DB::table('modes')
            ->where('modes.tango_id', $level->tango_id)
            ->get();

        return Inertia::render('Section/Index', ['sections' => $sections, 'level' => $level, 'tango' => $tango, 'modes' => $modes]);
    }
}
