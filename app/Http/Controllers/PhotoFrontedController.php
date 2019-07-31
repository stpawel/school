<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Photo;

class PhotoFrontedController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        
        return view('fronted.galeria.list',['photos' => $photos]);
    }
}
