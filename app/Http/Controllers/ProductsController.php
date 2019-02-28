<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class productsController extends Controller {
	public function create() {
		return view('products/create');

	}

	public function store() {
		request()->validate(['title' => ['required', 'min:3', 'max:50'],

				'description' => ['required', 'min:3', 'max:2000'], 'image' => '']);

		$data = request()->all();

		$data += ['slug' => str_slug($data['title'])];

		if (!empty(request()->file('image_file'))) {
			$image = Input::file('image_file');

			$filename = str_random(32).'.'.$image->getClientOriginalExtension();

			$path = storage_path('app/public/products_img_sm/'.$filename);

			Image::make($image)->fit(250, 250)->save($path);

			$path = storage_path('app/public/products_img/'.$filename);

			Image::make($image)->fit(1000, 600)->save($path);

			$data += ['img' => basename($filename)];
		}

		products::create($data);

		return redirect('/admin/products');
	}

	public function edit(products $product) {

		return view('/products/edit')->with('product', $product);
	}

	public function update(products $product) {

		$data = request()->all();

		$data += ['slug' => str_slug($data['title'])];

		if (!empty(request()->file('image_file'))) {
			Storage::delete('/public/products_img/'.$product->image);

			$image = Input::file('image_file');

			$filename = str_random(32).'.'.$image->getClientOriginalExtension();

			$path = storage_path('app/public/products_img_sm/'.$filename);

			Image::make($image)->fit(250, 250)->save($path);

			$path = storage_path('app/public/products_img/'.$filename);

			Image::make($image)->fit(1000, 600)->save($path);

			$data += ['img' => basename($filename)];
		}

		$product->update($data);

		return redirect('/admin/products');
	}

	public function delete(products $product) {
		Storage::delete('/public/products_img/'.$product->img);

		Storage::delete('/public/products_img_sm/'.$product->img);

		$product->delete();

		return redirect('/admin/products');
	}

	public function index() {
		$products = products::all();

		return view('/products/index')->with('products', $products);

	}

	public function show($slug) {
		$product = products::where('slug', $slug)->first();

		return view('/products/show')->with('products', $product);
	}
}