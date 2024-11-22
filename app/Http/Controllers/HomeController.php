<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }
    public function showDetail()
    {
        return view('layouts.detail');
    }
    public function quangCao()
    {
        return view('layouts.quangcao');
    }
}

