<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoomTyPeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Client\AuthController;
use App\Models\Slider;
use App\Models\RoomTyPe;
use Illuminate\Http\Request;

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

Route::get('/profile', function () {
    return view('user.profile.index');
})->name('user.profile.index');

Route::get('/profile_ss', function () {
    return view('user.profile.edit');
})->name('user.profile.edit');

Route::get('/evalute', 'Admin\CommentController@evalute')->name('evaluate');

Route::get('/forget_password', 'User\UserController@forget')->name('forget_password');
Route::post('/forget_password', 'User\UserController@forget_password')->name('user.forget_password');

Route::get('/support', 'User\UserController@support')->name('user.support.index');
Route::get('/create/support', 'User\UserController@createSupport')->name('user.support.create');
Route::post('/store/support', 'User\UserController@storeSupport')->name('user.support.store');
Route::post('/delete/support{id}', 'User\UserController@deleteSupport')->name('user.support.delete');

Route::get('/profile/password', 'User\UserPasswordController@index')->name('user.password');
Route::post('/profile/password/{id}', 'User\UserPasswordController@update')->name('user.password.update');
Route::post('/profile/edit/{id}', 'User\UserController@update')->name('user.profile.update');

Route::get('/user/booking', 'User\BookingController@index')->name('user.booking');
Route::get('/user/booking/{id}', 'User\BookingController@show')->name('show.user');
Route::get('/evaluate/delete/{id}', 'User\BookingController@delete')->name('evaluate.delete');
Route::get('/view', 'User\UserController@view')->name('user.roomtype.index');
// Route::get('/', function () {
//     $ListSlider = Slider::paginate(10);
//     return view('frontend/layouts/master', [
//         'data' => $ListSlider,
//     ]);
// });
Route::get('/send-mail', [Tesmail::class, 'Tesmail']);
Route::get('/admin', 'Admin\DashboardController@dashboard')->name('admin');
Route::get('/', 'Client\HomeController@index')->name('home');

//auth
Route::get('/redirect', 'Client\AuthController@redirectToProvider')->name("login.provider");
Route::get('/google/callback', 'Client\AuthController@handleProviderCallback');

Route::get('/register', 'Client\AuthController@register')->name('auth.getRegisterForm');
Route::post('/register', 'Client\AuthController@registerPost')->name('register.form');

Route::get('/login', 'Client\AuthController@login')->name('auth.getLoginForm');
Route::post('/login', 'Client\AuthController@loginPost')->name('login.form');

Route::get('/logout', 'Client\AuthController@logout')->name('auth.logout');
//endauth

//clien

Route::get('/about', 'Client\AboutController@index')->name('about');
Route::get('/contact', 'Client\ContactController@index')->name('contact');
Route::post('/contact/store', 'Client\ContactController@store')->name('contact.store');
Route::get('/single', 'Client\SingleController@index')->name('single');
Route::get('/single/{id}', 'Client\SingleController@show')->name('single.show');
Route::post('/bookingOfUsser', 'Client\BookingController@detail')->name('bookingOfUsser');
Route::post('/booking', 'Client\BookingController@index')->name('booking');
Route::get('/room_type/{id}', 'Client\HomeController@room_types')->name('room_type');
Route::get('/room_detail/{id}', 'Client\HomeController@room_detail')->name('room_detail');
Route::post('/add_comment/{id}', 'Client\HomeController@comment')->name('add_comment');
Route::post('remove-comment/{id}', 'Client\HomeController@remove_comment')->name('remove-comment');
//endclien

Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

