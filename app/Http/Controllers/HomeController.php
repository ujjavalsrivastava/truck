<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class HomeController extends Controller
{
    //
    function index(){

        
        $url=env('BASEURL').'truck/type';
        $trucksCategoty = Http::get($url);
        $trucksCategoty = $trucksCategoty->json();

        $url=env('BASEURL').'dealer/trucks';
        $truck = Http::get($url);
        $trucksList = $truck->json();



       
        return view('index',['category' => $trucksCategoty,'trucklist' => $trucksList ]);
    }
    function sellMyCar(){
        $url=env('BASEURL').'dealer/trucks';
        $trucks = Http::withToken(session()->get('token'))->get($url);
        $truckList = $trucks->json();
        
        return view('sellMyCar',['list' => $truckList]);
    }

    function truckDetatils($id){
        $url=env('BASEURL').'dealer/trucks/'.$id;
        $trucks = Http::get($url);
        $truckDetails = $trucks->json();
        
        return view('truckDetails',['detail' => $truckDetails,'_id' => $id]);

    }
    function categoryWiseList($id){
        
        $url=env('BASEURL').'dealer/trucks?category='.$id;
        $trucks = Http::get($url);
        $truckDetails = $trucks->json();
        return view('CategoryWiseList',['catList' =>$truckDetails ]);
    }

    function PostsellMyCar(Request $request){
        try{
        $url=env('BASEURL').'dealer/trucks';
        
        $request->validate([
            'name' => 'required',
            'vin' => 'required',
            'year' => 'required',
            'make' => 'required',
            'model' => 'required',
            'truckType' => 'required',
            'condition' => 'required',
            'price' => 'required',
            'images' => 'required',  // Ensure 'images' is an array
           // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'  
            
        ]);
        dd($request->all());
        $response = Http::withToken(session()->get('token'))->post($url, [
            'name' => $request->name,
            'vin' => $request->vin,
            'make' => $request->make,
            'model' => $request->model,
            'truckType' => $request->truckType,
            'condition' => $request->condition,
            'price' => $request->price,
            'images' => $request->file('images'),
            'year' => $request->year,

        ]);
        // if ($response->failed()) {
        //     return response()->json(['status'=>201,'message' => 'Some thing went to worng']);
        // }

        $result = $response->json();
        dd($result);
        return response()->json([
            'status'=>200,
            'success' => true,
            'message' => 'Sign up submitted successfully!',
            'data' => $result
        ]);
    }catch(\Exception $e){
        return response()->json([
            'status'=>200,
            'success' => true,
            'message' =>  $e->getMessage(),
           
        ]);
    }
    }
    
 
}
