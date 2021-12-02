<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class PanelController extends Controller
{
    public function articleCreate(Request $request){
        $data = $request->only('title', 'text');
        $article = Article::create([
            'title'=> $data['title'],
            'text'=> $data['text'],
        ]);
        
        if(!$article){
            return abort(403);
        }

        return redirect()->route('articleList');

    }
}
