<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showLoginForm()
    {
        $validaUsuarios = User::get();

        if( count($validaUsuarios) >= 10){
            $data = (object)[];
            $data->title = 'Máxima cantidad de usuarios alcanzada';
            $data->comment = 'Se ha alcanzado la máxima cantidad permitida de usuarios registrados';
            return view('max-items', compact('data'));
        }

        return view('auth.login');
    }
}
