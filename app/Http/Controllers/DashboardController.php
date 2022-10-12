<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main()
    {
        if (auth()->user()->level_user == 'Pengguna') {
            return redirect('/user/dashboard');
        }
        return view('admin.dashboard.main', [
            'title' => 'Dashboard'
        ]);
    }
}
