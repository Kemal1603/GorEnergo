@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/product/create" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Добавить Услугу</a>

        <div class="row">
            @foreach($products as $product)

                <div class="col-md-4 mt-5">

                    <div data-aos="flip-up">

                        <div class="card" style="width: 18rem;">

                            <div class="card-body">

                                <h5 class="card-title">{{$product->title}}</h5>

                                <img class="card-img-top" src="/storage/products_img_sm/{{ $product->img }}" alt="Card image cap">

                                <h5 class="card-description">{!!$product->description !!}</h5>


                                <a href="/product/{{$product->id}}/edit" class="btn btn-primary">Редактировать Услугу</a>

                                <br>

                                <br>
                                
                                <a href="/product/{{$product->id}}/delete" class="btn btn-primary">Удалить Услугу</a>

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

            <br>

        </div>

    </div>
@endsection