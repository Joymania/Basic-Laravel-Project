<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/','Frontend\FrontendController@index')->name('index');
Route::get('/aboutUs','Frontend\FrontendController@aboutUs')->name('aboutUs');
Route::get('/mission','Frontend\FrontendController@mission')->name('mission');
Route::get('/vission','Frontend\FrontendController@vission')->name('vission');
Route::get('/newsevents','Frontend\FrontendController@newsevents')->name('newsevents');
Route::get('/contactUs','Frontend\FrontendController@contactUs')->name('contactUs');
Route::post('/store/contact','Frontend\FrontendController@store')->name('store.contact');
Route::get('/newseventsdetails/{id}','Frontend\FrontendController@newsdetails')->name('newsdetails');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('users')->group(function(){
    Route::get('/view','Backend\UserController@view')->name('users.view');
    Route::get('/add','Backend\UserController@add')->name('users.add');
    Route::post('/store','Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}','Backend\UserController@delete')->name('users.delete');
});

Route::prefix('profiles')->group(function(){
    Route::get('/view','Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit','Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update','Backend\ProfileController@update')->name('profiles.update');

    Route::get('/edit/password','Backend\ProfileController@passwordedit')->name('password.edit');
    Route::post('/update/password','Backend\ProfileController@passwordupdate')->name('password.update');
});

Route::prefix('logo')->group(function(){
    Route::get('/view','Backend\LogoController@view')->name('logo.view');
    Route::get('/add','Backend\LogoController@add')->name('logo.add');
    Route::post('/store','Backend\LogoController@store')->name('logo.store');
    Route::get('/edit/{id}','Backend\LogoController@edit')->name('logo.edit');
    Route::post('/update/{id}','Backend\LogoController@update')->name('logo.update');
    Route::get('/delete/{id}','Backend\LogoController@delete')->name('logo.delete');
});

Route::prefix('slider')->group(function(){
    Route::get('/view','Backend\SliderController@view')->name('slider.view');
    Route::get('/add','Backend\SliderController@add')->name('slider.add');
    Route::post('/store','Backend\SliderController@store')->name('slider.store');
    Route::get('/edit/{id}','Backend\SliderController@edit')->name('slider.edit');
    Route::post('/update/{id}','Backend\SliderController@update')->name('slider.update');
    Route::get('/delete/{id}','Backend\SliderController@delete')->name('slider.delete');
});

Route::prefix('mission')->group(function(){
    Route::get('/view','Backend\MissionController@view')->name('mission.view');
    Route::get('/add','Backend\MissionController@add')->name('mission.add');
    Route::post('/store','Backend\MissionController@store')->name('mission.store');
    Route::get('/edit/{id}','Backend\MissionController@edit')->name('mission.edit');
    Route::post('/update/{id}','Backend\MissionController@update')->name('mission.update');
    Route::get('/delete/{id}','Backend\MissionController@delete')->name('mission.delete');
});

Route::prefix('vission')->group(function(){
    Route::get('/view','Backend\VissionController@view')->name('vission.view');
    Route::get('/add','Backend\VissionController@add')->name('vission.add');
    Route::post('/store','Backend\VissionController@store')->name('vission.store');
    Route::get('/edit/{id}','Backend\VissionController@edit')->name('vission.edit');
    Route::post('/update/{id}','Backend\VissionController@update')->name('vission.update');
    Route::get('/delete/{id}','Backend\VissionController@delete')->name('vission.delete');
});

Route::prefix('newsevent')->group(function(){
    Route::get('/view','Backend\NewsController@view')->name('newsevent.view');
    Route::get('/add','Backend\NewsController@add')->name('newsevent.add');
    Route::post('/store','Backend\NewsController@store')->name('newsevent.store');
    Route::get('/edit/{id}','Backend\NewsController@edit')->name('newsevent.edit');
    Route::post('/update/{id}','Backend\NewsController@update')->name('newsevent.update');
    Route::get('/delete/{id}','Backend\NewsController@delete')->name('newsevent.delete');
});

Route::prefix('services')->group(function(){
    Route::get('/view','Backend\ServiceController@view')->name('services.view');
    Route::get('/add','Backend\ServiceController@add')->name('services.add');
    Route::post('/store','Backend\ServiceController@store')->name('services.store');
    Route::get('/edit/{id}','Backend\ServiceController@edit')->name('services.edit');
    Route::post('/update/{id}','Backend\ServiceController@update')->name('services.update');
    Route::get('/delete/{id}','Backend\ServiceController@delete')->name('services.delete');
});


Route::prefix('contact')->group(function(){
    Route::get('/view','Backend\ContactController@view')->name('contact.view');
    Route::get('/add','Backend\ContactController@add')->name('contact.add');
    Route::post('/store','Backend\ContactController@store')->name('contact.store');
    Route::get('/edit/{id}','Backend\ContactController@edit')->name('contact.edit');
    Route::post('/update/{id}','Backend\ContactController@update')->name('contact.update');
    Route::get('/delete/{id}','Backend\ContactController@delete')->name('contact.delete');
    Route::get('/communicate/view','Backend\ContactController@communicateview')->name('communicate.view');
    Route::get('/communicate/delete/{id}','Backend\ContactController@communicatedelete')->name('communicate.delete');
});

Route::prefix('about_us')->group(function(){
    Route::get('/view','Backend\AboutusController@view')->name('about_us.view');
    Route::get('/add','Backend\AboutusController@add')->name('about_us.add');
    Route::post('/store','Backend\AboutusController@store')->name('about_us.store');
    Route::get('/edit/{id}','Backend\AboutusController@edit')->name('about_us.edit');
    Route::post('/update/{id}','Backend\AboutusController@update')->name('about_us.update');
    Route::get('/delete/{id}','Backend\AboutusController@delete')->name('about_us.delete');
});

});

