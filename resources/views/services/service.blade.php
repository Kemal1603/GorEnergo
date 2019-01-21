<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Услуги</title>


    <!-- Meta -->
    <!-- Page Description Here -->
    <meta name="title" content="Горэнерго" />
    <meta name="keywords" content="Горэнерго"/>
    <meta name="description" content="Ремонт и техническое обслуживание электрооборудования"/>
    <!-- Disable screen scaling-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">


    <!-- Fonts-->
    <link href="http://allfont.ru/allfont.css?fonts=sansation-light" rel="stylesheet" type="text/css" />

    <!-- Подключаем значки -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">


</head>
<body>
<header id="main-block-product">

    <!--Верхнее меню-->
    <div class="navigation">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-3">
                    <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>

                <div class="col-lg-4">
                    <nav>
                        <ul>
                            <li><a href="/service" target="_blank">Услуги</a></li>
                            <li><a href="/product" target="_blank">Товары</a></li>
                            <li><a href="about.html" target="_blank">О компании</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 text-center call">
                    <!--<button type="button" class="btn btn-primary">-->
                    <!--<a href="#" target="_blank">ОБРАТНЫЙ ЗВОНОК</a></button>-->
                    <button type="button" class="btn btn-primary submit1 btn-pink" data-toggle="modal"
                            data-target="#exampleModalCenter">ОБРАТНЫЙ ЗВОНОК</button>
                </div>

                <div class="col-lg-2 text-right contacts">
                    <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                    <a href="mailto:belgorenergo@mail.ru" target="_blank"> belgorenergo@mail.ru</a>
                </div>
            </div>
        </div>
    </div>
    <!--Верхнее меню - end-->

</header>

<!-- 1 блок Наша продукция-->
<section id="block-product">
    <div class="container-fluid">

        <div class="name-products text-center">
            <h1>
                Наши услуги
            </h1>
        </div>

        <div class="row no-gutters">

            @foreach($services as $service )

            <div class="col-lg-4 product text-center">
                <h5>{{$service->title}}</h5>
                <div class="image-product">
                    <a href="#"><img src="/storage/services_img_sm/{{$service->img}}" alt="" class="img-fluid"></a>
                </div>
                <div class="space-top">
                    <button type="button" class="btn btn-primary">
                        <a href="/services/{{ $service->slug}}/{{$service->id}}/about" target="_blank">Подробнее</a></button>
                </div>
            </div>

            @endforeach



        </div>
    </div>
</section>



<!-- 2 блок обратная связь-->

<section id="block-questions">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-10 text-questions text-center m-auto">
                <div class="name-questions  text-center">
                    <p>НЕ НАШЛИ, ЧТО ИСКАЛИ? <br>
                        ГОТОВЫ ОТВЕТИТЬ НА ЛЮБОЙ ВАШ ВОПРОС.</p>
                </div>

                <div class="main_block-questions  text-center">
                    <p>Оставьте Ваш номер телефона и наши специалисты ответят на них!</p>
                </div>

                <div class="form-questions  text-center">
                    <form class="form-container"
                          method="post" action="">

                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-lg-6 text-right space-right">
                                    <input type="tel" id="phone" name="phone" class="form-control-line form-control-white"
                                           pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                           required placeholder="+375  (__ __) __ __ __ - __ __ - __ __">
                                </div>
                                <div class="col-lg-6 text-left space-left">
                                    <button type="submit" class="btn btn-primary">Отправить</button>
                                </div>
                            </div>

                        </div>


                    </form>
                </div>

            </div>
        </div>

        <div class="figure-inside">
            <img src="/img/icons/figure2.png" alt="Горэнерго" class="img-fluid">
        </div>

        <div class="figure-outside1">
            <img src="/img/icons/figure1.png" alt="Горэнерго" class="img-fluid">
        </div>
        <div class="figure-outside2">
            <img src="/img/icons/figure3.png" alt="Горэнерго" class="img-fluid">
        </div>
    </div>

</section>


<!--Меню-footer-->
<footer id="block-footer">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-4">
                <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
            </div>

            <div class="col-lg-4">
                <nav>
                    <ul>
                        <li><a href="/service" target="_blank">Услуги</a></li>
                        <li><a href="/product" target="_blank">Товары</a></li>
                        <li><a href="about.html" target="_blank">О компании</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4 text-right contacts">
                <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                <a href="mailto:belgorenergo@mail.ru" target="_blank"> belgorenergo@mail.ru</a>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-lg-4 m-auto">
                    <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>
            </div>
            <div class="modal-body">
                <form class="send_email_form" method="post" action="">

                    <div class="form-input">

                        <div class="form-group">
                            <input name="name"  class="form-control-line" type="text" placeholder="имя">
                        </div>

                        <div class="form-group">
                            <input type="tel" id="phone1" name="phone" class="form-control-line"
                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="+375-__-___-__-__">
                        </div>

                        <div class="form-group">
                            <textarea  name="message" type="text" placeholder="Ваше сообщение для нас" class="message"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-round form-success-gone"
                        data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-white btn-round form-success-gone"
                        name="submit_email">Отправить</button>
            </div>
        </div>
    </div>
</div>



<!-- Javascript for modal -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>


