<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: PermissionController.php
 * User: ${USER}
 * Date: 19.${MONTH_NAME_FULL}.2023
 * Time: 6:29
 */

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $page_title = 'Permissions';
        $permissions = Permission::all();

        return view('admin.permissions.index', compact('page_title', 'permissions'));
    }

    public function create()
    {
        $page_title = 'Create Permission';

        return view('admin.permissions.create', compact('page_title'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Permission::create($validated);

        return to_route('admin.permissions.index')->with('message', 'Permission Created successfully.');
    }

    public function edit(Permission $permission)
    {
        $page_title = 'Update Permission';
        $roles = Role::all();

        return view('admin.permissions.edit', compact('page_title', 'permission', 'roles'));
    }

    public function update(Request $request, Permission $permission): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate(['name' => 'required']);
        $permission->update($validated);

        return to_route('admin.permissions.index')->with('message', 'Permission Updated successfully.');
    }

    public function destroy(Request $request, Permission $permission): \Illuminate\Http\RedirectResponse
    {
        $permission->delete();

        return to_route('admin.roles.index')->with('message', 'Permission deleted.');
    }

    public function assignRole(Request $request, Permission $permission): \Illuminate\Http\RedirectResponse
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }
        $permission->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(Request $request, Permission $permission,  Role $role): \Illuminate\Http\RedirectResponse
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('message', 'Role removed.');
        }
        return back()->with('message', 'Role not exists.');
    }
}
