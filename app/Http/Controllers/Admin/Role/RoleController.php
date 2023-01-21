<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: RoleController.php
 * User: ${USER}
 * Date: 19.${MONTH_NAME_FULL}.2023
 * Time: 6:30
 */

namespace App\Http\Controllers\Admin\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $page_title = 'Roles';
        $roles = Role::whereNotIn('name', ['admin', 'super_admin'])->get();

        return view('admin.roles.index', compact('page_title', 'roles'));
    }

    public function create()
    {
        $page_title = 'Create Role';

        return view('admin.roles.create', compact('page_title'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return to_route('admin.roles.index')->with('message', 'Role Created successfully.');
    }

    public function edit(Role $role)
    {
        $page_title = 'Update Role';
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('page_title', 'role', 'permissions'));
    }

    public function update(Request $request, Role $role): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate(['name' => 'required']);
        $role->update($validated);

        return to_route('admin.roles.index')->with('message', 'Role Updated successfully.');
    }

    public function destroy(Request $request, Role $role): \Illuminate\Http\RedirectResponse
    {
        $role->delete();

        return to_route('admin.roles.index')->with('message', 'Role deleted.');
    }

    public function givePermission(Request $request, Role $role): \Illuminate\Http\RedirectResponse
    {
        if ($role->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(Request $request, Role $role, Permission $permission): \Illuminate\Http\RedirectResponse
    {
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission not exists.');
    }
}
