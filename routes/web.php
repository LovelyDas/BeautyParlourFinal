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

Auth::routes();


Route::get('/dashboard', 'HomeController@index')->name('dashboard');
//==============================Slider=============================================
Route::get('/add-slider-img','SliderController@add_slider_img');
Route::post('/save-slider-image','SliderController@save_slider_img');
Route::get('/all-slider-img','SliderController@all_slider_img');
Route::get('/delete-slider-img/{slider_img_id}','SliderController@delete_slider_img');


//==============================Style Salon=============================================
Route::get('/add-big-img','StylesalonController@add_big_image');
Route::post('/save-big-img','StylesalonController@save_salon_bigimg');
Route::get('/all-big-img','StylesalonController@all_salon_bigimg');
Route::get('/unactive-big-img/{salon_big_id}','StylesalonController@unactive_salon_bigimg');
Route::get('/active-big-img/{salon_big_id}','StylesalonController@active_salon_bigimg');
Route::get('/delete-big-img/{salon_big_id}','StylesalonController@delete_salon_bigimg');

//style salon small route are here
Route::get('/add-small-img','StylesalonController@add_small_image');
Route::post('/save-small-img','StylesalonController@save_small_image');
Route::get('/all-small-img','StylesalonController@all_small_image');
Route::get('/unactive-small-img/{style_salon_small_id}','StylesalonController@unactive_salon_smallimg');
Route::get('/active-small-img/{style_salon_small_id}','StylesalonController@active_salon_smallimg');
Route::get('/delete-small-img/{style_salon_small_id}','StylesalonController@delete_salon_smallimg');


//======================================================================================
//cuting service image route are here
Route::get('/add-cut-img','CutingController@services_img');
Route::get('/all-cut-img','CutingController@all_cut_img');
Route::post('/save-image ','CutingController@save_image');
Route::get('/cut-delete-service/{cut_img_id} ','CutingController@cut_delete_service');
Route::get('/cut-unactive-service/{cut_img_id} ','CutingController@cut_unactive_service');
Route::get('/cut-active-service/{cut_img_id} ','CutingController@cut_active_service');

//special image route are here
Route::get('/add-special-img','SpecialController@add_special_img');
Route::post('/save-special-img ','SpecialController@save_special_img');
Route::get('/all-special-img','SpecialController@all_special_img');
Route::get('/special-unactive-service/{special_img_id} ','SpecialController@special_unactive_img');
Route::get('/special-active-service/{special_img_id} ','SpecialController@special_active_img');
Route::get('/all-delete-special-img/{special_img_id} ','SpecialController@special_img_delete');


//Other Service image rout are here
Route::get('/add-other-img', 'OtherServiceController@add_other_img');
Route::post('/save-other-img', 'OtherServiceController@save_other_img');
Route::get('/all-other-img','OtherServiceController@all_other_img');
Route::get('/unactive-other-service/{other_img_id} ','OtherServiceController@unactive_other_service');
Route::get('/active-other-service/{other_img_id} ','OtherServiceController@active_other_service');
Route::get('/all-delete-otherservice/{other_img_id} ','OtherServiceController@all_delete_service');
//===================================================================================================

//Add Cut service price
Route::get('/add-cuting-price','CutingpriceController@add_cuting_price');
Route::post('/save-cuting-price','CutingpriceController@save_cuting_price');
Route::get('/all-cuting-price','CutingpriceController@all_cuting_price');
Route::get('/unactive-cuting-price/{cuting_price_id}','CutingpriceController@unactive_cuting_price');
Route::get('/active-cuting-price/{cuting_price_id}','CutingpriceController@active_cuting_price');
Route::get('/delete-cuting-price/{cuting_price_id}','CutingpriceController@delete_cuting_price');
Route::get('/edit-cuting-price/{cuting_price_id}','CutingpriceController@edit_cuting_price');
Route::post('/update-cuting-price/{cuting_price_id}','CutingpriceController@update_cuting_price');

//Add SPECIAL FACIAL service price
Route::get('/add-special-price','SpecialpriceController@add_special_price');
Route::post('/save-special-price','SpecialpriceController@save_special_price');
Route::get('/all-special-price','SpecialpriceController@all_special_price');
Route::get('/unactive-special-price/{special_price_id}','SpecialpriceController@unactive_special_price');
Route::get('/active-special-price/{special_price_id}','SpecialpriceController@active_special_price');
Route::get('/delete-special-price/{special_price_id}','SpecialpriceController@delete_special_price');
Route::get('/edit-special-price/{special_price_id}','SpecialpriceController@edit_special_price');
Route::post('/update-special-price/{special_price_id}','SpecialpriceController@update_special_price');

