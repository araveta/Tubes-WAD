<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\PhotographerController;

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Admin\MemberController;

use App\Http\Controllers\Member\MemberOrderController;

use App\Http\Controllers\Admin\OrderController;

use App\Http\Controllers\Member\LayananMemberController;

use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\GalleryController;

use App\Http\Controllers\Admin\LayananAdminController;

use App\Http\Controllers\Member\ProfileController;

use App\Http\Controllers\Grapher\GrapherProfileController;
use App\Http\Controllers\Grapher\JobGrapherController;

use App\Models\Photographer;
use App\Models\Layanan;
use App\Models\Order;
use App\Models\Member;
use App\Models\Profile;
use App\Models\User;
use App\Models\GrapherProfile;

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
    return view('front');
    //return view('welcome');
});
Route::get('/front', function () {
        return view('front');
        //return view('welcome');
    });

Route::get('/home', function () {
        return view('/front');
        //return view('welcome');
    });

Route::get('/ordertemplate', function () {
        return view('/ordertemplate');
        //return view('welcome');
    });


Auth::routes();

//Routing member area
Route::get('/area', [App\Http\Controllers\HomeController::class, 'area'])->name('area');



//Routing Member
Route::get('/memberview/front', [App\Http\Controllers\HomeController::class, 'frontmemberviewHome'])->name('memberview.front')->middleware('checkrole:0');
Route::get('/memberview/order', [LayananMemberController::class, 'index'])->name('memberview.layanan')->middleware('checkrole:0');
Route::get('/memberview/home', [App\Http\Controllers\HomeController::class, 'memberviewHome'])->name('memberview.home')->middleware('checkrole:0');
Route::get('/memberview/gallery', [App\Http\Controllers\GalleryController::class, 'gallerymemberview'])->name('memberview.gallery.index')->middleware('checkrole:0');
Route::get('/memberview/gallery/{id}/gallery', [GalleryController::class, 'gallery'])
        ->name('memberview.gallery.gallery')
        ->middleware('checkrole:0');
// Route::get('/memberview/checkout', [App\Http\Controllers\LayananController::class, 'layananmemberviewcheckout'])->name('memberview.layanan.checkout')->middleware('checkrole:0');
// Route::get('/memberview/order', [App\Http\Controllers\MemberOrderController::class, 'index'])->name('memberview.memberorder.index')->middleware('checkrole:0');
Route::get('/memberview/memberorder', [MemberOrderController::class, 'index'])->name('member.order')->middleware('checkrole:0');
Route::get('/memberview/memberorder/{id}/edit', [MemberOrderController::class, 'edit'])
        ->name('memberview.memberorder.edit')
        ->middleware('checkrole:0');
Route::put('/memberview/memberorder/{id}/edit', [MemberOrderController::class, 'update'])
        ->name('memberview.memberorder.update')
        ->middleware('checkrole:0');
Route::get('/memberview/memberorder/{id}/selesai', [HomeController::class, 'edit'])
        ->name('memberview.memberorder.selesai')
        ->middleware('checkrole:0');
Route::post('/memberview/memberorder/{id}/selesai', [HomeController::class, 'done'])
        ->name('memberview.memberorder.done')
        ->middleware('checkrole:0');   
Route::delete('/memberview/memberorder/{id}/destroy', [MemberOrderController::class, 'destroy'])
        ->name('memberview.memberorder.destroy')
        ->middleware('checkrole:0');
// Route::get('/memberview/gallery', [App\Http\Controllers\GalleryController::class, 'gallerymemberview'])->name('memberview.gallery.index')->middleware('checkrole:0');
Route::get('/memberview/layanan', [LayananMemberController::class, 'index'])->name('memberview.layanan')->middleware('checkrole:0');
Route::get('/memberview/layanan/{id}/detail', [LayananMemberController::class, 'detail'])
        ->name('memberview.layanan.detail')
        ->middleware('checkrole:0');
Route::get('/memberview/layanan/{id}/checkout', [LayananMemberController::class, 'checkout'])
        ->name('memberview.layanan.checkout')
        ->middleware('checkrole:0');
