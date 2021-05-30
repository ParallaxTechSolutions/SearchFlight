<?php

use Illuminate\Support\Facades\Route;/*
use App\Http\Controllers\Admin\RolePermissionController;*/
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
    return view('welcome');
});

 Route::namespace('App\Http\Controllers')->group(static function() {
            Route::get('/index',                'flight@index');
            Route::get('/fromadress/{data}',    'flight@getfrom');
            Route::get('/searchflight',         'flight@searchflight');
            Route::post('/bookflight',         'flight@bookingflight');
    });

/* Auto-generated admin routes */
/*Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin.')->group(static function() {
        Route::resource('role-permission', RolePermissionController::class);
    });
});*/



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('posts')->name('posts/')->group(static function() {
            Route::get('/',                                             'PostsController@index')->name('index');
            Route::get('/create',                                       'PostsController@create')->name('create');
            Route::post('/',                                            'PostsController@store')->name('store');
            Route::get('/{post}/edit',                                  'PostsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PostsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{post}',                                      'PostsController@update')->name('update');
            Route::delete('/{post}',                                    'PostsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('roles')->name('roles/')->group(static function() {
            Route::get('/',                                             'RolesController@index')->name('index');
            Route::get('/create',                                       'RolesController@create')->name('create');
            Route::post('/',                                            'RolesController@store')->name('store');
            Route::get('/{role}/edit',                                  'RolesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RolesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{role}',                                      'RolesController@update')->name('update');
            Route::delete('/{role}',                                    'RolesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('bravo-bookings')->name('bravo-bookings/')->group(static function() {
            Route::get('/',                                             'BravoBookingsController@index')->name('index');
            Route::get('/create',                                       'BravoBookingsController@create')->name('create');
            Route::post('/',                                            'BravoBookingsController@store')->name('store');
            Route::get('/{bravoBooking}/edit',                          'BravoBookingsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BravoBookingsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{bravoBooking}',                              'BravoBookingsController@update')->name('update');
            Route::delete('/{bravoBooking}',                            'BravoBookingsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('bravo-booking-payments')->name('bravo-booking-payments/')->group(static function() {
            Route::get('/',                                             'BravoBookingPaymentsController@index')->name('index');
            Route::get('/create',                                       'BravoBookingPaymentsController@create')->name('create');
            Route::post('/',                                            'BravoBookingPaymentsController@store')->name('store');
            Route::get('/{bravoBookingPayment}/edit',                   'BravoBookingPaymentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BravoBookingPaymentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{bravoBookingPayment}',                       'BravoBookingPaymentsController@update')->name('update');
            Route::delete('/{bravoBookingPayment}',                     'BravoBookingPaymentsController@destroy')->name('destroy');
        });
    });
});