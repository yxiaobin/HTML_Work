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

//后台管理
Route::middleware(['web','Adminmiddleware'])->group(function () {
    Route::get('/manager',['as'=>'manager','uses'=>'AdminController@manager']);
    //轮播图管理
    Route::get('/banner',['as'=>'banner','uses'=>'MangerController@banindex']);
    Route::post('/banner',['as'=>'banner','uses'=>'MangerController@banstore']);
    Route::get('/bannerdelete/{id}',['as'=>'bannerdelete','uses'=>'MangerController@bandelete']);
    //文章管理
    Route::get('/artical/{id}',['as'=>'artical','uses'=>'MangerController@articalindex']);
    Route::get('/newartical',['as'=>'newartical','uses'=>'MangerController@newartical']);
    Route::post('/newartical',['as'=>'newarticalpost','uses'=>'MangerController@newarticalpost']);
    Route::get('/deleteartical/{id}',['as'=>'deleteartical','uses'=>'MangerController@deleteartical']);
    Route::get('/reeditartical/{id}',['as'=>'reeditartical','uses'=>'MangerController@reedit']);
    Route::post('/reeditartical/{id}',['as'=>'reeditartical','uses'=>'MangerController@reeditstore']);

});

//首页界面
Route::get('/',['as'=>'index_','uses'=>'AdminController@index']);
Route::get('/index',['as'=>'index','uses'=>'AdminController@index']);
//大城小事
Route::get('/dcxs',['as'=>'dcxs','uses'=>'AdminController@dcxs']);
//周边美食
Route::get('/zbms',['as'=>'zbms','uses'=>'AdminController@zbms']);
//旅游风景
Route::get('/lyfj',['as'=>'lyfj','uses'=>'AdminController@lyfj']);
//社区问答
Route::get('/sqwd',['as'=>'sqwd','uses'=>'AdminController@sqwd']);
//登录
Route::post('/login',['as'=>'login','uses'=>'AdminController@login']);
//注册
Route::post('/register',['as'=>'register','uses'=>'AdminController@register']);
//退出
Route::get('/logout',['as'=>'logout','uses'=>'AdminController@logout']);

//发表帖子
Route::get('/post/{id}',['as'=>'post','uses'=>'PostController@index']);
Route::post('/post/{id}',['as'=>'post','uses'=>'PostController@store']);
//帖子列表
Route::get('/newlist/{id}',['as'=>'list','uses'=>'PostController@list_']);
Route::get('/newinfo/{id}',['as'=>'newinfo','uses'=>'PostController@info']);
//发表评论
Route::post('/postcommit/{id}',['as'=>'postcommit','uses'=>'PostController@postcommit']);
//信息修改
Route::post('/information/{id}',['as'=>'information','uses'=>'AdminController@information']);
//文章详情
Route::get('/wzxq/{id}',['as'=>'wzxq','uses'=>'AdminController@wzxq']);


//存储图片
Route::get('/getImage/{path}/{name}',['as'=>'getImage','uses'=>'AdminController@getImage']);

