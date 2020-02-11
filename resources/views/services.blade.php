@extends('layouts.index')

@section('title')
    Услуги
@endsection

@section('content')
    <div id="information-information" class="container">
        <ul class="row col-12" xmlns:v="http://rdf.data-vocabulary.org/#">

            <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                    href="https://www.americaro.com.ua/index.php?route=common/home"
                    class="product__navigation--link product__link" rel="v:url" property="v:title"><i
                        class="fa fa-home"></i></a></li>
            <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                    href="https://www.americaro.com.ua/index.php?route=information/information&amp;information_id=13"
                    class="product__navigation--link product__link" rel="v:url" property="v:title">Услуги</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-xs-12 col-sm-12">
                <h1 class="title">Услуги</h1>
                <div class="container mb-5 mt-5">
                    <div class="pricing card-deck flex-column flex-md-row mb-3">
                        <div class="card card-pricing text-center px-3 mb-4"
                             style="border: 3px solid #000;border-radius: 0;">
                        <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm"
                              style="background:#000;">AMERICARO</span>
                            <div style="min-height:200px;">
                                <img src="/catalog/view/theme/default/image/americaro/car222.png"
                                     style="width: 100%;height: auto;text-align: center;max-height:200px;">
                            </div>
                            <div class="bg-transparent card-header pt-4 border-0">
                                <h1 class="h1 font-weight-normal text-center mb-0" style="color:#000;">Эконом <br>300$
                                </h1>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-4" style="min-height:260px;">
                                    <li>Клиент самостоятельно подбирает автомобиль на сайте аукциона
                                        Copart,IAAI,Mannheim.
                                        <br><br>Компания сопровождает автомобиль на всех этапах доставки.
                                    </li>

                                </ul>
                                <a href="#myModal1" class="btn button col-6 mb-3" data-toggle="modal"
                                   data-content="Пакет услуг 'Эконом'">Заказать</a>
                            </div>
                        </div>
                        <div class="card card-pricing text-center px-3 mb-4"
                             style="border: 3px solid #000;border-radius: 0;">
                        <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm"
                              style="background:#000;">AMERICARO</span>
                            <div style="min-height:200px;">
                                <img src="/catalog/view/theme/default/image/americaro/car111.png"
                                     style="width: 100%;height: auto;text-align: center;max-height:200px;">
                            </div>
                            <div class="bg-transparent card-header pt-4 border-0">
                                <h1 class="h1 font-weight-normal text-center mb-0" style="color:#000;">стандарт <br>750$
                                </h1>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-4" style="min-height:260px;">
                                    <li>Персональный менеджер подбирает автомобиль учитывая все интересы и особенности
                                        клиента.
                                        Предоставляет детальный отчёт со всех доступных источников. Осуществляет все
                                        этапы
                                        доставки.<br><br>По желанию клиента компания занимается ремонтом, сертификацией
                                        и
                                        постановкой автомобиля на учёт.<br></li>
                                </ul>
                                <a href="#myModal1" class="btn button col-6 mb-3" data-toggle="modal"
                                   data-content="Пакет услуг 'Cтандарт'">Заказать</a>
                            </div>
                        </div>
                        <div class="card card-pricing text-center px-3 mb-4"
                             style="border: 3px solid #000;border-radius: 0;">
                        <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom text-white shadow-sm"
                              style="background:#000;">AMERICARO</span>
                            <div style="min-height:200px;">
                                <img src="/catalog/view/theme/default/image/americaro/car333.png"
                                     style="width: 100%;height: auto;text-align: center;max-height:200px;">
                            </div>
                            <div class="bg-transparent card-header pt-4 border-0">
                                <h1 class="h1 font-weight-normal text-center mb-0" style="color:#000;">Премиум <br>1500$
                                </h1>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-4" style="min-height:260px;">
                                    <li></li>
                                    <li>Эксклюзивность данного пакета заключается в том, что полная оплата клиентом
                                        производиться после доставки автомобиля в Украину.&nbsp;
                                    </li>
                                    <li><br></li>
                                    <li>Персональный менеджер подбирает автомобиль, предоставляет отчеты и сопровождает
                                        на
                                        всех этапах доставки, включая сертификацию и ремонт под ключ.
                                    </li>
                                </ul>
                                <a href="#myModal1" class="btn button col-6 mb-3" data-toggle="modal"
                                   data-content="Пакет услуг 'Премиум'">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
