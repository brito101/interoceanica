<?php

use App\Http\Controllers\Admin\AcademicController;
use App\Http\Controllers\Admin\ACL\PermissionController;
use App\Http\Controllers\Admin\ACL\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Tracking\AppController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.home');
    Route::prefix('admin')->name('admin.')->group(function () {
        /** Chart home */
        Route::get('/chart', [AdminController::class, 'chart'])->name('home.chart');

        /** Users */
        Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::get('/users/destroy/{id}', [UserController::class, 'destroy']);
        Route::resource('users', UserController::class);

        /**
         * ACL
         * */
        /** Permissions */
        Route::get('/permission/destroy/{id}', [PermissionController::class, 'destroy']);
        Route::resource('permission', PermissionController::class);
        /** Roles */
        Route::get('/role/destroy/{id}', [RoleController::class, 'destroy']);
        Route::get('role/{role}/permission', [RoleController::class, 'permissions'])->name('role.permissions');
        Route::put('role/{role}/permission/sync', [RoleController::class, 'permissionsSync'])->name('role.permissionsSync');
        Route::resource('role', RoleController::class);
    });
});

/** App */
Route::get('/app/home', [AppController::class, 'index'])->name('app.home');
/** Maritime */
Route::get('/app/maritime', [AppController::class, 'maritime'])->name('app.maritime');
Route::get('/app/maritime-export-all', [AppController::class, 'maritimeExportAll'])->name('app.maritime.export.all');
Route::get('/app/maritime-export/{cod}', [AppController::class, 'maritimeExport'])->name('app.maritime.export.cod');
Route::get('/app/maritime-import-all', [AppController::class, 'maritimeImportAll'])->name('app.maritime.import.all');
Route::get('/app/maritime-import/{cod}', [AppController::class, 'maritimeImport'])->name('app.maritime.import.cod');

// Route::get('/app/import', [AppController::class, 'import'])->name('app.import');
// Route::get('/app/import-geral', [AppController::class, 'importGeral'])->name('app.import.geral');
// Route::get('/app/import/{cod}', [AppController::class, 'importCod'])->name('app.import.cod');

// Route::get('/app/export', [AppController::class, 'export'])->name('app.export');
// Route::get('/app/export-geral', [AppController::class, 'exportGeral'])->name('app.export.geral');
// Route::get('/app/export/{cod}', [AppController::class, 'exportCod'])->name('app.export.cod');

/** Aereo */
Route::get('/app/air', [AppController::class, 'air'])->name('app.air');
Route::get('/app/air-export/{cod}', [AppController::class, 'airExport'])->name('app.air.export.cod');
Route::get('/app/air-export-all', [AppController::class, 'airExportAll'])->name('app.air.export.all');
Route::get('/app/air-import/{cod}', [AppController::class, 'airImport'])->name('app.air.import.cod');
Route::get('/app/air-import-all', [AppController::class, 'airImportAll'])->name('app.air.import.all');

// Route::get('/app/house', [AppController::class, 'rastHouse'])->name('app.rastHouse');
// Route::get('/app/house-geral', [AppController::class, 'rastHouseGeral'])->name('app.rastHouse.geral');
// Route::get('/app/house/{cod}', [AppController::class, 'rastHouseCod'])->name('app.rastHouse.cod');

// Route::get('/app/escala', [AppController::class, 'rastEscala'])->name('app.rastEscala');
// Route::get('/app/escala/{cod}', [AppController::class, 'rastEscalaCod'])->name('app.rastEscala.cod');

/** Login/Logout */
Route::get('/app/logout', [AppController::class, 'logout'])->name('app.logout');
Route::post('app', [AppController::class, 'login'])->name('app.login');

Route::get('/app', function () {
    return redirect('app/home');
});


/**Redirect */
Route::get('/', function () {
    return redirect('admin');
});

Auth::routes();
