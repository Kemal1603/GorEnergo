<?php

namespace App\Http\Controllers;

use App\Products;
use App\Services;

class PagesController extends Controller {
	public function index() {

		$services = Services::all();

		$products = Products::all();

		return view('index')->with('services', $services)->with('products', $products);
	}
}
