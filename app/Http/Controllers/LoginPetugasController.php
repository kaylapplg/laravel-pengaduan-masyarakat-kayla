<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPetugasController extends Controller
{
    function index(){

        return view('loginpetugas');
    }
    public function login_petugas(Request $request){

        $data = $request->only("username", "password");
        if(Auth::guard("petugas")->attempt($data)){
            return redirect("/petugas/login")->with("eror", "username atau password salah");
        }else{
            return redirect("/petugas/login");
        }
    }

   function logout(){
        Auth::guard("petugas")->logout();
        return redirect('homepetugas');
    }
    public function home_petugas(){
        return view('homepetugas');
    }
}
