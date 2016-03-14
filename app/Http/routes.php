<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['prefix' => 'api'], function () {
    Route::get('entries', function () {
        return [[
            'aaa' => 'aaa',
            'bbb' => 'aaa',
            'content' => 'lorem',
            'authorNickname' => 'testnickname',
            'authorName' => 'Big Ben',
            'likes' => 3,
            'comments' => 5,
            'shares' => 4
        ], [
            'aaa' => 'aaa',
            'bbb' => 'aaa',
            'content' => 'lorem',
            'authorNickname' => 'testnickname',
            'authorName' => 'Big Ben',
            'likes' => 3,
            'comments' => 5,
            'shares' => 4
        ]];
    });

    Route::post('entries', function () {
        $addedEntry = [];
        return $addedEntry;
    });

    Route::get('users/{nickname}', function ($nickname) {
        return [
            'nickname' => $nickname,
            'name' => 'Name'
        ];
    });
});


