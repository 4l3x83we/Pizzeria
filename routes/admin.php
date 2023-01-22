<?php

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

Route::middleware(['role:admin|super_admin'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

    // Allergene & Additive
    Route::resource('/allergene', \App\Http\Controllers\Admin\Allergenes\AllergenesController::class);
    Route::resource('/additive', \App\Http\Controllers\Admin\Additives\AdditivesController::class);

    // Roles
    Route::resource('/roles', \App\Http\Controllers\Admin\Role\RoleController::class);
    Route::post('/roles/{role}/permissions', [\App\Http\Controllers\Admin\Role\RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [\App\Http\Controllers\Admin\Role\RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');

    // Permission
    Route::resource('/permissions', \App\Http\Controllers\Admin\Permission\PermissionController::class);
    Route::post('/permissions/{permission}/roles', [\App\Http\Controllers\Admin\Permission\PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [\App\Http\Controllers\Admin\Permission\PermissionController::class, 'removeRole'])->name('permissions.roles.remove');

    // Users
    Route::get('/users', [\App\Http\Controllers\Admin\User\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [\App\Http\Controllers\Admin\User\UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [\App\Http\Controllers\Admin\User\UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [\App\Http\Controllers\Admin\User\UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}roles/{role}', [\App\Http\Controllers\Admin\User\UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [\App\Http\Controllers\Admin\User\UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}permissions/{permission}', [\App\Http\Controllers\Admin\User\UserController::class, 'revokePermission'])->name('users.permissions.revoke');
});
