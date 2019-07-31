<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Notice;

class NoticeBackendController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $notices = DB::table('notices')->orderBy('id', 'desc')->paginate(20);
        
        return view('backend.notice.list',['notices' => $notices]);
    }
    
    public function add()
    {
        return view('backend.notice.add');
    }
    
    public function create(Request $request)
    {    
        $request->validate([
			'title' => 'required',
			'description' => 'required',	
		]);
        
       
        
        $notice = new Notice();
        $notice->title = $request->input('title');
        $notice->description=$request->input('description');
        $notice->save();
        
        return redirect()->action('NoticeBackendController@index');
    }
    
    public function delete($id)
    {
        Notice::destroy($id);
        
        return redirect()->action('NoticeBackendController@index');
    }
    
    public function edit($id)
    {
        $notice=Notice::find($id);
        
        return view('backend.notice.edit',['notice' => $notice]);
    }
    
    public function update(Request $request)
    {
        $request->validate([
			'title' => 'required',
			'description' => 'required',
		]);
           
        $notice = Notice::find($request->input('id'));
        $notice->title = $request->input('title');
        $notice->description = $request->input('description');

	$notice->save();
        
        return redirect()->action('NoticeBackendController@index');
    }
}
