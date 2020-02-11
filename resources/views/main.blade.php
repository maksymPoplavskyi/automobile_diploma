@extends('layouts.index');

@section('title')
    Автомобильный аукцион онлайн. Купить авто в США. Каталог авто из аукциона в Америке. Машины от 1000$
@endsection

@section('content')

    <div class="header_back">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="title_home_header">АВТО ИЗ США ПОД КЛЮЧ С ЭКОНОМИЕЙ ДО 50%</h1>
                </div>
                <div class="col-12 col-sm-6">
                    <form id="main_page_search" method="get" action="/index.php" class="auction">
                        <input type="hidden" name="route" value="extension/filter">
                        <input type="hidden" name="module_id" value="36">
                        <input type="hidden" name="category_id" value="28">

                        <div class="col-12 auction__wrap">
                            <div class="row auction__heading">
                                <div class="header_auction__picture">
                                    Выберите автомобиль
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="col-12 auction__wrap">
                                <div class="row ">
                                    <div class="dropdown col-12 col-lg-6 auction__list">

                                        <div class="form-group">
                                            <select class="form-control" id="manufacturer_id" name="manufacturer_id">
                                                <option selected value>Марка авто</option>
                                                <option value="51">ACURA</option>
                                                <option value="67">ALFA ROMEO</option>
                                                <option value="148">ASTON MARTIN</option>
                                                <option value="42">AUDI</option>
                                                <option value="77">BENTLEY</option>
                                                <option value="16">BMW</option>
                                                <option value="32">BUICK</option>
                                                <option value="41">CADILLAC</option>
                                                <option value="29">CHEVROLET</option>
                                                <option value="34">CHRYSLER</option>
                                                <option value="375">DAEWOO</option>
                                                <option value="36">DODGE</option>
                                                <option value="140">DUCATI</option>
                                                <option value="68">FERRARI</option>
                                                <option value="74">FIAT</option>
                                                <option value="26">FORD</option>
                                                <option value="166">GENESIS</option>
                                                <option value="24">GMC</option>
                                                <option value="27">HARLEY-DAVIDSON</option>
                                                <option value="15">HONDA</option>
                                                <option value="56">HUMMER</option>
                                                <option value="35">HYUNDAI</option>
                                                <option value="22">INFINITI</option>
                                                <option value="45">ISUZU</option>
                                                <option value="72">JAGUAR</option>
                                                <option value="30">JEEP</option>
                                                <option value="43">KAWASAKI</option>
                                                <option value="12">KIA</option>
                                                <option value="195">LAMBORGHINI</option>
                                                <option value="52">LAND ROVER</option>
                                                <option value="40">LEXUS</option>
                                                <option value="58">LINCOLN</option>
                                                <option value="230">LOTUS</option>
                                                <option value="129">MASERATI</option>
                                                <option value="11">MAZDA</option>
                                                <option value="563">MCLAREN AUTOMOTIVE</option>
                                                <option value="25">MERCEDES-BENZ</option>
                                                <option value="57">MINI</option>
                                                <option value="28">MITSUBISHI</option>
                                                <option value="14">NISSAN</option>
                                                <option value="182">NISSAN DIESEL</option>
                                                <option value="54">PONTIAC</option>
                                                <option value="44">PORSCHE</option>
                                                <option value="39">RAM</option>
                                                <option value="638">RENAULT</option>
                                                <option value="163">ROLLS-ROYCE</option>
                                                <option value="70">SAAB</option>
                                                <option value="135">SCION</option>
                                                <option value="78">SMART</option>
                                                <option value="37">SUBARU</option>
                                                <option value="53">SUZUKI</option>
                                                <option value="65">TESLA</option>
                                                <option value="17">TOYOTA</option>
                                                <option value="31">VOLKSWAGEN</option>
                                                <option value="60">VOLVO</option>
                                                <option value="38">YAMAHA</option>
                                                <option value="482">ZONGSHEN</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="dropdown col-12 col-lg-6 auction__list">

                                        <div class="form-group">
                                            <select class="form-control" id="models" name="attribute[9999999]">
                                                <option disabled selected value>Модель</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 auction__wrap auction__inner">
                                <div class="row ">
                                    <div class="dropdown col-12 col-lg-6 auction__list">

                                        <div class="form-group">
                                            <select class="form-control" id="year_from">
                                                <option disabled selected value>от года</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="dropdown col-12 col-lg-6 auction__list">

                                        <div class="form-group">
                                            <input type="hidden" id="years" name="attribute[27]" value>
                                            <select class="form-control" id="year_to">
                                                <option disabled selected value>до года</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row  justify-content-center">
                            <button class="btn button col-4 col-sm-5">ПОДОБРАТЬ</button>
                        </div>


                    </form>


                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="form_home">
                        <form enctype="multipart/form-data" action="/index.php?route=information/contact" method="post">
                            <div class="input-group">
                                <input type="hidden" name="url" value="https://www.americaro.com.ua/">
                                <input type="text" class="form-control home__input" name="name" value=""
                                       placeholder="Ваше имя" required>
                                <input type="tel" name="tel" class="form-control home__input" placeholder="Ваш телефон"
                                       required>
                                <input id="comment" type="text" name="comment" value="" class="form-control home__input"
                                       placeholder="Интересующее авто(например, Audi A4 Quatro)" required>

                                <button class="btn button home__button" type="submit">Отправить заявку</button>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="brands">
        <div class="container">
            <div class="row justify-content-between brands__heading">
                <h2 class="title col-6 col-md-6 col-lg-5">Подбор по маркам авто</h2>
                <a href="/index.php?route=product/category&path=28" class="all-link col-6 col-md-3 col-lg-3">Смотреть
                    все
                    <span
                        class="all-link__arrow">&#8594;</span></a>
            </div>
            <div class="row">
                <div class="col-12">
                    <select class="select-tabs form-control brands__select">
                        <option value="0"> Легковые</option>
                        <option value="1"> Внедорожники</option>

                    </select>
                    <ul class="nav nav-tabs  brands__list row flex-wrap justify-content-flex-start">
                        <li class="brands__item brands__item--active">
                            <a data-toggle="tab" href="#PassengerCar" class="brands__item--link brands__active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="35" viewBox="0 0 151.28 73.1"
                                     class="brands__icon svg replaced-svg">
                                    <path
                                        d="M145.29,49.93C144.23,55.9 144.17,56.26 139.08,56.26C133.9,56.26 129.54,56.41 126.99,56.53C125.79,49.99 120.06,45.01 113.18,45.01C106.26,45.01 100.5,50.05 99.36,56.65L47.12,56.65L47.12,56.97C46.11,50.21 40.28,45.01 33.25,45.01C26.32,45.01 20.57,50.05 19.42,56.65L12.45,56.65C5.54,56.65 4.99,48.82 4.99,38.58C4.99,32.65 6.48,27.77 7.31,25.5C10.21,25.39 16.19,25.17 18.32,25.17C19.97,25.17 20.97,23.97 23.16,21.34C27.36,16.29 36.11,5.77 48.67,5.77C51.16,5.77 55.76,5.59 60.63,5.4C65.72,5.2 70.98,5 73.89,5C85.94,5 100.02,15.66 107.25,21.92L74.15,21.92L74.15,12.97L69.15,12.97L69.15,21.92L51.97,21.92C42.44,21.92 40.8,15.21 40.65,14.46L35.74,15.36C36.47,19.36 40.81,26.92 51.97,26.92L112.62,26.92L112.64,26.94L113.43,27.08C113.59,27.1 128.75,29.75 134.99,31.31C140.24,32.62 146.12,38.68 146.28,44.91C145.85,46.83 145.56,48.47 145.29,49.93M113.18,68.1C108.2,68.1 104.14,64.04 104.14,59.05C104.14,54.06 108.2,50.01 113.18,50.01C118.17,50.01 122.23,54.06 122.23,59.05C122.23,64.04 118.17,68.1 113.18,68.1M33.25,68.1C28.26,68.1 24.2,64.04 24.2,59.05C24.2,54.06 28.26,50.01 33.25,50.01C38.23,50.01 42.29,54.06 42.29,59.05C42.29,64.04 38.23,68.1 33.25,68.1M136.2,26.46C130.54,25.04 118.3,22.86 115.07,22.29C111.37,18.66 91.49,0 73.89,0C70.88,0 65.57,0.2 60.44,0.4C55.62,0.59 51.06,0.77 48.67,0.77C33.77,0.77 24.01,12.5 19.32,18.14C18.69,18.89 18,19.73 17.57,20.18C14.02,20.23 5.87,20.55 5.5,20.56L3.98,20.62L3.34,22C3.2,22.29 0,29.21 0,38.58C0,47.77 0,61.65 12.45,61.65L19.45,61.65C20.68,68.16 26.39,73.1 33.25,73.1C40.28,73.1 46.11,67.89 47.12,61.13L47.12,61.65L99.39,61.65C100.61,68.16 106.33,73.1 113.18,73.1C120.08,73.1 125.82,68.1 126.99,61.54C129.46,61.42 133.88,61.26 139.08,61.26C148.35,61.26 149.1,57.1 150.22,50.81C150.48,49.33 150.78,47.66 151.22,45.74L151.29,45.46L151.29,45.18C151.29,36.24 143.48,28.28 136.2,26.46"></path>
                                </svg>
                                Легковые
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content clearfix">
                        <div id="PassengerCar" class="tab-pane active">
                            <ul class=" row brands__dropdown row flex-wrap justify-content-around">
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=42"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/audi.png" alt="Audi" class="brands__logo">
                                        Audi
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=16"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/bmw.png" alt="BMW" class="brands__logo">
                                        BMW
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=41"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/cadilac.png" alt="cadilac"
                                             class="brands__logo">
                                        Cadilac
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=36"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/dodge.png" alt="dodge" class="brands__logo">
                                        Dodge
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=26"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/ford.png" alt="ford" class="brands__logo">
                                        Ford
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=35"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/hyndai.png" alt="hyndai" class="brands__logo">
                                        Hyndai
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=12"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/kia.png" alt="KIA"
                                             class="brands__logo">
                                        KIA
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=52"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/land-rover.png" alt="land rover"
                                             class="brands__logo">
                                        Land Rover
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=22"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/infinity.png" alt="infinity" class="brands__logo">
                                        Infinity
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=31"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/volkswagen.png" alt="Volkswagen"
                                             class="brands__logo">
                                        Volkswagen
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=14"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/nisan.png" alt="Nisan"
                                             class="brands__logo">
                                        Nissan
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=28"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/mitsubishi.png" alt="mitsubishi"
                                             class="brands__logo">
                                        Mitsubishi
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=28"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/suzuki.png" alt="suzuki" class="brands__logo">
                                        Suzuki
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=60"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/volvo.png" alt="volvo" class="brands__logo">
                                        Volvo
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension%2Ffilter&module_id=36&category_id=28&manufacturer_id=11"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/mazda.png" alt="Mazda"
                                             class="brands__logo">
                                        Mazda
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=extension/filter&module_id=36&manufacturer_id=25&category_id=28"
                                       class="brands__element--link">
                                        <img src="/image/brands/logo/mercedes_benz.png" alt="Mercedes-Benz"
                                             class="brands__logo">
                                        Mercedes-Benz
                                    </a>
                                </li>
                                <li class="brands__element">
                                    <a href="/index.php?route=product/category&path=28" class="brands__element--link">
                                        <img src="/image/brands/logo/all-brands.svg" alt="All Brands"
                                             class="brands__logo">Все
                                        марки
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="new">
        <div class="container">
            <div class="row justify-content-between new__heading">
                <h2 class="title col-6 col-md-3 col-lg-2">Новинки</h2>
                <a href="/index.php?route=product/category&path=28" class="all-link col-6 col-md-3 col-lg-3">Смотреть
                    все
                    <span
                        class="all-link__arrow">&#8594;</span></a>
            </div>
            <div id="carousel-example" class="carousel slide " data-ride="carousel">
                <div class="carousel-inner row w-100  new__slider" role="listbox">
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32512"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX235/8df21f14-cecd-48b8-abe4-e78461bbf50a.JPG"
                                    alt="FORD F150 SUPER" title="FORD F150 SUPER" class="image new__image"></a>
                            <span class="new__name">FORD F150 SUPER</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>80883 &#160;</li>
                                    <li>FRONT END&#160;</li>
                                    <li>1FTEW1EF6GFA23104</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32512"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32257"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX159/77923f13-b1fa-4c1c-8756-41ed819069ad.JPG"
                                    alt="FORD FOCUS SE" title="FORD FOCUS SE" class="image new__image"></a>
                            <span class="new__name">FORD FOCUS SE</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>114706 &#160;</li>
                                    <li>FRONT END&#160;</li>
                                    <li>1FAHP3F29CL170150</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32257"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32513"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX234/bc581dc1-89ab-4e1b-9406-1ff6b2fb7038.JPG"
                                    alt="DODGE CALIBER SX" title="DODGE CALIBER SX" class="image new__image"></a>
                            <span class="new__name">DODGE CALIBER SX</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>148923 &#160;</li>
                                    <li>FRONT END&#160;</li>
                                    <li>1B3CB4HA8AD661296</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32513"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32514"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX235/f15c677a-ea30-41fa-80fc-5fcf181fd31a.JPG"
                                    alt="BUICK ENCLAVE CX" title="BUICK ENCLAVE CX" class="image new__image"></a>
                            <span class="new__name">BUICK ENCLAVE CX</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>0 &#160;</li>
                                    <li>FRONT END&#160;</li>
                                    <li>5GAKVCED7BJ128189</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32514"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32259"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX184/1ef29d0b-887f-419e-8d89-b7e086c9d046.JPG"
                                    alt="VOLKSWAGEN JETTA WOLF" title="VOLKSWAGEN JETTA WOLF" class="image new__image"></a>
                            <span class="new__name">VOLKSWAGEN JETTA WOLF</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>90981 &#160;</li>
                                    <li>UNDERCARRIAGE&#160;</li>
                                    <li>3VWRJ7AJ8AM022392</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32259"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32260"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX186/d3e456cc-373e-47a0-8af5-053b69d218c7.JPG"
                                    alt="DODGE DART SXT" title="DODGE DART SXT" class="image new__image"></a>
                            <span class="new__name">DODGE DART SXT</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>126050 &#160;</li>
                                    <li>FRONT END&#160;</li>
                                    <li>1C3CDFBA9DD142814</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32260"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32261"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX189/4d73a0ef-39b2-4a3b-b353-beaa70b9bb76.JPG"
                                    alt="HARLEY-DAVIDSON FLHXSE CVO" title="HARLEY-DAVIDSON FLHXSE CVO"
                                    class="image new__image"></a>
                            <span class="new__name">HARLEY-DAVIDSON FLHXSE CVO</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>0 &#160;</li>
                                    <li>ALL OVER&#160;</li>
                                    <li>1HD1PXN16FB964348</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32261"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32263"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX191/0b5c5b86-f944-4444-81a6-d6abe7229d30.JPG"
                                    alt="GMC TERRAIN SL" title="GMC TERRAIN SL" class="image new__image"></a>
                            <span class="new__name">GMC TERRAIN SL</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>71449 &#160;</li>
                                    <li>FRONT END&#160;</li>
                                    <li>2GKALREK1F6407629</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32263"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32265"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX193/df7e8f32-aa3c-4e4d-a954-aa4f7b8b865a.JPG"
                                    alt="CHEVROLET CRUZE LT" title="CHEVROLET CRUZE LT" class="image new__image"></a>
                            <span class="new__name">CHEVROLET CRUZE LT</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>51878 &#160;</li>
                                    <li>REAR END&#160;</li>
                                    <li>1G1PC5SB1E7439782</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32265"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                    <div class="item carousel-item new__element">
                        <div class="new__element--item">
                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32273"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX199/5b993f34-254e-4a13-a104-5a323e62c65a.JPG"
                                    alt="FORD FUSION SEL" title="FORD FUSION SEL" class="image new__image"></a>
                            <span class="new__name">FORD FUSION SEL</span>
                            <div class="row ">
                                <ul class="new__list col-4">
                                    <li>Пробег:</li>
                                    <li>Урон:</li>
                                    <li>VIN:</li>
                                </ul>
                                <ul class="new__values col-8">
                                    <li>119260 &#160;</li>
                                    <li>REAR END&#160;</li>
                                    <li>3FAHP0JG5CR320788</li>
                                </ul>
                            </div>
                            <p class=" new__rate new__rate--current">Текущая ставка:<span
                                    class="new__rate--price"> 0$</span>
                            </p>
                            <button class="btn new__rate new__rate--recommended">Осталось <span
                                    class="new__rate--price"> 3 ч.</span></button>

                            <a href="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=32273"
                               class="new__more">Смотреть</a>
                        </div>
                    </div>
                </div>
                <a class="right carousel-control carousel-control-prev new__prev" href="#carousel-example" role="button"
                   data-slide="prev">
                    <span class="carousel-control-prev-icon new__prev--icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control carousel-control-next new__next" href="#carousel-example" role="button"
                   data-slide="next">
                    <span class="carousel-control-next-icon new__next--icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>

        </div>
    </section>
    <script>

    </script>

    <section class="purchase">
        <div class="container">
            <div class="row justify-content-center">
                <h2 class="title purchase__title">Процесс покупки</h2>
            </div>
            <div class="row justify-content-between">
                <div class="purchase__element purchase__element--one">
                    <div class=" purchase__item purchase__item--white purchase__line">
                        <div class="purchase__picture purchase__picture--yellow">
                            <img src="catalog/view/theme/default/image/americaro/registration.svg" alt="registration">
                        </div>
                        <div class="purchase__info">
                        <span class="purchase__name">1.
						Этап</span>
                            <span class="purchase__text">Консультация. Подбор автомобиля</span>
                        </div>
                    </div>
                </div>
                <div class="purchase__element purchase__element--two ">
                    <div class=" purchase__item purchase__item--yellow purchase__element--center">
                        <div class="purchase__picture purchase__picture--white purchase__picture--inner">
                            <img src="catalog/view/theme/default/image/americaro/purchase.svg" alt="purchase">
                        </div>
                        <div class="purchase__info">
                        <span class="purchase__name">2.
						Этап</span>
                            <span class="purchase__text">Заключения договора + аукцион</span>
                        </div>
                    </div>
                </div>
                <div class="purchase__element purchase__element--three">
                    <div class=" purchase__item purchase__item--white purchase__element--center">
                        <div class="purchase__picture purchase__picture--yellow">
                            <img src="catalog/view/theme/default/image/americaro/delivery.svg" alt="delivery">
                        </div>
                        <div class="purchase__info">
                        <span class="purchase__name">3.
						Этап</span>
                            <span class="purchase__text">Доставка + Растаможка</span>
                        </div>
                    </div>
                </div>
                <div class="purchase__element purchase__element--fo">
                    <div class=" purchase__item purchase__item--yellow">
                        <div class="purchase__picture purchase__picture--white">
                            <img src="catalog/view/theme/default/image/americaro/rate.png" alt="rate">
                        </div>
                        <div class="purchase__info">
                        <span class="purchase__name">4.
						Этап</span>
                            <span class="purchase__text">Помощь с ремонтом, сертификация и постановка на учёт</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="info">
        <div class="container">
            <div class="row justify-content-between info__heading">
                <h2 class="title col-6 col-md-6 col-lg-5">Полезная информация</h2>
                <a href="/index.php?route=blog/latest" class="all-link col-6 col-md-3 col-lg-3">Смотреть все <span
                        class="all-link__arrow">&#8594;</span></a>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs row  info__nav">
                        <li class="info__item col-3 active"><a data-toggle="tab" href="#article1"
                                                               class=" info__tabs">Статьи</a></li>
                        <li class="info__item col-3"><a data-toggle="tab" href="#article2"
                                                        class="info__tabs">Новости</a>
                        </li>
                        <li class="info__item col-3"><a data-toggle="tab" href="#article3" class="info__tabs">Обзоры</a>
                        </li>
                        <li class="info__item col-3"><a data-toggle="tab" href="#article4" class="info__tabs">Помощь</a>
                        </li>
                    </ul>
                    <div class="tab-content clearfix">
                        <div class="tab-pane active" id="article1">
                            <div class="row info__element">
                                <div class="col-12 col-lg-5 info__inner">
                                    <img src="/image/catalog/car-docs-3-1024x683.jpg" alt="Car" class="image">
                                </div>

                                <div class="col-12 col-lg-7">
                                <span class="info__data"><img src="/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                                    <span class="info__name">Как подобрать автомобиль из Америки?</span>
                                    <p class="info__text">Самостоятельно приобрести автомобиль в Соединённых Штатах
                                        вполне
                                        возможно. Но есть огромные риски попасть на мошенников или получить авто с
                                        серьезными повреждениями. Кроме того, сам поиск, оформление машины, организация
                                        ее
                                        доставки содержит много разных нюансов. Чтобы разобраться во всем этом –
                                        придется
                                        потратить много времени, энергии.</p>
                                    <a href="/index.php?route=blog/article&article_id=126" class="info__link">Читать
                                        далее
                                        <img src="/image/brands/logo/all-brands.svg"
                                             alt="All Brands"
                                             class="info__arrow"></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="article2">
                            <div class="row info__element">
                                <div class="col-12 col-lg-7 info__inner">
                                <span class="info__data"><img src="/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                                    <span class="info__name">Какие документы нужны для растаможки авто из США?</span>
                                    <p class="info__text">Если вы решили приобрести автомобиль в Соединенных Штатах или
                                        Канаде, вам необходимо будет после его покупки пройти этап таможенного
                                        оформления.
                                        Мы полностью берём на себя работу с бумагами, чтобы вы не тратили личное время,
                                        занимаясь скучными процессами.</p>
                                    <a href="/index.php?route=blog/article&article_id=127" class="info__link">Читать
                                        далее
                                        <img src="/image/brands/logo/all-brands.svg"
                                             alt="All Brands"
                                             class="info__arrow"></a>
                                </div>
                                <div class="col-12 col-lg-5">
                                    <img src="/image/cache/catalog/car-cheking-1024x692-1024x691-430x270.jpg" alt="Car"
                                         class=" image">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="article3">
                            <div class="row info__element">
                                <div class="col-12 col-lg-5 info__inner">
                                    <img src="/image/catalog/american-cars-1024x683-1024x682.jpg" alt="Car"
                                         class="  image">
                                </div>
                                <div class="col-12 col-lg-7">
                                <span class="info__data"><img src="/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                                    <span class="info__name">Как сэкономить, покупая авто в США?</span>
                                    <p class="info__text">В Украине с каждым днём появляется все больше американских
                                        автомобилей. Это связано с тем, что общая стоимость машины, доставленной из-за
                                        океана, бывает на 30%, а то и 50% дешевле аналогичной модели в нашей стране.
                                        Даже с
                                        учётом всех сопутствующих затрат.</p>
                                    <a href="/index.php?route=blog/article&article_id=128" class="info__link">Читать
                                        далее<img src="/image/brands/logo/all-brands.svg"
                                                  alt="All Brands"
                                                  class="info__arrow"></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="article4">
                            <div class="row info__element">
                                <div class=" col-12 col-lg-7 info__inner">
                                <span class="info__data"><img src="/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                                    <span class="info__name">Как сертифицировать автомобиль из Америки в Украине?</span>
                                    <p class="info__text">Прежде, чем заграничное транспортное средство попадет на
                                        дороги
                                        Украины, его владелец должен обязательно пройти сертификацию в соответствующих
                                        органах. Зачем это делается? В нашей стране действуют европейские требования к
                                        безопасности и условиям эксплуатации автомобиля, которые отличаются от
                                        аналогичных
                                        американских норм.</p>
                                    <a href="/index.php?route=blog/article&article_id=129" class="info__link">Читать
                                        далее
                                        <img src="/image/brands/logo/all-brands.svg"
                                             alt="All Brands"
                                             class="info__arrow"></a>
                                </div>
                                <div class="col-12 col-lg-5 ">
                                    <img src="/image/catalog/itachki-sertyficat-1024x722-1024x722.jpg" alt="Car"
                                         class="  image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div id="common-home" class="container-fluid">
        <div class="row">
            <div id="content" class="col-sm-12"></div>
        </div>

    </div>

    <section class="seo">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="seo-description">
                        <h2 class="title seo__title">Первый Украинский Интернет аукцион автомобилей с Америки</h2>
                        <p>Машинам
                            отечественного производства многие
                            автолюбители предпочитают авто
                            иностранного производства. Сегодня на
                            дорогах можно встретить автомобили из
                            самых разных стран, в том числе, пользуются
                            популярностью и модели из Америки.
                        </p>
                        <p>Автомобильный
                            рынок США – один из самых богатых на
                            выбор достойных авто на мировом рынке.
                            Это объясняется в первую очередь высоким
                            качеством дорог, а также достаточно
                            слабо развитой железнодорожной
                            инфраструктурой.
                        </p>
                        <p>Чем
                            вызвана популярность американских
                            авто?</p>
                        <p>Несмотря
                            на доступность автопрома стран ЕС и
                            Японии, некоторые автолюбители готовы
                            переплачивать и ждать не один месяц,
                            чтобы получить желаемое<b>авто
                                из США</b>.
                            Обусловлено это многими факторами:</p>
                        <ul>
                            <li>
                                <p>машина
                                    из Америки даже в базовой комплектации
                                    намного лучше, чем аналогичная европейская
                                    или японская модель;</p>
                            </li>
                            <li>
                                <p>на
                                    рынках США и Канады достаточно широкий
                                    выбор моделей, есть не только местного
                                    производства машины, но и транспортные
                                    средства европейских производителей;</p>
                            </li>
                            <li>
                                <p>все
                                    машины из Штатов леворукие;</p>
                            </li>
                            <li>
                                <p>в
                                    некоторых регионах бывает быстрее и
                                    проще приобрести дорогостоящую модель
                                    в Америке, чем ждать ее на родине;</p>
                            </li>
                            <li>
                                <p>качество
                                    сборки американских авто на высоком
                                    уровне, компании-производители регулярно
                                    совершенствуют и улучшают свою продукцию;</p>
                            </li>
                            <li>
                                <p>комплектация
                                    американского авто в разы богаче
                                    европейских моделей, даже если речь
                                    идет о самой бюджетной машине;</p>
                            </li>
                            <li>
                                <p>идеальное
                                    состояние. Перед продажей машина
                                    находится в отличном состоянии, так
                                    как климат в стране практически круглый
                                    год теплый. Помимо этого, американцы
                                    очень тщательно следят за своими
                                    транспортными средствами;</p>
                            </li>
                            <li>
                                <p>открытый
                                    доступ к истории - в централизованной
                                    базе данных хранятся все сведения о
                                    каждом авто, в реестре можно узнать о
                                    количестве владельцев, возможных
                                    авариях и частоте технических осмотров;</p>
                            </li>
                            <li>
                                <p>демократичные
                                    цены – одно из самых основных преимуществ
                                    покупки железного коня в Америке.
                                </p>
                            </li>
                        </ul>
                        <p>Варианты
                            приобретения машины из США</p>
                        <p>Чтобы
                            купить авто в Соединенных Штатах нет
                            необходимости ехать туда. Сегодня можно
                            воспользоваться одним из существующих
                            вариантов:</p>
                        <ul>
                            <li>
                                <p>через
                                    дилеров в Америке;</p>
                            </li>
                            <li>
                                <p>на
                                    торговых аукционных площадках;</p>
                            </li>
                            <li>
                                <p>купить
                                    авто через родственников, проживающих
                                    в Штатах;</p>
                            </li>
                            <li>
                                <p>у
                                    посредников или аккредитованных
                                    компаний.</p>
                            </li>
                        </ul>
                        <p>Чаще
                            всего востребован вариант покупки авто
                            на аукционах. Основными из них считаются:</p>
                        <ul>
                            <li>
                                <p><b>интернет
                                        аукцион copart </b>–
                                    площадка, предлагающая достаточно
                                    часто авто с небольшими проблемами
                                    после аварий, поэтому не стоит
                                    самостоятельно выбирать машину, лучше
                                    воспользоваться услугами профессионалов;</p>
                            </li>
                            <li>
                                <p><b>интернет
                                        аукцион iaai </b>предлагает
                                    транспортные средства, размещенные
                                    различными страховыми компаниями,
                                    после выплат возмещений. Торги могут
                                    осуществляться только между
                                    зарегистрированными дилерами;</p>
                            </li>
                            <li>
                                <p>аукцион
                                    Manheim
                                    является наиболее известным аукционом,
                                    действующим с 1945 года. Объем продаж на
                                    этой площадке насчитывает более 10 тысяч
                                    автомобилей в день. Сюда не сможет
                                    попасть частное лицо или случайная
                                    компания, здесь сотрудничают только
                                    проверенные профессионалы. На аукционе
                                    можно получить все данные о техническом
                                    состоянии машины, ее истории. Свои
                                    автомобили здесь выставляют более
                                    сотни различных торговых площадок
                                    Канады и Соединенных Штатов.</p>
                            </li>
                        </ul>
                        <p>Преимущества
                            сотрудничества с профессионалами</p>
                        <p>Наша
                            компания готова помочь вам в покупке
                            автомобиля из Америки. Вам не придется
                            самостоятельно заниматься поиском,
                            оформлением и доставкой авто. Мы все
                            сделаем за вас.
                        </p>
                        <p>Для
                            начала вам необходимо просто связаться
                            с нами и оставить свою заявку по телефону
                            или с помощью удобного для вас мессенджера.
                            Мы работаем только по договору, после
                            заключения которого вам необходимо
                            будет внести 10% взнос от стоимости авто.

                        </p>
                        <p>Мы
                            полностью берем все проблемы по выбору
                            авто на себя. Для этого мы изучаем десятки
                            сотен предложений с известных американских
                            аукционов, отбираем самые интересные
                            и знакомим с ними наших клиентов. Вы
                            сами будет утверждать выбор того или
                            иного автомобиля. У вас будет возможность
                            вместе с менеджером участвовать в
                            аукционах в режиме онлайн или по телефону.</p>
                        <p>После
                            выбора и полной оплаты машины она
                            перевозится на наш склад, <b>доставка
                                автомобиля из Америки </b>осуществляется
                            по суше или по морю, вы сами можете
                            выбрать вариант доставки и оплатить
                            его. В течение месяца-полутора вы получите
                            долгожданную машину. Все необходимые
                            для таможни документы мы сами подготавливаем
                            и оформляем.
                        </p>
                        <p>В
                            качестве дополнительных услуг наша
                            компания предлагает вам подбор необходимых
                            запчастей, ремонт машины у наших
                            партнеров, сертификацию.
                        </p>
                        <p>Выбор
                            профессионалов для покупки автомобиля
                            из Америки – это гарантия вашего успеха
                            и получения желаемой машины по всем
                            правилам и законам.&nbsp;
                        </p>
                    </div>
                    <div id="link" class="link">Читать далее</div>


                    <script type="text/javascript">
                        var link = document.getElementById("link"),
                            box = document.querySelector(".seo-description");
                        link.onclick = function () {
                            box.classList.add("open_seo_text");
                            link.classList.add("hideLink");
                        }
                    </script>


                </div>
            </div>

        </div>
    </section>

@endsection
