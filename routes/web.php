<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ResidentsController;
use App\Http\Controllers\HouseholdsController;
use App\Http\Controllers\BackupController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\LoginController;
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
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');
Auth::routes();

Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/change_password', [App\Http\Controllers\HomeController::class, 'changePassword'])->middleware('auth')->name('change_password');
Route::post('/change_password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->middleware('auth')->name('update_password');

Route::resource('/users', UserController::class);
Route::get('activity/log', [App\Http\Controllers\UserController::class, 'activityLog'])->middleware('auth')->name('activityLog');

Route::resource('/residents', ResidentsController::class)->middleware('auth');
Route::resource('/household', HouseholdsController::class)->middleware('auth');
Route::get('/reports', [App\Http\Controllers\ResidentsController::class, 'reports'])->middleware('auth')->name('reports');
Route::get('/barangays', [App\Http\Controllers\ResidentsController::class, 'barangays'])->middleware('auth')->name('barangays');
Route::get('/asisan', [App\Http\Controllers\ResidentsController::class, 'asisan'])->middleware('auth')->name('asisan');
Route::get('/bagongtubig', [App\Http\Controllers\ResidentsController::class, 'bagongtubig'])->middleware('auth')->name('bagongtubig');
Route::get('/calabuso', [App\Http\Controllers\ResidentsController::class, 'calabuso'])->middleware('auth')->name('calabuso');
Route::get('/dapdap_east', [App\Http\Controllers\ResidentsController::class, 'dapdap_east'])->middleware('auth')->name('dapdap_east');
Route::get('/dapdap_west', [App\Http\Controllers\ResidentsController::class, 'dapdap_west'])->middleware('auth')->name('dapdap_west');
Route::get('/francisco', [App\Http\Controllers\ResidentsController::class, 'francisco'])->middleware('auth')->name('francisco');
Route::get('/guinhawa_north', [App\Http\Controllers\ResidentsController::class, 'guinhawa_north'])->middleware('auth')->name('guinhawa_north');
Route::get('/guinhawa_south', [App\Http\Controllers\ResidentsController::class, 'guinhawa_south'])->middleware('auth')->name('guinhawa_south');
Route::get('/iruhin_central', [App\Http\Controllers\ResidentsController::class, 'iruhin_central'])->middleware('auth')->name('iruhin_central');
Route::get('/iruhin_east', [App\Http\Controllers\ResidentsController::class, 'iruhin_east'])->middleware('auth')->name('iruhin_east');
Route::get('/iruhin_west', [App\Http\Controllers\ResidentsController::class, 'iruhin_west'])->middleware('auth')->name('iruhin_west');
Route::get('/kaybagal_central', [App\Http\Controllers\ResidentsController::class, 'kaybagal_central'])->middleware('auth')->name('kaybagal_central');
Route::get('/kaybagal_north', [App\Http\Controllers\ResidentsController::class, 'kaybagal_north'])->middleware('auth')->name('kaybagal_north');
Route::get('/kaybagal_south', [App\Http\Controllers\ResidentsController::class, 'kaybagal_south'])->middleware('auth')->name('kaybagal_south');
Route::get('/magasawang_ilat', [App\Http\Controllers\ResidentsController::class, 'magasawang_ilat'])->middleware('auth')->name('magasawang_ilat');
Route::get('/maharlika_east', [App\Http\Controllers\ResidentsController::class, 'maharlika_east'])->middleware('auth')->name('maharlika_east');
Route::get('/maharlika_west', [App\Http\Controllers\ResidentsController::class, 'maharlika_west'])->middleware('auth')->name('maharlika_west');
Route::get('/maitim_central', [App\Http\Controllers\ResidentsController::class, 'maitim_central'])->middleware('auth')->name('maitim_central');
Route::get('/maitim_east', [App\Http\Controllers\ResidentsController::class, 'maitim_east'])->middleware('auth')->name('maitim_east');
Route::get('/maitim_west', [App\Http\Controllers\ResidentsController::class, 'maitim_west'])->middleware('auth')->name('maitim_west');
Route::get('/mendezcrossing_east', [App\Http\Controllers\ResidentsController::class, 'mendezcrossing_east'])->middleware('auth')->name('mendezcrossing_east');
Route::get('/mendezcrossing_west', [App\Http\Controllers\ResidentsController::class, 'mendezcrossing_west'])->middleware('auth')->name('mendezcrossing_west');
Route::get('/neogan', [App\Http\Controllers\ResidentsController::class, 'neogan'])->middleware('auth')->name('neogan');
Route::get('/patutongmalaki_north', [App\Http\Controllers\ResidentsController::class, 'patutongmalaki_north'])->middleware('auth')->name('patutongmalaki_north');
Route::get('/patutongmalaki_south', [App\Http\Controllers\ResidentsController::class, 'patutongmalaki_south'])->middleware('auth')->name('patutongmalaki_south');
Route::get('/sambong', [App\Http\Controllers\ResidentsController::class, 'sambong'])->middleware('auth')->name('sambong');
Route::get('/sanjose', [App\Http\Controllers\ResidentsController::class, 'sanjose'])->middleware('auth')->name('sanjose');
Route::get('/siangcrossing_east', [App\Http\Controllers\ResidentsController::class, 'silangcrossing_east'])->middleware('auth')->name('silangcrossing_east');
Route::get('/silangcrossing_west', [App\Http\Controllers\ResidentsController::class, 'silangcrossing_west'])->middleware('auth')->name('silangcrossing_west');
Route::get('/sungay_east', [App\Http\Controllers\ResidentsController::class, 'sungay_east'])->middleware('auth')->name('sungay_east');
Route::get('/sungay_west', [App\Http\Controllers\ResidentsController::class, 'sungay_west'])->middleware('auth')->name('sungay_west');
Route::get('/tolentino_east', [App\Http\Controllers\ResidentsController::class, 'tolentino_east'])->middleware('auth')->name('tolentino_east');
Route::get('/tolentino_west', [App\Http\Controllers\ResidentsController::class, 'tolentino_west'])->middleware('auth')->name('tolentino_west');
Route::get('/zambal', [App\Http\Controllers\ResidentsController::class, 'zambal'])->middleware('auth')->name('zambal');

Route::get('/repair/{id}', [App\Http\Controllers\ResidentsController::class, 'repair'])->middleware('auth')->name('residents.repair');
Route::get('/allrestore', [App\Http\Controllers\ResidentsController::class, 'allrestore'])->middleware('auth')->name('residents.allrestore');

Route::get('/restore/{id}', [App\Http\Controllers\HouseholdsController::class, 'restore'])->middleware('auth')->name('households.restore');
Route::get('/restore_all', [App\Http\Controllers\HouseholdsController::class, 'restore_all'])->middleware('auth')->name('households.restoreAll');



Route::get('/export', [App\Http\Controllers\ResidentsController::class, 'export'])->middleware('auth')->name('residents.export');
Route::get('/exportcsv', [App\Http\Controllers\ResidentsController::class, 'exportcsv'])->middleware('auth')->name('residents.exportcsv');


Route::post('/import', [App\Http\Controllers\ResidentsController::class, 'import'])->middleware('auth')->name('residents.import');


Route::get('/exports', [App\Http\Controllers\HouseholdsController::class, 'exports'])->middleware('auth')->name('households.export');
Route::get('/csvexport', [App\Http\Controllers\HouseholdsController::class, 'csvexport'])->middleware('auth')->name('households.csvexport');

Route::post('/imports', [App\Http\Controllers\HouseholdsController::class, 'imports'])->middleware('auth')->name('households.import');
Route::get('/backup', [App\Http\Controllers\BackupController::class, 'index'])->middleware('auth')->name('backup.backups');
Route::post('/backups', [App\Http\Controllers\BackupController::class, 'create'])->middleware('auth')->name('backup.create');
Route::delete('/backups/{backup}', [App\Http\Controllers\BackupController::class, 'destroy'])->middleware('auth')->name('backup.destroy');

});
