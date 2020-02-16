@extends('layouts.index')

@section('title')
    выбранная машина
@endsection

@section('content')
    <section class="product">
        <div class="container">
            <div class="row product__heading">
                <ul class="row col-12" xmlns:v="http://rdf.data-vocabulary.org/#">

                    <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                            href="https://www.americaro.com.ua/index.php?route=common/home"
                            class="product__navigation--link product__link" rel="v:url" property="v:title"><i
                                class="fa fa-home"></i></a></li>
                    <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                            href="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28"
                            class="product__navigation--link product__link" rel="v:url" property="v:title">Аукционе
                            Copart</a></li>
                    <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                            href="https://www.americaro.com.ua/index.php?route=product/product&amp;path=28&amp;product_id=35092"
                            class="product__navigation--link product__link" rel="v:url" property="v:title">TOYOTA
                            PRIUS</a>
                    </li>
                </ul>
                <div class="col-12 row justify-content-between">
                    <h2 class="title">{{$automobile->model->brand->name}} {{$automobile->model->name}}</h2>
                    <span class="product__current-rate">Текущая ставка:  <span
                            class="bidPrice product__current-rate--bold">{{$automobile->current_rate}} $</span></span>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5   product__wrapper product__box">
                    <table class=" table product__table product__border">
                        <thead class="product__table--heading">
                        <tr>
                            <th colspan="2">Данные аукциона:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product__table--name">Расположение аукциона</td>
                            <td class="product__table--value">BLAINE, MN, 55434, USA</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Дата продажи</td>
                            <td class="product__table--value">{{$automobile->created_at}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Осталось времени</td>
                            <td class="product__table--value">23 ч.</td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table product__table product__border">
                        <thead class="product__table--heading">
                        <tr>
                            <th colspan="2">Подробная информация о лоте:</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product__table--name">№ лота</td>
                            <td class="product__table--value">{{$automobile->id}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">VIN</td>
                            <td class="product__table--value">{{$automobile->VIN}}</td>
                        </tr>

                        <tr>
                            <td class="product__table--name">Стоимость целого авто</td>
                            <td class="finalPrice product__table--value">1488 $</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Тип сертификата</td>
                            <td class="product__table--value">CERT OF TITLE-SALVAGE</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Основные повреждения</td>
                            <td class="product__table--value">{{$automobile->damage->name}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Второстепенные
                                повреждения
                            </td>
                            <td class="product__table--value">MINOR DENT/SCRATCHES</td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table product__table product__border">
                        <thead class="product__table--heading">
                        <tr>
                            <th colspan="2">Дополнительные сведения:</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td class="product__table--name">Тип кузова</td>
                            <td class="product__table--value">HATCHBAC</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Пробег (мили)</td>
                            <td class="product__table--value">{{$automobile->mileage}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Цвет</td>
                            <td class="product__table--value">{{$automobile->additional->color}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Год выпуска</td>
                            <td class="product__table--value">{{$automobile->year}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Двигатель</td>
                            <td class="product__table--value">
                                {{$automobile->additional->engine}} {{$automobile->additional->count_of_cylinders}}
                            </td>
                        </tr>

                        <tr>
                            <td class="product__table--name">Количество цилиндров</td>
                            <td class="product__table--value">{{$automobile->additional->count_of_cylinders}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Передача</td>
                            <td class="product__table--value">{{$automobile->transmission->name}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Привод</td>
                            <td class="product__table--value">{{$automobile->additional->driver_unit->name}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Топливо</td>
                            <td class="product__table--value">{{$automobile->additional->fuel->name}}</td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Наличие ключей</td>
                            <td class="product__table--value">
                                @if($automobile->additional->has_key == 0)
                                    No
                                @else
                                    Yes
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="product__table--name">Особые примечания</td>
                            <td class="product__table--value">Run and Drive</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="col-12 product__wrap">
                        <h4 class="product__subtitle">ОТЧЕТ ОСОСТОЯНИИ АВТОМОБИЛЯ</h4>
                        <h3 class="product__title">Заводится и передвигается своим ходом</h3>
                        <p class="product__text">{{$automobile->additional->state}}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-7 product__wrapper">
                    <ul class="thumbnails">
                        <li><a class="thumbnail"
                               href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/d82b372c-0b4c-4436-99ba-db336e77f1e5.JPG"
                               title="TOYOTA PRIUS"><img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/d82b372c-0b4c-4436-99ba-db336e77f1e5.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/d82b372c-0b4c-4436-99ba-db336e77f1e5.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/d82b372c-0b4c-4436-99ba-db336e77f1e5.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/ba9858f9-1cbc-4788-8c08-5bf0b892b7d7.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/ba9858f9-1cbc-4788-8c08-5bf0b892b7d7.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/5540c900-c40a-47cb-9fd0-3965db243edf.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/5540c900-c40a-47cb-9fd0-3965db243edf.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/88ff3dcc-9a74-4761-8403-4c88d627ed4b.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/88ff3dcc-9a74-4761-8403-4c88d627ed4b.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/8e4df21e-2870-4891-bc87-5e4089c5e926.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/8e4df21e-2870-4891-bc87-5e4089c5e926.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/e7aa3d57-626c-4fb7-accb-516f15648573.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/e7aa3d57-626c-4fb7-accb-516f15648573.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/8842a495-06cd-465f-b4da-6354630d9eee.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/8842a495-06cd-465f-b4da-6354630d9eee.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/35b4fded-d56f-434a-a664-00abd3ba6b10.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/35b4fded-d56f-434a-a664-00abd3ba6b10.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/d296e2db-6354-492c-89b4-ccb487e1db62.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/d296e2db-6354-492c-89b4-ccb487e1db62.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                        <li class="image-additional"><a class="thumbnail"
                                                        href="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/b46cdaf3-7643-48db-8e41-162bd0cb87f5.JPG"
                                                        title="TOYOTA PRIUS"> <img
                                    src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/b46cdaf3-7643-48db-8e41-162bd0cb87f5.JPG"
                                    title="TOYOTA PRIUS" alt="TOYOTA PRIUS"/></a></li>
                    </ul>

                    <div class="row">
                        <div class="col-12">
                            <table class="table product__table product__border">
                                <thead class="product__table--heading">
                                <tr>
                                    <th colspan="2">Информация о ставках:</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product__table--name product__table--red">Текущая ставка</td>
                                    <td class="bidPrice product__table--value product__table--red">$125 USD</td>
                                </tr>
                                <tr>
                                    <td class="product__table--name">Цена с доставкой в Украине
                                    </td>
                                    <td class="finalPrice product__table--value">6364 USD</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-12 col-lg-6 col-md-6">

                            <table class="table product__table product__border--small">
                                <thead class="product__table--heading">
                                <tr>
                                    <th colspan="2">Расчет стоимости:</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="Qsold-hide">
                                    <td class="product__table--name product__payment">Текущая ставка: ($) <br/><br/>
                                        Рекомендуемая ставка:
                                    </td>
                                    <td class="product__table--value product__payment--value">
                                        <input id="priceContainer" type="number" value="125" class="product__input">
                                        <a href="#myModalAuto" class="btn button col-6 mb-3 mobile_btn_modal"
                                           data-toggle="modal" data-content="TOYOTA PRIUS"
                                           data-url="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=35092"
                                           data-price="125" data-comment="Хочу авто: TOYOTA PRIUS, № Лота: 56095659"
                                           style="max-width: 100%;">Заказать авто</a><br/>
                                        <a href="/index.php?route=product/category&path=32"
                                           style="text-decoration:underline;padding-top: 13px;display: block;"
                                           target="_blank">Смотреть</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Сборы аукциона</td>
                                    <td class="product__table--value product__payment--value">
                                        <span id="auctionComission">185 USD</span>
                                        <span id="auctionComissionFixed">185 USD</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Брокер и Экспедиция</td>
                                    <td id="brokerAndExpedition" class="product__table--value product__payment--value">
                                        1000
                                        USD
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Наша комиссия</td>
                                    <td id="telegaComission"
                                        class="product__table--value product__payment--value telegaComissionChenge">
                                        <select>
                                            <option>500 USD</option>
                                            <option>750 USD</option>
                                            <option>1500 USD</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Таможенный сбор
                                    </td>
                                    <td class="customsTax product__table--value product__payment--value">826 USD</td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Доставка</td>
                                    <td id="deliveryFee" class="product__table--value product__payment--value">1668
                                        USD
                                    </td>
                                </tr>
                                <tr class="product__table--total">
                                    <td class="product__table--name product__payment">ВСЕГО (Авто + доставка)</td>
                                    <td class="finalPrice product__table--value product__payment--value">6364 USD</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6">
                            <table class="table product__table product__border--small">
                                <thead class="product__table--heading">
                                <tr>
                                    <th colspan="2">Из чего состоит таможенный сбор:</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product__table--name product__payment">Пошлина</td>
                                    <td id="customsFee" class="product__table--value product__payment--value">0 USD</td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Акцизный сбор</td>
                                    <td id="excise_tax" class="product__table--value product__payment--value">820 USD
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">Пенсионный фонд</td>
                                    <td id="pensionFund" class="product__table--value product__payment--value">6 USD
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__table--name product__payment">НДС</td>
                                    <td id="vat" class="product__table--value product__payment--value">1060 USD</td>
                                </tr>
                                <tr class="product__table--total">
                                    <td class="product__table--name product__payment">Итого</td>
                                    <td class="customsTax product__table--value product__payment--value">826 USD</td>
                                </tr>
                                </tbody>
                            </table>
                            <div id="copartComissonData">0.01 - 49.99,1.00
                                50.00 - 99.99,1.00
                                100.00 - 199.99,25.00
                                200.00 - 299.99,50.00
                                300.00 - 349.99,75.00
                                350.00 - 399.99,75.00
                                400.00 - 449.99,110.00
                                450.00 - 499.99,110.00
                                500.00 - 549.99,125.00
                                550.00 - 599.99,130.00
                                600.00 - 699.99,140.00
                                700.00 - 799.99,155.00
                                800.00 - 899.99,170.00
                                900.00 - 999.99,185.00
                                1000.00 - 1199.99,200.00
                                1200.00 - 1299.99,225.00
                                1300.00 - 1399.99,240.00
                                1400.00 - 1499.99,250.00
                                1500.00 - 1599.99,260.00
                                1600.00 - 1699.99,275.00
                                1700.00 - 1799.99,285.00
                                1800.00 - 1999.99,300.00
                                2000.00 - 2399.99,325.00
                                2400.00 - 2499.99,335.00
                                2500.00 - 2999.99,350.00
                                3000.00 - 3499.99,400.00
                                3500.00 - 3999.99,450.00
                                4000.00 - 4499.99,475.00
                                4500.00 - 4999.99,500.00
                                5000.00 - 5999.99,525.00
                                6000.00 - 7499.99,550.00
                                7500.00 - 9999.99,575.00
                                10000.00 - 14999.99,600.00
                                15000.00 - 19999.99,4%
                                20000.00 - 24999.99,4%
                                25000.00 - 29999.99,4%
                                30000.00 - 34999.99,4%
                                35000.00 - 10000000000000000000000000.00,4%
                            </div>
                            <div id="categoryID">1</div>

                        </div>


                    </div>

                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <br/>
                            <a href="#myModalAuto" class="btn button col-6 mb-3" data-toggle="modal"
                               data-content="TOYOTA PRIUS"
                               data-url="https://www.americaro.com.ua/index.php?route=product/product&amp;product_id=35092"
                               data-price="125" data-comment="Хочу авто: TOYOTA PRIUS, № Лота: 56095659"
                               style="max-width: 100%;">Заказать авто</a>
                        </div>
                    </div>

                    <!--div class="col-12 product__wrap">
                                <h4 class="product__subtitle">ОТЧЕТ ОСОСТОЯНИИ АВТОМОБИЛЯ</h4>
                                <h3 class="product__title">Заводится и передвигается своим ходом </h3>
                                <p class="product__text">Транспортные средства, в описании которых имеется пометка "Подготовленные транспортные средства", - это такие, (i) которые в компании Copart с разрешения продавца подготовили к продаже, например, помыли, пропылесосили или обработали защитным покрытием или (ii) транспортные средства, в отношении которых в рамках специальной программы компания Copart имеет право самостоятельно принимать решения о подготовке к продаже с тем, чтобы получить за них максимальную возможную цену. Эта пометка не является гарантией проведения мероприятий по подготовке к продаже, а, скорее, указывает на то, что подпадающие под действие программы.</p>
                        </div-->

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
                    @foreach($newAutomobiles as $newAutomobile)
                        <div class="item carousel-item new__element">
                            <div class="new__element--item">
                                <a href="{{route('automobile', $newAutomobile->id)}}"><img
                                        src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX235/8df21f14-cecd-48b8-abe4-e78461bbf50a.JPG"
                                        alt="FORD F150 SUPER" title="FORD F150 SUPER" class="image new__image"></a>
                                <span
                                    class="new__name">{{$newAutomobile->model->brand->name}} {{$newAutomobile->model->name}}</span>
                                <div class="row ">
                                    <ul class="new__list col-4">
                                        <li>Пробег:</li>
                                        <li>Урон:</li>
                                        <li>VIN:</li>
                                    </ul>
                                    <ul class="new__values col-8">
                                        <li>{{$newAutomobile->mileage}}</li>
                                        <li>{{$newAutomobile->damage->name}}</li>
                                        <li>{{$newAutomobile->VIN}}</li>
                                    </ul>
                                </div>
                                <p class=" new__rate new__rate--current">Текущая ставка:<span
                                        class="new__rate--price">{{$newAutomobile->current_rate}} $</span>
                                </p>
                                <button class="btn new__rate new__rate--recommended">Осталось <span
                                        class="new__rate--price"> < 1 ч.</span></button>

                                <a href="{{route('automobile', $newAutomobile->id)}}"
                                   class="new__more">Смотреть</a>
                            </div>
                        </div>
                    @endforeach
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
@endsection
