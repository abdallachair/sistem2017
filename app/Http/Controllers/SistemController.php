<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Storage;
use App\Category;
use App\Photo;

use Illuminate\Support\Facades\DB;
use \File as File;

class SistemController extends Controller
{
    public function home(){
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/index',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function article_index(){
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/article_index',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function about(){
        return view('pages/about');
    }
    
    public function admin(){
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/admin_index',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function editArticle(Request $request){
        DB::table('articles')
            ->where('id', $request->article_id)
            ->update([
                'judul'=>$request->judul_berita,
                'konten'=>$request->konten_berita,
                'kategori'=>$request->pilih_kategori,
                'display'=>$request->display
            ]);
        
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        
        $files = $request->file('file');
        
        if(!empty($files)):
        
            foreach($files as $file):
           //     Storage::put($file->getClientOriginalName(), file_get_contents($file));
                $file->move('src/img/article_photos', $file->getClientOriginalName());
                Photo::create([
                    'img_src'=>$file->getClientOriginalName(),
                    'article_id'=> $request->article_id
                ]);
            endforeach;
        
        endif;
        
        $photo_ids = $request->photo_id;
        
        if(is_array($photo_ids)):
            foreach($photo_ids as $photo_id):
                $photo = Photo::find($photo_id);
                DB::table('photos')->where('id', '=', $photo_id)->delete();
                File::delete('src/img/article_photos/' .$photo->img_src);
            endforeach;
        endif;
        
        return view('pages/admin',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]); 
    }
    
    public function editArticleView(Request $request){
        $article = Article::find($request->article_id);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/edit_article', ['article' => $article, 'categories' => $categories, 'photos'=>$photos]);
    }
    
    public function insertBerita(Request $request){
        
        $files = $request->file('file');
        
        $simpan = Article::create([
           'judul'=>$request->judul_berita,
            'konten'=>$request->konten_berita,
            'kategori'=>$request->pilih_kategori,
            'display'=>$request->display
        ]);
        
        if(!empty($files)):
        
            foreach($files as $file):
           //     Storage::put($file->getClientOriginalName(), file_get_contents($file));
                $file->move('src/img/article_photos', $file->getClientOriginalName());
                Photo::create([
                    'img_src'=>$file->getClientOriginalName(),
                    'article_id'=> $simpan->id
                ]);
            endforeach;
        
        endif;
        
        
        $photos = Photo::all();
        $articles = Article::all();
        $categories = Category::all();
        
        return view('pages/sistem_admin_page_xXx',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
        
}
