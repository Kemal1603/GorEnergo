<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Products;

class PagesController extends Controller
{
    public function index()
    {

        $services = Services::all();

        $products = Products::all();


        return view('index')->with('services', $services)->with('products',$products );
    }
}
