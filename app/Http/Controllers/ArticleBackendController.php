<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleBackendController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $articles = DB::table('articles')->orderBy('id', 'desc')->paginate(20);
        $stitle='';
        return view('backend.article.list',['articles' => $articles,
                                            'stitle'=>$stitle]);
    }
    
    public function add()
    {
        return view('backend.article.add');
    }
    
    public function create(Request $request)
    {    
        $request->validate([
			'title' => 'required',
			'description' => 'required',
                        'contents' => 'required'	
		]);
        
        $href = Article::convPlInEng($request->input('title'));
        
        $article = new Article();
        $article->title = $request->input('title');
        $article->href=$href;
        $article->description=$request->input('description');
        $article->contents=$request->input('contents');
        $article->save();
        
        return redirect()->action('ArticleBackendController@index');
    }
    
    public function delete($id)
    {
        Article::destroy($id);
        
        return redirect()->action('ArticleBackendController@index');
    }
    
    public function edit($id)
    {
        $article=Article::find($id);
        
        return view('backend.article.edit',['article' => $article]);
    }
    
    public function update(Request $request)
    {
        $request->validate([
			'title' => 'required',
			'description' => 'required',
                        'contents' => 'required'	
		]);
        
        $href = Article::convPlInEng($request->input('title'));
        
        $article = Article::find($request->input('id'));
        $article->title = $request->input('title');
        $article->href = $href;
        $article->description = $request->input('description');
        $article->contents = $request->input('contents');

	$article->save();
        
        return redirect()->action('ArticleBackendController@index');
    }
    
    public function search(Request $request)
    {
        $stitle=$request->input('stitle');
        
        $articles = DB::table('articles')->where('title', 'like', '%'.$stitle.'%')->orderBy('id', 'desc')->paginate(20);
        
        return view('backend.article.list',['articles' => $articles,
                                            'stitle' =>$stitle]);
    }
}
