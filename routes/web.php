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

Route::get('/', 'SistemController@home');

Route::post('news', 'SistemController@insertBerita');
Route::post('repository_files', 'SistemController@insertRepository');
Route::post('repositories_category', 'SistemController@insertRepositoryCategory');

Route::get('/about', 'SistemController@about');

Route::get('/admin', 'SistemController@admin');
Route::get('/admin_article', 'SistemController@article_index');
Route::get('/admin_repository', 'SistemController@repository_index');

Route::post('edit_article', 'SistemController@editArticle');
Route::post('edit_article_open', 'SistemController@editArticleView');

Route::post('delete_photo', 'SistemController@deletePhoto');

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
Route::post('upload', 'SistemController@upload');
Route::post('upload_img', 'UploadController@uploadImage');