<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: UserController.php
 * User: ${USER}
 * Date: 20.${MONTH_NAME_FULL}.2023
 * Time: 13:12
 */

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $page_title = 'Users';
        $users = User::all();

        return view('backend.users.index', compact('page_title', 'users'));
    }

    public function show(User $user)
    {
        $page_title = 'Show';
        $roles = Role::all();
        $permissions = Permission::all();

        return view('backend.users.role', compact('page_title', 'user', 'roles', 'permissions'));
    }

    public function destroy(Request $request, User $user)
    {
        if ($user->hasRole('super_admin')) {
            return back()->with('message', 'you are admin.');
        }
        $user->delete();
        return back()->with('message', 'User deleted.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(Request $request, User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission not exists.');
    }

    public function assignRole(Request $request, User $user): \Illuminate\Http\RedirectResponse
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }
        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(Request $request, User $user,  Role $role): \Illuminate\Http\RedirectResponse
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }
        return back()->with('message', 'Role not exists.');
    }
}
