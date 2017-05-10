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


// Home page route

Route::get('/', 'PagesController@index')->name('index');

// Home page authenticated

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/highest-market-prices', 'HomeController@highestMarketPrices')->name('highest.market.prices');

/* --------------------- Reports --------------------- */
Route::get('/create-company-profile', 'HomeController@createCompanyProfile')->name('highest.market.prices');
Route::get('/add-company-stock', 'HomeController@addCompanyStock')->name('highest.market.prices');

/* --------------------- Companies --------------------- */
Route::get('/create-company', [
    'middleware' => 'auth',
    'uses'       => 'CompanyController@index',
    'as'         => 'company.index'
]);

Route::post('/company/create/', [
    'middleware' => 'auth',
    'uses'       => 'CompanyController@create',
    'as'         => 'company.create'
]);

Route::get('/company/created/', [
    'middleware' => 'auth',
    'uses'       => 'CompanyController@created',
    'as'         => 'company.created'
]);

Route::put('/company/update/', [
    'middleware' => 'auth',
    'uses'       => 'CompanyController@update',
    'as'         => 'company.update'
]);

Route::delete('/company/delete/{id}', [
    'middleware' => 'auth',
    'uses'       => 'CompanyController@destroy',
    'as'         => 'company.delete'
]);

/* --------------------- Stock --------------------- */
Route::get('/create-stock', [
    'middleware' => 'auth',
    'uses'       => 'StockController@index',
    'as'         => 'stock.index'
]);

Route::post('/stock/create/', [
    'middleware' => 'auth',
    'uses'       => 'StockController@create',
    'as'         => 'stock.create'
]);

Route::put('/stock/update/', [
    'middleware' => 'auth',
    'uses'       => 'StockController@update',
    'as'         => 'stock.update'
]);

Route::delete('/stock/delete/{id}', [
    'middleware' => 'auth',
    'uses'       => 'StockController@destroy',
    'as'         => 'stock.delete'
]);

/* --------------------- Order --------------------- */
Route::get('/create-order', [
    'middleware' => 'auth',
    'uses'       => 'OrderController@index',
    'as'         => 'order.index'
]);

Route::post('/order/create/', [
    'middleware' => 'auth',
    'uses'       => 'OrderController@create',
    'as'         => 'order.create'
]);

Route::put('/order/update/', [
    'middleware' => 'auth',
    'uses'       => 'OrderController@update',
    'as'         => 'order.update'
]);

Route::delete('/order/delete/{id}', [
    'middleware' => 'auth',
    'uses'       => 'OrderController@destroy',
    'as'         => 'order.delete'
]);

// Admin route
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin-v2', 'AdminController@adminV2');

// Api Routes
Route::get('api/category-data', 'ApiController@categoryData');
Route::get('api/lesson-data', 'ApiController@lessonData');
Route::get('api/marketing-image-data', 'ApiController@marketingImageData');
Route::get('api/profile-data', 'ApiController@profileData');
Route::get('api/subcategory-data', 'ApiController@subcategoryData');
Route::get('api/user-data', 'ApiController@userData');
Route::get('api/widget-data', 'ApiController@widgetData');


// Authentication routes
Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout')->name('logout');

// MarketingImages routes
Route::resource('marketing-image', 'MarketingImageController');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Privacy route
Route::get('privacy', 'PagesController@privacy');

// Profile
Route::get('show-profile', 'ProfileController@showProfileToUser')->name('show-profile');
Route::get('determine-profile-route', 'ProfileController@determineProfileRoute')->name('determine-profile-route');
Route::resource('profile', 'ProfileController');

// Registration routes
Route::get('register', 'Auth\AuthController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\AuthController@register');

// Username route
Route::get('/username', 'UsernameController@show')->middleware('auth');

// Settings routes
Route::get('settings', 'SettingsController@edit');
Route::post('settings', 'SettingsController@update')->name('user-update');

// Socialite routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// Terms route
Route::get('/terms', 'PagesController@terms')->name('terms');

// User routes
Route::resource('user', 'UserController');


// Widget routes
Route::get('widget/create',  'WidgetController@create')->name('widget.create');
Route::get('widget/{widget}-{slug?}', 'WidgetController@show')->name('widget.show');
Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);


/*
|--------------------------------------------------------------------------
| Style Example Routes
|--------------------------------------------------------------------------
|
| Here is where you can find routes for style examples.
| These are routes for many different pages, layouts,
| and other examples. Now create something great!
|
*/

// examples and docs, delete for production

Route::get('/404-example', 'StyleExamplesController@example404')->name('404-example');

Route::get('/500-example', 'StyleExamplesController@example500')->name('500-example');

Route::get('/blank-page', 'StyleExamplesController@blankPage')->name('blank-page');

Route::get('/buttons', 'StyleExamplesController@buttons')->name('buttons');

Route::get('/boxed', 'StyleExamplesController@boxed')->name('boxed');

Route::get('/calendar', 'StyleExamplesController@calendar')->name('calendar');

Route::get('/charts-js', 'StyleExamplesController@chartsJs')->name('charts-js');

Route::get('/collapsed-sidebar', 'StyleExamplesController@collapsedSidebar')->name('collapsed-sidebar');

Route::get('/documentation', 'StyleExamplesController@documentation')->name('documentation');

Route::get('/editors', 'StyleExamplesController@editors')->name('editors');

Route::get('/fixed', 'StyleExamplesController@fixed')->name('fixed');

Route::get('/flot', 'StyleExamplesController@flot')->name('flot');

Route::get('/forms', 'StyleExamplesController@formExamples')->name('forms');

Route::get('/forms-advanced', 'StyleExamplesController@formsAdvanced')->name('forms-advanced');

Route::get('/icons', 'StyleExamplesController@icons')->name('icons');

Route::get('/inline-charts', 'StyleExamplesController@inlineCharts')->name('inline-charts');

Route::get('/invoice', 'StyleExamplesController@invoice')->name('invoice');

Route::get('/lockscreen', 'StyleExamplesController@lockscreen')->name('lockscreen');

Route::get('/login-example', 'StyleExamplesController@loginExample')->name('login-example');

Route::get('/mailbox', 'StyleExamplesController@mailbox')->name('mailbox');

Route::get('/modals', 'StyleExamplesController@modals')->name('modals');

Route::get('/morris', 'StyleExamplesController@morris')->name('morris');

Route::get('/pace-page', 'StyleExamplesController@pacePage')->name('pace-page');

Route::get('/profile-example', 'StyleExamplesController@profileExample')->name('profile-example');

Route::get('/register-example', 'StyleExamplesController@registerExample')->name('register-example');

Route::get('/sliders', 'StyleExamplesController@sliders')->name('sliders');

Route::get('/tables-data', 'StyleExamplesController@tablesData')->name('tables-data');

Route::get('/tables-simple', 'StyleExamplesController@tablesSimple')->name('tables-simple');

Route::get('/timeline', 'StyleExamplesController@timeline')->name('timeline');

Route::get('/top-nav', 'StyleExamplesController@topNav')->name('top-nav');

Route::get('/ui-general', 'StyleExamplesController@uiGeneral')->name('ui-general');

Route::get('/widgets-examples', 'StyleExamplesController@widgets')->name('widgets');


