<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: AdditivesController.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:53
 */

namespace App\Http\Controllers\Admin\Additives;

use App\Http\Controllers\Controller;
use App\Models\Admin\Additives\Additives;
use Illuminate\Http\Request;

class AdditivesController extends Controller
{
    public function index()
    {
        $page_title = 'Additives';
        $additives = Additives::all();

        return view('admin.allergene_additives.additivesIndex', compact('page_title', 'additives'));
    }

    public function create()
    {
        $page_title = 'Create Additive';

        return view('admin.allergene_additives.additivesCreate', compact('page_title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'add_labelling' => 'required',
            'add_name' => 'required'
        ]);
        Additives::create($validated);

        return to_route('admin.additive.index')->with('message', 'Additive Created successfully.');
    }

    public function show(Additives $additive)
    {
    }

    public function edit(Additives $additive)
    {
        $page_title = 'Edit Additive';

        return view('admin.allergene_additives.additivesEdit', compact('page_title', 'additive'));
    }

    public function update(Request $request, Additives $additive)
    {
        $validated = $request->validate([
            'add_labelling' => 'required',
            'add_name' => 'required'
        ]);
        $additive->update($validated);

        return to_route('admin.additive.index')->with('message', 'Additive Updated successfully.');
    }

    public function destroy(Additives $additive)
    {
        $additive->delete();

        return to_route('admin.additive.index')->with('message', 'Additive deleted.');
    }
}
