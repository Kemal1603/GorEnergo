@extends('layouts.app')

@section('content')
    <div          class="container">

        <div      class="row">

        <form     method="post"          action="/product/{{ $product->id }}"                enctype="multipart/form-data">

        @csrf

        <img      src="/storage/products_img/{{ $product->img }}" alt="Card image cap"       width="252" class="m-2"><br>

        <div      class="custom-file m-2">

        <input    type="file"            class="custom-file-input"           id="customFile" name="image_file">

        <label    class="custom-file-labefor="customFile">ВЫБЕРИТЕ ФАЙЛ </label>

        </div>

        <div      class="form-group">

        <label    for="title">Заголовок</label>

        <input    type="text" class="form-control"  name="title"   id="title"                value="{{ $product->title }}">

        </div>
                
        <div      class="form-group">

        <label    for="body">Текст</label>

        <textarea type="text" id="description" name="description" class="form-control tinymce"rows="10">{{ $product->description }}</textarea>

        </div>

        <div      class="form-group">

        <button   type="submit"          class="btn btn-primary m-2">Редактировать</button>

        </div>

        </form>

        </div>
    </div>

@endsection