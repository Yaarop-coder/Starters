<?php

Auth::routes(['verify'=>true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware ('verified');
Route::get('/', function (){
    return 'home';
});
Route::get('/dashboard', function (){
    return 'dashboard';
});
Route::get('/redirect/{service}', [App\Http\Controllers\SocialController::class, 'redirect'] );
Route::get('/callback/{service}', [App\Http\Controllers\SocialController::class, 'callback'] );
Route::get('fillable', [App\Http\Controllers\CrudController::class, 'getOffers']);





Route::group(['prefix' => '{language}'], function () {
    Route::redirect('/','/en');
    //Route::group(['prefix' => 'offers'], function () {
        //   Route::get('store', 'CrudController@store');
        Route::get('/offers/create', [App\Http\Controllers\CrudController::class, 'create']);
        Route::post ('/offers/store',[App\Http\Controllers\CrudController::class, 'store']);
   // });
});