Route::post('/memberview/layanan/store', [LayananMemberController::class, 'store'])
        ->name('memberview.layanan.store')
        ->middleware('checkrole:0');
Route::delete('/memberview/layanan/{id}/batalorder', [LayananMemberController::class, 'batalorder'])
        ->name('memberview.layanan.batalorder')
        ->middleware('checkrole:0');
Route::get('/memberview/layanan/{id}/cetakinvoice', [LayananMemberController::class, 'cetakinvoice'])
        ->name('memberview.layanan.cetakinvoice')
        ->middleware('checkrole:0');        

Route::get('/memberview/profile', [ProfileController::class, 'index'])
        ->name('memberview.profile')
        ->middleware('checkrole:0');
Route::put('/memberview/profile/{id}/edit', [ProfileController::class, 'update'])
        ->name('memberview.profile.update')
        ->middleware('checkrole:0');

//Routing gallyer => as Member
Route::get('/memberview/gallery', [GalleryController::class, 'mgallery'])->name('memberview.gallery')->middleware('checkrole:0');
Route::get('/memberview/gallery/{id}/mshow', [GalleryController::class, 'mshow'])
        ->name('memberview.gallery.show')
        ->middleware('checkrole:0');

//Routing Grapher
Route::get('/grapher/front', [App\Http\Controllers\HomeController::class, 'frontgrapherHome'])->name('grapher.front')->middleware('checkrole:2');
Route::get('/grapher/home', [App\Http\Controllers\HomeController::class, 'grapherHome'])->name('grapher.home')->middleware('checkrole:2');
Route::get('/grapher/order', [App\Http\Controllers\OrderController::class, 'ordergrapher'])->name('grapher.order.index')->middleware('checkrole:2');
Route::get('/grapher/gallery', [App\Http\Controllers\GalleryController::class, 'gallerygrapher'])->name('grapher.gallery')->middleware('checkrole:2');

//Routing Grapher => Gallery
Route::get('/grapher/gallery', [GalleryController::class, 'pgallery'])->name('grapher.gallery')->middleware('checkrole:2');
Route::get('/grapher/gallery/{id}/view', [GalleryController::class, 'pgshow'])
        ->name('grapher.gallery.view')
        ->middleware('checkrole:2');
Route::post('/grapher/gallery/store', [GalleryController::class, 'pgstore'])
        ->name('grapher.gallery.store')
        ->middleware('checkrole:2');
Route::delete('/grapher/gallery/{id}/destroy', [GalleryController::class, 'destroy'])
        ->name('grapher.gallery.destroy')
        ->middleware('checkrole:2');

//routing jobgrapher => grapher
Route::get('/grapher/job', [JobGrapherController::class, 'index'])->name('grapher.job')->middleware('checkrole:2');
Route::get('/grapher/job/{id}/checkout', [JobGrapherController::class, 'checkout'])
        ->name('grapher.job.checkout')
        ->middleware('checkrole:2');
Route::post('/grapher/job/{id}/store', [JobGrapherController::class, 'store'])
        ->name('grapher.job.store')
        ->middleware('checkrole:2');

//routing profile => grapher
Route::get('/grapher/grapherprofile', [GrapherProfileController::class, 'index'])
        ->name('grapher.grapherprofile')
        ->middleware('checkrole:2');
Route::put('/grapher/grapherprofile/{id}/edit', [GrapherProfileController::class, 'update'])
        ->name('grapher.grapherprofile.update')
        ->middleware('checkrole:2');


//Routing Admin
Route::get('/admin/front', [App\Http\Controllers\HomeController::class, 'frontadminHome'])->name('admin.front')->middleware('checkrole:1');

//Routing Admin
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/order', [OrderController::class, 'adminHome'])->name('admin.order')->middleware('is_admin');
Route::get('/admin/gallery', [HomeController::class, 'adminHome'])->name('admin.gallery')->middleware('is_admin');

//routing photographer => admin
Route::get('/admin/photographer', [PhotographerController::class, 'index'])
        ->name('admin.photographer')
        ->middleware('is_admin');
Route::delete('/admin/photographer/{id}/destroy', [PhotographerController::class, 'destroy'])
        ->name('admin.photographer.destroy')
        ->middleware('is_admin');
