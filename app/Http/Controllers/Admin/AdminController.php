<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class AdminController extends Controller
{
    //
    function index(){

       
        $url=env('BASEURL').'dealer/trucks';
        $trucks = Http::withToken(session()->get('token'))->get($url);
        $truckList = $trucks->json();

        $quote =env('BASEURL').'dealer/quote-requests';
        $quote = Http::withToken(session()->get('token'))->get($quote);
        $quoteList = $quote->json();

        if(session()->get('user')['role'] == 'admin'){

            $cust =env('BASEURL').'dealer';
            $custlist = Http::withToken(session()->get('token'))->get($cust);
            $custList = $custlist->json();

        }else{

            $cust =env('BASEURL').'dealer/quote-requests';
            $cust = Http::withToken(session()->get('token'))->get($cust);
            $custList = $cust->json();

        }

        // $quote =env('BASEURL').'dealer/quote-requests';
        // $quote = Http::withToken(session()->get('token'))->get($quote);
        // $quoteList = $quote->json();
        return view('admin.dashboard',['truckList' => $truckList,'quoteList' => $quoteList,'custList' => $custList]);
    }

    function profile(){
        return view('admin.profile');
    }
    function list(){
        return view('admin.truckCategory.list');
    }
    function typelistcreate(){
        return view('admin.truckCategory.create');
    }
    

    function price(){
        $url=env('BASEURL').'truck/pricing-plans';
        $price = Http::get($url);
        $price = $price->json();
        return view('admin.Price',['price' => $price]);
    }
    
    
    function truckList(){
        $url=env('BASEURL').'truck/type';
        $trucksCategoty = Http::get($url);
        $trucksCategoty = $trucksCategoty->json();
        return view('admin.truck',['category' => $trucksCategoty]);
    }

    function createTruck(){
        $url=env('BASEURL').'truck/type';
        $trucksCategoty = Http::get($url);
        $trucksCategoty = $trucksCategoty->json();
        return view('admin.addTruck',['category' => $trucksCategoty]);
    }

    function quoteList(){
        return view('admin.quote');
    }

    function priceList(){
        return view('admin.price.index');
    }
    function priceCreate(){
        return view('admin.price.create');
    }
    
    function dealerList(){

        return view('admin.dealer.index');
    }
    function createDealer(){

        return view('admin.dealer.create');
    }

    function customerList(){
        return view('admin.customer.index');
    }
    function customerCreate(){
        $url=env('BASEURL').'dealer/trucks';
        $trucks = Http::withToken(session()->get('token'))->get($url);
        
        $truckList = $trucks->json();
        return view('admin.customer.create',['truck' => $truckList]);
    }
    
    function setting(){

        $cust =env('BASEURL').'settings';
        $cust = Http::withToken(session()->get('token'))->get($cust);
        $setting = $cust->json();
        return view('admin.setting',['setting' =>  $setting]);
    }
    function storeSetting(){

        return view('admin.adminSetting');
    }
    
   
}