//Add Other FACIAL service price
Route::get('/add-other-price','OtherpriceController@add_other_price');
Route::post('/save-other-price','OtherpriceController@save_other_price');
Route::get('/all-other-price','OtherpriceController@all_other_price');
Route::get('/unactive-other-price/{other_price_id}','OtherpriceController@unactive_other_price');
Route::get('/active-other-price/{other_price_id}','OtherpriceController@active_other_price');
Route::get('/delete-other-price/{other_price_id}','OtherpriceController@delete_other_price');
Route::get('/edit-other-price/{other_price_id}','OtherpriceController@edit_other_price');
Route::post('/update-other-price/{other_price_id}','OtherpriceController@update_other_price');

//Our Special Team
Route::get('/add-special-team','OurSpecialTeamController@add_special_team');
Route::post('/save-special-team','OurSpecialTeamController@save_special_team');
Route::get('/all-special-team','OurSpecialTeamController@all_special_team');
Route::get('/delete-special-team/{team_member_id}','OurSpecialTeamController@delete_special_team');


//Gallery
Route::get('/gallery','GalleryController@gallery');
Route::get('/add-gallery-category','GalleryController@add_gallery_category');
Route::post('/save-gallery-category','GalleryController@save_gallery_category');
Route::get('/all-gallery-category','GalleryController@all_gallery_category');
Route::get('/add-gallery-product','GalleryController@add_gallery_product');
Route::post('/save-gallery-product','GalleryController@save_gallery_product');
Route::get('/all-gallery-product','GalleryController@all_gallery_product');
Route::get('/welcome/{gallery_category_id}','GalleryController@view_gallary');

//about
Route::get('/about','AboutController@index');

// blog

Route::get('/blog','BlogController@blog');
Route::get('/add-blog','BlogController@index');
Route::post('/save-blog','BlogController@save_blog');
Route::get('/all-blog','BlogController@all_blog');
Route::get('/unactive-blog/{blog_id}','BlogController@unactive_blog');
Route::get('/active-blog/{blog_id}','BlogController@active_blog');
Route::get('/delete-blog/{blog_id}','BlogController@delete_blog');
Route::get('/edit-blog/{blog_id}','BlogController@edit_blog');
Route::post('/update-blog/{blog_id}','BlogController@update_blog');
Route::get('/blog-details/{blog_id}','BlogController@blog_details');

//Appoinment
Route::post('/save-appoinment','AppoinmentController@save_appoinment')->name('store.appointment');
Route::get('/all-appoinment','AppoinmentController@all_appoinment');
Route::get('/add-appoinment','AppoinmentController@add_appoinment');
Route::get('/Delete-appoinment/{id}','AppoinmentController@delete_appoinment');
Route::get('/view-appoinment/{id}','AppoinmentController@view_appoinment');
Route::get('/cancel-appoinment/{id}','AppoinmentController@cancel_appoinment');


//contact
Route::post('/save-contact','ContactsController@save_contact');
Route::get('/all-contacts','ContactsController@all_contacts');
Route::get('/view-contact/{contact_id}','ContactsController@view_contact');
Route::get('/delete-contact/{contact_id}','ContactsController@delete_contact');

//service
Route::get('/service','ServiceController@index');
Route::get('/latest-hair-style','ServiceController@sub_services_1');
Route::get('/celebraty-style','ServiceController@sub_services_2');
Route::get('/populer-style','ServiceController@sub_services_3');

//Settings
Route::get('/social','SettingsController@social');
Route::post('/save-social','SettingsController@save_social');
Route::get('/add-social/{id}','SettingsController@edit_social');
Route::post('/save-social/{id}','SettingsController@update_social');
Route::get('/copyright/{id}','SettingsController@copyright');
Route::post('/save-copyright/{id}','SettingsController@update_copyright');


Route::get('/rate-service/{id}','FeedBackController@index');
Route::post('/feedbackAdd','FeedBackController@feedBackAdd');
Route::post('/get_all_feedback','FeedBackController@getFeedBacks');







