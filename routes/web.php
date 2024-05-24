<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('auth.login');
// });

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('do-login', [AuthController::class, 'doLogin'])->name('do.login');



Route::middleware(['auth'])->group(function () {


    Route::get('logout', [AuthController::class, 'destroy'])->name('logout');


    //dashboard
    Route::group(['middleware' => 'permission:dashboard'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    });


    //users
    Route::group(['middleware' => 'permission:all_users'], function () {
        Route::get('/view-users', [UserController::class, 'viewUsers'])->name('admin.viewUsers');
        Route::post('/add-new-user', [UserController::class, 'addUser'])->name('admin.addUser');
        Route::get('/toggle-user/{id}', [UserController::class, 'toggleUser'])->name('admin.toggleUser');
        Route::get('/edit-user/{id}', [UserController::class, 'editUser'])->name('admin.editUser');
        Route::post('/update-user-info', [UserController::class, 'updateUser'])->name('admin.updateUser');
        Route::post('/update-user-role', [UserController::class, 'updateRole'])->name('admin.updateUserRole');
        Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('admin.deleteUser');
    });

    //Category Management
    Route::get('/view-categories', [CategoryController::class, 'viewCategories'])->name('admin.viewCategories');
    Route::post('/add-new-categories', [CategoryController::class, 'addCategories'])->name('admin.addCategories');
    Route::get('/edit-categories/{id}', [CategoryController::class, 'editCategories'])->name('admin.editcategories');
    Route::post('/update-categories-info', [CategoryController::class, 'updateCategories'])->name('admin.updateCategories');
    Route::get('/delete-categories/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.deleteCategory');


    //College Management
    Route::get('/view-colleges', [CollegeController::class, 'viewColleges'])->name('admin.viewColleges');
    Route::get('/add-colleges', [CollegeController::class, 'addColleges'])->name('admin.addColleges');
    Route::post('/save-colleges', [CollegeController::class, 'saveColleges'])->name('admin.saveColleges');
    Route::get('/edit-colleges/{id}', [CollegeController::class, 'edit'])->name('admin.editColleges');
    Route::post('/update-colleges-info/{id}', [CollegeController::class, 'updateCollege'])->name('admin.updateColleges');
    // Route::post('/admin/deleteCollege/{id}', [CollegeController::class, 'delete'])->name('admin.deleteCollege');
    Route::get('/admin/deleteColleges/{id}', [CollegeController::class, 'delete'])->name('admin.deleteColleges');
    Route::get('/toggle-college/{id}', [CollegeController::class, 'toggleCollege'])->name('admin.toggleCollege');



    //College view in a page
    Route::get('/viewone-colleges/{id}', [CollegeController::class, 'viewone'])->name('admin.viewOneColleges');


    //Review
    Route::get('/view-reviews', [ReviewController::class, 'viewReviews'])->name('admin.viewReviews');
    Route::get('/add-reviews', [ReviewController::class, 'addReviews'])->name('admin.addReviews');
    Route::post('/save-reviews', [ReviewController::class, 'saveReviews'])->name('admin.saveReviews');
    Route::get('/edit-reviews/{id}', [ReviewController::class, 'editReviews'])->name('admin.editReviews');
    Route::post('/update-reviews/{id}', [ReviewController::class, 'updateReview'])->name('admin.updateReview');
    Route::get('/delete-reviews/{id}', [ReviewController::class, 'deleteReview'])->name('admin.deleteReview');
    Route::get('/toggle-reviews/{id}', [ReviewController::class, 'toggleReview'])->name('admin.toggleReview');



    //Course
    Route::get('/view-courses', [CourseController::class, 'viewCourses'])->name('admin.viewCourses');
    Route::get('/add-courses', [CourseController::class, 'addCourses'])->name('admin.addCourses');
    Route::post('/save-courses', [CourseController::class, 'saveCourses'])->name('admin.saveCourses');
    Route::get('/edit-courses/{id}', [CourseController::class, 'editCourses'])->name('admin.editCourses');
    Route::post('/update-courses/{id}', [CourseController::class, 'updateCourses'])->name('admin.updateCourses');
    Route::get('/delete-courses/{id}', [CourseController::class, 'deleteCourses'])->name('admin.deleteCourses');
    Route::get('/toggle-courses/{id}', [CourseController::class, 'toggleCourse'])->name('admin.toggleCourse');

    //Location
    Route::get('/view-locations', [LocationController::class, 'viewLocations'])->name('admin.viewLocations');
    Route::get('/add-locations', [LocationController::class, 'addLocations'])->name('admin.addLocations');
    Route::post('/save-locations', [LocationController::class, 'saveLocations'])->name('admin.saveLocations');
    Route::get('/edit-locations/{id}', [LocationController::class, 'editLocations'])->name('admin.editLocations');
    Route::post('/update-locations/{id}', [LocationController::class, 'updateLocations'])->name('admin.updateLocations');
    Route::get('/delete-locations/{id}', [LocationController::class, 'deleteLocations'])->name('admin.deleteLocations');
    Route::get('/toggle-locations/{id}', [LocationController::class, 'toggleLocation'])->name('admin.toggleLocation');

    //settings
    Route::get('/view-settings', [SettingsController::class, 'viewsettings'])->name('admin.viewsettings');
    Route::post('/update-settings', [SettingsController::class, 'updatesettings'])->name('admin.updatesettings');

    //home
    Route::get('/home', [FrontEndController::class, 'home'])->name('admin.home');
    //All Colleges
    Route::get('/allcolleges', [FrontEndController::class, 'allcolleges'])->name('front.allcolleges');
    //About-us
    Route::get('/view-aboutus', [AboutUsController::class, 'AboutUs'])->name('front.viewAboutUs');
    //contact-us
    Route::get('/view-contactus', [ContactUsController::class, 'ContactUs'])->name('front.viewContactUs');
    //mail from user
    Route::post('/view-mails', [ContactUsController::class, 'contactmail'])->name('front.contactmail');
    Route::get('/view-contactform', [ContactUsController::class, 'viewcontactform'])->name('front.viewcontactform');
    //Search
    Route::get('/course', [CourseController::class, 'search'])->name('front.course');
    //location search
    Route::get('/location', [CourseController::class, 'searchlocation'])->name('front.location');


    //plan
    Route::group(['middleware' => 'permission:plans'], function () {
        Route::get('/view-plans', [PlanController::class, 'viewPlans'])->name('admin.viewPlans');
        Route::post('/add-new-plan', [PlanController::class, 'addPlan'])->name('admin.addPlan');
        Route::get('/toggle-plan/{id}', [PlanController::class, 'togglePlan'])->name('admin.togglePlan');
        Route::get('/edit-plan/{id}', [PlanController::class, 'editPlan'])->name('admin.editPlan');
        Route::post('/update-plan-info', [PlanController::class, 'updatePlan'])->name('admin.updatePlan');
        Route::get('/delete-plan/{id}', [PlanController::class, 'deletePlan'])->name('admin.deletePlan');
    });

    //Subscriptions
    Route::group(['middleware' => 'permission:subscriptions'], function () {
        Route::get('/view-subscriptions', [SubscriptionController::class, 'viewSubscriptions'])->name('admin.viewSubscriptions');
    });


    // Permissions
    // Route::group(['middleware' => 'permission:permissions'], function () {
    Route::get('/create-role-and-give-permission', [PermissionController::class, 'createRole']);
    Route::get('/create-permission', [PermissionController::class, 'createPermission']);
    Route::get('/assign-user-to-permission', [PermissionController::class, 'assignPermissionToUser']);
    Route::get('/test-permission', [PermissionController::class, 'testPermission']);
    Route::get('/get-user-roles-permission', [PermissionController::class, 'getUserRolesAndPermissions']);
    Route::get('/give-all-permission-superadmin', [PermissionController::class, 'givePermissions']);
    // });


    Route::group(['middleware' => 'permission:reports'], function () {
        Route::get('/subscription-report', [ReportController::class, 'subscriptionReport'])->name('admin.subscriptionReport');
    });


    //Datatable
    Route::get('/get-all-users-datatable', [DatatableController::class, 'getAllUsers'])->name('admin.getAllUsers');
    Route::get('/get-all-plans-datatable', [DatatableController::class, 'getAllPlans'])->name('admin.getAllPlans');
    Route::get('/get-all-categories-datatable', [DatatableController::class, 'getAllCategories'])->name('admin.getAllCategories');
    Route::get('/get-all-colleges-datatable', [DatatableController::class, 'getAllColleges'])->name('admin.getAllColleges');
    Route::get('/get-all-reviews-datatable', [DatatableController::class, 'getAllReviews'])->name('admin.getAllReviews');
    Route::get('/get-all-courses-datatable', [DatatableController::class, 'getAllCourses'])->name('admin.getAllCourses');
    Route::get('/get-all-locations-datatable', [DatatableController::class, 'getAllLocations'])->name('admin.getAllLocations');

    Route::get('/get-all-subscription-datatable', [DatatableController::class, 'getAllSubscriptions'])->name('admin.getAllSubscriptions');
    Route::get('/get-report-subscription-datatable', [DatatableController::class, 'getReportSubscription'])->name('admin.getReportSubscription');
});
