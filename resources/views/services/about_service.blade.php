<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Услуги| Горэнерго</title>

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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

    <div class="block_for_scroll">
        <div class="container-fluid">
            <div class="navigation-for-small d-block d-lg-none">
                <div class="row no-gutters">
                    <div class="col-xs-4 text-left">
                        <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                    </div>
                    <div class="col-xs-4">
                    </div>
                    <div class="col-xs-4 text-right size-top ml-auto mr-0">
                        <button type="button" class="btn style-modal" data-toggle="modal"
                                data-target="#modalMenu"><i class="fa fa-bars" aria-hidden="true"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Верхнее меню-->
    <div class="navigation d-none d-lg-block">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-2 text-center text-lg-left">
                    <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>

                <div class="col-lg-5">
                    <nav>
                        <ul>
                            <li><a href="/service" target="_blank">Услуги</a></li>
                            <li><a href="/product" target="_blank">Товары</a></li>
                            <li><a href="about.html" target="_blank">О компании</a></li>

                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 text-center call effect-button-white">
                    <button type="button" class="btn" data-toggle="modal"
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

<!-- Отдельная продукция-->
<section id="block-individual-product">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-5 product-picture m-auto">
                <div class="main-container">
                    <img src="/storage/services_img_sm/{{$services->img}}" alt="{{$services->title}}" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-7 text-about-product">
                <div class="container-fluid">
                    <div class="main-container m-0 text-left">
                        <h1>
                            {{$services->title}}
                        </h1>


                        <p>Главными преимуществами {{$services->title}}  является:</p>

                        <div class="intormation-product">
                            <ul>
                                <li>
								<span>
                                <li>
                                    <span>{!!$services->description!!}</span>
                                </li>
                                </span>
                                </li>

                            </ul>
                        </div>

                        <div class="col-lg-3 text-center space-left-button effect-button-purple">
                            <button type="button" class="btn" data-toggle="modal"
                                    data-target="#exampleModalCenter2">Заказать</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Блок обратная связь-->

<section id="block-questions">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-12 text-questions text-center m-auto">
                <div class="name-questions  text-center">
                    <p>НЕ НАШЛИ, ЧТО ИСКАЛИ? <br>
                        ГОТОВЫ ОТВЕТИТЬ НА ЛЮБОЙ ВАШ ВОПРОС.</p>
                </div>

                <div class="main_block-questions  text-center">
                    <p>Оставьте Ваш номер телефона и наши специалисты ответят на них!</p>
                </div>

                <div class="form-questions  text-center">
                    <form class="form-container" method="post" action="">

                        <div class="form-group">
                            <div class="row no-gutters">
                                <div class="col-lg-2">

                                </div>
                                <div class="col-lg-5 text-center btn-phone">
                                    <input type="tel" id="phone_num" name="phone" class="form-control-line"
                                           pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                           required placeholder="+375-__-___-__-__">
                                </div>

                                <div class="col-lg-3 text-center effect-button-transparent">
                                    <button type="submit" class="btn">Отправить</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>

        <div class="figure-inside d-none d-lg-block">
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
            <div class="col-lg-4 text-center text-lg-left">
                <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
            </div>

            <div class="col-lg-4 text-center">
                <nav>
                    <ul>
                        <li><a href="/service" target="_blank">Услуги</a></li>
                        <li><a href="/product" target="_blank">Товары</a></li>
                        <li><a href="about.html" target="_blank">О компании</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4 text-lg-right text-center contacts">
                <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                <a href="mailto:belgorenergo@mail.ru" target="_blank"> belgorenergo@mail.ru</a>
            </div>
        </div>
    </div>
</footer>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-lg-4 m-auto">
                    <a href="/"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
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
                <button type="button" class="btn" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn" >Отправить</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-lg-4 m-auto">
                    <a href="/"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>
            </div>
            <div class="modal-body">
                <form class="send_email_form" method="post" action="">

                    <div class="form-input">

                        <div class="form-group">
                            <input name="name"  class="form-control-line" type="text" placeholder="имя">
                        </div>

                        <div class="form-group">
                            <input type="tel" id="phone2" name="phone" class="form-control-line"
                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="+375-__-___-__-__">
                        </div>

                        <div class="form-group">
                            <textarea  name="message" type="text" placeholder="Ваше сообщение для нас"
                                       class="message"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn" >Отправить</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal для вложенного меню -->

<div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="menuTitle"
     aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-lg-4 m-auto">
                    <a href="/"><img src="/img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>
            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-12 text-center">
                        <nav>
                            <ul>
                                <li><a href="/service" target="_blank">Услуги</a></li>
                                <li><a href="/product" target="_blank">Товары</a></li>
                                <li><a href="about.html" target="_blank">О компании</a></li>
                            </ul>
                        </nav>

                        <div class="col-lg-12 text-center contacts">
                            <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                            <a href="mailto:belgorenergo@mail.ru" target="_blank"> belgorenergo@mail.ru</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn" >Отправить</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Javascript for modal -->
<script src="/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="/js/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


</body>
</html>


