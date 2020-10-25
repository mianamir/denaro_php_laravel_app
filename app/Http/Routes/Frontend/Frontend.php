<?php

/**
 * Frontend Controllers
 */

// Site routes of front end
/**
 * Teacher Frontend routes
 *
 */
Route::get('/become/teacher/step1', 'FrontendController@get_teacher_profile_step1')->name('become.teacher.step1');
Route::post('/become/teacher/step1', 'FrontendController@post_teacher_profile_step1')->name('become.teacher.step1');
Route::get('/become/teacher/{id}/step2', 'FrontendController@get_teacher_profile_step2')->name('become.teacher.step2');
Route::post('/become/teacher/step2/post', 'FrontendController@post_teacher_profile_step2')->name('become.teacher.step2.post');
Route::get('/become/teacher/{id}/step3', 'FrontendController@get_teacher_profile_step3')->name('become.teacher.step3');
Route::get('/teacher/login', 'FrontendController@get_teacher_login')->name('get.teacher.login');
Route::post('/teacher/login/post', 'FrontendController@post_teacher_login')->name('post.teacher.login');
Route::get('/teacher/logout', 'FrontendController@teacher_logout')->name('teacher.logout');
Route::get('/teaching/account/dashboard', 'FrontendController@teaching_account_dashboard')->name('teaching.account.dashboard');
Route::get('/account/teacher/profile', 'FrontendController@get_account_teacher_profile')->name('get.account.teacher.profile');
Route::post('/account/teacher/profile/post', 'FrontendController@post_account_teacher_profile')->name('post.account.teacher.profile');

Route::get('/design/course/step1', 'FrontendController@get_design_course_step1')->name('get.design.course.step1');
Route::post('/design/course/step1/post', 'FrontendController@post_design_course_step1')->name('post.design.course.step1');

Route::get('/design/course/step1/edit/{id}', 'FrontendController@get_design_course_step1_edit')->name('get.design.course.step1.edit');
Route::post('/design/course/step1/edit/post/{id}', 'FrontendController@post_design_course_step1_edit')->name('post.design.course.step1.edit');

/**
 * Teacher Student Frontend routes
 *
 */

Route::get('/teacher/students', 'FrontendController@teacher_students')->name('teacher.students');
Route::get('/student/register', 'FrontendController@get_student_register')->name('get.student.register');
Route::post('/student/register/post', 'FrontendController@post_student_register')->name('post.student.register');
Route::get('/teacher/student/show/{id}', 'FrontendController@teacher_student_show')->name('teacher.student.show');
Route::get('/teacher/student/edit/{id}', 'FrontendController@teacher_student_edit')->name('teacher.student.edit');
Route::post('/teacher/student/update', 'FrontendController@teacher_student_update')->name('teacher.student.update');
Route::get('/teacher/student/course/registration/{id}', 'FrontendController@teacher_student_course_registration')->name('teacher.student.course.registration');
Route::post('/teacher/student/course/registration/post', 'FrontendController@teacher_student_course_registration_post')->name('teacher.student.course.registration.post');
Route::get('/teacher/student/course/details/{student_id}/{course_id}', 'FrontendController@teacher_student_course_details')->name('teacher.student.course.details');
Route::get('/teacher/student/registered/courses/{student_id}', 'FrontendController@teacher_student_registered_courses')->name('teacher.student.registered_courses');


/**
 * Student Frontend routes
 *
 */
Route::get('/student/registration/step-1', 'FrontendController@get_student_registration_step1')->name('get.student.registration.step1');
Route::post('/student/registration/step-1', 'FrontendController@post_student_registration_step1')->name('post.student.registration.step1');
Route::get('/student/registration/step-2/{id}', 'FrontendController@get_student_registration_step2')->name('get.student.registration.step2');
Route::get('/student/registration/student/step-3/{course_type_id}/{student_id}', 'FrontendController@get_student_registration_step3')->name('get.student.registration.step3');
Route::get('/student/registration/step-4/{course_type_id}/{teacher_id}/{student_id}', 'FrontendController@get_student_registration_step4')->name('get.student.registration.step4');
Route::post('/student/registration/step-4', 'FrontendController@post_student_registration_step4')->name('post.student.registration.step4');

Route::get('/student/course/details/{teacher_id}/{student_id}/{course_id}', 'FrontendController@student_course_details')->name('student.course.details');


