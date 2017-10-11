<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Storage;
use App\Category;
use App\Repository_category;
use App\Repository;
use App\Photo;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/index',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function about(){
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/about',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function articleView($id){
        $articles = Article::where('display', '=', '1')->where('id', '=', $id);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/news/article_view',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function news_event(){
        $articles = Article::where('kategori', '=', '1')->where('display', '=', '1')->orderBy('created_at', 'desc')->paginate(12);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/news/news-event',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function news_championship(){
        $articles = Article::where('kategori', '=', '3')->where('display', '=', '1')->orderBy('created_at', 'desc')->paginate(12);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/news/news-championship',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function news_competition(){
        $articles = Article::where('kategori', '=', '2')->where('display', '=', '1')->orderBy('created_at', 'desc')->paginate(12);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/news/news-competition',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function articleViewOpen(){
        $article_id = Input::get('article_id', 'default category');
        $id = (int)$article_id;
        
        $article = Article::find($id);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/home/news/article_view', ['article' => $article, 'categories' => $categories, 'photos'=>$photos]);
    }

    public function product(){
        $repository_categories = Repository_category::all();
        $repository_categories2 = Repository_category::all();
        $repositories = Repository::all();
        return view('pages/home/product',['repositories'=>$repositories, 'repository_categories'=>$repository_categories, 'repository_categories2'=>$repository_categories2]);
    }
    
}
