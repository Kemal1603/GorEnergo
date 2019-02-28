<?php

namespace App\Http\Controllers;

use   App\Products;
use   App\Services;
use   Illuminate  \Http   \Request;
use   Illuminate  \Support\Facades \Input;
use   Intervention\Image  \Facades \Image;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }



     public function index()

    {
     return view('admin/admin');
    }

  


    public function services()

    {

     $services = Services::all();
        
     return view('services/admin')->with('services', $services);
    }



    public function products()

    {

     $products = Products::all();
        
     return view('products/admin')->with('products', $products);
    }


}



