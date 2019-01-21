@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/services/create" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Добавить Услугу</a>

        <div class="row">
            @foreach($services as $service)

                <div class="col-md-4">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div data-aos="flip-up">
                        <div class="card" style="width: 18rem;">

                            <div class="card-body">

                                <h5 class="card-title">{{$service->title}}</h5>

                                <img class="card-img-top" src="/storage/services_img_sm/{{ $service->img }}" alt="Card image cap">

                                <h5 class="card-description">{!!$service->description !!}</h5>


                                <a href="/services/{{$service->id}}/edit" class="btn btn-primary">Редактировать Услугу</a>
                                <br>
                                <br>
                                <a href="/services/{{$service->id}}/delete" class="btn btn-primary">Удалить Услугу</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>


        </div>
    </div>

@endsection
