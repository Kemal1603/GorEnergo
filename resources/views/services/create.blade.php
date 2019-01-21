@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="/services" method="post" enctype="multipart/form-data">


                @csrf


                <div class="form-group">
                    <h3>Страница добавления Услуги</h3>
                    <label for="title">Заголовок</label>
                    <input type="text" class="form-control  {{$errors->has('title')?'alert-danger':''}}" name="title" id="title"
                           {{--required--}} value="{{old('title')}}">
                    @if ($errors->has('title'))
                        <strong>{{ $errors->first('title') }}</strong>
                    @endif

                </div>


                <div class="form-group">
                    <label for="body">Описание Услуги (Этот блок удобнее всего использовать для добавления ОПИСАНИЯ)</label>
                    <textarea type="text" class="form-control tinymce " name="description" id="description" spellcheck rows="10" ></textarea>
                </div>
                @if ($errors->has('description'))

                    <strong>{{ $errors->first('description') }}</strong>

                @endif

                <h5> <b>Добавление Изображения (Этот блок удобнее всего использовать для добавления Изображения)</b></h5>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image_file">
                    <label class="custom-file-label" for="customFile">Выбрать Файл Изображения</label>
                </div>
                <br>





                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Добавить Услугу</button>
                </div>




            </form>
        </div>
    </div>

@endsection
