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
    Route::get('/', [\App\Http\Controllers\Backend\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('/roles', \App\Http\Controllers\Backend\Role\RoleController::class);
    Route::post('/roles/{role}/permissions', [\App\Http\Controllers\Backend\Role\RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [\App\Http\Controllers\Backend\Role\RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', \App\Http\Controllers\Backend\Permission\PermissionController::class);
    Route::post('/permissions/{permission}/roles', [\App\Http\Controllers\Backend\Permission\PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [\App\Http\Controllers\Backend\Permission\PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [\App\Http\Controllers\Backend\User\UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [\App\Http\Controllers\Backend\User\UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [\App\Http\Controllers\Backend\User\UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [\App\Http\Controllers\Backend\User\UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}roles/{role}', [\App\Http\Controllers\Backend\User\UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [\App\Http\Controllers\Backend\User\UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}permissions/{permission}', [\App\Http\Controllers\Backend\User\UserController::class, 'revokePermission'])->name('users.permissions.revoke');
});
