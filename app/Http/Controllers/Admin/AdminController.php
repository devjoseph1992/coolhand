<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function  dashboard()
    {
        return view('admin.admin_dashboard');
    }
    public function  login()
    {
        // echo $password  = Hash::make('123456789');
        // die;
        return view('admin.admin_login');
    }
}
