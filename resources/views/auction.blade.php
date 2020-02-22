@extends('layouts.index')

@section('title')
    Авто из США. Любые автомобили с аукционов США.
@endsection

@section('content')
    <link rel="stylesheet" href="css/auction.css">
    <section class="catalog">
        <div class="container">
            <ul class="row col-12" xmlns:v="http://rdf.data-vocabulary.org/#">
                <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                        href="https://www.americaro.com.ua/index.php?route=common/home"
                        class="product__navigation--link product__link" rel="v:url" property="v:title"><i
                            class="fa fa-home"></i></a></li>
                <li class="product__navigation product__navigation--marker" typeof="v:Breadcrumb"><a
                        href="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28"
                        class="product__navigation--link product__link" rel="v:url" property="v:title">Авто из Америки:
                        идеальное авто из США ближе, чем вы думаете!</a></li>
            </ul>
            <div class="col-12 row align-items-center flex-wrap catalog__heading ">
                <h2 class="title catalog__title ">Авто из США ближе, чем вы думаете!</h2>
            </div>

            <div class="row ">
                <div id="content_left" class="col-12 col-md-8 col-lg-8 content_left_border">

                    @if(count($automobiles) === 0)
                        <div id="error-404 content" class="col-sm-9">
                            <div class="bg_404"></div>
                            <p class="text-error">Нет товаров, которые соответствуют критериям поиска.</p>
                            <div class="buttons clearfix">
                                <div class=""><a href="{{route('main')}}" class="btn btn-primary">Вернуться на
                                        главную</a></div>
                            </div>
                        </div>
                    @endif

                    @foreach($automobiles as $automobile)
                        <div class="col-12  row catalog__item">
                            <div class="col-12 col-md-6 col-lg-6 p-0">
                                <a href="{{route('automobile', $automobile->id)}}"><img
                                        src="http://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX213/1b059073-202c-411d-8609-c50b2ab03b4b.JPG"
                                        alt="{{$automobile->model->name}}" title="{{$automobile->model->name}}"
                                        class="profile__image image catalog__image img-responsive"/></a>
                                <!--span class="catalog__top"><span class="catalog__top--bold">ТОП </span>350</span-->
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 catalog__info">
                                <h3 class="profile__title catalog__subtitle">
                                    <a href="{{route('automobile', $automobile->id)}}">
                                        {{$automobile->model->name}}
                                    </a>
                                </h3>
                                <div class="row align-items-center catalog__inner">
                                    <span class="profile__priceDolar">{{$automobile->current_rate}} $</span>
                                </div>
                                <ul class="profile__list row flex-wrap justify-content-between ">
                                    <li class="profile__element" title="Пробег">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="279" height="279"
                                             viewBox="0 0 279 279" class=" profile__icon svg replaced-svg">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #000000;
                                                }
                                            </style>
                                            <path class="st0"
                                                  d="M61,52C80,34 105,23 133,22L133,0C99,2 69,15 46,36ZM22,133C23,105 34,80 52,61L36,46C15,69 2,99 0,133ZM52,218C34,199 23,174 22,146L0,146C2,180 15,210 36,234ZM133,257C105,256 80,245 61,228L46,243C69,264 99,278 133,279ZM218,228C199,245 174,256 146,257L146,279C180,278 210,264 234,243ZM257,146C256,174 245,199 228,218L243,234C264,210 278,180 279,146ZM228,61C245,80 256,105 257,133L279,133C278,99 264,69 243,46ZM143,136C141,134 138,134 136,136C134,138 134,141 136,143C138,145 141,145 143,143C145,141 145,138 143,136M200,89L157,132C160,139 158,147 153,153C146,160 134,160 127,153C120,146 119,134 127,127C132,121 140,120 147,123L191,79ZM146,22C174,23 199,34 218,52L234,36C210,15 180,2 146,0Z"></path>
                                        </svg>
                                        {{$automobile->mileage}}
                                    </li>

                                    <li class="profile__element" title="Расположение">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="90"
                                             viewBox="0 0 66 90"
                                             class="profile__icon svg replaced-svg">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #000000;
                                                }
                                            </style>
                                            <path class="st0"
                                                  d="M33,20.97C39.66,20.97 45,26.31 45,32.97C45,39.64 39.66,44.98 33,44.98C26.33,44.98 21,39.64 21,32.97C21,26.31 26.33,20.97 33,20.97M33,14.97C23.09,14.97 15,23.06 15,32.97C15,42.88 23.09,50.98 33,50.98C42.9,50.98 51,42.88 51,32.97C51,23.06 42.9,14.97 33,14.97M33,6C47.94,6 60,18.05 60,33C60,51.08 43.19,71.91 33,82.55C22.8,71.91 6,51.08 6,33C6,18.05 18.05,6 33,6M33,0C14.8,0 0,14.81 0,33C0,56.05 20.67,78.91 30.87,89.11C32.04,90.29 33.94,90.29 35.11,89.12C35.11,89.12 35.12,89.12 35.12,89.11C45.32,78.91 66,56.05 66,33C66,14.81 51.18,0 33,0"></path>
                                        </svg>
                                        {{$automobile->location->name}}
                                    </li>
                                    <li class="profile__element" title="Основное повреждение">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="492.963px" height="492.963px"
                                             viewBox="0 0 492.963 492.963" class="profile__icon svg replaced-svg">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #000000;
                                                }
                                            </style>
                                            <g>
                                                <g>
                                                    <path class="st0" d="M246.458,169.582c-11.5,0-19.1,9.6-19.1,19.1v114.8c0,11.5,7.6,19.101,19.1,19.101s19.101-9.601,19.101-19.101v-114.8
			C265.559,177.182,257.958,169.582,246.458,169.582z"/>
                                                    <circle fill="#FFC001" cx="246.458" cy="379.982" r="19.1"/>
                                                    <path class="st0" d="M483.658,391.382l-206.6-334.7c-17.2-26.8-44-26.8-61.2,0l-206.5,334.7c-21,36.3-5.7,65,36.3,65h399.7
			C489.358,456.382,504.658,427.781,483.658,391.382z M451.158,437.281h-409.3c-21,0-28.7-15.3-17.2-32.5l210.4-340.399
			c5.7-11.5,17.2-11.5,24.899,0l210.4,340.399C479.858,421.981,472.158,437.281,451.158,437.281z"/>
                                                </g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                        </svg>
                                        {{$automobile->damage->name}}
                                    </li>
                                    <li class="profile__element" title="Коробка передач">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="93" height="87"
                                             viewBox="0 0 93 87"
                                             class="profile__icon svg replaced-svg">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #000000;
                                                }
                                            </style>
                                            <path class="st0"
                                                  d="M10.5,0C16.29,0 21,4.7 21,10.5C21,15.78 17.08,20.16 12,20.89L12,42L45,42L45,20.89C39.91,20.16 36,15.78 36,10.5C36,4.7 40.7,0 46.5,0C52.29,0 57,4.7 57,10.5C57,15.78 53.08,20.16 48,20.89L48,42L72,42C76.97,42 81,37.97 81,33L81,20.89C75.91,20.16 72,15.78 72,10.5C72,4.7 76.7,0 82.5,0C88.29,0 93,4.7 93,10.5C93,15.78 89.08,20.16 84,20.89L84,33C84,39.62 78.62,45 72,45L48,45L48,66.1C53.08,66.83 57,71.2 57,76.5C57,82.29 52.29,87 46.5,87C40.7,87 36,82.29 36,76.5C36,71.2 39.91,66.83 45,66.1L45,45L12,45L12,66.1C17.08,66.83 21,71.2 21,76.5C21,82.29 16.29,87 10.5,87C4.7,87 0,82.29 0,76.5C0,71.2 3.91,66.83 9,66.1L9,45L9,42L9,20.89C3.91,20.16 0,15.78 0,10.5C0,4.7 4.7,0 10.5,0"></path>
                                        </svg>
                                        {{$automobile->transmission->name}}
                                    </li>


                                    <li class="profile__element" title="Топливо">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="68.49" height="90"
                                             viewBox="0 0 68.49 90" class="profile__icon svg replaced-svg">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: #000000;
                                                }
                                            </style>
                                            <path class="st0"
                                                  d="M19.86,50.36L48.62,50.36C49.79,50.36 50.68,51.24 50.68,52.41L50.68,68.84C50.68,70.02 49.79,70.9 48.62,70.9L19.86,70.9C18.69,70.9 17.81,70.02 17.81,68.84L17.81,52.41C17.81,51.24 18.69,50.36 19.86,50.36M19.86,46.25C16.48,46.25 13.7,49.03 13.7,52.41L13.7,68.84C13.7,72.22 16.48,75.01 19.86,75.01L48.62,75.01C52,75.01 54.78,72.22 54.78,68.84L54.78,52.41C54.78,49.03 52,46.25 48.62,46.25ZM8.21,13.01L24.93,13.01L51.18,36.02C51.93,36.67 52.89,37.03 53.89,37.03L60.27,37.03L60.27,81.78L8.21,81.78ZM44.53,8.65L60.27,8.65L60.27,28.81L55.43,28.81L44.31,19.07L44.53,19.07ZM7.32,0L7.32,4.79L4.1,4.79C1.84,4.79 0,6.63 0,8.9L0,85.89C0,88.16 1.84,90 4.1,90L64.38,90C66.65,90 68.49,88.16 68.49,85.89L68.49,4.54C68.49,2.28 66.65,0.44 64.38,0.44L40.42,0.44C38.15,0.44 36.31,2.28 36.31,4.54L36.31,12.06L29.18,5.81C28.43,5.16 27.47,4.79 26.47,4.79L22.13,4.79L22.13,0Z"></path>
                                        </svg>
                                        {{$automobile->additional->fuel->name}}
                                    </li>


                                    <li class="profile__element" title="Год выпуска">
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="511.634px" height="511.634px" viewBox="0 0 511.634 511.634"
                                             style="enable-background:new 0 0 511.634 511.634;"
                                             xml:space="preserve" class="profile__icon svg replaced-svg">
	 <style type="text/css">
         .st0 {
             fill: #000000;
         }
     </style>
                                            <g>
                                                <path d="M482.513,83.942c-7.225-7.233-15.797-10.85-25.694-10.85h-36.541v-27.41c0-12.56-4.477-23.315-13.422-32.261
		C397.906,4.475,387.157,0,374.591,0h-18.268c-12.565,0-23.318,4.475-32.264,13.422c-8.949,8.945-13.422,19.701-13.422,32.261v27.41
		h-109.63v-27.41c0-12.56-4.475-23.315-13.422-32.261C178.64,4.475,167.886,0,155.321,0H137.05
		c-12.562,0-23.317,4.475-32.264,13.422c-8.945,8.945-13.421,19.701-13.421,32.261v27.41H54.823c-9.9,0-18.464,3.617-25.697,10.85
		c-7.233,7.232-10.85,15.8-10.85,25.697v365.453c0,9.89,3.617,18.456,10.85,25.693c7.232,7.231,15.796,10.849,25.697,10.849h401.989
		c9.897,0,18.47-3.617,25.694-10.849c7.234-7.234,10.852-15.804,10.852-25.693V109.639
		C493.357,99.739,489.743,91.175,482.513,83.942z M137.047,475.088H54.823v-82.23h82.224V475.088z M137.047,374.59H54.823v-91.358
		h82.224V374.59z M137.047,264.951H54.823v-82.223h82.224V264.951z M130.627,134.333c-1.809-1.809-2.712-3.946-2.712-6.423V45.686
		c0-2.474,0.903-4.617,2.712-6.423c1.809-1.809,3.946-2.712,6.423-2.712h18.271c2.474,0,4.617,0.903,6.423,2.712
		c1.809,1.807,2.714,3.949,2.714,6.423v82.224c0,2.478-0.909,4.615-2.714,6.423c-1.807,1.809-3.946,2.712-6.423,2.712H137.05
		C134.576,137.046,132.436,136.142,130.627,134.333z M246.683,475.088h-91.365v-82.23h91.365V475.088z M246.683,374.59h-91.365
		v-91.358h91.365V374.59z M246.683,264.951h-91.365v-82.223h91.365V264.951z M356.323,475.088h-91.364v-82.23h91.364V475.088z
		 M356.323,374.59h-91.364v-91.358h91.364V374.59z M356.323,264.951h-91.364v-82.223h91.364V264.951z M349.896,134.333
		c-1.807-1.809-2.707-3.946-2.707-6.423V45.686c0-2.474,0.9-4.617,2.707-6.423c1.808-1.809,3.949-2.712,6.427-2.712h18.268
		c2.478,0,4.617,0.903,6.427,2.712c1.808,1.807,2.707,3.949,2.707,6.423v82.224c0,2.478-0.903,4.615-2.707,6.423
		c-1.807,1.809-3.949,2.712-6.427,2.712h-18.268C353.846,137.046,351.697,136.142,349.896,134.333z M456.812,475.088h-82.228v-82.23
		h82.228V475.088z M456.812,374.59h-82.228v-91.358h82.228V374.59z M456.812,264.951h-82.228v-82.223h82.228V264.951z"/>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
                                            <g>
                                            </g>
