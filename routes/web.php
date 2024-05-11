<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Frontend\UserFeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Frontend\Admin\JadwalController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\VisitorController;

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

Auth::routes();

Route::post('/user/logout', [UserFeController::class, 'logoutUser'])->name('user.logout'); // Rute POST untuk logout

Route::get('/main', [App\Http\Controllers\Guest\GuestController::class, 'index'])->middleware('guest');
Route::get('/main-pengumuman', [App\Http\Controllers\Guest\GuestController::class, 'pengumuman'])->middleware('guest');
Route::get('main-pengumuman/{post_slug}', [App\Http\Controllers\Guest\GuestController::class, 'showPost'])->middleware('guest');

Route::get('/main-jadwal', [App\Http\Controllers\Guest\GuestController::class, 'jadwal'])->middleware('guest');
Route::get('main-jadwal/{jadwal_slug}', [App\Http\Controllers\Guest\GuestController::class, 'showJadwal'])->middleware('guest');
Route::get('/main-investasi', [App\Http\Controllers\Guest\GuestController::class, 'investasi']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isAdmin');

    Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('/')->middleware('isUser');
    Route::get('/count-visitors/{page}', 'VisitorController@countVisitors')->middleware('auth');

    Route::get('/pengumuman', [App\Http\Controllers\Frontend\FrontendController::class, 'pengumuman']);
    Route::get('pengumuman/{post_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showPost']);

    Route::get('/jadwal', [App\Http\Controllers\Frontend\FrontendController::class, 'jadwal']);
    Route::get('jadwal/{jadwal_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'showJadwal']);

    Route::get('/formulir', [FormulirController::class, 'index']);
    Route::post('/formulir/submit', [FormulirController::class, 'submit']);

    //export excel
    //Route::get('export/radar-chart', [App\Http\Controllers\Admin\DashboardController::class, 'exportRadarChart'])->name('export.radar.chart');
    Route::get('export/excel', [App\Http\Controllers\Admin\DashboardController::class, 'exportToExcel'])->name('export.excel');

    //drop-down partisipasi
    Route::get('/grafik', [FormulirController::class, 'hitunganGlobal']);
    Route::get('/pribadi', [FormulirController::class, 'dataindividu'])->name('formulir.dataIndividu');
    Route::get('/perbandingan', [FormulirController::class, 'perbandingan'])->name('perbandingan');
    Route::post('/perbandingan', [FormulirController::class, 'perbandingan']);


    Route::get('/investasi', [App\Http\Controllers\Frontend\FrontendController::class, 'investasi']);
    Route::get('/test', [App\Http\Controllers\Frontend\FrontendController::class, 'test']);

    Route::get('/user/profile/{user}', [App\Http\Controllers\UserProfileController::class, 'show'])->name('user.profile.show');
    Route::post('/user/profile/{user}', [App\Http\Controllers\UserProfileController::class, 'update'])->name('user.profile.update');
    Route::patch('/user/profile/{user}', [App\Http\Controllers\UserProfileController::class, 'update'])->name('user.profile.update');
});


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    //slider
    Route::get('crud-slider', [SliderController::class, 'index']);
    Route::get('add-slider', [SliderController::class, 'create']);
    Route::post('store-slider', [SliderController::class, 'store']);
    Route::get('edit-slider/{id}', [SliderController::class, 'edit']);
    Route::put('update-slider/{id}', [SliderController::class, 'update']);
    Route::get('delete-slider/{id}', [SliderController::class, 'destroy']);

    //Dashboard
    Route::get('/user', [UserController::class, 'index'])->name('admin.user.index');
    Route::get('/user/{id}', [UserController::class, 'showUser'])->name('admin.user.showUser');
    Route::get('/form', [FormulirController::class, 'datatable'])->name('admin.formulir.datatable');
    Route::get('/form/{id}', [FormulirController::class, 'showForm'])->name('admin.formulir.showForm');
    Route::get('/post', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('/post/{post_id}', [PostController::class, 'showPost'])->name('admin.post.showPost');
    Route::get('/admin/jadwal', [JadwalController::class, 'index'])->name('admin.jadwal.index');
    Route::get('/jadwal/{jadwal_id}', [JadwalController::class, 'showSchedule'])->name('admin.jadwal.showSchedule');

    //Posts
    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('store-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('edit-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('update-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('delete-post/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'destroy']);

    //Users
    Route::get('users', [App\Http\Controllers\Admin\UserController::class, 'index']);
    Route::get('edit-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::put('update-user/{user_id}', [App\Http\Controllers\Admin\UserController::class, 'update']);
    Route::delete('delete-user/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy']);

    //Embeds
    Route::get('embed', [App\Http\Controllers\Admin\EmbedController::class, 'index']);
    Route::get('add-embed', [App\Http\Controllers\Admin\EmbedController::class, 'create']);
    Route::post('store-embed', [App\Http\Controllers\Admin\EmbedController::class, 'store']);
    Route::get('edit-embed/{embed_id}', [App\Http\Controllers\Admin\EmbedController::class, 'edit']);
    Route::put('update-embed/{embed_id}', [App\Http\Controllers\Admin\EmbedController::class, 'update']);
    Route::get('delete-embed/{embed_id}', [App\Http\Controllers\Admin\EmbedController::class, 'destroy']);

    //Jadwal
    Route::get('jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'index']);
    Route::get('add-jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'create']);
    Route::post('store-jadwal', [App\Http\Controllers\Admin\JadwalController::class, 'store']);
    Route::get('edit-jadwal/{jadwal_id}', [App\Http\Controllers\Admin\JadwalController::class, 'edit']);
    Route::put('update-jadwal/{jadwal_id}', [App\Http\Controllers\Admin\JadwalController::class, 'update']);
    Route::get('delete-jadwal/{jadwal_id}', [App\Http\Controllers\Admin\JadwalController::class, 'destroy']);

    //Form Response
    Route::get('/datatable', [FormulirController::class, 'datatable']);
    Route::get('/formulir/datadetail/{id}', [FormulirController::class, 'datadetail'])->name('admin.formulir.datadetail');
    Route::delete('/formulir/delete/{id}', [FormulirController::class, 'delete'])->name('admin.formulir.delete');
});

/*
   //Category
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('post-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy']); 
*/
