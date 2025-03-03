<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class AdminController extends Controller
{
    //
    function index(){
     
        return view('admin.dashboard');
    }

    function profile(){
        return view('admin.profile');
    }
    function list(){
        return view('admin.truckCategory.list');
    }

    function price(){
        $url=env('BASEURL').'truck/pricing-plans';
        $price = Http::get($url);
        $price = $price->json();
        return view('admin.Price',['price' => $price]);
    }
    

   
 
}
