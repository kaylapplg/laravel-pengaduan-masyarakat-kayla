<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Iluminate\Support\Facades\Session;
{
    function index(){
        return view("home");
    }
    function login(Request $request){
        $dataLogin = $request->only("username", "password");
        if(Auth::attemp($dataLogin)){
            echo "berhasil

        }
    }
}