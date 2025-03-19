<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 
class HomeController extends Controller
{
    //
    function index(){

        try{
        $url=env('BASEURL').'truck/type';
        $trucksCategoty = Http::get($url);
        $trucksCategoty = $trucksCategoty->json();

        $url=env('BASEURL').'dealer/trucks';
        $truck = Http::get($url);
        $trucksList = $truck->json();



       
        return view('Index',['category' => $trucksCategoty,'trucklist' => $trucksList ]);
        }catch(\Exception $e){
            return back();
        }
    }
    function sellMyCar(Request $request){

       
   
   
        // $string ='';
        // if(isset($request->cat_id)){
        // $string .= '&category='.$request->cat_id;
        // }
        // if(isset($request->condition)){
        //     $string .= '&condition='.$request->condition;
        // }
        // if(isset($request->make)){
        //     $string .= '&make='.$request->make;
        // }

        // if(isset($request->model)){
        //     $string .= '&model='.$request->model;
        // }

        // if(isset($request->transmission)){
        //     $string .= '&transmission='.$request->transmission;
        // }
        // if(isset($request->fuelTypePrimary)){
        //     $string .= '&fuelTypePrimary='.$request->fuelTypePrimary;
        // }
        

        // if(isset($request->engineManufacturer)){
        //     $string .= '&engineManufacturer='.$request->engineManufacturer;
        // }
        
        

        

        $caturl=env('BASEURL').'truck/type';
        $trucksCategoty = Http::get($caturl);
        $trucksCategoty = $trucksCategoty->json();

        $filterurl=env('BASEURL').'filter';
        $trucksfilter = Http::get($filterurl);
        $trucksfilter = $trucksfilter->json();

      
        // $trucks = Http::withToken(session()->get('token'))->get($url);
        // $truckList = $trucks->json();

        $queryParams = request()->query();
        $url=env('BASEURL').'dealer/trucks';
        $trucks = Http::withToken(session()->get('token'))->withQueryParameters($queryParams)->get( $url);
        
        $truckList = $trucks->json();
      
        
        return view('sellMyCar',['list' => $truckList,'trucksCategoty' => $trucksCategoty,'trucksfilter' => $trucksfilter]);
    }

    function truckDetatils($id){
        $url=env('BASEURL').'dealer/trucks/'.$id;
        $trucks = Http::get($url);
        $truckDetails = $trucks->json();
        $custom = $truckDetails;
        unset($custom['images']);
        unset($custom['category']);
        unset($custom['dealer']);
        unset($custom['_id']);
        unset($custom['createdAt']);
        unset($custom['__v']);
        $getKey = array_keys($custom);
       
        $url=env('BASEURL').'dealer/trucks';
        $truck = Http::get($url);
        $trucksList = $truck->json();
        
        return view('truckDetails',['custom' => $custom,'key' =>$getKey ,'detail' => $truckDetails,'_id' => $id,'trucksList' => $trucksList]);

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
