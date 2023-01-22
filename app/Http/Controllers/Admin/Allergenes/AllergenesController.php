<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: AllergenesController.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:54
 */

namespace App\Http\Controllers\Admin\Allergenes;

use App\Http\Controllers\Controller;
use App\Models\Admin\Allergenes\Allergene;
use Illuminate\Http\Request;

class AllergenesController extends Controller
{
    public function index()
    {
        $page_title = 'Allergene';
        $allergenes = Allergene::all();

        return view('admin.allergene_additives.allergeneIndex', compact('page_title', 'allergenes'));
    }

    public function create()
    {
        $page_title = 'Create Allergene';

        return view('admin.allergene_additives.allergeneCreate', compact('page_title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'all_labelling' => 'required',
            'all_name' => 'required'
        ]);
        Allergene::create($validated);

        return to_route('admin.allergene.index')->with('message', 'Allergene Created successfully.');
    }

    public function show(Allergene $allergene)
    {
    }

    public function edit(Allergene $allergene)
    {
        $page_title = 'Edit Allergene';

        return view('admin.allergene_additives.allergeneEdit', compact('page_title', 'allergene'));
    }

    public function update(Request $request, Allergene $allergene)
    {
        $validated = $request->validate([
            'all_labelling' => 'required',
            'all_name' => 'required'
        ]);
        $allergene->update($validated);

        return to_route('admin.allergene.index')->with('message', 'Allergene Updated successfully.');
    }

    public function destroy(Allergene $allergene)
    {
        $allergene->delete();

        return to_route('admin.allergene.index')->with('message', 'Allergene deleted.');
    }
}
