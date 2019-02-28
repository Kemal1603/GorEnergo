<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate  \Support\Facades\Storage;
use Illuminate  \Support\Facades\Input;
use Intervention\Image\Facades  \Image;

    class ServicesController extends Controller

{



    public function create()

    {

    return view('services/create');

    }
            




     public function store()

    {

    request()->validate(['title' => ['required', 'min:3', 'max:50'], 

    'description' =>    ['required', 'min:3', 'max:2000'], 'image' => '']);
      
    $data  = request()->all();

    $data  += ['slug' => str_slug  ($data['title'])];

       if (!empty(request()->file  ('image_file'))) 

    {

    $image    = Input::file        ('image_file');

    $filename = str_random(32) . '.'                              . $image  ->getClientOriginalExtension();

    $path     = storage_path       ('app/public/services_img_sm/' . $filename);

    Image::make($image)->fit       (250, 250)                               ->save($path);

    $path     = storage_path       ('app/public/services_img/'    . $filename);

    Image::make($image)->fit       (1000, 600)                              ->save($path);

    $data    += ['img' => basename ($filename)];

    }

    Services::create               ($data);

    return redirect                ('/admin/services');

    }






      public function edit         (Services $service)

    {

      return view                  ('/services/edit')                       ->with('service', $service);

    }




      public function update       (Services $service)

    {

      $data = request()->all();

      $data  += ['slug' => str_slug($data['title'])];

      if (!empty(request()->file   ('image_file')))

    {

      Storage::delete              ('/public/services_img/'       . $service->image);

      $image = Input::file         ('image_file');

      $filename = str_random(32) . '.' . $image                             ->getClientOriginalExtension();

      $path = storage_path         ('app/public/services_img_sm/' . $filename);

      Image::make($image)->fit     (250, 250)                               ->save($path);

      $path = storage_path         ('app/public/services_img/'    . $filename);

      Image::make($image)->fit     (1000, 600)                              ->save($path);

      $data += ['img' => basename  ($filename)];

    }

      $service->update             ($data);

      return redirect              ('/admin/services');

    }




      public function delete       (Services $service)

    {

      Storage::delete              ('/public/services_img/'       . $service->img);

      Storage::delete              ('/public/services_img_sm/'    . $service->img);

      $service->delete();

      return redirect              ('/admin/services');

    }





      public function index()

    {

      $services = Services::all();

      return view                  ('/services/index')                      ->with('services', $services);

    }




      public function show($slug)

    {

      $service = Services::where   ('slug', $slug)                          ->first();

      return view                  ('/services/show')                       ->with('services', $service);

    }

}