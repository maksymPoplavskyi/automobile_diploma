<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="ru" class="ie8"><![endif]-->
<!--[if IE 9 ]>
<html dir="ltr" lang="ru" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="ru">
<!--<![endif]-->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <base href="https://www.americaro.com.ua/"/>
    <meta name="description"
          content="Americaro - первый онлайн аукцион в Украине, который предлагает доставку автомобилей из США по самым низким тарифам и точным тарифам! "/>
    <meta name="keywords"
          content="купить авто в сша, купить авто в Америке, авто в сша, купить авто в сша бу, купить машину в сша, купить машину в Америке, купить автомобиль в америке, автомобильній аукцион, аукцион америка, копарт, copart Поиск авто IAAI аукцион,  БИТЫЕ АВТО АМЕРИКИ"/>
    <meta property="og:title"
          content="Автомобильный аукцион онлайн. Купить авто в США. Каталог авто из аукциона в Америке. Машины от 1000$"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.americaro.com.ua/index.php?route=common/home"/>
    <meta property="og:image" content="https://www.americaro.com.ua/image/catalog/logo-americaro.png"/>
    <meta property="og:site_name" content="Americaro авто из США под заказ"/>
    <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <link href="catalog/view/theme/default/stylesheet/bootstrap.min.css" rel="stylesheet" media="screen"/>
    <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
    <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="catalog/view/theme/default/stylesheet/reset.css" rel="stylesheet" media="screen"/>
    <link href="catalog/view/theme/default/stylesheet/style_americaro.css" rel="stylesheet">
    <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">
    <script src="catalog/view/javascript/common.js" type="text/javascript"></script>
    <link href="https://www.americaro.com.ua/image/catalog/favicon-americaro.png" rel="icon"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156257202-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-156257202-1');
    </script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="row header__content">
            <a href="{{route('main')}}" class="header__logo col-12 col-lg-3"><img
                    src="https://www.americaro.com.ua/image/catalog/logo-americaro.png" alt="logo"
                    class="image"></a>

            <nav class="header__navbar navbar navbar-expand-lg navbar-light bg-ligh col-4 col-lg-6   ">
                <button class="navbar-toggler" type="button" data-toggle=""
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse header__collapse collapse" id="navbarSupportedContent">
                    <ul class="header__menu  navbar-nav mr-auto">
                        <li class="header__item nav-item">
                            <a href="{{route('main')}}" class="header__link nav-link">Главная</a>
                        </li>
                        <li class="header__item nav-item ">
                            <a href="{{route('about-us')}}"
                               class="header__link nav-link">О нас</a>
                        </li>
                        <li class="header__item nav-item ">
                            <a href="{{route('services')}}"
                               class="header__link nav-link">Услуги</a>
                        </li>
                        <li class="header__item nav-item">
                            <a href="{{route('auction')}}"
                               class="header__link nav-link">Аукцион</a>
                        </li>

                        <li class="header__item nav-item">
                            <a href="{{route('in-stock')}}" class="header__link nav-link">В
                                наличии</a>
                        </li>
                        <li class="header__item nav-item">
                            <a href="{{route('blog')}}" class="header__link nav-link">Статьи</a>
                        </li>
                        <li class="header__item nav-item">
                            <a href="{{route('contacts')}}"
                               class="header__link nav-link">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <a href="tel:073-404-30-44" class="header__phone col-8 col-md-5  col-lg-3">
                <img src="catalog/view/theme/default/image/americaro/phone.png" alt="phone"
                     class="header__phone--image">
                <span class="header__phone--text" style="font-size: 28px">8-800-555-35-35</span>
            </a>
            <div class="social_top_icon">
                <a href="https://www.facebook.com/americaro.com.ua/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" width="96.124px" height="96.123px" viewBox="0 0 96.124 96.123"
                         style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve"
                         class="header__facebook svg replaced-svg">
<g>
    <path
        d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                </a>
                <a href="https://www.instagram.com/americaro.company/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" x="0px" y="0px" width="169.063px" height="169.063px"
                         viewBox="0 0 169.063 169.063"
                         style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve"
                         class="header__instagram svg replaced-svg">
<g>
    <path
        d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z"></path>
    <path
        d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"></path>
    <path
        d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                </a>
            </div>
        </div>
    </div>
</header>


@yield('content')

