@extends('layouts.index')

@section('title')
    Расшифровка обозначений
@endsection

@section('content')

    <div id="information-information" class="container">
        <ul class="row col-12" xmlns:v="http://rdf.data-vocabulary.org/#">

            <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                    href="https://www.americaro.com.ua/index.php?route=common/home"
                    class="product__navigation--link product__link" rel="v:url" property="v:title"><i
                        class="fa fa-home"></i></a></li>
            <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                    href="https://www.americaro.com.ua/index.php?route=information/information&amp;information_id=12"
                    class="product__navigation--link product__link" rel="v:url" property="v:title">Расшифровка
                    обозначений</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-xs-12 col-sm-12">
                <h1 class="title">Расшифровка обозначений</h1>
                <p><b>ALL OVER </b>(повсеместные повреждения)</p>
                <p><b>BURN - ENGINE</b> (пожар — двигатель)</p>
                <p><b>BURN </b>(пожар)</p>
                <p><b>BURN - INTERIOR</b> (пожар — салон)</p>
                <p><b>CASH FOR CLUNKERS </b>(наличные за старые автомобили)</p>
                <p><b>FRAME DAMAGE REPORTED</b> (заявленное повреждение корпуса)</p>
                <p><b>HAIL </b>(град)</p>
                <p><b>MINOR DENTS/SCRATCHES</b> (незначительные выбоины/царапины)</p>
                <p><b>PARTIAL/INCOMPLETE REPAIR</b> (частичный/неполный ремонт)</p>
                <p><b>ROLLOVER </b>(переворот)</p>
                <p><b>SIDE </b>(боковая часть)</p>
                <p><b>TOP/ROOF</b> (верхняя часть/крыша)</p>
                <p><b>UNDERCARRIAGE </b>(ходовая часть)</p>
                <p><b>VANDALISM </b>(вандализм)</p>
                <p><b>WATER/FLOOD</b> (ЗАТОПЛЕНИЕ/НАВОДНЕНИЕ)</p>
                <p><b>DAMAGE HISTORY</b> (история повреждений)</p>
                <p><b>FRONT END</b> (передняя часть)</p>
                <p><b>MECHANICAL</b> (механические повреждения)</p>
                <p><b>NORMAL WEAR</b> (естественный износ)</p>
                <p><b>REJECTED REPAIR</b> (в ремонте было отказано)</p>
                <p><b>REAR END</b> (задняя часть)</p>
                <p><b>STRIPPED </b>(снята обшивка)</p>
                <p><b>UNKNOWN </b>(неизвестно)</p>
                <p><b>MISSING/ALTERED VIN</b> (отсутствующий/измененный VIN)</p>
                <p><b>REPLACED VIN</b> (замененный VIN)</p>
                <p><b>BIOHAZARDOUS/CHEMICAL</b> (биологическая/химическая опасность)</p>
                <p><br></p>
                <p><b>Rear-wheel drive</b> привод на заднюю ось</p>
                <p><b>Front-wheel Drive</b> привод на переднюю ось</p>
                <p><b>All wheel drive</b> полный привод</p>
                <p><br></p><h4 style="text-align: center; "><b>Условия продажи :</b></h4>
                <p><br></p>
                <p><b>Pure Sale</b> - Чистая продажа — без минимальной ставки или зарезервированной цены. Лот будет
                    присужден участнику с самой высокой ставкой при закрытии ставок на виртуальном аукционе.</p>
                <p><b>On Approval</b> - По утверждению — продавец зарезервировал право на утверждение максимальной
                    итоговой ставки, указанной в ходе виртуального аукциона. Продавец может утвердить ставку до 17:00:00
                    по тихоокеанскому времени на следующий день после торгов. Участник с самой высокой ставкой обязан
                    купить транспортное средство, если продавец дал утверждение в течение указанного периода.</p>
                <p><b>Minimum Bid</b> - Минимальная ставка — продавец задал зарезервированную цену для этого лота. Если
                    минимальная ставка не была превышена во время виртуального аукциона, продавец может утвердить
                    предложенную ставку до 17:00 по тихоокеанскому времени следующего рабочего дня после даты торгов.
                </p>
                <p><br></p><h4 style="text-align: center; "><b>Пиктограммы:</b></h4>
                <p><br></p>
                <p><b>Run &amp; Drive</b> (заводится и едет)</p>
                <p>На момент получения транспортного средства на площадке компания подтвердила, что транспортное
                    средство завелось, на нем переключались передачи и оно двигалось вперед самостоятельно. Нет
                    гарантии, что транспортное средство пригодно к эксплуатации на дорогах или что на нем можно
                    ехать</p>
                <p><b>Enhanced Vehicle </b>(не заводится и не едет)</p>
                <p><b>Engine Start Program</b> (заводится, но не едет)</p>
                <p><br></p><h4 style="text-align: center; "><b>Типы документов</b></h4>
                <p style="text-align: center; ">НЕ ЭКСПОРТИРУЕМЫЕ:</p>
                <p><br></p>
                <p>Штат Тайтл</p>
                <p>IN – Bill of Sale - Parts Only</p>
                <p>MD - Parts Only – No Title Letter</p>
                <p>MI – Scrap – Bill of Sale</p>
                <p>MT – Bill of Sale - Parts Only</p>
                <p>NY – Bill of Sale</p>
                <p>NY - MV907A- Parts Only W/Lien ho</p>
                <p>NY - MV907A- Parts Only</p>
                <p>NY - MV-37 – Dismantle or Scrap</p>
                <p>FL – Cash for Clunkers</p>
                <p>HI – Bill of Sale - Parts Only</p>
                <p>CA - Acquisition Bill Of Sale</p>
                <p>CT - Bill Of Sale-Salvage</p>
                <p>Canadian title and/or registration and/or Parts only</p>
                <p><br></p><h4 style="text-align: center; "><b>Типы документов</b></h4>
                <p style="text-align: center; ">ЭКСПОРТИРУЕМЫЕ :</p>
                <p style="text-align: center; "> (но с ожиданием переоформления документов, доплата 200 уе)</p>
                <p><br></p>
                <p>Штат Тайтл</p>
                <p>GA - Bill of Sale minimum 6 weeks or more</p>
                <p>CA - Bill of Sale 8 weeks (frequently behind on processing, can be more)</p>
                <p>KY - Bill of Sale 3 weeks (from TX could be exported immediately)</p>
                <p>WA - Bill of Sale 2 weeks (from TX could be exported immediately)</p>
                <p>WI - Junked vehicle bill of sale: 6 -8 weeks</p>
                <p>AK - Bill of Sale – Junk (approx. 4 weeks)</p>
                <p>CO - Bill of Sale – Parts Only (approx. 4 weeks or it could be exported out of TX immediately)</p>
                <p>MN - Bill of Sale – Parts Only (approx. 4 weeks)</p>
                <p>NC - Bill of Sale – Parts Only (approx. 2 weeks)</p>
                <p>OH - Bill of Sale – Destruction Only (approx. 2 weeks)</p>
                <p>SC - Disposal Authority Certificate (approx. 3 weeks)</p>
                <p>TN - Bill of Sale – Parts Only (approx. 7 weeks)</p>
                <p>DC – Government Parts Only - Salvage</p>
                <p>Lien Sale Documents – 4-6 weeks</p>
                <p>US Government Certificate to obtain a title (approx. 2 weeks)</p>
                <p>MCO – Manufacturers Certificate of Origin (approx. 2 weeks)</p>
                <p>NY – MV907A ( if DMV records shows active title or open lien record, then we have to apply for new
                    title in order to remove that record. It could take 1-2 weeks)</p>
                <p>CT – Ownership Transfer from Salvage – (approx. 3 weeks)</p>
                <p><br></p>
                <p><br></p><h4 style="text-align: center;"><b>Типы документов</b></h4>
                <p style="text-align: center;">ЭКСПОРТИРУЕМЫЕ !!!!! (стандарт)</p>
                <p><br></p>
                <p>Все штаты : CERTIFICATE OF TITLE&nbsp;</p>
                <p>CERT OF TITLE SLVG REBUILDABLE&nbsp;</p>
                <p>CERT OF TITLE-SALVAGE</p>
                <p>SALVAGE CERTIFICATE</p>
                <p><br></p><h4 style="text-align: center; "><b>Лоты в трех штатах + 200 дол к стандартной ставке:</b>
                </h4>
                <p><br></p>
                <p>MI – Мичиган</p>
                <p>WI – Висконсин</p>
                <p>AL - Аллабама</p>
                <p><br></p></div>
        </div>

    </div>

@endsection
