<?php
//ルーティング定義
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/',[PostController::class,'index']) //最初のページのルーティング
    ->name('index');

Route::get('/post',[PostController::class,'post']) //投稿ページのルーティング
    ->name('post');

Route::post('/submit',[PostController::class,'submit'])
    ->name('submit');

Route::delete('/delete/{id}',[PostController::class,'delete']) //削除ページのルーティング
    ->name('delete');

Route::get('/edit/{post}',[PostController::class,'edit']) //編集ページのルーティング
    ->name('edit');

Route::patch('/update/{id}',[PostController::class,'update'])
    ->name('update');

Route::post('/like/{id}',[PostController::class,'like']) //いいねボタンを押した時のルーティング
    ->name('like');

Route::post('/sort_like',[PostController::class,'sort_like']) //いいね順にソートした時のルーティング
    ->name('sort_like');

Route::get('/errorpage/{post}',[PostController::class,'errorpage']) //エラーページのルーティング
    ->name('errorpage');
