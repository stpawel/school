<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\File;

class FileFrontedController extends Controller
{
    public function index()
    {
        $files = File::all();
        
        return view('fronted.pliki.list',['files' => $files]);
    }
}
