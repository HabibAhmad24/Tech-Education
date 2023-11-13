<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\user\UserController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

        // Route::get('/', function () {
        //     return view('home.index');
        // });
Route::get('/index',[CourseController::class,'coures_details']);
Route::get('/courses',[CourseController::class,'courses']);

Route::get('/web',[CategoriesController::class,'webblogs']);
Route::get('/android',[CategoriesController::class,'androidblog']);
Route::get('/datascience',[CategoriesController::class,'datascience']);
Route::get('/mern',[CategoriesController::class,'mern']);
Route::get('/laravel',[CategoriesController::class,'laravel']);
Route::get('/mysql',[CategoriesController::class,'mysql']);
Route::get('/python',[CategoriesController::class,'python']);







// Route::get('/index',[CommunityController::class,'expert_review']);


Route::get('/about', function(){
    return view('home.about');
});
Route::get('/blog', [PostController::class,'blogs']
    // return view('home.blog');

);
// Route::get('/courses', function(){
//     return view('home.courses');

// });
Route::get('/contact', function(){
    return view('home.contact');
} );
Route::Post('/contact/feedback', [FeedbackController::class,'feedback']);

Route::get(('{id}/blog_details'),[PostController::class,'blog_details']);
Route::get('{id}/coursedetails', [CourseController::class,'coursedetails']
    // return view('home.coursedetails');
);
Route::get('/home/create', function(){
    return view('home.create');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home/store', [App\Http\Controllers\HomeController::class, 'store']);
Route::get('/home/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit']);
Route::put('/home/{id}/update', [App\Http\Controllers\HomeController::class, 'update']);
Route::get('/home/{id}/delete', [App\Http\Controllers\HomeController::class, 'delete']);





Route::middleware(['auth','isAdmin'])->group(function()
{
    Route::get('admin/index',[AdminController::class,'index'])->name('admin.index');
});
// Route::middleware(['auth','isUser'])->group(function()
// {
//     Route::get('user/index',[UserController::class,'index'])->name('user.index');
// });

