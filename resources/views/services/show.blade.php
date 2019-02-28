<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Услуга | Горэнерго</title>

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
    <link rel="stylesheet" href="/css/app.css?v=1">


</head>
<body>
<header id="main-block-product">

    <div class="block_for_scroll">
        <div class="container-fluid">
            <div class="navigation-for-small d-block d-lg-none">
                <div class="row no-gutters">
                    <div class="col-xs-4 text-left">
                        <a href="index.html"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
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
                    <a href="index.html"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>

                <div class="col-lg-5">
                    <nav>
                        <ul>
                            <li><a href="/service" target="_blank">Услуги</a></li>
                            <li><a href="/product" target="_blank">Продукция</a></li>
                            <li><a href="about.html" target="_blank">О нас</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-3 text-center call effect-button-white">
                    <button type="button" class="btn" data-toggle="modal"
                            data-target="#exampleModalCenter">ОБРАТНЫЙ ЗВОНОК</button>
                </div>

                <div class="col-lg-2 text-right contacts">
                    <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                    <a href="mailto:info@gorenergo.by" target="_blank">info@gorenergo.by</a>
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
            <div class="col-lg-3 product-picture m-auto text-center">
                <div class="main-container">
                    <img src="/storage/services_img_sm/{{$services->img}}" alt="{{$services->title}}" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-8 text-about-product">

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
</section>




<!-- Блок обратная связь-->
<section id="block-questions-form">
    <div class="main-block-questions">
        <h2>ОСТАЛИСЬ ВОПРОСЫ?</h2>

        <form class="form-container" method="post" action="/send_mail.php">
            <div class="row no-gutters">
                <div class="col-md-5 col-12">

                    <div class="form-input">
                        <div class="form-group">
                            <label for="name">Ваше имя *</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>

                        <div class="form-group">
                            <label for="form_phone">Ваш номер телефона *</label>
                            <input type="number" class="form-control" name="phone" id="form_phone" required>
                        </div>

                        <div class="form-group">
                            <label for="mail">Ваш e-mail *</label>
                            <input type="text" class="form-control" name="mail" id="mail" required>
                        </div>

                    </div>

                </div>
                <div class="col-md-1 d-none d-md-block"></div>
                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label for="message">Сообщение *</label>
                        <textarea id="message" name="message" class="form-control-line form-control-white message" required></textarea>
                    </div>
                </div>
            </div>

            <div class="space-top effect-button-purple text-left">
                <button type="submit" class="btn" >Спросить</button>
            </div>
        </form>
    </div>
</section>



<!--Меню-footer-->
<footer id="block-footer">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-3 text-center text-lg-left">
                <a href="index.html"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
            </div>

            <div class="col-lg-6 text-center">
                <nav>
                    <ul>
                        <li><a href="/service" target="_blank">Услуги</a></li>
                        <li><a href="/product" target="_blank">Продукция</a></li>
                        <li><a href="about.html" target="_blank">О нас</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-3 text-lg-right text-center contacts">
                <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                <a href="mailto:info@gorenergo.by" target="_blank">info@gorenergo.by</a>
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
                <div class="col-lg-10 m-auto">
                    <a href="index.html"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>
                <button type="button" class="close m-auto" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="close-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="send_email_form" method="post" action="/send_mail.php">

                    <div class="form-input">

                        <div class="form-group">
                            <input name="name"  class="form-control-line" type="text" placeholder="имя">
                        </div>

                        <div class="form-group">
                            <input type="number" id="phone" name="phone" class="form-control-line"
                                   required placeholder="+375-__-___-__-__">
                        </div>

                        <div class="form-group">
                            <input name="email" class="form-control-line" type="email"
                                   required placeholder="Ваш e-mail" data-validation-type="email"/>
                        </div>

                        <div class="form-group">
                            <textarea  name="message" type="text" placeholder="Ваше сообщение для нас" class="message"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <!--<button type="button" class="btn" data-dismiss="modal">Закрыть</button>-->
                <button type="submit" class="btn" >Отправить</button>
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
                <div class="col-lg-10 m-auto">
                    <a href="index.html"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>
            </div>
            <div class="modal-body">
                <form class="send_email_form" method="post" action="/send_mail.php">

                    <div class="form-input">

                        <div class="form-group">
                            <input name="name"  class="form-control-line" type="text" placeholder="Имя" required >
                        </div>

                        <div class="form-group">
                            <input type="number" id="phone1" name="phone" class="form-control-line"
                                   required placeholder="+375-__-___-__-__">
                        </div>

                        <div class="form-group">
                            <input name="email" class="form-control-line" type="email"
                                   required placeholder="Ваш e-mail" data-validation-type="email"/>
                        </div>

                        <div class="form-group">
                            <textarea  name="message" type="text" placeholder="Ваше сообщение для нас" class="message"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer m-auto">
                <button type="button" class="btn" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn" >Отправить</button>
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
                <div class="col-lg-10 m-auto">
                    <a href="index.html"><img src="img/logo.png" alt="Горэнерго" class="img-fluid"></a>
                </div>

            </div>
            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-12 text-center">
                        <nav>
                            <ul>
                                <li><a href="/service" target="_blank">Услуги</a></li>
                                <li><a href="/product" target="_blank">Продукция</a></li>
                                <li><a href="about.html" target="_blank">О нас</a></li>
                            </ul>
                        </nav>

                        <div class="col-lg-12 text-center contacts">
                            <a href="tel:+375172355296" target="_blank">+375 (17) 235-52-96</a> <br>
                            <a href="mailto:info@gorenergo.by" target="_blank">info@gorenergo.by</a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer m-auto">
                    <button type="button" class="btn" data-dismiss="modal">Закрыть</button>
                    <!--<button type="button" class="btn" >Отправить</button>-->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Javascript for modal -->
<script src="/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="/js/popper.min.js"            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"         integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



</body>
</html>


