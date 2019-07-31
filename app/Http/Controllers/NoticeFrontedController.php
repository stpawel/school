<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notice;

class NoticeFrontedController extends Controller
{
    public function index()
    {
        $notices = DB::table('notices')->orderBy('id', 'desc')->paginate(10);
        return view('fronted.ogloszenia.list',['notices' => $notices]);
    }
}
