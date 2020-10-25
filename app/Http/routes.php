<?php

Route::group(['middleware' => 'web'], function () {
    /**
     * Switch between the included languages
     */
    Route::group(['namespace' => 'Language'], function () {
        require(__DIR__ . '/Routes/Language/Language.php');
    });

    /**
     * Frontend Routes
     * Namespaces indicate folder structure
     */
//    Route::resource('posts', 'PostController');

    Route::group(['namespace' => 'Frontend'], function () {
        require(__DIR__ . '/Routes/Frontend/Frontend.php');
        require(__DIR__ . '/Routes/Frontend/Access.php');


    });
});


/**
 * Backend Routes
 * Namespaces indicate folder structure
 * Admin middleware groups web, auth, and routeNeedsPermission
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    /**
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    require(__DIR__ . '/Routes/Backend/Dashboard.php');
    require(__DIR__ . '/Routes/Backend/Access.php');
    require(__DIR__ . '/Routes/Backend/LogViewer.php');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

//
//Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
//    Route::group(['prefix' => 'v1'], function () {
//        require config('infyom.laravel_generator.path.api_routes');
//    });
//});


Route::group(['middleware' => 'admin'], function () {

    if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    }

    // Admin Email Setting

    Route::get('admin/email/setting', ['as'=> 'admin.email.setting', 'uses' => 'Admin\ContactController@adminEmailSetting']);
    Route::get('admin/email/setting/{contacts}/edit', ['as'=> 'admin.email.setting.edit', 'uses' => 'Admin\ContactController@adminEmailSettingEdit']);
    Route::post('admin/email/setting/{contacts}', ['as'=> 'admin.email.setting.update', 'uses' => 'Admin\ContactController@adminEmailSettingUpdate']);



    Route::get('admin/galleries', ['as'=> 'admin.galleries.index', 'uses' => 'Admin\GalleryController@index']);
    Route::post('admin/galleries', ['as'=> 'admin.galleries.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/galleries/create', ['as'=> 'admin.galleries.create', 'uses' => 'Admin\GalleryController@create']);
    Route::put('admin/galleries/{galleries}', ['as'=> 'admin.galleries.update', 'uses' => 'Admin\GalleryController@update']);
    Route::post('admin/galleries/{galleries}', ['as'=> 'admin.galleries.update', 'uses' => 'Admin\GalleryController@update']);
    Route::patch('admin/galleries/{galleries}', ['as'=> 'admin.galleries.update', 'uses' => 'Admin\GalleryController@update']);
    Route::delete('admin/galleries/{galleries}', ['as'=> 'admin.galleries.destroy', 'uses' => 'Admin\GalleryController@destroy']);
    Route::get('admin/galleries/{galleries}', ['as'=> 'admin.galleries.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/galleries/{galleries}/edit', ['as'=> 'admin.galleries.edit', 'uses' => 'Admin\GalleryController@edit']);

    Route::get('admin/banners', ['as' => 'admin.banners.index', 'uses' => 'Admin\BannerController@index']);
    Route::post('admin/banners', ['as' => 'admin.banners.store', 'uses' => 'Admin\BannerController@store']);
    Route::get('admin/banners/create', ['as' => 'admin.banners.create', 'uses' => 'Admin\BannerController@create']);
    Route::put('admin/banners/{banners}', ['as' => 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
    Route::patch('admin/banners/{banners}', ['as' => 'admin.banners.update', 'uses' => 'Admin\BannerController@update']);
    Route::delete('admin/banners/{banners}', ['as' => 'admin.banners.destroy', 'uses' => 'Admin\BannerController@destroy']);
    Route::get('admin/banners/{banners}', ['as' => 'admin.banners.show', 'uses' => 'Admin\BannerController@show']);
    Route::get('admin/banners/{banners}/edit', ['as' => 'admin.banners.edit', 'uses' => 'Admin\BannerController@edit']);


    Route::get('admin/pages', ['as' => 'admin.pages.index', 'uses' => 'Admin\PageController@index']);
    Route::post('admin/pages', ['as' => 'admin.pages.store', 'uses' => 'Admin\PageController@store']);
    Route::get('admin/pages/create', ['as' => 'admin.pages.create', 'uses' => 'Admin\PageController@create']);
    Route::put('admin/pages/{pages}', ['as' => 'admin.pages.update', 'uses' => 'Admin\PageController@update']);
    Route::patch('admin/pages/{pages}', ['as' => 'admin.pages.update', 'uses' => 'Admin\PageController@update']);
    Route::delete('admin/pages/{pages}', ['as' => 'admin.pages.destroy', 'uses' => 'Admin\PageController@destroy']);
    Route::get('admin/pages/{pages}', ['as' => 'admin.pages.show', 'uses' => 'Admin\PageController@show']);
    Route::get('admin/pages/{pages}/edit', ['as' => 'admin.pages.edit', 'uses' => 'Admin\PageController@edit']);


    Route::get('admin/locations', ['as'=> 'admin.locations.index', 'uses' => 'Admin\LocationController@index']);
    Route::post('admin/locations', ['as'=> 'admin.locations.store', 'uses' => 'Admin\LocationController@store']);
    Route::get('admin/locations/create', ['as'=> 'admin.locations.create', 'uses' => 'Admin\LocationController@create']);
    Route::put('admin/locations/{locations}', ['as'=> 'admin.locations.update', 'uses' => 'Admin\LocationController@update']);
    Route::patch('admin/locations/{locations}', ['as'=> 'admin.locations.update', 'uses' => 'Admin\LocationController@update']);
    Route::delete('admin/locations/{locations}', ['as'=> 'admin.locations.destroy', 'uses' => 'Admin\LocationController@destroy']);
    Route::get('admin/locations/{locations}', ['as'=> 'admin.locations.show', 'uses' => 'Admin\LocationController@show']);
    Route::get('admin/locations/{locations}/edit', ['as'=> 'admin.locations.edit', 'uses' => 'Admin\LocationController@edit']);



    Route::get('admin/news', ['as'=> 'admin.news.index', 'uses' => 'Admin\NewsController@index']);
    Route::post('admin/news', ['as'=> 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
    Route::get('admin/news/create', ['as'=> 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
    Route::put('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
    Route::patch('admin/news/{news}', ['as'=> 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
    Route::delete('admin/news/{news}', ['as'=> 'admin.news.destroy', 'uses' => 'Admin\NewsController@destroy']);
    Route::get('admin/news/{news}', ['as'=> 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
    Route::get('admin/news/{news}/edit', ['as'=> 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);

    

    Route::get('admin/maps', ['as'=> 'admin.maps.index', 'uses' => 'Admin\MapController@index']);
    Route::post('admin/maps', ['as'=> 'admin.maps.store', 'uses' => 'Admin\MapController@store']);
    Route::get('admin/maps/create', ['as'=> 'admin.maps.create', 'uses' => 'Admin\MapController@create']);
    Route::put('admin/maps/{maps}', ['as'=> 'admin.maps.update', 'uses' => 'Admin\MapController@update']);
    Route::patch('admin/maps/{maps}', ['as'=> 'admin.maps.update', 'uses' => 'Admin\MapController@update']);
    Route::delete('admin/maps/{maps}', ['as'=> 'admin.maps.destroy', 'uses' => 'Admin\MapController@destroy']);
    Route::get('admin/maps/{maps}', ['as'=> 'admin.maps.show', 'uses' => 'Admin\MapController@show']);
    Route::get('admin/maps/{maps}/edit', ['as'=> 'admin.maps.edit', 'uses' => 'Admin\MapController@edit']);


    Route::get('admin/subCategories', ['as'=> 'admin.subCategories.index', 'uses' => 'Admin\SubCategoryController@index']);
    Route::post('admin/subCategories', ['as'=> 'admin.subCategories.store', 'uses' => 'Admin\SubCategoryController@store']);
    Route::get('admin/subCategories/create', ['as'=> 'admin.subCategories.create', 'uses' => 'Admin\SubCategoryController@create']);
    Route::put('admin/subCategories/{subCategories}', ['as'=> 'admin.subCategories.update', 'uses' => 'Admin\SubCategoryController@update']);
    Route::patch('admin/subCategories/{subCategories}', ['as'=> 'admin.subCategories.update', 'uses' => 'Admin\SubCategoryController@update']);
    Route::delete('admin/subCategories/{subCategories}', ['as'=> 'admin.subCategories.destroy', 'uses' => 'Admin\SubCategoryController@destroy']);
    Route::get('admin/subCategories/{subCategories}', ['as'=> 'admin.subCategories.show', 'uses' => 'Admin\SubCategoryController@show']);
    Route::get('admin/subCategories/{subCategories}/edit', ['as'=> 'admin.subCategories.edit', 'uses' => 'Admin\SubCategoryController@edit']);



   


    Route::get('admin/categories', ['as'=> 'admin.categories.index', 'uses' => 'Admin\CategoryController@index']);
    Route::post('admin/categories', ['as'=> 'admin.categories.store', 'uses' => 'Admin\CategoryController@store']);
    Route::get('admin/categories/create', ['as'=> 'admin.categories.create', 'uses' => 'Admin\CategoryController@create']);
    Route::put('admin/categories/{categories}', ['as'=> 'admin.categories.update', 'uses' => 'Admin\CategoryController@update']);
    Route::patch('admin/categories/{categories}', ['as'=> 'admin.categories.update', 'uses' => 'Admin\CategoryController@update']);
    Route::delete('admin/categories/{categories}', ['as'=> 'admin.categories.destroy', 'uses' => 'Admin\CategoryController@destroy']);
    Route::get('admin/categories/{categories}', ['as'=> 'admin.categories.show', 'uses' => 'Admin\CategoryController@show']);
    Route::get('admin/categories/{categories}/edit', ['as'=> 'admin.categories.edit', 'uses' => 'Admin\CategoryController@edit']);


    Route::get('admin/video/gallery', ['as'=> 'admin.authors.index', 'uses' => 'Admin\AuthorController@index']);
    Route::post('admin/video/gallery', ['as'=> 'admin.authors.store', 'uses' => 'Admin\AuthorController@store']);
    Route::get('admin/video/gallery/create', ['as'=> 'admin.authors.create', 'uses' => 'Admin\AuthorController@create']);
    Route::put('admin/video/gallery/{authors}', ['as'=> 'admin.authors.update', 'uses' => 'Admin\AuthorController@update']);
    Route::patch('admin/video/gallery/{authors}', ['as'=> 'admin.authors.update', 'uses' => 'Admin\AuthorController@update']);
    Route::delete('admin/video/gallery/{authors}', ['as'=> 'admin.authors.destroy', 'uses' => 'Admin\AuthorController@destroy']);
    Route::get('admin/video/gallery/{authors}', ['as'=> 'admin.authors.show', 'uses' => 'Admin\AuthorController@show']);
    Route::get('admin/video/gallery/{authors}/edit', ['as'=> 'admin.authors.edit', 'uses' => 'Admin\AuthorController@edit']);


    Route::get('admin/nameCategories', ['as'=> 'admin.nameCategories.index', 'uses' => 'Admin\NameCategoryController@index']);
    Route::post('admin/nameCategories', ['as'=> 'admin.nameCategories.store', 'uses' => 'Admin\NameCategoryController@store']);
    Route::get('admin/nameCategories/create', ['as'=> 'admin.nameCategories.create', 'uses' => 'Admin\NameCategoryController@create']);
    Route::put('admin/nameCategories/{nameCategories}', ['as'=> 'admin.nameCategories.update', 'uses' => 'Admin\NameCategoryController@update']);
    Route::patch('admin/nameCategories/{nameCategories}', ['as'=> 'admin.nameCategories.update', 'uses' => 'Admin\NameCategoryController@update']);
    Route::delete('admin/nameCategories/{nameCategories}', ['as'=> 'admin.nameCategories.destroy', 'uses' => 'Admin\NameCategoryController@destroy']);
    Route::get('admin/nameCategories/{nameCategories}', ['as'=> 'admin.nameCategories.show', 'uses' => 'Admin\NameCategoryController@show']);
    Route::get('admin/nameCategories/{nameCategories}/edit', ['as'=> 'admin.nameCategories.edit', 'uses' => 'Admin\NameCategoryController@edit']);


    Route::get('admin/homeGalleries', ['as'=> 'admin.homeGalleries.index', 'uses' => 'Admin\HomeGalleryController@index']);
    Route::post('admin/homeGalleries', ['as'=> 'admin.homeGalleries.store', 'uses' => 'Admin\HomeGalleryController@store']);
    Route::get('admin/homeGalleries/create', ['as'=> 'admin.homeGalleries.create', 'uses' => 'Admin\HomeGalleryController@create']);
    Route::put('admin/homeGalleries/{homeGalleries}', ['as'=> 'admin.homeGalleries.update', 'uses' => 'Admin\HomeGalleryController@update']);
    Route::patch('admin/homeGalleries/{homeGalleries}', ['as'=> 'admin.homeGalleries.update', 'uses' => 'Admin\HomeGalleryController@update']);
    Route::delete('admin/homeGalleries/{homeGalleries}', ['as'=> 'admin.homeGalleries.destroy', 'uses' => 'Admin\HomeGalleryController@destroy']);
    Route::get('admin/homeGalleries/{homeGalleries}', ['as'=> 'admin.homeGalleries.show', 'uses' => 'Admin\HomeGalleryController@show']);
    Route::get('admin/homeGalleries/{homeGalleries}/edit', ['as'=> 'admin.homeGalleries.edit', 'uses' => 'Admin\HomeGalleryController@edit']);

    Route::get('admin/downloads', ['as'=> 'admin.downloads.index', 'uses' => 'Admin\DownloadController@index']);
    Route::post('admin/downloads', ['as'=> 'admin.downloads.store', 'uses' => 'Admin\DownloadController@store']);
    Route::get('admin/downloads/create', ['as'=> 'admin.downloads.create', 'uses' => 'Admin\DownloadController@create']);
    Route::put('admin/downloads/{downloads}', ['as'=> 'admin.downloads.update', 'uses' => 'Admin\DownloadController@update']);
    Route::patch('admin/downloads/{downloads}', ['as'=> 'admin.downloads.update', 'uses' => 'Admin\DownloadController@update']);
    Route::delete('admin/downloads/{downloads}', ['as'=> 'admin.downloads.destroy', 'uses' => 'Admin\DownloadController@destroy']);
    Route::get('admin/downloads/{downloads}', ['as'=> 'admin.downloads.show', 'uses' => 'Admin\DownloadController@show']);
    Route::get('admin/downloads/{downloads}/edit', ['as'=> 'admin.downloads.edit', 'uses' => 'Admin\DownloadController@edit']);

    Route::get('admin/certifications', ['as'=> 'admin.certifications.index', 'uses' => 'Admin\CertificationController@index']);
    Route::post('admin/certifications', ['as'=> 'admin.certifications.store', 'uses' => 'Admin\CertificationController@store']);
    Route::get('admin/certifications/create', ['as'=> 'admin.certifications.create', 'uses' => 'Admin\CertificationController@create']);
    Route::put('admin/certifications/{certifications}', ['as'=> 'admin.certifications.update', 'uses' => 'Admin\CertificationController@update']);
    Route::patch('admin/certifications/{certifications}', ['as'=> 'admin.certifications.update', 'uses' => 'Admin\CertificationController@update']);
    Route::delete('admin/certifications/{certifications}', ['as'=> 'admin.certifications.destroy', 'uses' => 'Admin\CertificationController@destroy']);
    Route::get('admin/certifications/{certifications}', ['as'=> 'admin.certifications.show', 'uses' => 'Admin\CertificationController@show']);
    Route::get('admin/certifications/{certifications}/edit', ['as'=> 'admin.certifications.edit', 'uses' => 'Admin\CertificationController@edit']);
    
    
Route::get('admin/cEOS', ['as'=> 'admin.cEOS.index', 'uses' => 'Admin\CEOController@index']);
Route::post('admin/cEOS', ['as'=> 'admin.cEOS.store', 'uses' => 'Admin\CEOController@store']);
Route::get('admin/cEOS/create', ['as'=> 'admin.cEOS.create', 'uses' => 'Admin\CEOController@create']);
Route::put('admin/cEOS/{cEOS}', ['as'=> 'admin.cEOS.update', 'uses' => 'Admin\CEOController@update']);
Route::patch('admin/cEOS/{cEOS}', ['as'=> 'admin.cEOS.update', 'uses' => 'Admin\CEOController@update']);
Route::delete('admin/cEOS/{cEOS}', ['as'=> 'admin.cEOS.destroy', 'uses' => 'Admin\CEOController@destroy']);
Route::get('admin/cEOS/{cEOS}', ['as'=> 'admin.cEOS.show', 'uses' => 'Admin\CEOController@show']);
Route::get('admin/cEOS/{cEOS}/edit', ['as'=> 'admin.cEOS.edit', 'uses' => 'Admin\CEOController@edit']);


Route::get('admin/socialIcons', ['as'=> 'admin.socialIcons.index', 'uses' => 'Admin\SocialIconController@index']);
Route::post('admin/socialIcons', ['as'=> 'admin.socialIcons.store', 'uses' => 'Admin\SocialIconController@store']);
Route::get('admin/socialIcons/create', ['as'=> 'admin.socialIcons.create', 'uses' => 'Admin\SocialIconController@create']);
Route::put('admin/socialIcons/{socialIcons}', ['as'=> 'admin.socialIcons.update', 'uses' => 'Admin\SocialIconController@update']);
Route::patch('admin/socialIcons/{socialIcons}', ['as'=> 'admin.socialIcons.update', 'uses' => 'Admin\SocialIconController@update']);
Route::delete('admin/socialIcons/{socialIcons}', ['as'=> 'admin.socialIcons.destroy', 'uses' => 'Admin\SocialIconController@destroy']);
Route::get('admin/socialIcons/{socialIcons}', ['as'=> 'admin.socialIcons.show', 'uses' => 'Admin\SocialIconController@show']);
Route::get('admin/socialIcons/{socialIcons}/edit', ['as'=> 'admin.socialIcons.edit', 'uses' => 'Admin\SocialIconController@edit']);





    Route::get('admin/brandTypes', ['as'=> 'admin.brandTypes.index', 'uses' => 'Admin\BrandTypeController@index']);
    Route::post('admin/brandTypes', ['as'=> 'admin.brandTypes.store', 'uses' => 'Admin\BrandTypeController@store']);
    Route::get('admin/brandTypes/create', ['as'=> 'admin.brandTypes.create', 'uses' => 'Admin\BrandTypeController@create']);
    Route::put('admin/brandTypes/{brandTypes}', ['as'=> 'admin.brandTypes.update', 'uses' => 'Admin\BrandTypeController@update']);
    Route::patch('admin/brandTypes/{brandTypes}', ['as'=> 'admin.brandTypes.update', 'uses' => 'Admin\BrandTypeController@update']);
    Route::delete('admin/brandTypes/{brandTypes}', ['as'=> 'admin.brandTypes.destroy', 'uses' => 'Admin\BrandTypeController@destroy']);
    Route::get('admin/brandTypes/{brandTypes}', ['as'=> 'admin.brandTypes.show', 'uses' => 'Admin\BrandTypeController@show']);
    Route::get('admin/brandTypes/{brandTypes}/edit', ['as'=> 'admin.brandTypes.edit', 'uses' => 'Admin\BrandTypeController@edit']);

    Route::get('admin/brands', ['as'=> 'admin.brands.index', 'uses' => 'Admin\BrandController@index']);
    Route::post('admin/brands', ['as'=> 'admin.brands.store', 'uses' => 'Admin\BrandController@store']);
    Route::get('admin/brands/create', ['as'=> 'admin.brands.create', 'uses' => 'Admin\BrandController@create']);

    Route::post('admin/brands/{brands}', ['as'=> 'admin.brands.update', 'uses' => 'Admin\BrandController@update']);
    Route::put('admin/brands/{brands}', ['as'=> 'admin.brands.update', 'uses' => 'Admin\BrandController@update']);
    Route::patch('admin/brands/{brands}', ['as'=> 'admin.brands.update', 'uses' => 'Admin\BrandController@update']);
    Route::delete('admin/brands/{brands}', ['as'=> 'admin.brands.destroy', 'uses' => 'Admin\BrandController@destroy']);
    Route::get('admin/brands/{brands}', ['as'=> 'admin.brands.show', 'uses' => 'Admin\BrandController@show']);
    Route::get('admin/brands/{brands}/edit', ['as'=> 'admin.brands.edit', 'uses' => 'Admin\BrandController@edit']);

    Route::get('admin/services', ['as'=> 'admin.services.index', 'uses' => 'Admin\ServiceController@index']);
    Route::post('admin/services', ['as'=> 'admin.services.store', 'uses' => 'Admin\ServiceController@store']);
    Route::get('admin/services/create', ['as'=> 'admin.services.create', 'uses' => 'Admin\ServiceController@create']);
    Route::put('admin/services/{services}', ['as'=> 'admin.services.update', 'uses' => 'Admin\ServiceController@update']);
    Route::patch('admin/services/{services}', ['as'=> 'admin.services.update', 'uses' => 'Admin\ServiceController@update']);
    Route::delete('admin/services/{services}', ['as'=> 'admin.services.destroy', 'uses' => 'Admin\ServiceController@destroy']);
    Route::get('admin/services/{services}', ['as'=> 'admin.services.show', 'uses' => 'Admin\ServiceController@show']);
    Route::get('admin/services/{services}/edit', ['as'=> 'admin.services.edit', 'uses' => 'Admin\ServiceController@edit']);



    Route::get('admin/contacts', ['as'=> 'admin.contacts.index', 'uses' => 'Admin\ContactController@index']);
    Route::get('admin/all/contacts', ['as'=> 'admin.contacts.single', 'uses' => 'Admin\ContactController@single']);
    Route::post('admin/contacts', ['as'=> 'admin.contacts.store', 'uses' => 'Admin\ContactController@store']);
    Route::get('admin/contacts/create', ['as'=> 'admin.contacts.create', 'uses' => 'Admin\ContactController@create']);
    Route::put('admin/contacts/{contacts}', ['as'=> 'admin.contacts.update', 'uses' => 'Admin\ContactController@update']);
    Route::patch('admin/contacts/{contacts}', ['as'=> 'admin.contacts.update', 'uses' => 'Admin\ContactController@update']);
    Route::delete('admin/contacts/{contacts}', ['as'=> 'admin.contacts.destroy', 'uses' => 'Admin\ContactController@destroy']);
    Route::get('admin/contacts/{contacts}', ['as'=> 'admin.contacts.show', 'uses' => 'Admin\ContactController@show']);
    Route::get('admin/contacts/{contacts}/edit', ['as'=> 'admin.contacts.edit', 'uses' => 'Admin\ContactController@edit']);




    Route::get('admin/clients', ['as'=> 'admin.clients.index', 'uses' => 'Admin\ClientController@index']);
    Route::post('admin/clients', ['as'=> 'admin.clients.store', 'uses' => 'Admin\ClientController@store']);
    Route::get('admin/clients/create', ['as'=> 'admin.clients.create', 'uses' => 'Admin\ClientController@create']);
    Route::put('admin/clients/{clients}', ['as'=> 'admin.clients.update', 'uses' => 'Admin\ClientController@update']);
    Route::patch('admin/clients/{clients}', ['as'=> 'admin.clients.update', 'uses' => 'Admin\ClientController@update']);
    Route::delete('admin/clients/{clients}', ['as'=> 'admin.clients.destroy', 'uses' => 'Admin\ClientController@destroy']);
    Route::get('admin/clients/{clients}', ['as'=> 'admin.clients.show', 'uses' => 'Admin\ClientController@show']);
    Route::get('admin/clients/{clients}/edit', ['as'=> 'admin.clients.edit', 'uses' => 'Admin\ClientController@edit']);


    Route::get('admin/headers', ['as'=> 'admin.headers.index', 'uses' => 'Admin\HeaderController@index']);
     Route::get('admin/dollar/rate', ['as'=> 'admin.headers.index.rate', 'uses' => 'Admin\HeaderController@indexDollar']);
    
    Route::post('admin/headers', ['as'=> 'admin.headers.store', 'uses' => 'Admin\HeaderController@store']);
    Route::get('admin/headers/create', ['as'=> 'admin.headers.create', 'uses' => 'Admin\HeaderController@create']);
    Route::put('admin/headers/{headers}', ['as'=> 'admin.headers.update', 'uses' => 'Admin\HeaderController@update']);
    Route::post('admin/headers/{headers}', ['as'=> 'admin.headers.update', 'uses' => 'Admin\HeaderController@update']);
    Route::patch('admin/headers/{headers}', ['as'=> 'admin.headers.update', 'uses' => 'Admin\HeaderController@update']);
    Route::delete('admin/headers/{headers}', ['as'=> 'admin.headers.destroy', 'uses' => 'Admin\HeaderController@destroy']);
    Route::get('admin/headers/{headers}', ['as'=> 'admin.headers.show', 'uses' => 'Admin\HeaderController@show']);
    Route::get('admin/headers/{headers}/edit', ['as'=> 'admin.headers.edit', 'uses' => 'Admin\HeaderController@edit']);
    Route::get('admin/headers/{id}/dollar', ['as'=> 'admin.headers.dollar', 'uses' => 'Admin\HeaderController@dollarRate']);
    Route::post('admin/headers/{id}/dollar', ['as'=> 'admin.headers.dollar', 'uses' => 'Admin\HeaderController@postDollarRate']);


    Route::get('admin/clientReviews', ['as'=> 'admin.clientReviews.index', 'uses' => 'Admin\ClientReviewController@index']);
    Route::post('admin/clientReviews', ['as'=> 'admin.clientReviews.store', 'uses' => 'Admin\ClientReviewController@store']);
    Route::get('admin/clientReviews/create', ['as'=> 'admin.clientReviews.create', 'uses' => 'Admin\ClientReviewController@create']);
    Route::put('admin/clientReviews/{clientReviews}', ['as'=> 'admin.clientReviews.update', 'uses' => 'Admin\ClientReviewController@update']);
    Route::patch('admin/clientReviews/{clientReviews}', ['as'=> 'admin.clientReviews.update', 'uses' => 'Admin\ClientReviewController@update']);
    Route::delete('admin/clientReviews/{clientReviews}', ['as'=> 'admin.clientReviews.destroy', 'uses' => 'Admin\ClientReviewController@destroy']);
    Route::get('admin/clientReviews/{clientReviews}', ['as'=> 'admin.clientReviews.show', 'uses' => 'Admin\ClientReviewController@show']);
    Route::get('admin/clientReviews/{clientReviews}/edit', ['as'=> 'admin.clientReviews.edit', 'uses' => 'Admin\ClientReviewController@edit']);



//    Route::get('admin/suppiers', ['as'=> 'admin.suppiers.index', 'uses' => 'Admin\SuppierController@index']);
//    Route::post('admin/suppiers', ['as'=> 'admin.suppiers.store', 'uses' => 'Admin\SuppierController@store']);
//    Route::get('admin/suppiers/create', ['as'=> 'admin.suppiers.create', 'uses' => 'Admin\SuppierController@create']);
//    Route::put('admin/suppiers/{suppiers}', ['as'=> 'admin.suppiers.update', 'uses' => 'Admin\SuppierController@update']);
//    Route::post('admin/suppiers/{suppiers}', ['as'=> 'admin.suppiers.update', 'uses' => 'Admin\SuppierController@update']);
//    Route::patch('admin/suppiers/{suppiers}', ['as'=> 'admin.suppiers.update', 'uses' => 'Admin\SuppierController@update']);
//    Route::delete('admin/suppiers/{suppiers}', ['as'=> 'admin.suppiers.destroy', 'uses' => 'Admin\SuppierController@destroy']);
//    Route::get('admin/suppiers/{suppiers}', ['as'=> 'admin.suppiers.show', 'uses' => 'Admin\SuppierController@show']);
//    Route::get('admin/suppiers/{suppiers}/edit', ['as'=> 'admin.suppiers.edit', 'uses' => 'Admin\SuppierController@edit']);
//
//
//    Route::get('admin/purchases', ['as'=> 'admin.purchases.index', 'uses' => 'Admin\PurchaseController@index']);
//    Route::post('admin/all/searched/purchases', ['as'=> 'admin.purchases.search', 'uses' => 'Admin\PurchaseController@search']);
//    Route::post('admin/purchases', ['as'=> 'admin.purchases.store', 'uses' => 'Admin\PurchaseController@store']);
//    Route::get('admin/purchases/create', ['as'=> 'admin.purchases.create', 'uses' => 'Admin\PurchaseController@create']);
//    Route::put('admin/purchases/{purchases}', ['as'=> 'admin.purchases.update', 'uses' => 'Admin\PurchaseController@update']);
//    Route::patch('admin/purchases/{purchases}', ['as'=> 'admin.purchases.update', 'uses' => 'Admin\PurchaseController@update']);
//    Route::post('admin/purchases/{purchases}', ['as'=> 'admin.purchases.update', 'uses' => 'Admin\PurchaseController@update']);
//    Route::delete('admin/purchases/{purchases}', ['as'=> 'admin.purchases.destroy', 'uses' => 'Admin\PurchaseController@destroy']);
//    Route::get('admin/purchases/{purchases}', ['as'=> 'admin.purchases.show', 'uses' => 'Admin\PurchaseController@show']);
//    Route::get('admin/purchases/{purchases}/edit', ['as'=> 'admin.purchases.edit', 'uses' => 'Admin\PurchaseController@edit']);

    Route::get('admin/staff', ['as'=> 'admin.customers.index', 'uses' => 'Admin\CustomerController@index']);
    Route::post('admin/all/searched/staff', ['as'=> 'admin.customers.search', 'uses' => 'Admin\CustomerController@search']);
    Route::post('admin/staff', ['as'=> 'admin.customers.store', 'uses' => 'Admin\CustomerController@store']);
    Route::get('admin/staff/create', ['as'=> 'admin.customers.create', 'uses' => 'Admin\CustomerController@create']);
    Route::put('admin/staff/{staff}', ['as'=> 'admin.customers.update', 'uses' => 'Admin\CustomerController@update']);
    Route::post('admin/staff/{staff}', ['as'=> 'admin.customers.update', 'uses' => 'Admin\CustomerController@update']);
    Route::patch('admin/staff/{staff}', ['as'=> 'admin.customers.update', 'uses' => 'Admin\CustomerController@update']);
    Route::delete('admin/staff/{staff}', ['as'=> 'admin.customers.destroy', 'uses' => 'Admin\CustomerController@destroy']);
    Route::get('admin/staff/{staff}', ['as'=> 'admin.customers.show', 'uses' => 'Admin\CustomerController@show']);
    Route::get('admin/staff/{staff}/edit', ['as'=> 'admin.customers.edit', 'uses' => 'Admin\CustomerController@edit']);

//    Route::get('admin/sales', ['as'=> 'admin.sales.index', 'uses' => 'Admin\SaleController@index']);
//    Route::post('admin/all/searched/sales', ['as'=> 'admin.sales.search', 'uses' => 'Admin\SaleController@search']);
//    Route::post('admin/sales', ['as'=> 'admin.sales.store', 'uses' => 'Admin\SaleController@store']);
//    Route::get('admin/sales/create', ['as'=> 'admin.sales.create', 'uses' => 'Admin\SaleController@create']);
//    Route::put('admin/sales/{sales}', ['as'=> 'admin.sales.update', 'uses' => 'Admin\SaleController@update']);
//    Route::post('admin/sales/{sales}', ['as'=> 'admin.sales.update', 'uses' => 'Admin\SaleController@update']);
//    Route::patch('admin/sales/{sales}', ['as'=> 'admin.sales.update', 'uses' => 'Admin\SaleController@update']);
//    Route::delete('admin/sales/{sales}', ['as'=> 'admin.sales.destroy', 'uses' => 'Admin\SaleController@destroy']);
//    Route::get('admin/sales/{sales}', ['as'=> 'admin.sales.show', 'uses' => 'Admin\SaleController@show']);
//    Route::get('admin/sales/{sales}/edit', ['as'=> 'admin.sales.edit', 'uses' => 'Admin\SaleController@edit']);
//


//    Route::get('admin/payRolls', ['as'=> 'admin.payRolls.index', 'uses' => 'Admin\PayRollController@index']);
//    Route::post('admin/all/searched/payRolls', ['as'=> 'admin.payRolls.search', 'uses' => 'Admin\PayRollController@search']);
//    Route::post('admin/payRolls', ['as'=> 'admin.payRolls.store', 'uses' => 'Admin\PayRollController@store']);
//    Route::get('admin/payRolls/create', ['as'=> 'admin.payRolls.create', 'uses' => 'Admin\PayRollController@create']);
//    Route::put('admin/payRolls/{payRolls}', ['as'=> 'admin.payRolls.update', 'uses' => 'Admin\PayRollController@update']);
//    Route::post('admin/payRolls/{payRolls}', ['as'=> 'admin.payRolls.update', 'uses' => 'Admin\PayRollController@update']);
//    Route::patch('admin/payRolls/{payRolls}', ['as'=> 'admin.payRolls.update', 'uses' => 'Admin\PayRollController@update']);
//    Route::delete('admin/payRolls/{payRolls}', ['as'=> 'admin.payRolls.destroy', 'uses' => 'Admin\PayRollController@destroy']);
//    Route::get('admin/payRolls/{payRolls}', ['as'=> 'admin.payRolls.show', 'uses' => 'Admin\PayRollController@show']);
//    Route::get('admin/payRolls/{payRolls}/edit', ['as'=> 'admin.payRolls.edit', 'uses' => 'Admin\PayRollController@edit']);
//
//
//    Route::get('admin/expenses', ['as'=> 'admin.expenses.index', 'uses' => 'Admin\ExpenseController@index']);
//    Route::post('admin/all/searched/expenses', ['as'=> 'admin.expenses.search', 'uses' => 'Admin\ExpenseController@search']);
//    Route::post('admin/expenses', ['as'=> 'admin.expenses.store', 'uses' => 'Admin\ExpenseController@store']);
//    Route::get('admin/expenses/create', ['as'=> 'admin.expenses.create', 'uses' => 'Admin\ExpenseController@create']);
//    Route::put('admin/expenses/{expenses}', ['as'=> 'admin.expenses.update', 'uses' => 'Admin\ExpenseController@update']);
//    Route::post('admin/expenses/{expenses}', ['as'=> 'admin.expenses.update', 'uses' => 'Admin\ExpenseController@update']);
//    Route::patch('admin/expenses/{expenses}', ['as'=> 'admin.expenses.update', 'uses' => 'Admin\ExpenseController@update']);
//    Route::delete('admin/expenses/{expenses}', ['as'=> 'admin.expenses.destroy', 'uses' => 'Admin\ExpenseController@destroy']);
//    Route::get('admin/expenses/{expenses}', ['as'=> 'admin.expenses.show', 'uses' => 'Admin\ExpenseController@show']);
//    Route::get('admin/expenses/{expenses}/edit', ['as'=> 'admin.expenses.edit', 'uses' => 'Admin\ExpenseController@edit']);
//

    Route::get('admin/studentClasses', ['as'=> 'admin.studentClasses.index', 'uses' => 'Admin\StudentClassController@index']);
    Route::get('admin/class/subjects', ['as'=> 'admin.studentClasses.class_subjects', 'uses' => 'Admin\StudentClassController@class_subjects']);
    Route::post('admin/all/searched/studentClasses', ['as'=> 'admin.studentClasses.search', 'uses' => 'Admin\StudentClassController@search']);
    Route::post('admin/studentClasses', ['as'=> 'admin.studentClasses.store', 'uses' => 'Admin\StudentClassController@store']);
    Route::get('admin/studentClasses/create', ['as'=> 'admin.studentClasses.create', 'uses' => 'Admin\StudentClassController@create']);
    Route::put('admin/studentClasses/{studentClasses}', ['as'=> 'admin.studentClasses.update', 'uses' => 'Admin\StudentClassController@update']);
    Route::post('admin/studentClasses/{studentClasses}', ['as'=> 'admin.studentClasses.update', 'uses' => 'Admin\StudentClassController@update']);
    Route::patch('admin/studentClasses/{studentClasses}', ['as'=> 'admin.studentClasses.update', 'uses' => 'Admin\StudentClassController@update']);
    Route::delete('admin/studentClasses/{studentClasses}', ['as'=> 'admin.studentClasses.destroy', 'uses' => 'Admin\StudentClassController@destroy']);
    Route::get('admin/studentClasses/{studentClasses}', ['as'=> 'admin.studentClasses.show', 'uses' => 'Admin\StudentClassController@show']);
    Route::get('admin/studentClasses/{studentClasses}/edit', ['as'=> 'admin.studentClasses.edit', 'uses' => 'Admin\StudentClassController@edit']);

    Route::get('admin/courses', ['as'=> 'admin.subjects.index', 'uses' => 'Admin\SubjectController@index']);
    Route::get('admin/courses/{class_id}', ['as'=> 'admin.courses.by.class', 'uses' => 'Admin\SubjectController@courses_by_class']);
    Route::post('admin/courses', ['as'=> 'admin.subjects.store', 'uses' => 'Admin\SubjectController@store']);
    Route::get('admin/courses/create', ['as'=> 'admin.subjects.create', 'uses' => 'Admin\SubjectController@create']);
    Route::put('admin/courses/{subjects}', ['as'=> 'admin.subjects.update', 'uses' => 'Admin\SubjectController@update']);
    Route::patch('admin/courses/{subjects}', ['as'=> 'admin.subjects.update', 'uses' => 'Admin\SubjectController@update']);
    Route::delete('admin/courses/{subjects}', ['as'=> 'admin.subjects.destroy', 'uses' => 'Admin\SubjectController@destroy']);
    Route::get('admin/courses/{subjects}', ['as'=> 'admin.subjects.show', 'uses' => 'Admin\SubjectController@show']);
    Route::get('admin/courses/{subjects}/edit', ['as'=> 'admin.subjects.edit', 'uses' => 'Admin\SubjectController@edit']);
    Route::get('admin/subjects_byclass', ['as'=> 'admin.subjects.subjects_byclass', 'uses' => 'Admin\SubjectController@subjects_byclass']);
    Route::get('admin/chapter_bysubject', ['as'=> 'admin.subjects.chapter_bysubject', 'uses' => 'Admin\ChapterController@chapter_bysubject']);
    Route::get('admin/teachers-by-expertise', ['as'=> 'admin.teachers.by.expertise', 'uses' => 'Admin\TeacherController@teachers_by_expertise']);


    Route::get('admin/all/chapters/{course}', ['as'=> 'admin.chapters.index', 'uses' => 'Admin\ChapterController@index']);
    Route::post('admin/chapters/store/{course}', ['as'=> 'admin.chapters.store', 'uses' => 'Admin\ChapterController@store']);
    Route::get('admin/chapters/create/{course}', ['as'=> 'admin.chapters.create', 'uses' => 'Admin\ChapterController@create']);
    Route::put('admin/chapters/{chapters}', ['as'=> 'admin.chapters.update', 'uses' => 'Admin\ChapterController@update']);
    Route::patch('admin/chapters/{chapters}', ['as'=> 'admin.chapters.update', 'uses' => 'Admin\ChapterController@update']);
    Route::delete('admin/chapters/{chapters}', ['as'=> 'admin.chapters.destroy', 'uses' => 'Admin\ChapterController@destroy']);
    Route::get('admin/chapters/{chapters}', ['as'=> 'admin.chapters.show', 'uses' => 'Admin\ChapterController@show']);
    Route::get('admin/chapters/{chapters}/edit', ['as'=> 'admin.chapters.edit', 'uses' => 'Admin\ChapterController@edit']);

    Route::get('admin/topics/{chapter}', ['as'=> 'admin.topics.index', 'uses' => 'Admin\TopicController@index']);
    Route::post('admin/topics/{chapter}', ['as'=> 'admin.topics.store', 'uses' => 'Admin\TopicController@store']);
    Route::get('admin/topics/create/{chapter}', ['as'=> 'admin.topics.create', 'uses' => 'Admin\TopicController@create']);
    Route::put('admin/topics/{topics}', ['as'=> 'admin.topics.update', 'uses' => 'Admin\TopicController@update']);
    Route::patch('admin/topics/{topics}', ['as'=> 'admin.topics.update', 'uses' => 'Admin\TopicController@update']);
    Route::delete('admin/topics/{topics}', ['as'=> 'admin.topics.destroy', 'uses' => 'Admin\TopicController@destroy']);
    Route::get('admin/topics/show/{topics}', ['as'=> 'admin.topics.show', 'uses' => 'Admin\TopicController@show']);
    Route::get('admin/topics/{topics}/edit', ['as'=> 'admin.topics.edit', 'uses' => 'Admin\TopicController@edit']);

    Route::get('admin/topics/videos', ['as'=> 'admin.topic_videos.index', 'uses' => 'Admin\TopicVideoController@index']);
    Route::post('admin/topics/videos', ['as'=> 'admin.topic_videos.store', 'uses' => 'Admin\TopicVideoController@store']);
    Route::get('admin/topics/videos/create', ['as'=> 'admin.topic_videos.create', 'uses' => 'Admin\TopicVideoController@create']);
    Route::put('admin/topics/videos/{topics}', ['as'=> 'admin.topic_videos.update', 'uses' => 'Admin\TopicVideoController@update']);
    Route::patch('admin/topics/videos/{topics}', ['as'=> 'admin.topic_videos.update', 'uses' => 'Admin\TopicVideoController@update']);
    Route::delete('admin/topics/videos/{topics}', ['as'=> 'admin.topic_videos.destroy', 'uses' => 'Admin\TopicVideoController@destroy']);
    Route::get('admin/topics/videos/{topics}', ['as'=> 'admin.topic_videos.show', 'uses' => 'Admin\TopicVideoController@show']);
    Route::get('admin/topics/videos/{topics}/edit', ['as'=> 'admin.topic_videos.edit', 'uses' => 'Admin\TopicVideoController@edit']);


    Route::get('admin/classSubjects', ['as'=> 'admin.classSubjects.index', 'uses' => 'Admin\ClassSubjectController@index']);
    Route::post('admin/classSubjects', ['as'=> 'admin.classSubjects.store', 'uses' => 'Admin\ClassSubjectController@store']);
    Route::get('admin/classSubjects/create', ['as'=> 'admin.classSubjects.create', 'uses' => 'Admin\ClassSubjectController@create']);
    Route::put('admin/classSubjects/{classSubjects}', ['as'=> 'admin.classSubjects.update', 'uses' => 'Admin\ClassSubjectController@update']);
    Route::patch('admin/classSubjects/{classSubjects}', ['as'=> 'admin.classSubjects.update', 'uses' => 'Admin\ClassSubjectController@update']);
    Route::delete('admin/classSubjects/{classSubjects}', ['as'=> 'admin.classSubjects.destroy', 'uses' => 'Admin\ClassSubjectController@destroy']);
    Route::get('admin/classSubjects/{classSubjects}', ['as'=> 'admin.classSubjects.show', 'uses' => 'Admin\ClassSubjectController@show']);
    Route::get('admin/classSubjects/{classSubjects}/edit', ['as'=> 'admin.classSubjects.edit', 'uses' => 'Admin\ClassSubjectController@edit']);


    Route::get('admin/courseTypes', ['as'=> 'admin.subjectTypes.index', 'uses' => 'Admin\SubjectTypeController@index']);
    Route::post('admin/courseTypes', ['as'=> 'admin.subjectTypes.store', 'uses' => 'Admin\SubjectTypeController@store']);
    Route::get('admin/courseTypes/create', ['as'=> 'admin.subjectTypes.create', 'uses' => 'Admin\SubjectTypeController@create']);
    Route::put('admin/courseTypes/{subjectTypes}', ['as'=> 'admin.subjectTypes.update', 'uses' => 'Admin\SubjectTypeController@update']);
    Route::patch('admin/courseTypes/{subjectTypes}', ['as'=> 'admin.subjectTypes.update', 'uses' => 'Admin\SubjectTypeController@update']);
    Route::delete('admin/courseTypes/{subjectTypes}', ['as'=> 'admin.subjectTypes.destroy', 'uses' => 'Admin\SubjectTypeController@destroy']);
    Route::get('admin/courseTypes/{subjectTypes}', ['as'=> 'admin.subjectTypes.show', 'uses' => 'Admin\SubjectTypeController@show']);
    Route::get('admin/courseTypes/{subjectTypes}/edit', ['as'=> 'admin.subjectTypes.edit', 'uses' => 'Admin\SubjectTypeController@edit']);


    Route::get('admin/teachers', ['as'=> 'admin.teachers.index', 'uses' => 'Admin\TeacherController@index']);
    Route::get('admin/teachers/{course_to_teach_id}', ['as'=> 'admin.teachers.by.course.to.teach.index', 'uses' => 'Admin\TeacherController@teachers_by_course_to_teach']);
    Route::post('admin/teachers', ['as'=> 'admin.teachers.store', 'uses' => 'Admin\TeacherController@store']);
    Route::get('admin/teachers/create', ['as'=> 'admin.teachers.create', 'uses' => 'Admin\TeacherController@create']);
    Route::put('admin/teachers/{teachers}', ['as'=> 'admin.teachers.update', 'uses' => 'Admin\TeacherController@update']);
    Route::patch('admin/teachers/{teachers}', ['as'=> 'admin.teachers.update', 'uses' => 'Admin\TeacherController@update']);
    Route::post('admin/teachers/{teachers}', ['as'=> 'admin.teachers.update', 'uses' => 'Admin\TeacherController@update']);
    Route::delete('admin/teachers/{teachers}', ['as'=> 'admin.teachers.destroy', 'uses' => 'Admin\TeacherController@destroy']);
    Route::get('admin/teachers/{teachers}', ['as'=> 'admin.teachers.show', 'uses' => 'Admin\TeacherController@show']);
    Route::get('admin/teachers/courses/{teachers}', ['as'=> 'admin.teachers.courses', 'uses' => 'Admin\TeacherController@courses']);
    Route::get('admin/teachers/{teachers}/edit', ['as'=> 'admin.teachers.edit', 'uses' => 'Admin\TeacherController@edit']);

    Route::get('admin/paymentPlans', ['as'=> 'admin.paymentPlans.index', 'uses' => 'Admin\PaymentPlanController@index']);
    Route::post('admin/paymentPlans', ['as'=> 'admin.paymentPlans.store', 'uses' => 'Admin\PaymentPlanController@store']);
    Route::get('admin/paymentPlans/create', ['as'=> 'admin.paymentPlans.create', 'uses' => 'Admin\PaymentPlanController@create']);
    Route::put('admin/paymentPlans/{paymentPlans}', ['as'=> 'admin.paymentPlans.update', 'uses' => 'Admin\PaymentPlanController@update']);
    Route::patch('admin/paymentPlans/{paymentPlans}', ['as'=> 'admin.paymentPlans.update', 'uses' => 'Admin\PaymentPlanController@update']);
    Route::delete('admin/paymentPlans/{paymentPlans}', ['as'=> 'admin.paymentPlans.destroy', 'uses' => 'Admin\PaymentPlanController@destroy']);
    Route::get('admin/paymentPlans/{paymentPlans}', ['as'=> 'admin.paymentPlans.show', 'uses' => 'Admin\PaymentPlanController@show']);
    Route::get('admin/paymentPlans/{paymentPlans}/edit', ['as'=> 'admin.paymentPlans.edit', 'uses' => 'Admin\PaymentPlanController@edit']);


    Route::get('admin/paymentAccounts', ['as'=> 'admin.paymentAccounts.index', 'uses' => 'Admin\PaymentAccountController@index']);
    Route::post('admin/paymentAccounts', ['as'=> 'admin.paymentAccounts.store', 'uses' => 'Admin\PaymentAccountController@store']);
    Route::get('admin/paymentAccounts/create', ['as'=> 'admin.paymentAccounts.create', 'uses' => 'Admin\PaymentAccountController@create']);
    Route::put('admin/paymentAccounts/{paymentAccounts}', ['as'=> 'admin.paymentAccounts.update', 'uses' => 'Admin\PaymentAccountController@update']);
    Route::patch('admin/paymentAccounts/{paymentAccounts}', ['as'=> 'admin.paymentAccounts.update', 'uses' => 'Admin\PaymentAccountController@update']);
    Route::delete('admin/paymentAccounts/{paymentAccounts}', ['as'=> 'admin.paymentAccounts.destroy', 'uses' => 'Admin\PaymentAccountController@destroy']);
    Route::get('admin/paymentAccounts/{paymentAccounts}', ['as'=> 'admin.paymentAccounts.show', 'uses' => 'Admin\PaymentAccountController@show']);
    Route::get('admin/paymentAccounts/{paymentAccounts}/edit', ['as'=> 'admin.paymentAccounts.edit', 'uses' => 'Admin\PaymentAccountController@edit']);

    Route::get('admin/teacherCourses', ['as'=> 'admin.teacherCourses.index', 'uses' => 'Admin\TeacherCourseController@index']);
    Route::post('admin/teacherCourses', ['as'=> 'admin.teacherCourses.store', 'uses' => 'Admin\TeacherCourseController@store']);
    Route::get('admin/teacherCourses/create', ['as'=> 'admin.teacherCourses.create', 'uses' => 'Admin\TeacherCourseController@create']);
    Route::put('admin/teacherCourses/{teacherCourses}', ['as'=> 'admin.teacherCourses.update', 'uses' => 'Admin\TeacherCourseController@update']);
    Route::patch('admin/teacherCourses/{teacherCourses}', ['as'=> 'admin.teacherCourses.update', 'uses' => 'Admin\TeacherCourseController@update']);
    Route::delete('admin/teacherCourses/{teacherCourses}', ['as'=> 'admin.teacherCourses.destroy', 'uses' => 'Admin\TeacherCourseController@destroy']);
    Route::get('admin/teacherCourses/{teacherCourses}', ['as'=> 'admin.teacherCourses.show', 'uses' => 'Admin\TeacherCourseController@show']);
    Route::get('admin/teacherCourses/{teacherCourses}/edit', ['as'=> 'admin.teacherCourses.edit', 'uses' => 'Admin\TeacherCourseController@edit']);

    Route::get('admin/students', ['as'=> 'admin.students.index', 'uses' => 'Admin\StudentController@index']);
    Route::get('admin/students/{class_id}', ['as'=> 'admin.students.by.class.index', 'uses' => 'Admin\StudentController@students_by_class']);
    Route::put('admin/students/{students}', ['as'=> 'admin.students.update', 'uses' => 'Admin\StudentController@update']);
    Route::patch('admin/students/{students}', ['as'=> 'admin.students.update', 'uses' => 'Admin\StudentController@update']);
    Route::delete('admin/students/{students}', ['as'=> 'admin.students.destroy', 'uses' => 'Admin\StudentController@destroy']);
    Route::get('admin/students/{students}', ['as'=> 'admin.students.show', 'uses' => 'Admin\StudentController@show']);
    Route::get('admin/students/{students}/edit', ['as'=> 'admin.students.edit', 'uses' => 'Admin\StudentController@edit']);
    Route::get('admin/student/create', ['as'=> 'admin.student.create', 'uses' => 'Admin\StudentController@create']);
    Route::post('admin/student/store', ['as'=> 'admin.student.store', 'uses' => 'Admin\StudentController@store']);
    Route::get('admin/student/course/registration/{student}', ['as'=> 'admin.student.course.registration', 'uses' => 'Admin\StudentController@student_course_registration']);
    Route::post('admin/student/course/registration/post', ['as'=> 'admin.student.course.registration.post', 'uses' => 'Admin\StudentController@student_course_registration_post']);
    Route::get('admin/student/course/details/{teacher_id}/{student_id}/{course_id}', ['as'=> 'admin.student.course.details', 'uses' => 'Admin\StudentController@student_course_details']);
    Route::get('admin/student/registered/courses/list/{student_id}', ['as'=> 'student.registered.courses.list', 'uses' => 'Admin\StudentController@student_registered_courses_list']);


    Route::get('admin/courseToTeaches', ['as'=> 'admin.courseToTeaches.index', 'uses' => 'Admin\course_to_teachController@index']);
    Route::post('admin/courseToTeaches', ['as'=> 'admin.courseToTeaches.store', 'uses' => 'Admin\course_to_teachController@store']);
    Route::get('admin/courseToTeaches/create', ['as'=> 'admin.courseToTeaches.create', 'uses' => 'Admin\course_to_teachController@create']);
    Route::put('admin/courseToTeaches/{courseToTeaches}', ['as'=> 'admin.courseToTeaches.update', 'uses' => 'Admin\course_to_teachController@update']);
    Route::patch('admin/courseToTeaches/{courseToTeaches}', ['as'=> 'admin.courseToTeaches.update', 'uses' => 'Admin\course_to_teachController@update']);
    Route::delete('admin/courseToTeaches/{courseToTeaches}', ['as'=> 'admin.courseToTeaches.destroy', 'uses' => 'Admin\course_to_teachController@destroy']);
    Route::get('admin/courseToTeaches/{courseToTeaches}', ['as'=> 'admin.courseToTeaches.show', 'uses' => 'Admin\course_to_teachController@show']);
    Route::get('admin/courseToTeaches/{courseToTeaches}/edit', ['as'=> 'admin.courseToTeaches.edit', 'uses' => 'Admin\course_to_teachController@edit']);



});


$middleware = array_merge(\Config::get('lfm.middlewares'), ['\Unisharp\Laravelfilemanager\middleware\MultiUser']);
$prefix = \Config::get('lfm.prefix', 'laravel-filemanager');
$as = 'unisharp.lfm.';
$namespace = '\Unisharp\Laravelfilemanager\controllers';

// make sure authenticated
Route::group(compact('middleware', 'prefix', 'as', 'namespace'), function () {

    // Show LFM
    Route::get('/', [
        'uses' => 'LfmController@show',
        'as' => 'show'
    ]);

    // upload
    Route::any('/upload', [
        'uses' => 'UploadController@upload',
        'as' => 'upload'
    ]);

    // list images & files
    Route::get('/jsonitems', [
        'uses' => 'ItemsController@getItems',
        'as' => 'getItems'
    ]);

    // folders
    Route::get('/newfolder', [
        'uses' => 'FolderController@getAddfolder',
        'as' => 'getAddfolder'
    ]);
    Route::get('/deletefolder', [
        'uses' => 'FolderController@getDeletefolder',
        'as' => 'getDeletefolder'
    ]);
    Route::get('/folders', [
        'uses' => 'FolderController@getFolders',
        'as' => 'getFolders'
    ]);

    // crop
    Route::get('/crop', [
        'uses' => 'CropController@getCrop',
        'as' => 'getCrop'
    ]);
    Route::get('/cropimage', [
        'uses' => 'CropController@getCropimage',
        'as' => 'getCropimage'
    ]);

    // rename
    Route::get('/rename', [
        'uses' => 'RenameController@getRename',
        'as' => 'getRename'
    ]);

    // scale/resize
    Route::get('/resize', [
        'uses' => 'ResizeController@getResize',
        'as' => 'getResize'
    ]);
    Route::get('/doresize', [
        'uses' => 'ResizeController@performResize',
        'as' => 'performResize'
    ]);

    // download
    Route::get('/download', [
        'uses' => 'DownloadController@getDownload',
        'as' => 'getDownload'
    ]);

    // delete
    Route::get('/delete', [
        'uses' => 'DeleteController@getDelete',
        'as' => 'getDelete'
    ]);

    Route::get('/demo', function () {
        return view('laravel-filemanager::demo');
    });
});


Route::group(['prefix' => 'niceartisan'], function () {
    Route::get('/{option?}', '\Bestmomo\NiceArtisan\Http\Controllers\NiceArtisanController@show');
    Route::post('item/{class}', '\Bestmomo\NiceArtisan\Http\Controllers\NiceArtisanController@command');
});

Route::get('/{url}', ['as' => 'page', 'uses' => 'Frontend\FrontendController@page']);


Route::group(['prefix' => 'niceartisan'], function () {
    Route::get('/{option?}', '\Bestmomo\NiceArtisan\Http\Controllers\NiceArtisanController@show');
    Route::post('item/{class}', '\Bestmomo\NiceArtisan\Http\Controllers\NiceArtisanController@command');
});



















