<?php

namespace App\Controllers;

class DashboardController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Laguna',
            'company' => 'Laguna'
        ];

        return view('dashboard/index', $data);
    }
}
