<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class AuthController extends Controller
{
    //
   
    
    function LoginForm($token){

     
    //    $url=env('BASEURL').'auth/login';
    //    $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'required',
    // ]);

        // $response = Http::post($url, [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        // if ($response->failed()) {
        //     return response()->json(['status'=>201,'message' => 'Invalid credentials']);
        // }

        $getProfile=env('BASEURL').'dealer/profile';
       

        $profile = Http::withToken($token)->get($getProfile);
        
        $user = $profile->json();
     
        session()->put('token',$token);
        session()->put('user',$user);
   
        if($user['subscription']['type'] == null  && $user['role'] !='admin'){
            return redirect('/price');
        }else{
            return redirect('/admin/dashboard');
        }
       
        
       // return $response->json();
    }

    function logOut(){
        session()->flush();
        return redirect('/');
    }

    function signupForm(Request $request){
        $url=env('BASEURL').'auth/register';

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $response = Http::post($url, [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if ($response->failed()) {
            return response()->json(['status'=>201,'message' => 'Some thing went to worng']);
        }

        $result = $response->json();
       
       
        
        return response()->json([
            'status'=>200,
            'success' => true,
            'message' => 'Sign up submitted successfully!',
            'data' => $result
        ]);
    }
}
