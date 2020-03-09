<?php
use App\Slider;
// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('adminIndex'));
});

//slider
Breadcrumbs::for('create_slider', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Create Slider', route('adminCreateSlider'));
});

Breadcrumbs::for('manage_slider', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Manage Slider', route('adminManageSlider'));
});

Breadcrumbs::for('edit_slider', function ($trail) {
    $trail->parent('manage_slider');
    $trail->push('Edit Slider', route('adminIndex'));
});

//appointment
Breadcrumbs::for('left_side_content', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Edit Content of Appointment Section', route('adminEditSecA'));
});

Breadcrumbs::for('appointment_history', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Appointment History', route('adminAppointmentHistory'));
});

Breadcrumbs::for('appointment_backup', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Appointment Backup', route('adminManageAppointment'));
});




//pet counter
Breadcrumbs::for('edit_petcounter', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Petcounter Section', route('adminEditPetcounter'));
});




//review
Breadcrumbs::for('edit_review_section', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Review Section', route('adminEditSecC'));
});

Breadcrumbs::for('new_review', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('New Review', route('adminCreateReview'));
});

Breadcrumbs::for('manage_review', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('All Review', route('adminManageReview'));
});

Breadcrumbs::for('edit_review', function ($trail) {
    $trail->parent('manage_review');
    $trail->push('Edit Review', route('adminIndex'));
});

//service
Breadcrumbs::for('create_service', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Create Service', route('adminCreateService'));
});

Breadcrumbs::for('manage_service', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('All Service', route('adminManageService'));
});

Breadcrumbs::for('edit_service', function ($trail) {
    $trail->parent('manage_service');
    $trail->push('Edit Services', route('adminIndex'));
});

Breadcrumbs::for('edit_banner', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Edit Banner', route('adminServiceBanner'));
});

//contact
Breadcrumbs::for('edit_contact', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Edit Contact Section', route('adminEditContact'));
});

//feedback
Breadcrumbs::for('customer_feedback', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Customer Feedback', route('adminManageFeedback'));
});

//about_us
Breadcrumbs::for('edit_aboutus_page', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('About US Page', route('adminEditAboutUs'));
});

Breadcrumbs::for('create_blog', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Create New Blog', route('adminCreateBlog'));
});

Breadcrumbs::for('manage_blog', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('All Blogs', route('adminManageBlog'));
});

Breadcrumbs::for('edit_blog', function ($trail) {
    $trail->parent('manage_blog');
    $trail->push('Edit Blog', route('adminIndex'));
});

Breadcrumbs::for('blog_comment', function ($trail) {
    $trail->parent('manage_blog');
    $trail->push('Blog Comment', route('adminIndex'));
});

Breadcrumbs::for('blog_category', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Blog Category', route('adminCreateBlogCategory'));
});

Breadcrumbs::for('new_team', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Add New Team', route('adminCreateTeam'));
});
Breadcrumbs::for('all_team', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('All Team Member', route('adminManageTeam'));
});

Breadcrumbs::for('edit_team', function ($trail) {
    $trail->parent('all_team');
    $trail->push('Edit Team Member', route('adminIndex'));
});

Breadcrumbs::for('mail_list', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('All Mails', route('adminMailingList'));
});
