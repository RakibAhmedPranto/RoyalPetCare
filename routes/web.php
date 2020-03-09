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

//home controller
Route::get('/', 'IndexController@RPC_index')->name('rpcIndex')->middleware(['pagespeed']);
Route::post('/CustomerAppointment','IndexController@appointment')->name('user.appointment.store');
Route::post('/MailingList','IndexController@mail_list')->name('user.mail_list.store');
//contact page controller
Route::get('/contact', 'ContactPagesController@RPC_contact')->name('rpcContact')->middleware(['pagespeed']);
Route::post('/contact/CustomerFeedback','ContactPagesController@feedback')->name('user.feedback.store');
//service page controller
Route::get('/services', 'ServicePagesController@RPC_service')->name('rpcService')->middleware(['pagespeed']);

//aboutus page controller
Route::get('/aboutus', 'AboutUsPagesController@RPC_about_us')->name('rpcAboutUs')->middleware(['pagespeed']);
//blog page controller
Route::get('/blogs', 'BlogPagesController@RPC_blog')->name('rpcBlog')->middleware(['pagespeed']);
Route::get('/blogs/search', 'BlogPagesController@blog_search')->name('blog.search')->middleware(['pagespeed']);
Route::get('/blogs/{slug}','BlogPagesController@blog_show')->name('blog.show')->middleware(['pagespeed']);
Route::post('/blogs/comment/{slug}','BlogPagesController@blog_comment')->name('blog.comment');
Route::get('/blogs/category/{id}', 'BlogPagesController@categorywise_blog')->name('category.blogs.show')->middleware(['pagespeed']);





//backend
//admin page controller
Route::get('/admin', 'AdminPagesController@admin_index')->name('adminIndex');


//blog controller
Route::get('/admin/blog/createblog', 'BlogController@admin_createblog')->name('adminCreateBlog');
Route::get('/admin/blog/createblog/editblog/{id}', 'BlogController@admin_editblog')->name('adminEditBlog');
Route::get('/admin/blog/manageblog', 'BlogController@admin_manageblog')->name('adminManageBlog');
Route::post('/blogstore','BlogController@blog_store')->name('admin.blog.store');
Route::post('/blog/edit{id}','BlogController@blog_update')->name('admin.blog.update');
Route::post('/blog/delete{id}','BlogController@blog_delete')->name('admin.blog.delete');
Route::get('/admin/blog/managebanner', 'BlogController@admin_manageBlogBanner')->name('adminBlogBanner');

Route::get('/admin/blog/createblogcategory', 'BlogCategoryController@admin_createblogcategory')->name('adminCreateBlogCategory');
Route::post('/blog/categorystore','BlogCategoryController@blogcategory_store')->name('admin.blogcategory.store');
Route::post('/blog/category/update{id}','BlogCategoryController@category_update')->name('admin.category.update');
//Route::get('/admin/register', 'AdminPagesController@admin_register')->name('adminRegister');

//slider controller
Route::get('/admin/slider/createslider', 'SliderPagesController@admin_createslider')->name('adminCreateSlider');
Route::get('/admin/slider/manageslider', 'SliderPagesController@admin_manageslider')->name('adminManageSlider');
Route::get('/admin/slider/manageslider/editslider/{id}', 'SliderPagesController@admin_editslider')->name('adminEditSlider');
Route::post('/sliderstore','SliderPagesController@slider_store')->name('admin.slider.store');
Route::post('/slider/edit{id}','SliderPagesController@slider_update')->name('admin.slider.update');
Route::post('/slider/active{id}','SliderPagesController@slider_active')->name('admin.slider.active');
Route::post('/slider/delete{id}','SliderPagesController@slider_delete')->name('admin.slider.delete');
Route::post('/slider/image/delete{id}','SliderPagesController@sliderimage_delete')->name('admin.sliderimage.delete');

//service controller
Route::get('/admin/service/createservice', 'ServiceController@admin_createservice')->name('adminCreateService');
Route::post('/service/store','ServiceController@service_store')->name('admin.service.store');
Route::get('/admin/service/manageservice', 'ServiceController@admin_manageservice')->name('adminManageService');
Route::post('/service/delete{id}','ServiceController@service_delete')->name('admin.service.delete');
Route::get('/admin/service/createservice/editservice/{id}', 'ServiceController@admin_editservice')->name('adminEditService');
Route::post('/service/edit{id}','ServiceController@service_update')->name('admin.service.update');
Route::get('/admin/service/managebanner', 'ServiceController@admin_manageServiceBanner')->name('adminServiceBanner');

Route::get('/admin/service/manage_home_services', 'ServiceManagerController@admin_homeservice')->name('adminHomeService');
Route::post('/service/update_home_services','ServiceManagerController@update_homeservice')->name('admin.HomeService.update');