<section class="advantages">
    <div class="container">
        <div class="row justify-content-around">
            <div class="advantages__element row">
                <img src="catalog/view/theme/default/image/americaro/delivery-car.svg" alt="Delivery" class="advantages__image">
                <h3 class="advantages__name">Надежная доставка</h3>
            </div>
            <div class="advantages__element row">
                <img src="catalog/view/theme/default/image/americaro/choice-car.svg" alt="Choice Car" class="advantages__image">
                <h3 class="advantages__name">Большой выбор авто</h3>
            </div>
            <div class="advantages__element row">
                <img src="catalog/view/theme/default/image/americaro/guarantee.svg" alt="Guarantee" class="advantages__image">
                <h3 class="advantages__name">Гарантия качества</h3>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container" style="position:relative;">
        <div class="row align-items-end justify-content-between footer__inner">
            <div class="col-12 col-md-6 col-lg-2">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="{{route('auction')}}" class="footer__link">Аукцион Copart</a>
                    </li>
                    <li class="footer__item">
                        <a href="{{route('designations')}}" class="footer__link">Обозначения</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="{{route('about-us')}}" class="footer__link">О
                            компании</a>
                    </li>
                    <li class="footer__item">
                        <a href="{{route('contacts')}}" class="footer__link"> Контакты</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-8 col-lg-5">

            </div>
            <div class="col-12 col-md-4 col-lg-3 footer__guarantee">
                <span class="footer__text">Гарантия безопасности</span>
                <div class="row footer__card">
                    <a href="#" class="footer__visa"><img src="catalog/view/theme/default/image/americaro/visa.jpg"
                                                          alt="visa"></a>
                    <a href="#"><img src="catalog/view/theme/default/image/americaro/mastercard.jpg"
                                     alt="mastercard"></a>
                </div>
            </div>
        </div>

        <div class="footer__line col-12"></div>
        <div class="row justify-content-between col-12">
            <a href="/" class="footer__address">&copy; www.americaro.com.ua, 2017-2019</a>
            <div class="row">
                <a href="https://www.facebook.com/americaro.com.ua/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" width="96.124px" height="96.123px" viewBox="0 0 96.124 96.123"
                         style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve"
                         class="footer__facebook svg replaced-svg">
<g>
    <path
        d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                </a>
                <a href="https://www.instagram.com/americaro.company/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Layer_1" x="0px" y="0px" width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063"
                         style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve"
                         class="footer__instagram svg replaced-svg">
<g>
    <path
        d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752   c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407   c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752   c17.455,0,31.656,14.201,31.656,31.655V122.407z"></path>
    <path
        d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561   C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561   c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"></path>
    <path
        d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78   c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78   C135.661,29.421,132.821,28.251,129.921,28.251z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                </a>
            </div>
        </div>
    </div>
</footer>


<div class="point-messenger__wrapper">
    <div class="point-viber__wrapper">
        <a class="point-viber__icon"
           href="https://invite.viber.com/?g2=AQAINWOlHoyNIErHhJMwh3Pfb2%2FMQdR2czLF6YKff2vZsQhg9nFNwQaRxt8URx54"
           target="_blank"></a>
        <div class="point-viber__badge">1</div>
    </div>
    <div class="point-telegram__wrapper">
        <a class="point-telegram__icon" href="https://t.me/americarousa" target="_blank"></a>
        <div class="point-telegram__badge">2</div>
    </div>
</div>


