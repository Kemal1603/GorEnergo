<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{
    public function index()
    {

        $services = Services::all();

        return view('services/services')->with('services', $services);
    }

    public function create()
    {
        return view('services/create');

    }


    public function store()
    {

        request()->validate(['title' => ['required', 'min:3', 'max:50'], 'description' => ['required', 'min:3', 'max:2000'], 'image' => '']);


        $data = request()->all();

        $data += ['slug' => str_slug($data['title'])];


        if (!empty(request()->file('image_file'))) {
            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/services_img_sm/' . $filename);
            Image::make($image)->fit(250, 250)->save($path);

            $path = storage_path('app/public/services_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);

            $data += ['img' => basename($filename)];

        }

        Services::create($data);



        return redirect('/services/services');
    }


    public function edit(Services $service_id)
    {


        return view('/services/edit')->with('edit_service', $service_id);
    }


    public function update(Services $edited_service)
    {
        $data = request()->all();


        if (!empty(request()->file('image_file'))) {

            Storage::delete('/public/services_img/' . $edited_service->image);

            $image = Input::file('image_file');

            $filename = str_random(32) . '.' . $image->getClientOriginalExtension();

            $path = storage_path('app/public/services_img_sm/' . $filename);
            Image::make($image)->fit(250, 250)->save($path);

            $path = storage_path('app/public/services_img/' . $filename);
            Image::make($image)->fit(1000, 600)->save($path);

            $data += ['img' => basename($filename)];

        }

        $edited_service->update($data);

        return redirect('/services/services');
    }


    public function delete(Services $service_id)
    {


        Storage::delete('/public/services_img/' . $service_id->img);

        Storage::delete('/public/services_img_sm/' . $service_id->img);

        $service_id->delete();


        return redirect('/services/services');
    }


    public function show()
    {

        $services = Services::all();


        return view('/services/service')->with('services', $services);
    }


    public function about($slug, Services $service)
    {


        $services = Services::where('slug', $slug)->first();


        return view('/services/about_service')->with('services', $service)->with('services', $services);
    }
}
