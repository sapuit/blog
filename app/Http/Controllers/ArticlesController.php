<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;
use App\Http\Controllers\Controller;
use Input;
use App\Http\Requests\ArticleFormRequest;
// require_once 'vendor\autoload.php';

class ArticlesController extends Controller
{
    
	public function index(){

    	$articles = Article::paginate(10);
    	return view('articles.index',compact('articles'));
    }


    public function show($id){

    	$article = Article::find($id);
    	return view('articles.show')->with('article',$article) ;	
    }

    public function create(){
    	return view('articles.create');
    }

    public function store(ArticleFormRequest $request)
    {
    	//test
    	// dd(Input::get('title'));
    	$title = Input::get('title');
    	$content= Input::get('content');

    	Article::create([
    		'title' => $title ,
    		'content' => $content
    		 ]);

    	return redirect()->route('article.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleFormRequest $request)
    {
        $article = Article::find($id);

        $article->update([
            'title' => $request->get('title'),
            'content' => $request->get('content')
            ]);

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->route('article.index');
    }
}