//admin
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => 'check_login',
], function () {

    Route::get('/admin', function () {
        return view('admin/layout_master/layout_master');
    })->name('admin');

    Route::group([
        'prefix' => 'dashboard',
        'as' => 'dashboard.',
    ], function () {
        Route::get('/', 'DashboardController@index')->name('index');
        Route::get('create', 'RoomTyPeController@create')->name('create');
        Route::post('store', 'RoomTyPeController@store')->name('store');
        Route::get('edit/{id}', 'RoomTyPeController@edit')->name('edit');
        Route::post('update/{id}', 'RoomTyPeController@update')->name('update');
        Route::post('delete/{id}', 'RoomTyPeController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'categories',
        'as' => 'categories.',
    ], function () {
        Route::get('/', 'RoomTyPeController@index')->name('index');
        Route::get('create', 'RoomTyPeController@create')->name('create');
        Route::post('store', 'RoomTyPeController@store')->name('store');
        Route::get('edit/{id}', 'RoomTyPeController@edit')->name('edit');
        Route::post('update/{id}', 'RoomTyPeController@update')->name('update');
        Route::post('delete/{id}', 'RoomTyPeController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'rooms',
        'as' => 'rooms.',
    ], function () {
        Route::get('/', 'RoomController@index')->name('index');
        Route::get('create', 'RoomController@create')->name('create');
        Route::post('store', 'RoomController@store')->name('store');
        Route::get('edit/{id}', 'RoomController@edit')->name('edit');
        Route::post('update/{id}', 'RoomController@update')->name('update');
        Route::post('delete/{id}', 'RoomController@delete')->name('delete');
    });

    //user
    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function () {
        Route::get('/', 'UserController@index')->name('index');
        Route::get('create', 'UserController@create')->name('create');
        Route::post('store', 'UserController@store')->name('store');
        Route::get('edit/{id}', 'UserController@edit')->name('edit');
        Route::post('update/{id}', 'UserController@update')->name('update');
        Route::post('delete', 'UserController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'sliders',
        'as' => 'sliders.',
    ], function () {
        Route::get('/', 'SliderController@index')->name('index');
        Route::get('create', 'SliderController@create')->name('create');
        Route::post('store', 'SliderController@store')->name('store');
        Route::get('edit/{id}', 'SliderController@edit')->name('edit');
        Route::post('update/{id}', 'SliderController@update')->name('update');
        Route::post('delete/{id}', 'SliderController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'post',
        'as' => 'post.',
    ], function () {
        Route::get('/', 'PostController@index')->name('index');
        Route::post('store', 'PostController@store')->name('store');
        Route::get('edit/{id}', 'PostController@edit')->name('edit');
        Route::get('show/{id}', 'PostController@show')->name('show');
        Route::post('update', 'PostController@update')->name('update');
        Route::post('delete', 'PostController@delete')->name('delete');
    });

    Route::group([
        'prefix' => 'comments',
        'as' => 'comments.',
    ], function () {
        Route::get('/', 'CommentController@index')->name('index');
        Route::get('comment/detail/{id}', 'CommentController@getComment')->name('ct_comment');
        Route::get('comment/show/{id}', 'CommentController@commentCt')->name('show');
        Route::post('delete/{id}', 'CommentController@delete')->name('delete');
    });


    // booking

    Route::group([
        'prefix' => 'booking',
        'as' => 'booking.',
    ], function () {
        Route::get('create', 'BokingController@create')->name('create');
        Route::post('store', 'BokingController@store')->name('store');
        Route::get('edit/{id}', 'BokingController@edit')->name('edit');
        Route::get('show/{id}', 'BokingController@show')->name('show');
        Route::get('approveBooking/{id}', 'BokingController@approveBooking')->name('approve');
        Route::get('cancelBooking/{id}', 'BokingController@cancelBooking')->name('cancel');
        Route::post('update', 'BokingController@update')->name('update');
        Route::post('delete', 'BokingController@delete')->name('delete');
        Route::get('/{status}', 'BokingController@index')->name('index');
    });
    // service
    Route::group([
        'prefix' => 'service',
        'as' => 'service.',
    ], function () {
        Route::get('/', 'ServiceController@index')->name('index');
        Route::get('create', 'ServiceController@create')->name('create');
        Route::post('store', 'ServiceController@store')->name('store');
        Route::get('edit/{id}', 'ServiceController@edit')->name('edit');
        Route::post('update', 'ServiceController@update')->name('update');
        Route::post('delete', 'ServiceController@delete')->name('delete');
    });
    // discount
    Route::group([
        'prefix' => 'discount',
        'as' => 'discount.',
    ], function () {
        Route::get('/', 'DiscountController@index')->name('index');
        Route::get('create', 'DiscountController@create')->name('create');
        Route::post('store', 'DiscountController@store')->name('store');
        Route::get('edit/{id}', 'DiscountController@edit')->name('edit');
        Route::post('update', 'DiscountController@update')->name('update');
        Route::post('delete', 'DiscountController@delete')->name('delete');
    });

    // supporsts
    Route::group([
        'prefix' => 'supports',
        'as' => 'supports.',
    ], function () {
        Route::get('/', 'SupportController@index')->name('index');
        Route::get('create', 'SupportController@create')->name('create');
        Route::post('store', 'SupportController@store')->name('store');
        Route::get('edit/{id}', 'SupportController@edit')->name('edit');
        Route::post('update/{id}', 'SupportController@update')->name('update');
        Route::post('delete', 'SupportController@delete')->name('delete');
    });
});
