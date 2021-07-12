<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserName(){
        return 'Yaarop';
    }
    public function getindex(){
        return view('welcome');
    }
}
