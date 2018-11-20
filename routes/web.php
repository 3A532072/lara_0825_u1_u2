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

Route::get('/', function () {
    //return view('welcome');
    /*新增資料
    \App\Post::create([
        'title'=>'testtitle',
        'content'=>'testcontent',
    ]);
    ]);

    $post=new \App\Post();
    $post->title='testtitle';
    $post->content='testcontent';
    $post->save();*/

    /*查詢資料
    $posts = \App\Post::all();
    $posts = \App\Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();
    $post = \App\Post::find(1);*/

    /*更新資料
    $post->update([
        'title' => 'updated title',
        'content' => 'updated content',
    ]);

    $post->title = 'saved title';
    $post->content = 'saved content';
    $post->save();*/

    /*刪除資料
    $post->delete();
    \App\Post::destroy(2);*/
    \App\Post::destroy(3,4,5);


    //dd($posts);


]});
