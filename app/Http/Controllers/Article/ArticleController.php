<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
class ArticleController extends Controller
{
    public function index(){
        $articles = Article::get();
        return view('article.index',compact('articles'));
    }
}
