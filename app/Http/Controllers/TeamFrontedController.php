<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Team;
use App\Position;

class TeamFrontedController extends Controller
{
    public function index()
    {
        $teams=DB::select('select p.kind kind, t.name teacher from positions p, teams t where t.position_id=p.id');

        return view('fronted.kadra.list',['teams' => $teams]);
    }
}
