<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * ダッシュボード
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        if ($request->session()->has('words')) {
            $request->session()->forget('words');
        }

        $tangos = DB::table('tangos')
            ->select('tangos.id', 'tangos.title', 'tangos.image_file_name', 'tangos.description')
            ->join('user_tangos', 'tangos.id', '=', 'user_tangos.tango_id')
            ->where('user_tangos.user_id', Auth::id())
            ->orderBy('tangos.sort')
            ->get();

        return Inertia::render('Dashboard/Index', ['tangos' => $tangos]);
    }
}
