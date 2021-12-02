<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class PageController extends Controller
{
    public function test(){
        return view('test', [
            'pageTitle'=> 'Test Page', 
        ]);
    }

    public function admin(){
        return view('admin', [
            'pageTitle'=> 'Admin Page',
        ]);
    }

    public function articleList(){

        $articles = Article::all();

        return view('articleList', [
            'pageTitle'=> "Article List",
            'articles'=> $articles,
        ]);
    }

    public function articleCreate(){
        return view('articleCreate', [
            'pageTtile'=> 'Article Create',
        ]);
    }

    public function article($id){
        $article = Article::find($id);

        return view('article', [ 
            'article'=> $article,
        ]); 
    }
}
