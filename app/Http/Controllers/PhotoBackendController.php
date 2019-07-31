<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Photo;

class PhotoBackendController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index()
    {    
        $photos=Photo::all();
        return view('backend.photo.list',['photos'=>$photos]);
    }
    
    public function add()
    {
        return view('backend.photo.upload');
    }
    
    public function upload(Request $request)
    {
        if ($request->hasFile('file')){
            $file= $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = time(). '.' . $extension; 
            
            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->href=$fileName;
            $photo->save();
            
            $img = imagecreatefromjpeg($file);

            $width  = imagesx($img);
            $height = imagesy($img);

            $width_mini = 276;
            $height_mini = 165; 
            $img_mini = imagecreatetruecolor($width_mini, $height_mini);

            imagecopyresampled($img_mini, $img, 0, 0, 0, 0, $width_mini , $height_mini, $width  , $height);
            imagejpeg($img_mini, 'photos/min/'.$fileName."", 80); 
            imagedestroy($img);
            imagedestroy($img_mini);
            
            $file->move('photos/max', $fileName);
        }  
        
        return redirect()->action('PhotoBackendController@index');

    }
    
    public function delete($id)
    {
        Photo::destroy($id);
      
        return redirect()->action('PhotoBackendController@index');
    }

}
