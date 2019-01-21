@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/products/create" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Добавить Товар</a>

        <div class="row">
            @foreach($products as $product)

                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div data-aos="flip-up">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="/storage/products_img_sm/{{ $product->img }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->title}}</h5>

                                <div class="card-text">{!!$product->description!!}</div>

                                <a href="/products/{{$product->id}}/edit" class="btn btn-primary">Редактировать Товар</a>
                                <br>
                                <br>
                                <a href="/products/{{$product->id}}/delete" class="btn btn-primary">Удалить Товар</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>


        </div>
    </div>

@endsection
