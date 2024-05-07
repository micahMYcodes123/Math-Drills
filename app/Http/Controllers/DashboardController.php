<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view("web.index");
    }

    public function random(){
        return view('web.random');
    }

    public function add(){
        return view('web.add');

    }

    
    public function multi(){
        return view('web.multi');

    }

    public function sub(){ 
        return view('web.sub');

    }

    public function divi(){ 
        return view('web.sub');

    }



}