<div class="modal" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            </div>


            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        <h2 class="title" id="content_price">Отправить заявку</h2>
                        <div class="form_services">
                            <form enctype="multipart/form-data" action="/index.php?route=information/contact"
                                  method="post">
                                <div class="input-group col-12">
                                    <input type="hidden" name="url" value="https://www.americaro.com.ua/">
                                    <input type="hidden" name="price" id="input_price" value="">
                                    <div class="form_item">
                                        <div class="col-12">
                                            <input type="text" class="form-control home__input" name="name" value=""
                                                   placeholder="Ваше имя" required="">
                                        </div>
                                    </div>
                                    <div class="form_item">
                                        <div class="col-12">
                                            <input type="tel" name="tel" class="form-control home__input"
                                                   placeholder="Ваш телефон" required="">
                                        </div>
                                    </div>
                                    <div class="form_item">
                                        <div class="col-12">
                                            <input id="comment" type="text" name="comment" value=""
                                                   class="form-control home__input" placeholder="Комментарий"
                                                   required="">
                                        </div>
                                    </div>
                                    <div class="form_item">
                                        <div class="col-12">
                                            <button class="btn button home__button" type="submit">Отправить заявку
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<div class="modal" id="myModalAuto">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            </div>


            <div class="modal-body">

                <div class="row">

                    <div class="col-12">
                        <h2 class="title" id="content_price" style="text-align:center;">Отправить заявку <br/><span
                                style="font-size: 20px;margin-top:10px;font-weight: normal;"></span></h2>
                        <div class="form_services">
                            <form enctype="multipart/form-data" action="/index.php?route=information/contact"
                                  method="post">
                                <div class="input-group col-12">
                                    <input type="hidden" name="url" id="input_url"
                                           value="https://www.americaro.com.ua/">
                                    <input type="hidden" name="price" id="input_price" value="">
                                    <div class="form_item">
                                        <div class="col-12">
                                            <input type="text" class="form-control home__input" name="name" value=""
                                                   placeholder="Ваше имя" required="">
                                        </div>
                                    </div>
                                    <div class="form_item">
                                        <div class="col-12">
                                            <input type="tel" name="tel" class="form-control home__input"
                                                   placeholder="Ваш телефон" required="">
                                        </div>
                                    </div>
                                    <div class="form_item">
                                        <div class="col-12">
                                            <textarea id="comment" type="text" name="comment" style="min-height:80px;"
                                                      value="" class="form-control home__input"
                                                      placeholder="Комментарий" required=""> </textarea>
                                        </div>
                                    </div>
                                    <div class="form_item">
                                        <div class="col-12">
                                            <button class="btn button home__button" type="submit">Отправить заявку
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<script>
    $('#myModal1').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var content = button.data('content')
        $(this).find('#content_price').text(content);
        $(this).find('#input_price').val(content);
    })

    $('#myModalAuto').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var content = button.data('content');
        var contentPrice = button.data('price');
        var contentUrl = button.data('url');
        var contentComment = button.data('comment');
        $(this).find('#content_price span').text(content);
        $(this).find('#input_price').val(contentPrice);
        $(this).find('#input_url').val(contentUrl);
        $(this).find('#comment').val(contentComment);
    })

    $(document).ready(function () {
        var $checks = $("input.checkbox");
        $(".unchecked").on("click", function () {
            $checks.prop('checked', false);
        });

        $("#upForm .submit").on('click', function () {
            // $("#upForm").submit();
        });
    });

    (function ($) {
        // custom css expression for a case-insensitive contains()
        jQuery.expr[':'].Contains = function (label, i, m) {
            return (label.textContent || label.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };

        function filterList(header, list) {
            // header is any element, list is an unordered list
            // create and add the filter form to the header
            var form = $("<form>").attr({"class": "filterform", "action": "#"}),
                input = $("<input>").attr({"class": "filterinput", "type": "text", "placeholder": "Поиск"});
            $(form).append(input).appendTo(header);

            $(input)
                .change(function () {
                    var filter = $(this).val();
                    if (filter) {

                        $matches = $(list).find('label:Contains(' + filter + ')').parent();
                        $('li', list).not($matches).slideUp();
                        $matches.slideDown();

                    } else {
                        $(list).find("li").slideDown();
                    }
                    return false;
                })
                .keyup(function () {
                    // fire the above change event after every letter
                    $(this).change();
                });
        }


        //ondomready
        $(function () {
            filterList($(".form"), $(".list"));
            filterList($(".form2"), $(".list2"));
            filterList($(".form3"), $(".list3"));
            filterList($(".form4"), $(".list4"));
            filterList($(".form5"), $(".list5"));
            filterList($(".form6"), $(".list6"));
            filterList($(".form7"), $(".list7"));
            filterList($(".form8"), $(".list8"));
        });
    }(jQuery));

    function range(start, count) {
        return Array.apply(0, Array(count))
            .map((element, index) => index + start);
    }

    $(document).ready(function () {
        var year_from = 2010;
        var year_to = 2025;
        var years = [];

        $('#year_from').change(function () {
            year_from = parseInt(this.value);
        });

        $('#year_to').change(function () {
            year_to = parseInt(this.value);
        });

        $('#year_from, #year_to').change(function () {
            if (year_from && year_to) {
                years = range(year_from, (year_to - (year_from - 1))).join(';');
                console.log(year_from, year_to, years);
                $("#years").val(years);
            }
        });

        $('#main_page_search').submit(function () {
            if ($('#manufacturer_id').val() == '')
                $('#manufacturer_id').prop('disabled', true);

            if ($('#models').val() == '')
                $('#models').prop('disabled', true);

            $(this)
                .find('input[name]')
                .filter(function () {
                    return !this.value;
                })
                .prop('name', '');

            if (
                ($('#manufacturer_id').val() == '') && ($('#models').val() == null) &&
                ($(this).find('input[name="search"]').val() == undefined) && ($("#odometer option:selected").val() == '') &&
                ($("#year_from option:selected").val() == '') && ($("#year_to option:selected").val() == '')
            ) {
                var redir = '/index.php?route=product/category&path=28';
                window.location.href = redir;
                return false;
            }
        });

        $("#manufacturer_id").on('change', function () {
            $.ajax({
                type: "POST",
                url: "/catalog/cron/carsApi.php",
                data: {manufacturer_id: this.value, action: "getModels"},
                dataType: 'json',
            }).done(function (data) {
                var $modelsCont = $("#models");
                $modelsCont.empty();
                $modelsCont.append($("<option selected value>--</option>"));
                $.each(data, function (key, value) {
                    $modelsCont.append($("<option></option>")
                        .attr("value", value[Object.keys(value)[0]]).text(Object.keys(value)[0]));
                });
            });
        });


    });

</script>


<script src="catalog/view/javascript/main.js" type="text/javascript"></script>
<script src="catalog/view/javascript/main_americaro.js"></script>

</body>
</html>
