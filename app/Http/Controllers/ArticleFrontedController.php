<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleFrontedController extends Controller
{
    public function index()
    {
        $articles = DB::table('articles')->orderBy('id', 'desc')->paginate(10);
        return view('fronted.aktualnosci.list',['articles' => $articles]);
    }
    
    public function show($name,$id)
    {
        $article=Article::find($id);
        
        return view('fronted.aktualnosci.article',['article' => $article]);
    }
    
}
