@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form method="post" action="/services/{{$edit_service->id}}" enctype="multipart/form-data">


                @csrf

                <img src="/storage/services_img/{{ $edit_service->img }}" alt="Card image cap" width="252" class="m-2"  ><br>
                <div class="custom-file m-2">
                    <input type="file" class="custom-file-input" id="customFile" name="image_file">
                    <label class="custom-file-label" for="customFile">ВЫБЕРИТЕ ФАЙЛ </label>
                </div>

                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $edit_service->title }}">
                </div>
                {{--Отображаем поле title из переменной $service_that_we_edit, в которую мы передавали данные из $service_id и
                 возвращали в ServiceController в строке  with('service_that_we_edit', $service_id);--}}

                <div class="form-group">

                    <label for="body">Текст</label>
                    <textarea type="text" id="body" name="body" class="form-control tinymce"
                              rows="10">{{ $edit_service->description }}</textarea>



                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary m-2" >Редактировать</button>
                </div>
            </form>

        </div>
    </div>

@endsection
