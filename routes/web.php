<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Controllers\Cont;
use App\Http\Controllers\SingController;
use App\Http\Controllers\UserDashController;
use App\Http\Controllers\AdminConrtoller;
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

Route::get('/index',[SingController::class,'index'])->name('index');



Route::get('/about', function () {
    return view('about');
});

/*Route::get('/rent', function () {
    return view('rent');
});*/
Route::get('/rent',[SingController::class,'rent_view'])->name('rentv');
Route::post('/rent',[SingController::class,'rent'])->name('rent');

/*Route::get('/buy', function () {
    return view('buy');
});*/
Route::get('/buy',[SingController::class,'buy_view'])->name('buyv');
Route::post('/buy',[SingController::class,'buy'])->name('buy');

Route::get('/contact',[SingController::class,'contact'])->name('contact');
Route::post('/contact',[SingController::class,'messages'])->name('contact');


Route::get('/master',[SingController::class,'master'])->name('master');

Route::get('/login',[SingController::class,'login_view'])->name('login');
Route::post('/login',[SingController::class,'login'])->name('login');

Route::get('/singup',[SingController::class,'singup_view'])->name('singup');
Route::post('/singup',[SingController::class,'singupd'])->name('singup');

Route::get('/listing',[SingController::class,'list_view'])->name('list');
Route::post('/listing',[SingController::class,'list'])->name('list');

Route::get('/dashboard',[SingController::class,'dash'])->name('userdash');
Route::get('/dashlayout',[SingController::class,'layout'])->name('layout');


Route::get('/logout',[SingController::class,'logout'])->name('logout');

////   User dashboard routs///

Route::get('/listeddash',[UserDashController::class,'listdash'])->name('listdash');
Route::get('/rentdash',[UserDashController::class,'rentdash'])->name('rentdash');
Route::get('/cartdash',[UserDashController::class,'cartdash'])->name('cartdash');
// edit user profile
Route::get('/profileedit',[UserDashController::class,'edit']);
Route::put('userdash/{id}/update',[UserDashController::class,'update']);
//edit propertys
Route::get('/userdash/{id}/listedit',[UserDashController::class,'listedit']);
Route::put('userdash/{id}/listupdate',[UserDashController::class,'listupdate']);
Route::get('/userdash/{id}/rentedit',[UserDashController::class,'rentedit']);
Route::put('userdash/{id}/rentupdate',[UserDashController::class,'rentupdate']);

Route::delete('userdash/{id}/delete',[UserDashController::class,'delete']);
Route::post('/cart/{id}',[UserDashController::class,'cart']);
//Route::post('/cartrent/{id}',[UserDashController::class,'cart1']);
Route::delete('userdash/{id}/dcart',[UserDashController::class,'dcart']);
Route::delete('userdash/{id}/buydelete',[UserDashController::class,'buydelete']);
Route::delete('userdash/{id}/rentdelete',[UserDashController::class,'rentdelete']);
//Route::delete('userdash/{id}/dcart',[UserDashController::class,'dcart']);
/// details page
Route::get('/more/{id}',[UserDashController::class,'more']);


//admin panel routes
Route::get('/admin',[ AdminConrtoller::class,'admin']);
Route::get('/adminlayout',[ AdminConrtoller::class,'adminlayout']);

Route::get('/adminlogin',[AdminConrtoller::class,'adminviewlogin'])->name('adminlogin');
Route::post('/adminlogin',[AdminConrtoller::class,'adminlogin'])->name('adminlogin');

Route::get('/editadmin',[AdminConrtoller::class,'Admineditview']);
Route::put('admindash/{id}/Admiupdate',[AdminConrtoller::class,'Admiupdate']);

Route::get('/viewdealers',[AdminConrtoller::class,'viewdealers'])->name('viewdealers');
Route::post('/save_dealers',[AdminConrtoller::class,'save_dealers'])->name('save_dealers');
Route::get('/admindash/{id}/Dealerupdate',[AdminConrtoller::class,'dupdate']);
Route::put('/admindash/{id}/Dealersave',[AdminConrtoller::class,'Dealersave']);
Route::delete('/admindash/{id}/Dealerdelete',[AdminConrtoller::class,'Dealerdelete']);



Route::get('/promanage',[AdminConrtoller::class,'promanage'])->name('promanage');

Route::get('/usermanage',[AdminConrtoller::class,'usermanage'])->name('usermanage');

Route::get('admindash/{id}/userview',[AdminConrtoller::class,'userview'])->name('userview');

Route::get('admindash/{id}/userupdate',[AdminConrtoller::class,'userupdate'])->name('userupdate');
Route::put('admindash/{id}/Uupdate',[AdminConrtoller::class,'Uupdate']);
Route::delete('admindash/{id}/Udelete',[AdminConrtoller::class,'Udelete']);

Route::get('/trending',[AdminConrtoller::class,'trending'])->name('trending');

Route::get('/message',[AdminConrtoller::class,'sms'])->name('message');
Route::delete('admindash/{id}/messdelete',[AdminConrtoller::class,'messdelete']);


