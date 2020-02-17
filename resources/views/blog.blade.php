@extends('layouts.index')

@section('title')
    Блог
@endsection

@section('content')
    <div class="container">
        <ul class="row col-12" xmlns:v="http://rdf.data-vocabulary.org/#">

            <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                    href="https://www.americaro.com.ua/index.php?route=common/home"
                    class="product__navigation--link product__link" rel="v:url" property="v:title"><i
                        class="fa fa-home"></i></a></li>
            <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                    href="https://www.americaro.com.ua/index.php?route=blog/latest"
                    class="product__navigation--link product__link" rel="v:url" property="v:title">Блог</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-12 showcase-list">
                <div class="row justify-content-between info__heading">
                    <h2 class="title col-6 col-md-6 col-lg-5">Блог </h2>
                </div>
                <br/>

                <section class="info">
                    <div class="row info__element" style="margin-bottom:20px;">
                        <div class="col-12 col-lg-5 info__inner">
                            <a href="https://www.americaro.com.ua/index.php?route=blog/article&amp;article_id=128"><img
                                    src="https://www.americaro.com.ua/image/cache/catalog/american-cars-1024x683-1024x682-430x270.jpg"
                                    alt="Как сэкономить, покупая авто в США?"
                                    title="Как сэкономить, покупая авто в США?"
                                    class="image"/></a>
                        </div>
                        <div class="col-12 col-lg-7">
                                <span class="info__data"><img src="https://www.americaro.com.ua/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                            <span class="info__name">Как сэкономить, покупая авто в США?</span>
                            <p class="info__text">В Украине с каждым днём появляется все больше американских
                                автомобилей.
                                Это связано с тем, что общая стоимость машины, доставленной из-за океана, бывает на 30%,
                                а
                                то и 50% дешевле аналогичной модели в..</p>
                            <a href="https://www.americaro.com.ua/index.php?route=blog/article&amp;article_id=128"
                               class="info__link">Читать далее <img src="https://www.americaro.com.ua/image/brands/logo/all-brands.svg"
                                                                    alt="All Brands"
                                                                    class="info__arrow"></a>
                        </div>
                    </div>
                    <div class="row info__element" style="margin-bottom:20px;">
                        <div class="col-12 col-lg-5 info__inner">
                            <a href="https://www.americaro.com.ua/index.php?route=blog/article&amp;article_id=127"><img
                                    src="https://www.americaro.com.ua/image/cache/catalog/car-cheking-1024x692-1024x691-430x270.jpg"
                                    alt="Какие документы нужны для растаможки авто из США?"
                                    title="Какие документы нужны для растаможки авто из США?" class="image"/></a>
                        </div>

                        <div class="col-12 col-lg-7">
                                <span class="info__data"><img src="https://www.americaro.com.ua/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                            <span class="info__name">Какие документы нужны для растаможки авто из США?</span>
                            <p class="info__text">Если вы решили приобрести автомобиль в Соединенных Штатах или Канаде,
                                вам
                                необходимо будет после его покупки пройти этап таможенного оформления. Мы полностью
                                берём на
                                себя работу с бумагами, чтобы вы ..</p>
                            <a href="https://www.americaro.com.ua/index.php?route=blog/article&amp;article_id=127"
                               class="info__link">Читать далее <img src="https://www.americaro.com.ua/image/brands/logo/all-brands.svg"
                                                                    alt="All Brands"
                                                                    class="info__arrow"></a>
                        </div>
                    </div>

                    <div class="row info__element" style="margin-bottom:20px;">
                        <div class="col-12 col-lg-5 info__inner">
                            <a href="https://www.americaro.com.ua/index.php?route=blog/article&amp;article_id=126"><img
                                    src="https://www.americaro.com.ua/image/cache/catalog/car-docs-3-1024x683-430x270.jpg"
                                    alt="Как подобрать автомобиль из Америки?"
                                    title="Как подобрать автомобиль из Америки?"
                                    class="image"/></a>
                        </div>
                        <div class="col-12 col-lg-7">
                                <span class="info__data"><img src="https://www.americaro.com.ua/image/brands/calendar.svg" alt="Calendar"
                                                              class="info__calendar">13.12.2019</span>
                            <span class="info__name">Как подобрать автомобиль из Америки?</span>
                            <p class="info__text">Самостоятельно приобрести автомобиль в Соединённых Штатах вполне
                                возможно.
                                Но есть огромные риски попасть на мошенников или получить авто с серьезными
                                повреждениями.
                                Кроме того, сам поиск, оформление ..</p>
                            <a href="https://www.americaro.com.ua/index.php?route=blog/article&amp;article_id=126"
                               class="info__link">Читать далее <img src="https://www.americaro.com.ua/image/brands/logo/all-brands.svg"
                                                                    alt="All Brands"
                                                                    class="info__arrow"></a>
                        </div>
                    </div>
                </section>
                <div class="row">
                    <div class="col-sm-6 text-left"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
