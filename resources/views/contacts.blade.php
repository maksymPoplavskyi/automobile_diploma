@extends('layouts.index')

@section('title')
    Связаться с нами
@endsection

@section('content')
    <style>
        #map {
            height: 800px;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <section class="map_home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="adress_map">
                        <div class="adress_contacts">
                            <div class="adress-block">
                                <div class="h1-title">наши <span>контакты</span></div>
                            </div>
                            <div class="adress-block">
                                <div class="title">Телефоны</div>
                                <ul class="list-inline">
                                    <li>073-404-30-44</li>
                                </ul>
                            </div>
                            <div class="adress-block">
                                <div class="title">Email</div>
                                <ul class="list-inline">
                                    <li>americarocompany@gmail.com</li>
                                </ul>
                            </div>
                            <div class="adress-block">
                                <div class="title">Социальные Сети</div>
                                <div class="row">
                                    <a href="https://www.facebook.com/americaro.com.ua/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                             x="0px" y="0px" width="96.124px" height="96.123px"
                                             viewBox="0 0 96.124 96.123"
                                             style="enable-background:new 0 0 96.124 96.123;" xml:space="preserve"
                                             class="footer__facebook svg replaced-svg">
<g>
    <path
        d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803   c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654   c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246   c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>
                                    </a>
                                    <a href="https://www.instagram.com/americaro.company/" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1"
                                             x="0px" y="0px" width="169.063px" height="169.063px"
                                             viewBox="0 0 169.063 169.063"
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
                            <div class="adress-block">
                                <div class="title">Адрес</div>
                                <ul class="list-inline">
                                    <li>г.Киев, ул. Игоря Брановицкого (Перспективная), 4А</li>
                                </ul>
                            </div>
                            <div class="adress-block">
                                <div class="title">Часы работы</div>
                                <ul class="list-inline">
                                    <li>Пн-Пт 11:00-19:00 <br/>Сб-Вс по договоренности</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>
        <script>
            function initMap() {
                var styledMapType = new google.maps.StyledMapType(
                    [
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#d3d3d3"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "stylers": [
                                {
                                    "color": "#808080"
                                },
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#b3b3b3"
                                }
                            ]
                        },
                        {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ffffff"
                                },
                                {
                                    "weight": 1.8
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#d7d7d7"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#ebebeb"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "color": "#a7a7a7"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#ffffff"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#efefef"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "color": "#696969"
                                }
                            ]
                        },
                        {
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                                {
                                    "visibility": "on"
                                },
                                {
                                    "color": "#737373"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#d6d6d6"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {},
                        {
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#dadada"
                                }
                            ]
                        }
                    ],
                    {name: 'Styled Map'});
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: 50.42129526, lng: 30.53362638},
                    zoom: 15,
                    gestureHandling: 'auto',
                    fullscreenControl: false,
                    zoomControl: false,
                    streetViewControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    mapTypeControl: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                var marker = new google.maps.Marker({
                    position: {lat: 50.42129526, lng: 30.53362638},
                    map: map,
                    title: 'Аmericaro.Com.Ua/',
                    icon: {
                        url: "./image/catalog/marker.png",
                        scaledSize: new google.maps.Size(65, 73)
                    }
                });

                //Associate the styled map with the MapTypeId and set it to display.
                map.mapTypes.set('styled_map', styledMapType);
                map.setMapTypeId('styled_map');
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBH95EXdNcOvAik5zY06IjpeBfaxIm40v4&callback=initMap">
        </script>

    </section>
@endsection
