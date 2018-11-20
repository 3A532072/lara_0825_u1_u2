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
    $posts = \App\Post::all();*/
    $posts = \App\Post::find(1);
    dd($posts);


]});
