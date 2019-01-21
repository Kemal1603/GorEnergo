@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form method="post" action="/products/{{$edit_product->id}}" enctype="multipart/form-data">


                @csrf

                <img src="/storage/products_img/{{ $edit_product->img }}" alt="Card image cap" width="252" class="m-2"  ><br>
                <div class="custom-file m-2">
                    <input type="file" class="custom-file-input" id="customFile" name="image_file">
                    <label class="custom-file-label" for="customFile">Выбрать Файл Изображения</label>
                </div>

                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $edit_product->title }}">
                </div>
                {{--Отображаем поле title из переменной $service_that_we_edit, в которую мы передавали данные из $service_id и
                 возвращали в ServiceController в строке  with('service_that_we_edit', $service_id);--}}

                <div class="form-group">

                    <label for="body">Описание</label>
                    <textarea type="text" id="body" name="body" class="form-control tinymce"
                              rows="10">{{ $edit_product->description }}</textarea>

                    {{--Отображаем поле body из переменной $service_that_we_edit, в которую мы передавали данные из $service_id и
                     возвращали в ServiceController в строке  with('service_that_we_edit', $service_id);--}}

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary m-2" >Редактировать</button>
                </div>
            </form>

        </div>
    </div>

@endsection
