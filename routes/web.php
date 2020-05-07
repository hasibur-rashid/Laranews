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

Route::get('/admin/login', function () {
    return view('/admin/auth/login');})->name('admin-login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');})->name('admin-logout');


/*
|-----------------------------------------------------------------------------------------------------------------------
| ADMIN ROUTE
|-----------------------------------------------------------------------------------------------------------------------
*/

Route::group(['middleware' => 'admin', 'namespace' => 'Admin'], function () {


    /*------------------------------------------------Dashboard-------------------------------------------------------*/

    Route::get('/admin/dashboard', 'DashboardController@dashboard');


    /*------------------------------------------------News Section----------------------------------------------------*/

    Route::get('/admin/news/list', 'NewsController@index')->name('admin-news');
    Route::get('/admin/news/add', 'NewsController@create');
    Route::get('/admin/news/edit/{id}', 'NewsController@create')->name('');
    Route::post('/admin/news/save', 'NewsController@store')->name('');
    Route::post('/admin/news/update', 'NewsController@store')->name('');
    Route::post('/admin/news/get-media-ajax', 'NewsController@getMediaAjax')->name('');
    Route::get('/admin/news/delete/{id}', 'NewsController@destroy')->name('');

    // News Sources
    Route::get('/admin/news/source/list', 'NewsController@sourcesList')->name('sourcesList');
    Route::post('/admin/news/source/list', 'NewsController@sourcesList')->name('sourcesList');
    Route::get('/admin/news/source/add', 'NewsController@addNewsSource')->name('addNewsSource');
    Route::post('/admin/news/source/add', 'NewsController@addNewsSource')->name('addNewsSource');
    Route::post('/admin/news/source/delete/{id}', 'NewsController@deleteNewsSource')->name('deleteNewsSource');

    // Polling
    Route::get('/admin/news/pulling/list', 'NewsController@pullList')->name('pullList');
    Route::post('/admin/news/pulling/add', 'NewsController@addPull')->name('addPull');
    Route::get('/admin/news/pulling/delete/{id}', 'NewsController@deletePull')->name('deletePull');


    /*------------------------------------------------Category Section------------------------------------------------*/

    Route::get('/admin/category/list', 'CategoryController@list')->name('categoryList');
    Route::post('/admin/category/add', 'CategoryController@add')->name('categoryAdd');
    Route::get('/admin/category/delete/{id}', 'CategoryController@delete')->name('cateoryDelete');

    /*------------------------------------------------RSS Section------------------------------------------------*/

    Route::get('/admin/rss/fireRss', 'RssController@fireRss')->name('fireRss');
    Route::get('/admin/rss/list', 'RssController@list')->name('rssList');
    Route::get('/admin/rss/test', 'RssController@list')->name('rssLinkTest');
    Route::post('/admin/rss/status-change', 'RssController@statusChange')->name('rssStatusChange');
    Route::post('/admin/rss/add', 'RssController@add')->name('rssAdd');
    Route::get('/admin/rss/add-to-news/{id}', 'RssController@rssAddToNews')->name('rssAddToNews');
    Route::get('/admin/rss/fire/{id}', 'RssController@fire')->name('rssFire');
    Route::get('/admin/rss/delete/{id}', 'RssController@delete')->name('rssDelete');


    /*------------------------------------------------Tag Section-----------------------------------------------------*/

    Route::get('/admin/tag/list', 'TagController@list');
    Route::get('/admin/tag/add', 'TagController@add');
    Route::post('/admin/tag/add', 'TagController@add');
    Route::get('/admin/tag/delete/{id}', 'TagController@delete');
    Route::post('/admin/tag/delete/{id}', 'TagController@delete');


    /*------------------------------------------------Media Section---------------------------------------------------*/

    Route::resource('/admin/media/list', 'MediaController');
    Route::post('admin/media/save', 'MediaController@store')->name('');


    /*------------------------------------------------Themes Section--------------------------------------------------*/

    Route::get('/admin/theme/list', 'SettingsController@themeList')->name('');
    Route::post('/admin/theme/list', 'SettingsController@themeList')->name('');


    /*------------------------------------------------Page and menu Section-------------------------------------------*/

    Route::get('/admin/page/list', 'PageController@staticPageList')->name('');
    Route::post('/admin/page/add', 'PageController@addStaticPage')->name('');
    Route::get('/admin/page/delete/{id}', 'PageController@deleteStaticPage')->name('');

    Route::get('/admin/menu', 'PageController@menuList')->name('');


    /*------------------------------------------------ Advertisements Section-----------------------------------------*/

    Route::get('/admin/advertisement/list', 'AdvertismentController@list');
    Route::post('/admin/advertisement/add', 'AdvertismentController@add');
    Route::get('/admin/advertisement/add', 'AdvertismentController@add');
    Route::get('/admin/advertisement/delete/{id}', 'AdvertismentController@delete');


    /*------------------------------------------------ Users Section--------------------------------------------------*/

    Route::get('/admin/users/admin-user/list', 'UserController@adminUserList')->name('');
    Route::post('/admin/users/admin-user/add', 'UserController@addAdminUser')->name('');
    Route::get('/admin/users/admin-user/delete/{id}', 'UserController@deleteAdminUser')->name('');

    Route::get('/admin/users/subscriber/list', 'UserController@subscriberList')->name('');
    Route::get('/admin/users/profile', 'UserController@userProfile')->name('');


    /*------------------------------------------------ Settings Section-----------------------------------------------*/

    Route::post('/admin/language/add', 'SettingsController@addLanguage')->name('');
    Route::get('/admin/language/delete/{id}', 'SettingsController@deleteLanguage')->name('');


    Route::get('/admin/settings', 'SettingsController@settings')->name('');
    Route::post('/admin/settings/save', 'SettingsController@SaveSettings')->name('');


    /*------------------------------------------------ FAQ Section----------------------------------------------------*/

    Route::get('/admin/faq', 'SettingsController@faq')->name('');

});


/*
|-----------------------------------------------------------------------------------------------------------------------
| PUBLIC ROUTE
|-----------------------------------------------------------------------------------------------------------------------
*/
Route::get('/', 'HomeController@index')->name('home');
Route::get('/article', 'HomeController@articleDetails')->name('articleDetails');
Route::get('/category/{id}/{category_slug?}', 'HomeController@categoryNews')->name('categoryNews');


/*
|-----------------------------------------------------------------------------------------------------------------------
| MOBILE API ROUTE
|-----------------------------------------------------------------------------------------------------------------------
*/

Route::group(['namespace' => 'Mobile','prefix'=>'mobile-app'], function () {
    Route::get('categories','MobileController@categoriesApi')->name('categoriesApi');
    Route::post('categories','MobileController@categoriesApi')->name('categoriesApi');
    Route::get('news','MobileController@newesApi')->name('newesApi');
    Route::post('news','MobileController@newesApi')->name('newesApi');
});