<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
   function login(Request $request){
       $email = $request->input('email');
       $password = $request->input('password');

       //return $email . " " . $password;
       if (Auth::attempt(['email' => $email, 'password' => $password])) {
            //Authentication passed...
            return redirect()->intended('dashboard');
            }else{
            return 'lengkapi username, email, atau password';
        }
    }

   function register(Request $request){

    //dd($request);
    //$name = $request->input('name');
    //$email = $request->input('email');
    //$password = $request->input('password');

    //return $name . " " . $email . " " . $password;
    
//}
       

    $user      = new User();
    $user->email = $request->input('email');
    $user->name =  $request->input('name');
    $user->password = bcrypt($request->input('password'));

    $email= $request->email;
    $name= $request->name;
    $password= $request->password;

    if($email == null || $name == null || $password == null){
        return "<script> alert('pastikan nama email dan password tidak kosong')</script>";
    }

    $dataemail= User::where('email',$email)->first();
    if($dataemail != null){
        return "<script> alert('email sudah ada')</script>";
        //'email sudah ada';
    }

    $datanama = User::where('name',$name)->first();
    if($datanama != null){
        return "<script> alert('nama sudah ada')</script>";
        //'email sudah ada';
    }

    // $datapassword = User::find($user);

    // $hash=app('hash');
    // if($hash->check('passwordToCheck',$user->password)){
    //     return 'sukses';
    // }else{
    //     return 'pasword tidak sama';
    // }

    $user->save();

    $id = $user->id;
    Auth::loginUsingId($id);

    return redirect('dashboard');
    }
}
