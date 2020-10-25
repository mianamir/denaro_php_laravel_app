<?php

/**
 * Frontend Controllers
 */

// Site routes of front end


Route::post('new-logout', 'FrontendController@new_logout')->name('frontend.new.logout');

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::post('/search/student/result', 'FrontendController@searchStudentResult')->name('frontend.search.student.result');
Route::get('/index', 'FrontendController@index')->name('frontend.index');
Route::get('/about', 'FrontendController@about')->name('frontend.about');
Route::get('/student/learning', 'FrontendController@student_learning')->name('frontend.student.learning');
Route::get('/chairman/message', 'FrontendController@chairmanMessage')->name('frontend.chairman.message');
Route::get('/director-message', 'FrontendController@director_message')->name('frontend.director.message');
Route::get('/core/values', 'FrontendController@coreValues')->name('frontend.core.values');
Route::get('/our/dedicated/staff', 'FrontendController@ourDedicatedStaff')->name('frontend.our.dedicated.staff');
//Route::get('/image/gallery/category', 'FrontendController@imageGalleryCategory')->name('frontend.image.gallery.category');
//Route::get('/image/gallery/{id}', 'FrontendController@imageGallery')->name('frontend.image.gallery');
Route::get('/video/gallery/search', 'FrontendController@video_gallery_search')->name('frontend.site.video.gallery.search');
Route::get('/image-gallery-category1', 'FrontendController@image_gallery_category1')->name('frontend.image.gallery.category1');
Route::get('/image-gallery/{image_gallery_category_id}/search', 'FrontendController@image_gallery1')->name('frontend.image.gallery1');

Route::get('/sectors-we-deals/search/{id}', 'FrontendController@sectors_we_deals_search')->name('frontend.sectors.we.deals.search');
Route::get('/industrial-solutions/search/{id}', 'FrontendController@industrial_solutions_search')->name('frontend.industrial.solutions.search');
Route::get('/products-services/search/{id}', 'FrontendController@products_services_search')->name('frontend.products.services.search');



Route::get('/faq', 'FrontendController@faq')->name('frontend.faq');
Route::get('/duties', 'FrontendController@duties')->name('frontend.duties');
Route::get('/brand', 'FrontendController@brand')->name('frontend.brand');
Route::get('/client', 'FrontendController@client')->name('frontend.client');
Route::get('/exclusive-partners', 'FrontendController@exclusive_partners')->name('frontend.exclusive.partners');
Route::get('/service', 'FrontendController@service')->name('frontend.service');
Route::get('/what-we-do', 'FrontendController@whatWeDo')->name('frontend.what-we-do');
Route::get('/downloads', 'FrontendController@download')->name('frontend.download');
Route::get('/contact', 'FrontendController@contact')->name('frontend.contact');
Route::get('/privacy-policy', 'FrontendController@privacy_policy')->name('frontend.privacy.policy');
Route::get('/contact', 'FrontendController@contact')->name('frontend.contact');
Route::get('/terms-of-service', 'FrontendController@terms_of_service')->name('frontend.terms.of.service');
Route::get('/vision-and-mission', 'FrontendController@vision')->name('frontend.vision');


Route::get('macros', 'FrontendController@macros')->name('frontend.macros');

//Route::get('/products/{id}', ['as' => 'products', 'uses' => 'FrontendController@product']);
Route::get('/air-compressors/{slug}', ['as' => 'airCompressors', 'uses' => 'FrontendController@airCompressors']);
Route::get('/air-accessories/drayers/', ['as' => 'airAccessories.drayers', 'uses' => 'FrontendController@airAccessoriesDrayers']);
Route::get('/air-accessories/filters/', ['as' => 'airAccessories.filters', 'uses' => 'FrontendController@airAccessoriesFilters']);
Route::get('/air-accessories/{slug}', ['as' => 'airAccessories', 'uses' => 'FrontendController@airAccessories']);


Route::get('/category/{id}', ['as' => 'category', 'uses' => 'FrontendController@categories']);
Route::get('/search', ['as' => 'search', 'uses' => 'FrontendController@search']);
Route::get('/search-all', ['as' => 'search-all', 'uses' => 'FrontendController@search']);
Route::get('/book/{id}', ['as' => 'book', 'uses' => 'FrontendController@book']);
Route::get('/products/{id}', ['as' => 'products', 'uses' => 'FrontendController@products']);
Route::get('/authors/{id}', ['as' => 'author', 'uses' => 'FrontendController@author']);
Route::get('/booktype/{id}', ['as' => 'booktype', 'uses' => 'FrontendController@bookType']);
//Route::get('/category-type/{id}', ['as' => 'category.type', 'uses' => 'FrontendController@categoryType']);
//Route::get('/category-accessories/filters', ['as' => 'category.type', 'uses' => 'FrontendController@categoryAccessoriesFilter']);
//Route::get('/category-accessories/dryers', ['as' => 'category.type', 'uses' => 'FrontendController@categoryAccessoriesDryers']);
//Route::get('/gallery/{category}', ['as' => 'gallery.category', 'uses' => 'FrontendController@galleryCategory']);




Route::post('/email-send', ['as' => 'email-send', 'uses' => 'FrontendController@emailSend']);
Route::post('/cart/add', ['as' => 'cart.add', 'uses' => 'CartController@add']);
Route::post('/cart/delete', ['as' => 'cart.delete', 'uses' => 'CartController@delete']);
Route::post('/cart/update', ['as' => 'cart.update', 'uses' => 'CartController@update']);
Route::get('/cart/view', ['as' => 'cart.view', 'uses' => 'CartController@viewCart']);
Route::post('/cart/checkout', ['as' => 'cart.checkout', 'uses' => 'CartController@checkout']);




Route::get('news/{slug}', ['as' => 'news', 'uses' => 'FrontendController@news']);


Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
    });
});