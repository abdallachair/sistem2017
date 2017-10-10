<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Storage;
use App\Category;
use App\Repository_category;
use App\Repository;
use App\Photo;

use Illuminate\Support\Facades\DB;
use \File as File;

class SistemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function article_index(){
        $articles = Article::orderBy('created_at', 'desc')->paginate(4);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/article_index',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function repository_index(){
        $repository_categories = Repository_category::orderBy('created_at', 'desc')->paginate(3);
        $repository_categories2 = Repository_category::all();
        $repositories = Repository::all();
        return view('pages/repository_index',['repositories'=>$repositories, 'repository_categories'=>$repository_categories, 'repository_categories2'=>$repository_categories2]);
    }
    
    public function admin(){
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/admin_index',['articles'=>$articles, 'categories'=>$categories, 'photos'=>$photos]);
    }
    
    public function editArticle(Request $request){
        
        
        $articles = Article::all();
        $categories = Category::all();
        $photos = Photo::all();
        
        $files = $request->file('file');
        
        if(!empty($files)):
        
            foreach($files as $file):
                $allowedFileTypes = config('app.allowedFileTypes');
                $rules = [
                    'file' => 'required|mimes:'.$allowedFileTypes
                ];
                $this->validate($request, $rules);
            endforeach;
        
        endif;
        
        if(!empty($files)):
        
            foreach($files as $file):
                Storage::put($file->getClientOriginalName(), file_get_contents($file));
                $files->move('src/img/article_photos', $files->getClientOriginalName());
                Photo::create([
                    'img_src'=>$files->getClientOriginalName(),
                    'article_id'=> $request->article_id
                ]);
            endforeach;
        
        endif;
        
        DB::table('articles')
            ->where('id', $request->article_id)
            ->update([
                'judul'=>$request->judul_berita,
                'konten'=>$request->konten_berita,
                'kategori'=>$request->pilih_kategori,
                'display'=>$request->display,
                'thumbnail_id'=>$request->photo_thumbnail
            ]);
        
        $photo_ids = $request->photo_id;
        
        if(is_array($photo_ids)):
            foreach($photo_ids as $photo_id):
                $photo = Photo::find($photo_id);    
                DB::table('photos')->where('id', '=', $photo_id)->delete();
                File::delete('src/img/article_photos/' .$photo->img_src);
            endforeach;
        endif;
        
        
        
        return redirect()->action('SistemController@article_index'); 
    }
    
    public function editArticleView(Request $request){
        $article = Article::find($request->article_id);
        $categories = Category::all();
        $photos = Photo::all();
        return view('pages/edit_article', ['article' => $article, 'categories' => $categories, 'photos'=>$photos]);
    }
    
    public function insertBerita(Request $request){
        
        $files = $request->file('file');
        
            $nbr = count($request->file('file')) - 1;
        
            foreach(range(0, $nbr) as $index):
                $allowedFileTypes = config('app.allowedFileTypes');
                $rules['file.' . $index] = 'required|mimes:'.$allowedFileTypes;
                $rules2['file.' . $index] = 'required';
                /*$rules = [
                    'file' => 'required|mimes:'.$allowedFileTypes
                ];*/
                
                $this->validate($request, $rules);
            endforeach;
            /*foreach($files as $file):
                $allowedFileTypes = config('app.allowedFileTypes');
                $rules = [
                    'file' => 'required|mimes:'.$allowedFileTypes
                ];
                $this->validate($request, $rules);
            endforeach;*/
         $temporary_id = 123;
         $simpan = Article::create([
            'judul'=>$request->judul_berita,
            'konten'=>$request->konten_berita,
            'kategori'=>$request->pilih_kategori,
            'display'=>$request->display,
            'thumbnail_id'=>'123'
        ]);
        
        $iteration = 0;
        foreach($files as $file):
            $file->move('src/img/article_photos', $file->getClientOriginalName());
            if($iteration === 0){
               $simpan_photo = Photo::create([
                    'img_src'=>$file->getClientOriginalName(),
                    'article_id'=> $simpan->id,
                ]);
                $simpan->update(['thumbnail_id'=>$simpan_photo->id]);
                $iteration += 1;
            } else{
                Photo::create([
                    'img_src'=>$file->getClientOriginalName(),
                    'article_id'=> $simpan->id,
                ]);
            }
        endforeach;
        
        $photos = Photo::all();
        $articles = Article::all();
        $categories = Category::all();
        
        return redirect()->action('SistemController@article_index');
    }
    
    public function insertRepository(Request $request){
        
        $files = $request->file('file');
        
        if(!empty($files)):
            $nbr = count($request->file('file')) - 1;
        
            foreach(range(0, $nbr) as $index):
                $allowedFileTypes = config('app.allowedFileTypes2');
                $rules['file.' . $index] = 'required|mimes:'.$allowedFileTypes;
                /*$rules = [
                    'file' => 'required|mimes:'.$allowedFileTypes
                ];*/
                
                $this->validate($request, $rules);
            endforeach;
            
            foreach($files as $file):
                $file->move('src/files', $file->getClientOriginalName());
                $simpan = Repository::create([
                    'nama'=>$file->getClientOriginalName(),
                    'kategori_repositori'=>$request->pilih_kategori
                ]);
            endforeach;
         
        endif; 
        
       
        $photos = Photo::all();
        $articles = Article::all();
        $repository_categories = Repository_category::all();
        
        return redirect()->action('SistemController@repository_index');
    }
    
    public function insertRepositoryCategory(Request $request){
        
        $simpan = Repository_category::create([
            'nama_kategori'=>$request->nama_kategori
        ]);
       
        $photos = Photo::all();
        $articles = Article::all();
        $repository_categories = Repository_category::all();
        
        return redirect()->action('SistemController@repository_index');
    }
        
}
