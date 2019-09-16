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



Auth::routes();
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes(['register' => false]);
// middlware is used
Route::group(['prefix'=>'admin','middleware'=>'auth'],function() {
    Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');
    // pages route
    Route::get('/page/create','admin\PagesController@create')->name('page.create');
    Route::post('/page/store','admin\PagesController@store')->name('page.store');
    Route::get('/pages','admin\PagesController@index')->name('pages');
    Route::get('/page/edit/{id}','admin\PagesController@edit')->name('page.edit');
    Route::post('/page/update/{id}','admin\PagesController@update')->name('page.update');
    Route::get('/page/delete/{id}','admin\PagesController@destroy')->name('page.delete');
    //posts route
    Route::get('/post/create','admin\PostsController@create')->name('post.create');
    Route::post('/post/store','admin\PostsController@create')->name('post.store');
    Route::get('/posts','admin\PostsController@create')->name('posts');
    Route::get('/post/edit/{id}','admin\PostsController@create')->name('post.edit');
    Route::post('/post/update/{id}','admin\PostsController@create')->name('post.update');
    Route::get('/post/delete/{id}','admin\PostsController@create')->name('post.delete');
    // Tags route
    Route::get('/tag/create','admin\TagsController@create')->name('tag.create');
    Route::post('/tag/store','admin\TagsController@store')->name('tag.store');
    Route::get('/tags','admin\TagsController@index')->name('tags');
    Route::get('/tag/edit/{id}','admin\TagsController@edit')->name('tag.edit');
    Route::post('/tag/update/{id}','admin\TagsController@update')->name('tag.update');
    Route::get('/tag/destroy/{id}','admin\TagsController@destroy')->name('tag.delete');
    // Carousel route
    Route::get('/carousel/create','admin\CarouselsController@create')->name('carousel.create');
    Route::post('/carousel/store','admin\CarouselsController@store')->name('carousel.store');
    Route::get('/carousels','admin\CarouselsController@index')->name('carousels');
    Route::get('/carousel/edit/{id}','admin\CarouselsController@edit')->name('carousel.edit');
    Route::post('/carousel/update/{id}','admin\CarouselsController@update')->name('carousel.update');
    Route::get('/carousel/delete/{id}','admin\CarouselsController@destroy')->name('carousel.delete');
    // users route
    Route::get('/user/create','admin\UsrsController@create')->name('user.create');
    Route::post('/user/store','admin\UsrsController@store')->name('user.store');
    Route::get('/usrs','admin\UsrsController@index')->name('users');
    Route::get('/user/edit/{id}','admin\UsrsController@edit')->name('user.edit');
    Route::get('/user/update/{id}','admin\UsrsController@update')->name('user.update');
    Route::get('/user/delete/{id}','admin\UsrsController@destroy')->name('user.delete');
    // mechanics route
    Route::get('/mechanic/create','admin\MechanicsController@create')->name('mechanic.create');
    Route::post('/mechanic/store','admin\MechanicsController@store')->name('mechanic.store');
    Route::get('/mechanics','admin\MechanicsController@index')->name('mechanics');
    Route::get('/mechanic/edit/{id}','admin\MechanicsController@edit')->name('mechanic.edit');
    Route::get('/mechanic/update/{id}','admin\MechanicsController@update')->name('mechanic.update');
    Route::get('/mechanic/delete/{id}','admin\MechanicsController@destroy')->name('mechanic.delete');
    // team route
    Route::get('/team/create','admin\TeamsController@create')->name('team.create');
    Route::post('/team/store','admin\TeamsController@store')->name('team.store');
    Route::get('/teams','admin\TeamsController@index')->name('teams');
    Route::get('/team/edit/{id}','admin\TeamsController@edit')->name('team.edit');
    Route::get('/team/update/{id}','admin\TeamsController@update')->name('team.update');
    Route::get('/team/delete/{id}','admin\TeamsController@destroy')->name('team.delete');
    // blog route
    Route::get('/blog/create','admin\BlogsController@create')->name('blog.create');
    Route::post('/blog/store','admin\BlogsController@store')->name('blog.store');
    Route::get('/blogs','admin\BlogsController@index')->name('blogs');
    Route::get('/blog/edit/{id}','admin\BlogsController@edit')->name('blog.edit');
    Route::get('/blog/update/{id}','admin\BlogsController@update')->name('blog.update');
    Route::get('/blog/delete/{id}','admin\BlogsController@destroy')->name('blog.delete');
    //contact route
    Route::post('/contact/store','admin\ContactsController@store')->name('contact.store');
    Route::get('/contacts','admin\ContactsController@index')->name('contacts');
    Route::get('/contact/delete/{id}','admin\ContactsController@destroy')->name('contact.delete');
    // Laravel File Mangaer
    Route::get('/laravel-filemanager','\UniSharp\LaravelFileManager\Controller\LfmController@show');
    Route::post('/laravel-filemanager/upload','\Unisharp\LaravelFilemanager\Controllers\UploadController@upload');
    Route::get('/media','Admin\MediasController@index')->name('media');
    // profile
    Route::get('/user/profile','admin\ProfilesController@index')->name('user.profile');
    Route::post('/user/profile/update/{id}','admin\ProfilesController@update')->name('user.profile.update');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','FrontendController@index')->name('frontends');

// Route::get('/',function(){
// return view('index');
// });
// Route::get('/kamal',function(){
//     return view('mechanics.dashboard');
// });
