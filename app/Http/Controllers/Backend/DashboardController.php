<?php
/**
 * Copyright (c) Alexander Guthmann.
 *
 * File: DashboardController.php
 * User: ${USER}
 * Date: 21.${MONTH_NAME_FULL}.2023
 * Time: 6:9
 */

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';
        $delivery_service = 'XXX';
        $dashboard_title = $page_title . ' ' . $delivery_service;

        return view('backend.dashboard', compact('dashboard_title'));
    }
}
