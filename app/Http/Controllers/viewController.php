<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class viewController extends Controller
{
    public function adminWelcome(){
        
        return view('auth.login');
    }
}
