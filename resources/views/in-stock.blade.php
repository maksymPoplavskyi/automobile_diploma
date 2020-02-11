@extends('layouts.index')

@section('title')
    В наличии
@endsection

@section('content')
    <section class="catalog">
        <div class="container">
            <ul class="row col-12" xmlns:v="http://rdf.data-vocabulary.org/#">

                <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                        href="https://www.americaro.com.ua/index.php?route=common/home"
                        class="product__navigation--link product__link" rel="v:url" property="v:title"><i
                            class="fa fa-home"></i></a></li>
                <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                        href="https://www.americaro.com.ua/index.php?route=product/category&amp;path=31"
                        class="product__navigation--link product__link" rel="v:url" property="v:title">В наличии</a>
                </li>
            </ul>

            <p>В этой категории нет товаров.</p>
            <div class="buttons">
                <div class="pull-right"><a href="https://www.americaro.com.ua/index.php?route=common/home"
                                           class="btn btn-primary">Продолжить</a></div>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4 ">
            <div id="sidebar_right">
                <aside id="column-right" class="col-sm-12 hidden-xs">

                    <style type="text/css">
                        #filter-module-toggle {
                            display: none;
                            border-top: 0;
                            border-right: 0;
                            border-radius: 0 0 0 5px;
                            cursor: pointer;
                            outline: none !important;
                            position: fixed;
                            top: 0;
                            right: 0;
                            z-index: 99999;
                        }

                        .filter-module {
                            /*border-radius: 5px;*/
                            margin-bottom: 20px;
                            margin-top: -20px;
                            z-index: 99999;
                        }

                        .filter-module .module-heading {
                            border-top: 1px solid #DDD;
                            /*border-top-left-radius: 5px;
                            border-top-right-radius: 5px;*/
                            padding: 20px 10px;
                            text-transform: uppercase;
                        }

                        .filter-module h3 {
                            margin: 0;
                            font-size: 24px;
                            font-weight: 700;
                        }

                        .filter-module .clear-link {
                            float: right;
                            font-size: 28px;
                            position: relative;
                            left: -5px;
                            top: 3.9px;
                            color: #444444;
                            display: none;
                        }

                        .filter-module .clear-link:hover {
                            color: #FFC001;
                        }

                        .filter-module .hide-button {
                            display: none;
                            float: right;
                        }

                        .filter-module .collapsable-heading {
                            cursor: pointer;
                            padding: 15px 0 15px 0px;
                            width: 100%;
                            font-size: 14px;
                            color: #444;
                            font-weight: normal;
                            text-transform: uppercase;
                            text-align: left;
                            border-top: 0px solid #bbb;
                            box-shadow: none;
                            margin-top: 0;
                            font-weight: 700;

                            font-family: 'Ubuntu', sans-serif;

                        }

                        .filter-module .collapsable-choices {
                            background: #FFF;
                        }

                        .filter-module .collapsable-choices img {
                            vertical-align: middle;
                        }

                        .filter-module > div > div.collapsable-choices {
                            border: 1px solid #DDD;
                            padding: 8px 12px;
                            text-transform: uppercase;
                            overflow: auto;
                            max-height: 250px;
                        }

                        @media (max-width: 767px) {
                            .filter-module > div > div.collapsable-choices {
                                max-height: none;
                            }
                        }

                        .filter-module > div:last-child {
                            border-bottom-left-radius: '5px';
                            border-bottom-right-radius: '5px';
                            text-align: right;
                            margin: -25px 20px 0 0;
                        }

                        .filter-module input {
                            margin-right: 2px;
                        }

                        .filter-module a,
                        .filter-module input[type="checkbox"],
                        .filter-module input[type="radio"],
                        .filter-module label {
                            cursor: pointer;
                        }

                        .filter-module a.choice {
                            color: inherit;
                            display: block;
                            text-decoration: none;
                        }

                        .filter-module a.choice:hover {
                            color: initial;
                        }

                        .filter-module input[type="text"] {
                            margin-bottom: 10px;
                        }

                        .filter-module label {
                            display: block;
                            position: relative;
                            padding-left: 25px;
                            font-size: 10px;
                            margin: 0;
                            font-family: 'Ubuntu', sans-serif;
                        }

                        .filter-module select {
                            display: inline-block;
                            margin: 5px 0;
                            max-width: 250px;
                            width: 100%;
                        }

                        .filter-module .clear-filters {
                            text-align: left;
                            margin: 20px 0 0 0px;
                        }

                        .filter-module .clear-filters a {
                            font-size: 11px;
                        }

                        .filter-module .filter-button {
                            text-align: right;
                            margin: -25px 0 0 0;
                        }

                        .filter-module .footer__button {
                            color: #fff !important;
                        }

                        @media (max-width: 992px) {
                            .filter-module .clear-filters {
                                text-align: center;
                                margin: 20px 0 0 0px;
                            }

                            .filter-module .filter-button {
                                text-align: center;
                                margin: 10px 0 0 0;
                            }
                        }


                        .filter-module .flexible-filter {
                            padding: 10px 0 0;
                            text-align: center;
                        }

                        .filter-module .flexible-filter input {
                            display: inline-block;
                            width: 30%;
                        }

                        #price-slider-36 {
                            margin: 40px auto 10px;
                            width: 85%;
                        }

                        .noUi-handle {
                            cursor: pointer;
                            outline: none;
                        }

                        .collapsable-block .down-triangle {
                            padding: 0;
                            position: relative;
                            top: 5px;
                            color: #FFC001;
                            font-size: 30px;
                            display: none;
                        }

                        .collapsable-block .right-triangle {
                            padding: 0;
                            position: relative;
                            top: 5px;
                            color: #FFC001;
                            font-size: 30px;
                            display: none;
                        }

                        /* Content Top/Bottom Fixes */
                        #content .filter-module {
                            border: 1px solid #DDD;
                        }

                        #content .filter-module div:first-child {
                            border-bottom: 1px solid #DDD;
                        }

                        #content .filter-module div {
                            border: none;
                        }

                        #content .filter-module .collapsable-heading {
                            border: 1px solid #DDD;
                        }

                        #content .filter-module .collapsable-block {
                            display: inline-block;
                            margin-left: 5px;
                            vertical-align: top;
                            width: 19%;
                        }

                        #content .filter-module .clear-filters {
                            position: relative;
                            left: 30%;
                            top: 25px;
                            height: 0;
                            width: 100px;
                        }

                        .filter-module input[type="checkbox"] {
                            position: absolute;
                            opacity: 0;
                            cursor: pointer;
                            height: 0;
                            width: 0;
                        }

                        .filter-module .checkmark {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 15px;
                            height: 15px;
                            background-color: white;
                        }

                        .filter-module .checkbox:checked + .checkmark::before,
                        .manufacturer-filter .checkbox:checked + .checkmark::before,
                        .price-filter .checkbox:checked + .checkmark::before {
                            content: "";
                            display: block;
                            position: absolute;
                            top: 3px;
                            right: 2px;
                            bottom: 5px;
                            left: 2px;
                            border-radius: 0px;
                            border-left: 2px solid #000;
                            border-bottom: 2px solid #000;
                            -webkit-transform: rotate(-45deg);
                            -moz-transform: rotate(-45deg);
                            -o-transform: rotate(-45deg);
                            -ms-transform: rotate(-45deg);
                            transform: rotate(-45deg);
                        }


                        /* Mobile Devices Styling */
                        @media (max-width: 767px) {
                            #filter-module-toggle, .filter-module .hide-button {
                                display: block;
                            }

                            .filter-module {
                                display: none;
                                box-shadow: 0 2px 5px #888;
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                background: white;
                                padding-bottom: 20px;
                            }

                            .filter-module .collapsable-block:not(.category-filter) label {
                                display: inline-block;
                            }

                            .filter-module .collapsable-heading {
                                margin-top: 0px;

                            }
                        }

                        /* Additional CSS */
                    </style>

                    <div id="filter-module-36" class="filter-module desktop">

                        <div class="manufacturer-filter collapsable-block">
                            <div class="collapsable-heading">
                                <span class="right-triangle" style="display: none">&#9656;</span>
                                <span class="down-triangle">&#9662;</span>
                                Марка <a class="clear-link" onclick="clearFilters($(this).parent().parent())">
                                    × </a>
                            </div>
                            <div class="collapsable-choices">


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="51"/><span
                                        class="checkmark"></span> ACURA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="67"/><span
                                        class="checkmark"></span> ALFA ROMEO </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="148"/><span
                                        class="checkmark"></span> ASTON MARTIN </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="42"/><span
                                        class="checkmark"></span> AUDI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="77"/><span
                                        class="checkmark"></span> BENTLEY </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="16"/><span
                                        class="checkmark"></span> BMW </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="32"/><span
                                        class="checkmark"></span> BUICK </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="41"/><span
                                        class="checkmark"></span> CADILLAC </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="29"/><span
                                        class="checkmark"></span> CHEVROLET </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="34"/><span
                                        class="checkmark"></span> CHRYSLER </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="375"/><span
                                        class="checkmark"></span> DAEWOO </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="36"/><span
                                        class="checkmark"></span> DODGE </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="140"/><span
                                        class="checkmark"></span> DUCATI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="68"/><span
                                        class="checkmark"></span> FERRARI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="74"/><span
                                        class="checkmark"></span> FIAT </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="26"/><span
                                        class="checkmark"></span> FORD </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="166"/><span
                                        class="checkmark"></span> GENESIS </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="24"/><span
                                        class="checkmark"></span> GMC </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="27"/><span
                                        class="checkmark"></span> HARLEY-DAVIDSON </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="15"/><span
                                        class="checkmark"></span> HONDA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="56"/><span
                                        class="checkmark"></span> HUMMER </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="35"/><span
                                        class="checkmark"></span> HYUNDAI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="22"/><span
                                        class="checkmark"></span> INFINITI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="45"/><span
                                        class="checkmark"></span> ISUZU </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="72"/><span
                                        class="checkmark"></span> JAGUAR </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="30"/><span
                                        class="checkmark"></span> JEEP </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="43"/><span
                                        class="checkmark"></span> KAWASAKI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="12"/><span
                                        class="checkmark"></span> KIA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="195"/><span
                                        class="checkmark"></span> LAMBORGHINI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="52"/><span
                                        class="checkmark"></span> LAND ROVER </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="40"/><span
                                        class="checkmark"></span> LEXUS </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="58"/><span
                                        class="checkmark"></span> LINCOLN </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="230"/><span
                                        class="checkmark"></span> LOTUS </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="129"/><span
                                        class="checkmark"></span> MASERATI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="11"/><span
                                        class="checkmark"></span> MAZDA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="563"/><span
                                        class="checkmark"></span> MCLAREN AUTOMOTIVE </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="25"/><span
                                        class="checkmark"></span> MERCEDES-BENZ </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="57"/><span
                                        class="checkmark"></span> MINI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="28"/><span
                                        class="checkmark"></span> MITSUBISHI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="14"/><span
                                        class="checkmark"></span> NISSAN </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="182"/><span
                                        class="checkmark"></span> NISSAN DIESEL </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="54"/><span
                                        class="checkmark"></span> PONTIAC </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="44"/><span
                                        class="checkmark"></span> PORSCHE </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="39"/><span
                                        class="checkmark"></span> RAM </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="638"/><span
                                        class="checkmark"></span> RENAULT </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="163"/><span
                                        class="checkmark"></span> ROLLS-ROYCE </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="70"/><span
                                        class="checkmark"></span> SAAB </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="135"/><span
                                        class="checkmark"></span> SCION </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="78"/><span
                                        class="checkmark"></span> SMART </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="37"/><span
                                        class="checkmark"></span> SUBARU </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="53"/><span
                                        class="checkmark"></span> SUZUKI </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="65"/><span
                                        class="checkmark"></span> TESLA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="17"/><span
                                        class="checkmark"></span> TOYOTA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="31"/><span
                                        class="checkmark"></span> VOLKSWAGEN </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="60"/><span
                                        class="checkmark"></span> VOLVO </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="38"/><span
                                        class="checkmark"></span> YAMAHA </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="manufacturer_id" value="482"/><span
                                        class="checkmark"></span> ZONGSHEN </label>


                            </div>
                            <div class="clear-filters hidden-xs hidden-sm"><a onclick="clearAllFilters($(this))">Очистить</a>
                            </div>

                            <div class="filter-button hidden-xs hidden-sm">
                                <a class="btn  button footer__button">Подобрать</a>
                            </div>
                        </div>


                        <div class="attribute-filter collapsable-block">
                            <div class="collapsable-heading">
                                <span class="right-triangle" style="display: none">&#9656;</span>
                                <span class="down-triangle">&#9662;</span>
                                Модель <a class="clear-link" onclick="clearFilters($(this).parent().parent())">×</a>
                            </div>
                            <div class="collapsable-choices">


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[9999999]" value="--"/><span
                                        class="checkmark"></span> 0 </label>


                            </div>
                            <div class="clear-filters hidden-xs"><a onclick="clearAllFilters($(this))">Очистить</a>
                            </div>

                            <div class="filter-button hidden-xs">
                                <a class="btn  button footer__button">Подобрать</a>
                            </div>
                        </div>

                        <div class="attribute-filter collapsable-block">
                            <div class="collapsable-heading">
                                <span class="right-triangle" style="display: none">&#9656;</span>
                                <span class="down-triangle">&#9662;</span>
                                Топливо <a class="clear-link" onclick="clearFilters($(this).parent().parent())">×</a>
                            </div>
                            <div class="collapsable-choices">


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]"
                                           value="COMPRESSED NATURAL GAS"/><span class="checkmark"></span> COMPRESSED
                                    NATURAL GAS </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]"
                                           value="CONVERTIBLE TO GASEOUS POWERED"/><span class="checkmark"></span>
                                    CONVERTIBLE TO GASEOUS POWERED </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]" value="DIESEL"/><span
                                        class="checkmark"></span> DIESEL </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]" value="ELECTRIC"/><span
                                        class="checkmark"></span> ELECTRIC </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]" value="FLEXIBLE FUEL"/><span
                                        class="checkmark"></span> FLEXIBLE FUEL </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]" value="GAS"/><span
                                        class="checkmark"></span> GAS </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]" value="HYBRID ENGINE"/><span
                                        class="checkmark"></span> HYBRID ENGINE </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[15]"
                                           value="HYDROGEN FUEL CELL"/><span class="checkmark"></span> HYDROGEN FUEL
                                    CELL </label>


                            </div>
                            <div class="clear-filters hidden-xs"><a onclick="clearAllFilters($(this))">Очистить</a>
                            </div>

                            <div class="filter-button hidden-xs">
                                <a class="btn  button footer__button">Подобрать</a>
                            </div>
                        </div>

                        <div class="attribute-filter collapsable-block">
                            <div class="collapsable-heading">
                                <span class="right-triangle" style="display: none">&#9656;</span>
                                <span class="down-triangle">&#9662;</span>
                                Год выпуска <a class="clear-link"
                                               onclick="clearFilters($(this).parent().parent())">×</a>
                            </div>
                            <div class="collapsable-choices">


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2020"/><span
                                        class="checkmark"></span> 2020 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2019"/><span
                                        class="checkmark"></span> 2019 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2018"/><span
                                        class="checkmark"></span> 2018 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2017"/><span
                                        class="checkmark"></span> 2017 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2016"/><span
                                        class="checkmark"></span> 2016 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2015"/><span
                                        class="checkmark"></span> 2015 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2014"/><span
                                        class="checkmark"></span> 2014 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2013"/><span
                                        class="checkmark"></span> 2013 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2012"/><span
                                        class="checkmark"></span> 2012 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2011"/><span
                                        class="checkmark"></span> 2011 </label>


                                <label>
                                    <input class="checkbox" type="checkbox" name="attribute[27]" value="2010"/><span
                                        class="checkmark"></span> 2010 </label>


                            </div>
                            <div class="clear-filters hidden-xs"><a onclick="clearAllFilters($(this))">Очистить</a>
                            </div>

                            <div class="filter-button hidden-xs">
                                <a class="btn  button footer__button">Подобрать</a>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="category_id" value="31"/>


                    </div>

                    <script>
                        function clearAllFilters(element) {
                            if ('/index.php?route=product/category&amp;path=31') {
                                location = '/index.php?route=product/category&path=31';
                            } else {
                                clearFilters(element.parent().parent());
                            }
                        }

                        function clearFilters(element) {
                            element.find(':input').removeAttr('checked');
                            element.find('input[type="text"]').val('');
                            element.find('option:first-child').attr('selected', 'selected');
                        }

                        $('.filter-module :radio').click(function () {
                            if ($(this).hasClass('isChecked')) {
                                $(this).removeClass('isChecked').removeAttr('checked').change();
                            } else {
                                $(this).parent().parent().find(':radio').removeClass('isChecked');
                                $(this).addClass('isChecked');
                            }
                        });

                        // Filtering functions
                        $('.filter-module input[type="text"]').keyup(function (event) {
                            if (event.which == 13) $('.filter-module .button').click();
                        });

                        $('.filter-module .button').click(function () {
                            var page = ($('.filter-module').find('input[name="search"]').val() && 0) ? 'product/search' : 'extension/filter';
                            var url = 'https://www.americaro.com.ua/index.php?route=' + page + '&module_id=36';

                            var previousInput = '';
                            var lower = $('.filter-module').find('input[name="lower"]').val();
                            var upper = $('.filter-module').find('input[name="upper"]').val();

                            $('.filter-module').find(':input').each(function () {
                                if ($(this).attr('name') == 'lower' && lower) {
                                    if (url.indexOf('&price=') == -1) {
                                        url += '&price=' + lower + '-' + upper;
                                    } else {
                                        url += ';' + lower + '-' + upper;
                                    }
                                    return;
                                }
                                if ($(this).attr('name') == 'upper' && lower) {
                                    return;
                                }

                                if ($(this).is(':checkbox') && $(this).is(':checked')) {
                                    url += ($(this).attr('name') == previousInput) ? ';' + $(this).val() : '&' + $(this).attr('name') + '=' + $(this).val();
                                    previousInput = $(this).attr('name');
                                } else if ($(this).is(':radio') && $(this).is(':checked')) {
                                    url += '&' + $(this).attr('name') + '=' + $(this).val();
                                } else if ($(this).hasClass('form-control') && $(this).val()) {
                                    url += '&' + $(this).attr('name') + '=' + $(this).val();
                                }
                            });

                            $.ajax({
                                type: 'POST',
                                url: 'index.php?route=extension/module/ultimate_filters/rewrite',
                                data: {url: url},
                                success: function (data) {
                                    location = data;
                                },
                            });
                        });


                        // Price slider functions

                        // Mobile-specific functions
                        function showFilters() {
                            $('.collapsable-choices').show();
                            $('.right-triangle, .down-triangle').hide();
                            $('#filter-module-toggle').slideUp();
                            $('.filter-module').slideDown();
                            $('html, body').scrollTop(0);
                        }

                        $(document).ready(function () {
                            if ($(window).width() <= 767) {
                                $('body').prepend('<a id="filter-module-toggle" class="button btn btn-info" onclick="showFilters()">Подобрать</a>');
                                $('.filter-module').prependTo('body');
                                $('.filter-module').removeClass('desktop');
                            }

                            var allowed_engine_types = ['DIESEL', 'ELECTRIC', 'FLEXIBLE FUEL', 'GAS', 'HYBRID ENGINE'];
                            $("input[name='attribute[15]']").each(function () {
                                if (!allowed_engine_types.includes($(this).val())) {
                                    $(this).parent().hide();
                                }
                            });

                            $("input[name='attribute[9999999]'][value='--']").parent().hide();

                            /** models options */
                            var $modelsCont = $("input[name='attribute[9999999]']").closest('.collapsable-choices');

                            $("select[name='manufacturer_id'], input[name='manufacturer_id']").on('change', function () {

                                var checked = false;
                                $(".manufacturer-filter input").each(function () {
                                    if ($(this).is(':checked')) {
                                        checked = true;
                                    }
                                });

                                if (checked === false) {
                                    $modelsCont.empty();
                                    return;
                                }

                                $.ajax({
                                    type: "POST",
                                    url: "/catalog/cron/carsApi.php",
                                    data: {manufacturer_id: this.value, action: "getModels"},
                                    dataType: 'json',
                                }).done(function (data) {
                                    $modelsCont.empty();
                                    var count = 0;
                                    $.each(data, function (key, value) {
                                        if (count > 4) {
                                            var style = '';
                                        } else {
                                            var style = '';
                                        }
                                        $modelsCont.append('<label style="' + style + '"><input class="checkbox" type="checkbox" name="attribute[9999999]" value="' + value[Object.keys(value)[0]] + '"><span class="checkmark"></span>' + Object.keys(value)[0] + '</label>');
                                        count++;
                                    });

                                });
                            });
                        });
                    </script>

                </aside>
            </div>
            <style>
                #column-right {
                    position: relative;
                    padding: 0 20px;
                    background-color: #fff;
                    transition: .3s;
                }

            </style>
            <style>
                .sticky {
                    position: fixed;
                    z-index: 101;
                }

                .stop {
                    position: relative;
                    z-index: 101;
                }
            </style>
            <script>
                (function () {
                    var a = document.querySelector('#sidebar_right'), b = null, K = null, Z = 0, P = 0, N = 0;  // если у P ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента, если у N — нижний край дойдёт до нижнего края элемента. Может быть отрицательным числом
                    window.addEventListener('scroll', Ascroll, false);
                    document.body.addEventListener('scroll', Ascroll, false);

                    function Ascroll() {
                        var Ra = a.getBoundingClientRect(),
                            R1bottom = document.querySelector('#content_left').getBoundingClientRect().bottom;
                        if (Ra.bottom < R1bottom) {
                            if (b == null) {
                                var Sa = getComputedStyle(a, ''), s = '';
                                for (var i = 0; i < Sa.length; i++) {
                                    if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
                                        s += Sa[i] + ': ' + Sa.getPropertyValue(Sa[i]) + '; '
                                    }
                                }
                                b = document.createElement('div');
                                b.className = "stop";
                                b.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px;';
                                a.insertBefore(b, a.firstChild);
                                var l = a.childNodes.length;
                                for (var i = 1; i < l; i++) {
                                    b.appendChild(a.childNodes[1]);
                                }
                                a.style.height = b.getBoundingClientRect().height + 'px';
                                a.style.padding = '0';
                                a.style.border = '0';
                            }
                            var Rb = b.getBoundingClientRect(),
                                Rh = Ra.top + Rb.height,
                                W = document.documentElement.clientHeight,
                                R1 = Math.round(Rh - R1bottom),
                                R2 = Math.round(Rh - W);
                            if (Rb.height > W) {
                                if (Ra.top < K) {  // скролл вниз
                                    if (R2 + N > R1) {  // не дойти до низа
                                        if (Rb.bottom - W + N <= 0) {  // подцепиться
                                            b.className = 'sticky';
                                            b.style.top = W - Rb.height - N + 'px';
                                            Z = N + Ra.top + Rb.height - W;
                                        } else {
                                            b.className = 'stop';
                                            b.style.top = -Z + 'px';
                                        }
                                    } else {
                                        b.className = 'stop';
                                        b.style.top = -R1 + 'px';
                                        Z = R1;
                                    }
                                } else {  // скролл вверх
                                    if (Ra.top - P < 0) {  // не дойти до верха
                                        if (Rb.top - P >= 0) {  // подцепиться
                                            b.className = 'sticky';
                                            b.style.top = P + 'px';
                                            Z = Ra.top - P;
                                        } else {
                                            b.className = 'stop';
                                            b.style.top = -Z + 'px';
                                        }
                                    } else {
                                        b.className = '';
                                        b.style.top = '';
                                        Z = 0;
                                    }
                                }
                                K = Ra.top;
                            } else {
                                if ((Ra.top - P) <= 0) {
                                    if ((Ra.top - P) <= R1) {
                                        b.className = 'stop';
                                        b.style.top = -R1 + 'px';
                                    } else {
                                        b.className = 'sticky';
                                        b.style.top = P + 'px';
                                    }
                                } else {
                                    b.className = '';
                                    b.style.top = '';
                                }
                            }
                            window.addEventListener('resize', function () {
                                a.children[0].style.width = getComputedStyle(a, '').width
                            }, false);
                        }
                    }
                })()
            </script>
        </div>

    </section>
    <section class="seo">
        <div class="container">
            <div class="row justify-content-center">
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $('.menu_icon, .close').on('click', function () {
            $('.menu-mobile--itself').toggleClass('show')
        })

        $(function () {
            $('.elem1').on('click', function () {
                $(this).toggleClass('transform');
            });
        });

        function getCheckedCheckBoxes() {
            var checkboxes = document.getElementsByClassName('checkbox');
            var checkboxesChecked = [];
            for (var index = 0; index < checkboxes.length; index++) {
                if (checkboxes[index].checked) {
                    checkboxesChecked.push(checkboxes[index].value);
                    wishlist.add(checkboxes[index].value);
                }
            }
            return checkboxesChecked;
        }


        $(document).ready(function () {
            var table = $('table.table-checks');
            table
                .on('change', '> tbody input:checkbox', function () {
                    $(this).closest('label').toggleClass('checked', $(this).is(':checked'));
                })
                .on('change', '#all', function () {
                    $('> tbody input:checkbox', table).prop('checked', $(this).is(':checked')).trigger('change');
                });
        });

        $("#products_cat").on("click", "em", function (e) {
            e.preventDefault();
            $(this).closest("tr").nextUntil(".parent_tr").toggleClass("open_tr");
        });

        <
        !--

            initial_sort_id = 1; // номер начального отсортированного столбца, начиная с нуля
        initial_sort_up = 1; // 0 - сортировка вниз, 1 - вверх
        var sort_case_sensitive = false; // чуствительновть к регистру при сотрировке

        function _sort(a, b) {
            var a = a[0];
            var b = b[0];
            var _a = (a + '').replace(/,/, '.');
            var _b = (b + '').replace(/,/, '.');
            if (parseInt(_a) && parseInt(_b)) return sort_numbers(parseInt(_a), parseInt(_b));
            else if (!sort_case_sensitive) return sort_insensitive(a, b);
            else return sort_sensitive(a, b);
        }

        function sort_numbers(a, b) {
            return a - b;
        }

        function sort_insensitive(a, b) {
            var anew = a.toLowerCase();
            var bnew = b.toLowerCase();
            if (anew < bnew) return -1;
            if (anew > bnew) return 1;
            return 0;
        }

        function sort_sensitive(a, b) {
            if (a < b) return -1;
            if (a > b) return 1;
            return 0;
        }

        function getConcatenedTextContent(node) {
            var _result = "";
            if (node == null) {
                return _result;
            }
            var childrens = node.childNodes;
            var i = 0;
            while (i < childrens.length) {
                var child = childrens.item(i);
                switch (child.nodeType) {
                    case 1: // ELEMENT_NODE
                    case 5: // ENTITY_REFERENCE_NODE
                        _result += getConcatenedTextContent(child);
                        break;
                    case 3: // TEXT_NODE
                    case 2: // ATTRIBUTE_NODE
                    case 4: // CDATA_SECTION_NODE
                        _result += child.nodeValue;
                        break;
                    case 6: // ENTITY_NODE
                    case 7: // PROCESSING_INSTRUCTION_NODE
                    case 8: // COMMENT_NODE
                    case 9: // DOCUMENT_NODE
                    case 10: // DOCUMENT_TYPE_NODE
                    case 11: // DOCUMENT_FRAGMENT_NODE
                    case 12: // NOTATION_NODE
                        // skip
                        break;
                }
                i++;
            }
            return _result;
        }

        function sort(e) {
            var el = window.event ? window.event.srcElement : e.currentTarget;

            while (el.tagName.toLowerCase() != "td") el = el.parentNode;

            var a = new Array();
            var name = el.lastChild.nodeValue;
            var dad = el.parentNode;
            var table = dad.parentNode.parentNode;
            var up = table.up; // no set/getAttribute!

            var node, arrow, curcol;
            for (var i = 0; (node = dad.getElementsByTagName("td").item(i)); i++) {
                if (node.lastChild.nodeValue == name) {
                    curcol = i;
                    if (node.className == "curcol") {
                        arrow = node.firstChild;
                        table.up = Number(!up);
                    } else {
                        node.className = "curcol";
                        arrow = node.insertBefore(document.createElement("span"), node.firstChild);
                        arrow.appendChild(document.createTextNode(""));
                        table.up = 0;
                    }
                    arrow.innerHTML = ((table.up == 0) ? "&#8595;" : "&#8593;") + "&nbsp;";
                } else {
                    if (node.className == "curcol") {
                        node.className = "";
                        if (node.firstChild) node.removeChild(node.firstChild);
                    }
                }
            }

            var tbody = table.getElementsByTagName("tbody").item(0);
            for (var i = 0; (node = tbody.getElementsByTagName("tr").item(i)); i++) {
                a[i] = new Array();
                a[i][0] = getConcatenedTextContent(node.getElementsByTagName("td").item(curcol));
                a[i][1] = getConcatenedTextContent(node.getElementsByTagName("td").item(1));
                a[i][2] = getConcatenedTextContent(node.getElementsByTagName("td").item(0));
                a[i][3] = node;
            }

            a.sort(_sort);

            if (table.up) a.reverse();

            for (var i = 0; i < a.length; i++) {
                tbody.appendChild(a[i][3]);
            }
        }

        function init(e) {
            if (!document.getElementsByTagName) return;

            if (document.createEvent) function click_elem(elem) {
                var evt = document.createEvent("MouseEvents");
                evt.initMouseEvent("click", false, false, window, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, elem);
                elem.dispatchEvent(evt);
            }

            for (var j = 0; (thead = document.getElementsByTagName("thead").item(j)); j++) {
                var node;
                for (var i = 0; (node = thead.getElementsByTagName("td").item(i)); i++) {
                    if (node.addEventListener) node.addEventListener("click", sort, false);
                    else if (node.attachEvent) node.attachEvent("onclick", sort);
                    node.title = "Нажмите на заголовок, чтобы отсортировать колонку";
                }
                thead.parentNode.up = 0;

                if (typeof (initial_sort_id) != "undefined") {
                    td_for_event = thead.getElementsByTagName("td").item(initial_sort_id);
                    if (td_for_event.dispatchEvent) click_elem(td_for_event);
                    else if (td_for_event.fireEvent) td_for_event.fireEvent("onclick");
                    if (typeof (initial_sort_up) != "undefined" && initial_sort_up) {
                        if (td_for_event.dispatchEvent) click_elem(td_for_event);
                        else if (td_for_event.fireEvent) td_for_event.fireEvent("onclick");
                    }
                }
            }
        }

        var root = window.addEventListener || window.attachEvent ? window : document.addEventListener ? document : null;
        if (root) {
            if (root.addEventListener) root.addEventListener("load", init, false);
            else if (root.attachEvent) root.attachEvent("onload", init);
        }

        $(function () {
            $('td:first-child input').change(function () {
                $(this).closest('tr').toggleClass("highlight", this.checked);
            });
        });
    </script>
@endsection
