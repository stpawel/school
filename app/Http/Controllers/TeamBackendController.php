<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Team;
use App\Position;

class TeamBackendController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $positions=DB::select('select p.kind kind, t.id id from positions p, teams t where t.position_id=p.id');
        return view('backend.team.list',['positions'=>$positions]);
    }
    
    public function add()
    {
        $positions = Position::all();
        return view('backend.team.add',['positions'=>$positions]);
    }
    
    public function create(Request $request)
    {
        $team = new Team();
        $team->name=$request->input('name');
        $team->position_id=$request->input('position');
        $team->save();

        return redirect()->action('TeamBackendController@index');        
    }
    
    public function edit($id)
    {
        $positions = Position::all();
        $team=Team::find($id);
        
        return view('backend.team.edit',['positions' => $positions,
                                        'team'=>$team]);
    }
    
    public function update(Request $request)
    {
        $team = Team::find($request->input('id'));
        $team->name = $request->input('name');
        $team->position_id = $request->input('position');
	$team->save();
        
        return redirect()->action('TeamBackendController@index');
    }
    
    public function delete($id)
    {
        Team::destroy($id);
        
        return redirect()->action('TeamBackendController@index');
    }
}