//about_us controller
Route::get('/admin/about_us/editaboutus', 'AboutUsController@admin_editaboutus')->name('adminEditAboutUs');
Route::post('/aboutus/edit','AboutUsController@aboutus_update')->name('admin.aboutus.update');
Route::get('/admin/aboutus/managebanner', 'AboutUsController@admin_manageAboutusBanner')->name('adminAboutUsBanner');

//team controller

Route::get('/admin/team/createteam', 'TeamController@admin_createteam')->name('adminCreateTeam');
Route::post('/team/store','TeamController@team_store')->name('admin.team.store');
Route::get('/admin/team/manageteam', 'TeamController@admin_manageteam')->name('adminManageTeam');
Route::post('/team/delete{id}','TeamController@team_delete')->name('admin.team.delete');
Route::get('/admin/team/createteam/editteam/{id}', 'TeamController@admin_editteam')->name('adminEditTeam');
Route::post('/team/edit{id}','TeamController@team_update')->name('admin.team.update');

//customer feedback controller
Route::get('/admin/CustomerFeedback/managefeedback', 'FeedbackController@admin_managefeedback')->name('adminManageFeedback');
Route::post('/feedback/delete{id}','FeedbackController@feedback_delete')->name('admin.feedback.delete');
Route::get('/feedback/download','FeedbackController@feedback_download')->name('admin.feedback.download');

//customer appointment controller

Route::get('/admin/AppointmentManager/manageappointment', 'AppointmentController@admin_manageappointment')->name('adminManageAppointment');
Route::get('/admin/AppointmentManager/appointmenthistory', 'AppointmentController@admin_appointmenthistory')->name('adminAppointmentHistory');
Route::post('/appointment/cancel{id}','AppointmentController@appointment_cancel')->name('admin.appointment.cancel');
Route::post('/appointment/approve{id}','AppointmentController@appointment_approve')->name('admin.appointment.approve');
Route::post('/appointment/delete{id}','AppointmentController@appointment_delete')->name('admin.appointment.delete');
Route::get('/admin/Appointment/search', 'AppointmentController@appointment_search')->name('admin.appointment.search');
Route::get('/admin/Appointment/sort', 'AppointmentController@appointment_sort')->name('admin.appointment.sort');
Route::get('/appointment/backup','AppointmentController@appointment_backup')->name('admin.appointment.backup');

//contact Information
Route::get('/admin/contact/editcontact', 'ContactInformationController@admin_editContact')->name('adminEditContact');
Route::post('/contact/edit','ContactInformationController@contact_update')->name('admin.contact.update');
Route::get('/admin/contact/managebanner', 'ContactInformationController@admin_manageContactBanner')->name('adminManageBanner');


//petcounter controller
Route::get('/admin/pet_counter/editpetcounter', 'PetCounterController@admin_editpetcounter')->name('adminEditPetcounter');
Route::post('/pet_counter/edit','PetCounterController@petcounter_update')->name('admin.petcounter.update');

//secA controller
Route::get('/admin/secA/editSecA', 'SecAController@admin_editSecA')->name('adminEditSecA');
Route::post('/secA/edit','SecAController@SecA_update')->name('admin.SecA.update');

//secC controller
Route::get('/admin/secC/editSecC', 'SecCController@admin_editSecC')->name('adminEditSecC');
Route::post('/secC/edit','SecCController@SecC_update')->name('admin.SecC.update');

//review controller
Route::get('/admin/reviews/createreview', 'ReviewController@admin_createreview')->name('adminCreateReview');
Route::post('/review/store','ReviewController@review_store')->name('admin.review.store');
Route::get('/admin/reviews/managereviews', 'ReviewController@admin_managereview')->name('adminManageReview');
Route::get('/admin/review/createreview/editreview/{id}', 'ReviewController@admin_editreview')->name('adminEditReview');
Route::post('/review/edit{id}','ReviewController@review_update')->name('admin.review.update');
Route::post('/review/delete{id}','ReviewController@review_delete')->name('admin.review.delete');

//banner controller
Route::post('/banner/update{banner_id}','BannerController@banner_update')->name('admin.banner.update');

//mailing list controller
Route::get('/admin/MailingList', 'MailingListController@admin_mailing_list')->name('adminMailingList');
Route::get('/MailingList/download','MailingListController@mailinglist_download')->name('admin.mailinglist.download');

//Blog Comment controller
Route::get('/admin/blog/blogcomments/show/{id}', 'BlogCommentController@admin_blogcomment_manage')->name('adminManageBologComment');
Route::post('/comment/delete{id}','BlogCommentController@comment_delete')->name('admin.comment.delete');


Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
