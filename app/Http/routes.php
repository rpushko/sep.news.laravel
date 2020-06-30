<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index.welcome');
});

Route::group(['prefix' => 'news'], function () {
    Route::get('/', function () {
        $news = \App\News::all();//collection
        return view('news.list', ['news' => $news]);
    })->name('news.list');

    Route::get('/create', function () {
        return view('news.create');
    })->name('news.create');

    Route::get('/{news}',function (\App\News $news){
        return view('news.show',['news'=>$news]);
    })->name('news.show');

    Route::post('/', function (\Illuminate\Http\Request $request) {
        $validator=Validator::make($request->all(),[
            'title'=>'required|max:255',
                    ]);

        if($validator->fails()){
            return redirect(route('news.create'))
                ->withInput()
                ->withErrors($validator);
        }

        \App\News::create([
            'title'=>$request->title,
            'article'=>$request->article,
        ]);
        return redirect (route('news.list'));
    })->name('news.store');

});