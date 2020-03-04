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

Route::get('/', function () {
    return view('welcome');
});


// mailtrap
Route::get('sendMail','MailController@index');
// mail varification
Route::get('/verify-email-user', 'VerifyController@verifyemail')->name('auth.emailVer');
Route::get('/verify-email/{id}', 'VerifyController@
    ')->name('auth.emailVer.save');
// customer login/registration
Route::post('/custom-login', 'LoginController@custom_login')->name('custom.login');
Route::post('/custom-reg', 'Auth\RegisterController@custom_reg')->name('custom.reg');
Route::get('/home', 'HomeController@index')->name('home');
// page-not-found
Route::get('error','HomeController@error');
// front pages
Route::get('price','FrontendController@price');
Route::get('help','FrontendController@help');
Route::get('about','FrontendController@about');
Route::get('term-condition','FrontendController@term_condition');
Route::get('privacy-policy','FrontendController@privacy_policy');
Route::get('getquote','FrontendController@get_quote');
Route::get('blog','FrontendController@blog');
        //all service list 
Route::get('services','FrontendController@services');
Route::get('service-page/{id}','FrontendController@single_service_page');
// Get your free quote now
Route::post('/get-free-quote/','FrontendController@get_free_quote');
//from home page user free QUOTE order
Route::post('/user-free-quote-order/','FrontendController@user_free_quote_order');
// fast-high-quality detailes
Route::get('/fast-high-quality/','PagesController@fast_high_quality');
// see-our-work
Route::get('/see-our-work/','PagesController@see_our_work');
// get-in-touch
Route::post('/get-in-touch/','PagesController@get_in_touch');
// subscribe
Route::post('/subscribe/','PagesController@subscribe');

Auth::routes();
Route::post('client-info/store','UpfileController@store');

Route::prefix('admin')->group(function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginform')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::group(['middleware' => ['auth:admin']], function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', 'AdminController@index')->name('admin.dashbord');
        Route::get('/admin/user-attache-info/','AdminController@user_attache_info');
        Route::get('admin/attache/show/{id}','AdminController@attache_show');
        // profile
        Route::get('/admin-profile/','AdminController@admin_profile');
        Route::post('/admin-profile-update', 'AdminController@admin_profile_update')->name('admin.profile.update');
         // change password
        Route::get('/change-password','AdminController@change_password');
        Route::post('/admin-chng-pass','AdminController@admin_chng_pass')->name('admin.pass.update');
        // all user
        Route::get('/all-user','PagesController@all_user');
        Route::get('/all-user-show/{id}','PagesController@all_user_show')->name('user.show');
        Route::get('/all-user-destry/{id}','PagesController@all_user_destry')->name('user.destroy');
        // service manage
        Route::get('/service/create','ServiceController@create')->name('service.create');
        Route::post('/service','ServiceController@store')->name('service.store');
        Route::get('/service/index','ServiceController@index')->name('service.index');
        Route::get('/service/edit/{id}','ServiceController@edit')->name('service.edit');
        Route::post('/service/update/{id}','ServiceController@update')->name('service.update');
        Route::get('/service/destroy/{id}','ServiceController@destroy')->name('service.destroy');
        // manage order
        Route::get('/order','OrderController@index')->name('order.index');
        Route::get('/order/show/{id}','OrderController@show')->name('order.show');
        Route::POST('order/update/{id}','OrderController@update')->name('order.update');
        Route::get('/order/destroy/{id}','OrderController@destroy')->name('order.destroy');
        Route::resource('package','PackageController');
         // manage order quote
        Route::get('/order-quote','OrderController@order_quote');
        Route::get('/order-quote-destroy/{id}','OrderController@order_quote_destroy');
        // trx
        Route::get('/transection','PagesController@transection');
        Route::get('/trx-pay-status-unactive/{id}','PagesController@trx_pay_status_unactive');
        Route::get('/trx-pay-status-active/{id}','PagesController@trx_pay_status_active');
        Route::get('/trx-destroy/{id}','PagesController@trx_destroy');
        // gnrl stng
        Route::resource('gnrlstng','GnrlStngController');
        // frontend Control
        Route::resource('allstatic','AllStaticController');
        // how it work
        Route::get('/how-it-work','StaticFrontendController@how_it_work');
        Route::post('/how-it-work','StaticFrontendController@howitwork');
          // cp-bd
        Route::get('/cp-bd','StaticFrontendController@cpbd');
        Route::post('/cp-bd','StaticFrontendController@cp_bd');
          // see-our-wrk
        Route::get('/see-our-wrk','StaticFrontendController@seeourwrk');
        Route::post('/see-our-wrk','StaticFrontendController@see_our_wrk');
        // FAST, HIGH-QUALITY AND AFFORDABLE IMAGE-EDITING
        Route::resource('fsthqaie','FsthqaieController');
        Route::get('/fsthqaie/destroy/{id}','FsthqaieController@destroy');
        // commited making the world
        Route::get('/committed-mkng-wld','StaticFrontendController@committed_mkng_wld');
        Route::post('/committed-mkng-wld','StaticFrontendController@committedmkngwld'); 
        // Clipping Path Bangladesh -- Your Outsourced Image - Editing Solution
        Route::get('/cpburoes','StaticFrontendController@cpburoes');
        Route::post('/cpburoes','StaticFrontendController@cp_buroes');
        // Read our latest product photo tips
        Route::get('/rdolp','StaticFrontendController@rdolp');
        Route::post('/rdolp','StaticFrontendController@rd_olp'); 
        // taqs
        Route::get('/taqs','StaticFrontendController@taqs');
        Route::post('/taqs','StaticFrontendController@taq_s');
         // img-edit-service-price
        Route::get('/img-edit-service-price','StaticFrontendController@img_edit_service_price');
        Route::post('/img-edit-service-price','StaticFrontendController@imgeditservice_price');
                        // all services 
        // cp services
        Route::get('/cp-srvc','AllServicesController@cp_srvc');
        Route::post('/cp-srvc','AllServicesController@cpsrvc');
                        // Front all pages
        // about
        Route::get('/about','PagesController@about');
        Route::post('/about','PagesController@store_about');
        // our-work
        Route::get('our-work','PagesController@our_work');
        Route::post('our-work','PagesController@ourwork');
        // servicepage caterogy based
        Route::resource('servicepage','ServicepageController');
        Route::get('servicepage/destroy/{id}','ServicepageController@destroy');
        // blog
        Route::resource('blog','BlogController');
          // term-condition
        Route::get('/term-condition','PagesController@term_condition');
        Route::post('/term-condition','PagesController@store_tc');
         // privacy-policy
        Route::get('/privacy-policy','PagesController@privacy_policy');
        Route::post('/privac-policy','PagesController@privacypolicy');
         // pricing
        Route::get('/pricing','StaticFrontendController@pricing');
        Route::post('/pricing','StaticFrontendController@store_update_pricing');
         // help
        Route::get('/help','StaticFrontendController@help');
        Route::post('/help','StaticFrontendController@store_help');
          // get-in-touch
        Route::get('/get-in-touch','AdminController@get_in_touch');
        Route::get('/get-in-touch-destroy/{id}','AdminController@get_in_touch_destroy');
        // subscriber
        Route::get('/subscriber','AdminController@subscriber');
        Route::get('/subscriber-destroy/{id}','AdminController@subscriber_destroy');
        // broadcast-mail
        Route::post('/broadcast-mail','AdminController@broadcast_mail');
    });
});

Route::group(['middleware' => ['auth:web','useremailver']], function() {
    Route::prefix('home')->group(function() 
    {   
        
        Route::get('/', 'HomeController@index')->name('home');

        // profile
        Route::get('/user-profile/','UserProfileController@user_profile');
        Route::post('/user-profile-update', 'UserProfileController@user_profile_update')->name('user.profile.update');
        // change password
        Route::get('/chng-pass','UserProfileController@change_pass');
        Route::post('/user-chng-pass','UserProfileController@user_chng_pass')->name('user.pass.update');
        // order
        Route::get('/order/create','CheckoutController@create')->name('order.create');
        Route::get('/packages/booking/{id}','CheckoutController@bookingPackage');
        Route::post('/checkout','CheckoutController@checkout');
        Route::get('/pay','PaymentController@pay');
        Route::get('/trx-history','PagesController@user_trx_history');
        Route::get('/order-history','PagesController@order_history');
        Route::get('/trx-destroy/{id}','PagesController@trx_destroy');
        Route::get('/download-file/','HomeController@download_file');
    });
});
//clear cache
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('optimize');
    // $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