</svg>

                                        {{$automobile->year}}
                                    </li>
                                </ul>

                                <div class="row justify-content-between align-items-center catalog__inner">
                            <span class="profile__data">
							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 28 28"
                                 class="profile__data--image svg profile__innerIcon replaced-svg">
	<style type="text/css">
		.st0 {
            fill: #000000;
        }
	</style>
	<path class="st0"
          d="M14,26C7.38,26 2,20.61 2,14C2,7.38 7.38,2 14,2C20.61,2 26,7.38 26,14C26,20.61 20.61,26 14,26M14,0C6.28,0 0,6.28 0,14C0,21.71 6.28,28 14,28C21.71,28 28,21.71 28,14C28,6.28 21.71,0 14,0"></path>
	<path class="st0"
          d="M14,4C13.44,4 13,4.44 13,5L13,13.58L7.63,18.94C7.24,19.34 7.24,19.97 7.63,20.36C7.83,20.55 8.08,20.65 8.34,20.65C8.59,20.65 8.85,20.55 9.05,20.36L14.7,14.7C14.79,14.61 14.87,14.5 14.92,14.38C14.97,14.26 15,14.13 15,14L15,5C15,4.44 14.55,4 14,4"></path>
</svg>
							{{$automobile->created_at}}</span>
                                    <div>
                                        <!--a onclick="wishlist.add('33540', this);" title="В закладки" style="cursor:pointer;"><i class="fa fa-star-o " aria-hidden="true"></i> В закладки</a--->

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 row">
                        @if(count($automobiles) == 15)
                            <nav aria-label="Page navigation example" class="col-4">
                                <div class="form-group input-group input-group-xs text_limit">
                                    <label class="input-group-addon" for="input-limit">Показать:</label>
                                    <select id="input-limit" class="form-control" onchange="location = this.value;">
                                        <option
                                            value="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28&amp;limit=15"
                                            selected="selected">15
                                        </option>
                                        <option
                                            value="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28&amp;limit=25">
                                            25
                                        </option>
                                        <option
                                            value="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28&amp;limit=50">
                                            50
                                        </option>
                                        <option
                                            value="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28&amp;limit=75">
                                            75
                                        </option>
                                        <option
                                            value="https://www.americaro.com.ua/index.php?route=product/category&amp;path=28&amp;limit=100">
                                            100
                                        </option>
                                    </select>
                                </div>
                            </nav>
                        @endif
                        <nav aria-label="Page navigation example" class="col-8">
                            <ul class="pagination">
                                {{$automobiles->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 ">
                    <div id="sidebar_right">
                        <aside id="column-right" class="col-sm-12 hidden-xs">
                            <form action="{{route('auction.search')}}" metod="post">
                                <div id="filter-module-36" class="filter-module desktop">
                                    <div class="manufacturer-filter collapsable-block">
                                        <div class="collapsable-heading">
                                            <span class="right-triangle" style="display: none">&#9656;</span>
                                            <span class="down-triangle">&#9662;</span>
                                            Марка <a class="clear-link"
                                                     onclick="clearFilters($(this).parent().parent())">
                                                × </a>
                                        </div>
                                        <div class="collapsable-choices">
                                            @foreach($brands as $brand)
                                                <label>
                                                    <input class="checkbox" type="checkbox" name="brands[]"
                                                           value="{{$brand->id}}"/><span
                                                        class="checkmark"></span> {{$brand->name}} </label>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="attribute-filter collapsable-block">
                                        <div class="collapsable-heading">
                                            <span class="right-triangle" style="display: none">&#9656;</span>
                                            <span class="down-triangle">&#9662;</span>
                                            Топливо <a class="clear-link"
                                                       onclick="clearFilters($(this).parent().parent())">×</a>
                                        </div>
                                        <div class="collapsable-choices">

                                            @foreach($fuels as $fuel)
                                                <label>
                                                    <input class="checkbox" type="checkbox" name="fuels[]"
                                                           value="{{$fuel->id}}"/><span class="checkmark"></span>
                                                    {{$fuel->name}}
                                                </label>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="attribute-filter collapsable-block">
                                        <div class="collapsable-heading" style="margin-top: 25px">
                                            <span class="right-triangle" style="display: none">&#9656;</span>
                                            <span class="down-triangle">&#9662;</span>
                                            Год выпуска <a class="clear-link"
                                                           onclick="clearFilters($(this).parent().parent())">×</a>
                                        </div>
                                        <div class="collapsable-choices" style="margin-right: -20px">
                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2020"/><span class="checkmark"></span> 2020 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2019"/><span class="checkmark"></span> 2019 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2018"/><span class="checkmark"></span> 2018 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2017"/><span class="checkmark"></span> 2017 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2016"/><span class="checkmark"></span> 2016 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2015"/><span class="checkmark"></span> 2015 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2014"/><span class="checkmark"></span> 2014 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2013"/><span class="checkmark"></span> 2013 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2012"/><span class="checkmark"></span> 2012 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2011"/><span class="checkmark"></span> 2011 </label>

                                            <label>
                                                <input class="checkbox" type="checkbox" name="years[]"
                                                       value="2010"/><span class="checkmark"></span> 2010 </label>

                                        </div>
                                        <div class="clear-filters hidden-xs"><a
                                                onclick="clearAllFilters($(this))">Очистить</a></div>

                                        <div class="filter-button hidden-xs hidden-sm">
                                            <input type="submit" class="btn  button footer__button" value="Подобрать">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                </div>
            </div>
        </div>
    </section>
    <section class="seo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="seo-description"><h3
                        style="margin: 2px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                        Наша компания предлагает доставку автомобилей из США по самым низким тарифам!</h3>
                    <p style="margin-top: 5px; margin-bottom: 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                        Американский автопром известен во многих странах мира. Автомобили из США пользуются
                        популярностью, благодаря своей надёжности и технологичности. Наша компания предлагает помощь в
                        покупке авто из Америки с аукциона. Мы подберём автомобиль, который будет идеально
                        соответствовать вашим запросам. Автоаукционы США предлагают выбор из сотен моделей качественных,
                        надёжных и современных машин. Мы же всегда готовы помочь в доставке авто и его растаможке.</p>
                    <p style="margin-top: 5px; margin-bottom: 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                        Мы предлагаем полный спектр услуг по поиску, покупке и доставке любого транспорта из США в
                        регион заказчика.&nbsp;<br></p>
                    <h3 style="margin: 2px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                        Как выглядит схема сотрудничества с нами при покупке авто из Америки с аукциона?</h3>
                    <ol style="margin: 10px 0px 10px 50px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px; list-style-position: initial; list-style-image: initial;">
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Вы выбираете авто с каталога хотели бы купить.
                        </li>
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Вы вводите максимальную ставку, за которую готовы купить автомобиль и сразу же получаете
                            финальную стоимость уже с учетом всех сборов и комиссий (никаких скрытых платежей)&nbsp;
                        </li>
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Вы добавляете автомобиль в закладки для отслеживания ставок по этому автомобилю (для этого
                            вы должны зарегистрироваться на портале.
                        </li>
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Вы вносите предоплату за услугу специалиста, который будет участвовать в торгах на
                            американском аукционе и будет сопровождать поставку автомобиля в Вам.
                        </li>
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Вы можете принимать участие в поиске и делать ставки на выбранные вами автомобили. В ходе
                            подбора транспортного средства учитывайте все параметры – от года выпуска, модели и марки до
                            цвета и состояния салона.
                        </li>
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Мы покупаем автомобиль, и вы оплачиваете оставшуюся сумму за авто с аукциона в США и его
                            доставку в Украину.
                        </li>
                        <li style="margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                            Мы доставляем машину в любой город Украины.&nbsp;
                        </li>
                    </ol>
                    <p style="margin-top: 5px; margin-bottom: 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                        Почему клиенты, уже воспользовавшиеся нашими услугами, рекомендуют нас друзьям? Нас ценят, ведь
                        мы предлагаем быструю и выгодную покупку машин с автоаукционов США!&nbsp;</p>
                    <p style="margin-top: 5px; margin-bottom: 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; outline: 0px;">
                        Если Вы не определились с автомобилем или у Вас возникли сложности с выбором, то менеджеры нашей
                        компании помогут Вам с выбором, определением сроков доставки и цены.</p>
                    <p style="margin-top: 5px; margin-bottom: 5px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 0.875em; line-height: inherit; font-family: Verdana, Geneva, sans-serif; vertical-align: baseline; outline: 0px; color: rgb(72, 74, 67);">
                        <br></p></div>
                <div id="link" class="link">Читать далее</div>
            </div>
        </div>
    </section>
    <script src="js/scroll.js" type="text/javascript"></script>
@endsection
