<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Debugbar;
use Illuminate\Http\Request;

class HomeController extends Controller 
{
    function index(){
        DebugBar::info('Testing log data halamn admin');      
        return view('admin.home');
    }
}
