<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: DaschboardController.php
 * User: ${USER}
 * Date: 18.${MONTH_NAME_FULL}.2023
 * Time: 14:49
 */

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';

        return view('admin.dashboard', compact('page_title'));
    }
}
