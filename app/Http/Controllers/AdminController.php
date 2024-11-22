<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function add(){
        return view('admin.danhmuc.addcategory');
    }
    public function category()
    {
        return view('admin.danhmuc.category');
    }
    public function editcategory()
    {
        return view('admin.danhmuc.editcategory');
    }
    public function orders()
    {
        return view('admin.donhang.orders');
    }
    public function createorders()
    {
        return view('admin.donhang.createorders');
    }
    public function editorders()
    {
        return view('admin.donhang.editorders');
    }
}
