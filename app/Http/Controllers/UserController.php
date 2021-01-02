<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserController extends Controller
{
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password)){
            return "User Name Or Password Is Not Valid!!";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req){
        //return $req->input();
        $user=new User;
        $user->name=$req->uname;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect("login");
    }
}
