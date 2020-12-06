<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show()
    {
        return view('articles.article_test');
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $article = new Article();

        $article->title = $request->input('postName');
        $article->text = $request->input('postContent');

        $user = User::find(1);

        $user->articles()->save($article);

        dd($_REQUEST);
    }
}