Route::get('/admin/photographer/{id}/edit', [PhotographerController::class, 'edit'])
        ->name('admin.photographer.edit')
        ->middleware('is_admin');
Route::put('/admin/photographer/{id}/edit', [PhotographerController::class, 'update'])
        ->name('admin.photographer.update')
        ->middleware('is_admin');

//Routing Gallery => as Admin 
Route::get('/admin/gallery', [GalleryController::class, 'adgallery'])->name('admin.gallery')->middleware('is_admin');
Route::get('/admin/gallery/{id}/view', [GalleryController::class, 'adshow'])
        ->name('admin.gallery.view')
        ->middleware('is_admin');

//routing user => admin
Route::get('/admin/userdata', [UserController::class, 'index'])
        ->name('admin.userdata')
        ->middleware('is_admin');
Route::get('/admin/userdata/create', [UserController::class, 'create'])
        ->name('admin.userdata.create')
        ->middleware('is_admin');
Route::post('/admin/userdata/store', [UserController::class, 'store'])
        ->name('admin.userdata.store')
        ->middleware('is_admin');
Route::delete('/admin/userdata/{id}/destroy', [UserController::class, 'destroy'])
        ->name('admin.userdata.destroy')
        ->middleware('is_admin');
Route::get('/admin/userdata/{id}/edit', [UserController::class, 'edit'])
        ->name('admin.userdata.edit')
        ->middleware('is_admin');
Route::put('/admin/userdata/{id}/edit', [UserController::class, 'update'])
        ->name('admin.userdata.update')
        ->middleware('is_admin');

//routing member => admin
Route::get('/admin/member', [MemberController::class, 'index'])->name('admin.member')->middleware('is_admin');
Route::delete('/admin/member/{id}/destroy', [MemberController::class, 'destroy'])
        ->name('admin.member.destroy')
        ->middleware('is_admin');  
Route::get('/admin/member/{id}/edit', [MemberController::class, 'edit'])
        ->name('admin.member.edit')
        ->middleware('is_admin');
Route::put('/admin/member/{id}/edit', [MemberController::class, 'update'])
        ->name('admin.member.update')
        ->middleware('is_admin');          


//routing layanan => Admin
Route::get('/admin/layanan', [LayananAdminController::class, 'index'])->name('admin.layanan')->middleware('is_admin');
Route::get('/admin/layanan/create', [LayananAdminController::class, 'create'])
        ->name('admin.layanan.create')
        ->middleware('is_admin');
Route::post('/admin/layanan/store', [LayananAdminController::class, 'store'])
        ->name('admin.layanan.store')
        ->middleware('is_admin');
Route::get('/admin/layanan/{id}/edit', [LayananAdminController::class, 'edit'])
        ->name('admin.layanan.edit')
        ->middleware('is_admin');
Route::delete('/admin/layanan/{id}/destroy', [LayananAdminController::class, 'destroy'])
        ->name('admin.layanan.destroy')
        ->middleware('is_admin');   
Route::get('/admin/layanan/{id}/edit', [LayananAdminController::class, 'edit'])
        ->name('admin.layanan.edit')
        ->middleware('is_admin');        
Route::put('/admin/layanan/{id}/edit', [LayananAdminController::class, 'update'])
        ->name('admin.layanan.update')
        ->middleware('is_admin');  

//routing order => admin
Route::get('/admin/order', [OrderController::class, 'index'])
        ->name('admin.order')
        ->middleware('is_admin');
Route::get('/admin/order/create', [OrderController::class, 'create'])
        ->name('admin.order.create')
        ->middleware('is_admin');
Route::post('/admin/order/store', [OrderController::class, 'store'])
        ->name('admin.order.store')
        ->middleware('is_admin');
Route::delete('/admin/order/{id}/destroy', [OrderController::class, 'destroy'])
        ->name('admin.order.destroy')
        ->middleware('is_admin');
Route::get('/admin/order/{id}/edit', [OrderController::class, 'edit'])
        ->name('admin.order.edit')
        ->middleware('is_admin');
Route::put('/admin/order/{id}/edit', [OrderController::class, 'update'])
        ->name('admin.order.update')
        ->middleware('is_admin');