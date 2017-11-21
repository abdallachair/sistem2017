<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/news', 'HomeController@news');
Route::get('/product', 'HomeController@product');
Route::get('/product-kategori', 'HomeController@productKategori');
Route::get('/news-event', 'HomeController@news_event');
Route::get('/news-championship', 'HomeController@news_championship');
Route::get('/news-competition', 'HomeController@news_competition');
Route::get('/article_view', 'HomeController@articleViewOpen');
Route::get('/download', 'HomeController@getDownload');

Auth::routes();
    Route::prefix('sistem-admin')->group(function(){
        Route::get('/', 'SistemController@admin')->name('admin.dashboard');
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

        
        Route::get('/admin_article', 'SistemController@article_index');
        Route::get('/admin_repository', 'SistemController@repository_index');

        Route::post('/edit_article', 'SistemController@editArticle');
        Route::get('/edit_article_open', 'SistemController@editArticleView');

        Route::post('/delete_photo', 'SistemController@deletePhoto');

        Route::get('storage/{filename}', function ($filename)
                   {
        $path = storage_path('public/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
                   });
        
        Route::post('/upload', 'SistemController@upload');
        Route::post('/upload_img', 'UploadController@uploadImage');


        Route::post('/news', 'SistemController@insertBerita');
        Route::post('/repository_files', 'SistemController@insertRepository');
        Route::post('/repositories_category', 'SistemController@insertRepositoryCategory');
        
    });