Route::get('/student/login', 'FrontendController@get_student_login')->name('get.student.login');
Route::post('/student/login/post', 'FrontendController@post_student_login')->name('post.student.login');
Route::get('/student/logout', 'FrontendController@student_logout')->name('student.logout');
Route::get('/student/dashboard', 'FrontendController@student_dashboard')->name('student.dashboard');
Route::get('/student/course/chapters/{id}', 'FrontendController@get_student_course_chapters')->name('get.student.course.chapters');
Route::get('/student/course/chapter/topics/{id}', 'FrontendController@get_student_course_chapter_topics')->name('get.student.course.chapter.topics');
Route::get('/student/course/chapter/topic/show/{id}', 'FrontendController@get_student_course_chapter_topic_show')->name('get.student.course.chapter.topic.show');
Route::get('/student/profile/edit', 'FrontendController@get_student_profile_edit')->name('get.student.profile.edit');
Route::post('/student/profile/edit/post', 'FrontendController@post_student_profile_edit')->name('post.student.profile.edit');
Route::get('/student/course/register/{id}', 'FrontendController@get_login_student_course_register')->name('student.course.register');
Route::post('/student/course/register/post', 'FrontendController@post_login_student_course_register')->name('student.course.register.post');
Route::get('/student/course/show/{teacher_id}/{student_id}/{course_id}', 'FrontendController@get_login_student_course_show')->name('get.login.student.course.show');


/**
 * Chapters Frontend routes
 */

Route::get('/frontend/chapters/{id}', 'FrontendController@get_frontend_chapters')->name('get.frontend.chapters');
Route::get('/frontend/chapter/new/{id}', 'FrontendController@get_frontend_chapter_new')->name('get.frontend.chapter.new');
Route::post('/frontend/chapter/new/post/{id}', 'FrontendController@post_frontend_chapter_new')->name('post.frontend.chapter.new');
Route::get('/frontend/chapter/edit/{id}', 'FrontendController@get_frontend_chapter_edit')->name('get.frontend.chapter.edit');
Route::post('/frontend/chapter/edit/post/{id}', 'FrontendController@post_frontend_chapter_edit')->name('post.frontend.chapter.edit');
Route::delete('/frontend/chapter/destroy/{id}', 'FrontendController@frontend_chapter_destroy')->name('frontend.chapter.destroy');

/**
 * Topics Frontend routes
 */

Route::get('/frontend/topics/{id}', 'FrontendController@get_frontend_topics')->name('get.frontend.topics');
Route::get('/frontend/topic/show/{id}', 'FrontendController@get_frontend_topic_show')->name('get.frontend.topic.show');
Route::get('/frontend/topic/new/{id}', 'FrontendController@get_frontend_topic_new')->name('get.frontend.topic.new');
Route::post('/frontend/topic/new/post/{id}', 'FrontendController@post_frontend_topic_new')->name('post.frontend.topic.new');
Route::get('/frontend/topic/subjects-by-class', 'FrontendController@topic_subjects_by_class')->name('topic.subjects.by.class');
Route::get('/frontend/topic/chapter-by-subject', 'FrontendController@topic_chapter_by_subject')->name('topic.chapter.by.subject');
Route::get('/frontend/topic/edit/{id}', 'FrontendController@get_frontend_topic_edit')->name('get.frontend.topic.edit');
Route::post('/frontend/topic/edit/post', 'FrontendController@post_frontend_topic_edit')->name('post.frontend.topic.edit');
Route::delete('/frontend/topic/destroy/{id}', 'FrontendController@frontend_topic_destroy')->name('frontend.topic.destroy');






Route::get('/design/course/step2/{id}', 'FrontendController@get_design_course_step2')->name('get.design.course.step2');
Route::post('/design/course/step2/post/{id}', 'FrontendController@post_design_course_step2')->name('post.design.course.step2');
Route::get('/design/course/step3/{id}', 'FrontendController@get_design_course_step3')->name('get.design.course.step3');
Route::post('/design/course/step3/post/{id}', 'FrontendController@post_design_course_step3')->name('post.design.course.step3');



/**
 * Course Frontend routes
 *
 */

Route::get('/courses', 'FrontendController@get_all_courses')->name('frontend.courses');
Route::get('/students-list', 'FrontendController@get_all_students')->name('frontend.students');
Route::get('/teachers-list', 'FrontendController@get_all_teachers')->name('frontend.teachers');
Route::get('/course-intro/{id}', 'FrontendController@get_course_intro')->name('frontend.course.intro');




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
Route::get('/import-from-japan', 'FrontendController@importFromJapan')->name('frontend.import.from.japan');
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