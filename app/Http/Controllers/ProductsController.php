<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ProductsController extends Controller
{
    public function index()
    {

        $products = Products::all();

        return view('products/products')->with('products', $products);
    }

    public function create()
    {
        return view('products/create');

    }


    public function store()
    {

        request()->validate(['title' => ['required', 'min:3', 'max:50'], 'description' => ['required', 'min:3', 'max:2000'], 'image' => '']);




        $data = request()->all();

        $data += ['slug' => str_slug($data['title'])];

        if (!empty(request()->file('image_file'))) {
            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/products_img_sm/' . $filename);
            Image::make($image)->fit(250, 250)->save($path);

            $path = storage_path('app/public/products_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);

            $data += ['img' => basename($filename)];

        }

        Products::create($data);


        return redirect('/products/products');
    }


    public function edit(Products $product_id)
    {


        return view('/products/edit')->with('edit_product', $product_id);
    }



    public function update(Products $edited_product)
    {
        $data = request()->all();


        if (!empty(request()->file('image_file'))) {

            Storage::delete('/public/products_img/' . $edited_product->image);

            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/products_img_sm/' . $filename);
            Image::make($image)->fit(250, 250)->save($path);

            $path = storage_path('app/public/products_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);

            $data += ['img' => basename($filename)];

        }

        $edited_product->update($data);

        return redirect('/products/products');
    }




    public function delete(Products $product_id)
    {


        Storage::delete('/public/products_img/' . $product_id->img);

        Storage::delete('/public/products_img_sm/' . $product_id->img);

        $product_id->delete();


        return redirect('/products/products');
    }


    public function show()
    {

        $products = Products::all();


        return view('/products/product')->with('products',$products );
    }



    public function about($slug, Products $product)
    {


        $products = Products::where('slug', $slug)->first();


        return view('/products/about_product')->with('product',$product )->with('product',$products );
    }

}
