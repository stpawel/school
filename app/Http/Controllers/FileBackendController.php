<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\File;


class FileBackendController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    
    
    public function index()
    {
        $files = File::all();
        
        return view('backend.file.list',['files' => $files]);
    }
    
    public function add()
    {
        return view('backend.file.upload');
    }
    
    public function upload(Request $request)
    {
                
       // $file= $request->file('file');
        //$file->store('upload','public');
        
        if ($request->hasFile('file')) {
            
            $file= $request->file('file');
            $fileSize=$file->getSize();
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extension; 
            $file->move('files', $fileName);
            
            $file2 = new File();
            $file2->name=$file->getClientOriginalName();
            $file2->href=$fileName;
            $file2->size=File::sizeFile($fileSize);
            $file2->save();
        
        
        }
        
        return redirect()->action('FileBackendController@index');
    }
    
    public function delete($id)
    {    
        File::destroy($id);
      
        return redirect()->action('FileBackendController@index');
    }
}
