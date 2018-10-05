
@extends('layouts.main')

@section('content')             


@include('header')       


<main class="main" role="main">



    <section class="main__section mt-0">



        <div class="large-photo-container">
            <div id="large-photo-wrapper" class="wrapper large-photo">
                <div id="large-photo-mobile" class="large-photo__mobile" style="">
                    <div class="large-photo__overlay"></div>
                    <div class="large-photo__wrapper" style="transform: none; transform-origin: 50% 50% 0px;">
                        <img src="{{$flight->img_url}}" class="large-photo__img" alt="15-0051 - Airbus A400M - Turkey - Air Force" title="Photo of 15-0051 - Airbus A400M - Turkey - Air Force">
                    </div>
                    <button class="large-photo__close">
                        <span class="icon icon-cross2"></span>
                    </button>
                </div>
                <div class="large-photo__desktop">
                    <a id="show-large-photo" href="javascript:;" rel="modal:open">
                        <img src="{{$flight->img_url}}" class="large-photo__img" alt="15-0051 - Airbus A400M - Turkey - Air Force" title="Photo of 15-0051 - Airbus A400M - Turkey - Air Force">
                    </a>
                    <div class="w-100 grid text-light">
                    <div class="col-6 text-left"><img src="{{asset('imgs/watermark.png')}}" style="height: 20px; width:auto;"></div>
                    <div class="col-6 text-right">Image Copyright&copy;{{$flight->Photograper}}</div>
                    
                    </div>
                </div>
            </div>
        </div>

        <section class="mobile-only">
            <div class="social social--photo-page" data-id="8973971">
                <a href="javascript:;" class="social__link likes social__link--share">
                    <span class="social__text">Likes</span>
                    <span class="social__icon fav_count">{{ $flight->fav_count}}</span>
                </a>
                <div class="photoLikes mobile">
                    <div>
                        <ul>
                        </ul>
                    </div>
                </div>
                <a href="javascript:;" class="social__link social__link--share">
                    <span class="social__text">Views</span>
                    <span class="social__icon">{{$flight->view_count}}</span>
                </a>
                <a href="javascript:add_to_album({{$flight->id}});" class="social__link social__link--album" >
                    <span class="social__text">Album</span>
                    <span class="social__icon"><span class="icon icon-add-photo"></span></span>
                </a>
                <a href="javascript:likephoto({{$flight->id}});" class="social__link social__link--like ">
                    <span class="social__text">Like</span>
                    <span class="social__icon"><span class="icon icon-add-heart"></span></span>
                </a>

            </div>
        </section>

        <div class="wrapper">

            <div class="wrapper__flex">

                <div class="wrapper__flexCol wrapper__flexCol--pad-r-small">

                    <section class="mobile-only">

                        <div class="wrapper__content wrapper__content--small">

                            <ul class="list list--unstyled">
                                <li class="list__item">
                                    <span>Aircraft: <h2 class="header-reset">
                                        <a href="javascript:;" class="link">{{$flight->aircraft_type_name}}</a></h2>
                                    </span></li>
                                <li class="list__item">
                                    <span>Reg:                                                
                                        <a href="javascript:;" class="link">{{$flight->Registration}}</a></span>
                                </li>
                                <li class="list__item">
                                    <span>Serial #:
                                        <h4 class="header-reset">
                                            <a class="link" href="javascript:;">
                                                {{$flight->SerialNumber}}                                                        </a>
                                        </h4>
                                    </span>
                                </li>
                                <li class="list__item">
                                    <span>Airline: <a href="javascript:;" class="link">
                                            {{$flight->AirLineName}}
                                        </a></span>
                                </li>
                                <li class="list__item">
                                    <span class="text">Photo Date: </span><span> {{$flight->PhotoDate}}</span>
                                </li>
                                <li class="list__item">
                                    <span class="text">Uploaded: </span><span> {{$flight->created_at}}</span>
                                </li>
                                <li class="list__item">
                                    <a class="link" href="javascript:;">{{$flight->airpot_name}}</a>
                                </li>
                            </ul>

                        </div>

                        <div class="wrapper__content wrapper__content--small">
                            <span class="text">Notes: </span>
                            <h3 class="header-reset"><span>{{$flight->Remarks}}</span></h3>
                        </div>



                        <div class="wrapper__content wrapper__content--small">

                            <h2 class="head">Aircraft</h2>

                            <div class="grid-3_sm-2 gallery gallery--photo-page">    
                                @foreach($likeAircraft as $flight1) 
                                <div class="col">
                                    <div class="gallery-photo">
                                        <a href="/photo/{{$flight1->id}}" class="gallery-photo__frame">
                                            <img src="{{$flight1->img_url}}" class="gallery-photo__img"   >
                                           
                                            @if($flight1->Remarks)
                                             <div class="gallery-photo__popup">
                                                <p class="gallery-photo__popup-text">
                                                    <span>{{$flight1->Remarks}}</span>
                                                </p>
                                            </div>
                                            @endif
                                            <div class="gallery-photo__info">
                                                <div class="gallery-photo__section">
                                                    <span class="gallery-photo__text">{{$flight1->Photograper}}</span>
                                                    <span class="gallery-photo__text gallery-photo__text--nocrop">{{$flight1->Registration}}</span>
                                                </div>
                                                <div class="gallery-photo__section">
                                                    <span class="gallery-photo__text gallery-photo__text--nocrop">
                                                        <span class="fa fa-eye"></span>
                                                        <span>{{$flight1->view_count}}</span>
                                                        <span class="fa fa-star"></span>
                                                        <span>{{$flight1->fav_count}}</span>
                                                        <span class="fa fa-commenting-o"></span>
                                                        <span>{{$flight1->comment_count}}</span>
                                                    </span>
                                                    <span class="gallery-photo__text gallery-photo__text--aircraft">Airbus{{$flight1->Aircraft}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach


                            </div>

                            <h2 class="head">Photo location</h2>

                            <div class="grid-3_sm-2 gallery gallery--photo-page">
                                @foreach($likeLocation as $flight2)
                                <div class="col">
                                    <div class="gallery-photo">
                                        <a href="/photo/{{$flight2->id}}" class="gallery-photo__frame">
                                            <img src="{{$flight2->img_url}}" class="gallery-photo__img"   >
                                            @if($flight2->Remarks)
                                             <div class="gallery-photo__popup">
                                                <p class="gallery-photo__popup-text">
                                                    <span>{{$flight2->Remarks}}</span>
                                                </p>
                                            </div>
                                            @endif
                                            <div class="gallery-photo__info">
                                                <div class="gallery-photo__section">
                                                    <span class="gallery-photo__text">{{$flight2->Photograper}}</span>
                                                    <span class="gallery-photo__text gallery-photo__text--nocrop">{{$flight2->Registration}}</span>
                                                </div>
                                                <div class="gallery-photo__section">
                                                    <span class="gallery-photo__text gallery-photo__text--nocrop">
                                                        <span class="fa fa-eye"></span>
                                                        <span>{{$flight2->view_count}}</span>
                                                        <span class="icon icon-star-full2"></span>
                                                        <span>{{$flight2->fav_count}}</span>
                                                        <span class="fa fa-commenting-o"></span>
                                                        <span>{{$flight2->comment_count}}</span>
                                                    </span>
                                                    <span class="gallery-photo__text gallery-photo__text--aircraft">Airbus{{$flight2->Aircraft}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                            <h2 class="head">Photographer</h2>

                            <div class="grid-3_sm-2 gallery gallery--photo-page">

                                @foreach($likePhotographer as $flight3)
                                <div class="col">
                                    <div class="gallery-photo">
                                        <a href="/photo/{{$flight3->id}}" class="gallery-photo__frame">
                                            <img src="{{$flight3->img_url}}" class="gallery-photo__img"   >
                                            @if($flight3->Remarks)
                                             <div class="gallery-photo__popup">
                                                <p class="gallery-photo__popup-text">
                                                    <span>{{$flight3->Remarks}}</span>
                                                </p>
                                            </div>
                                            @endif
                                            <div class="gallery-photo__info">
                                                <div class="gallery-photo__section">
                                                    <span class="gallery-photo__text">{{$flight3->Photograper}}</span>
                                                    <span class="gallery-photo__text gallery-photo__text--nocrop">{{$flight3->Registration}}</span>
                                                </div>
                                                <div class="gallery-photo__section">
                                                    <span class="gallery-photo__text gallery-photo__text--nocrop">
                                                        <span class="fa fa-eye"></span>
                                                        <span>{{$flight3->view_count}}</span>
                                                        <span class="fa fa-star"></span>
                                                        <span>{{$flight3->fav_count}}</span>
                                                        <span class="fa fa-commenting-o"></span>
                                                        <span>{{$flight3->comment_count}}</span>
                                                    </span>
                                                    <span class="gallery-photo__text gallery-photo__text--aircraft">Airbus{{$flight3->Aircraft}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                    </section>

                    <section class="desktop-only desktop-only--block">

                        <div class="wrapper__content wrapper__content--small">

                            <div class="grid">
                                <div class="col-4">
                                    <div class="grid-noBottom">
                                        <div class="col">
                                            <h3 class="headerText3 color-dusty-gray">Registration</h3>
                                            <h4 class="headerText4 color-shark" >{{$flight->Registration}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 grid-noGutter-noBottom">
                                    <div class="col">
                                        <h3 class="headerText3 color-dusty-gray">Photo Date</h3>
                                        <h4 class="headerText4 color-shark">{{$flight->PhotoDate}}</h4>
                                    </div>
                                    <div class="col">
                                        <h3 class="headerText3 color-dusty-gray">Uploaded</h3>
                                        <h4 class="headerText4 color-shark">{{$flight->created_at}}</h4>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="grid-noBottom">
                                        <div class="col">
                                            <h3 class="headerText3 color-dusty-gray">Views</h3>
                                            <a href="javascript:;">
                                                <h4 class="headerText4 color-shark">{{$flight->view_count}}</h4>
                                            </a>
                                        </div>
                                        <div class="col photoLikes">
                                            <h3 class="headerText3 color-dusty-gray">Likes</h3>    
                                            <h4 class="headerText4 color-shark fav_count"  >{{ $flight->fav_count}}</h4>
                                            <div>
                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="wrapper__content wrapper__content--small">

                                <div class="grid-noBottom">
                                    <div class="col-4">
                                        <h3 class="headerText3 color-dusty-gray">Badges</h3>
                                        <div class="badges">
                                            <span>None</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <h3 class="headerText3 color-dusty-gray">Notes</h3>
                                        <span>{{$flight->Remarks}}</span>
                                    </div>
                                    <div class="col-4">
                                        <h3 class="headerText3 color-dusty-gray">Camera</h3>
                                        <span class="text text--block">


                                        </span></div>
                                </div>

                            </div>

                            <div class="wrapper__content wrapper__content--small">

                                <div class="grid-noBottom">



                                    <div class="col-4">
                                        <ul class="list list--unstyled">
                                            <li class="list__item">
                                                <h2 class="head"><span>Aircraft</span></h2>
                                            </li>
                                            <li class="list__item">
                                                <span>Reg:                                                             <a href="/registration/15-0051" class="link">{{$flight->Registration}}</a></span>
                                            </li>
                                            <li class="list__item">
                                                <span>Aircraft: <h2 class="header-reset"><a href="/aircraft/Airbus+A400M" class="link">{{$flight->aircraft_model_name}}</a></h2>
                                                </span></li>
                                            <li class="list__item">
                                                <span>Airline: <a href="/airline/Turkey+-+Air+Force" class="link">{{$flight->AirLineName}}</a></span>
                                            </li>
                                            <li class="list__item">
                                                <span>Serial #:
                                                    <h4 class="header-reset">
                                                        <a class="link" href="/aircraft/manufacturer/Airbus/serial/051">
                                                            {{$flight->SerialNumber}}                                                                    </a>
                                                    </h4>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-4">
                                        <ul class="list list--unstyled">
                                            <li class="list__item">
                                                <h2 class="head"><span>Photo Location</span></h2>
                                            </li>
                                            <li class="list__item">
                                                <span>
                                                    <h5 class="header-reset">
                                                        <span>
                                                            <a class="link" href="javascript:;">{{$flight->airpot_name}}</a>
                                                        </span>
                                                    </h5>
                                                </span>
                                            </li>
                                            <li class="list__item">
                                                <span><a class="link" href="javascript:;">{{$flight->CountryName}}</a></span>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="col-4">
                                        <ul class="list list--unstyled">
                                            <li class="list__item">
                                                <h2 class="head"><span>Photographer</span></h2>
                                            </li>
                                            <li class="list__item">
                                                <span><h6 class="header-reset">{{$flight->Photograper}}</h6></span>
                                            </li>
                                            @if($flight->Photograper)
                                            <li class="list__item">
                                                <a href="javascript:;" class="link">Photos</a> |
                                                <a href="javascript:;" class="link">Profile</a> |
                                                <a href="javascript:;" class="link" rel="modal:open">Contact</a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>

                                </div>

                            </div>

                            <div class="grid-noBottom">

                                <div class="col-4">

                                    <div class="grid-column gallery">
                                        @foreach($likeAircraft as $flight) 
                                        <div class="col">
                                            <div class="gallery-photo">
                                                <a href="/photo/{{$flight->id}}" class="gallery-photo__frame">
                                                    <img src="{{$flight->img_url}}" class="gallery-photo__img"   >
                                                    @if($flight->Remarks)
                                                     <div class="gallery-photo__popup">
                                                        <p class="gallery-photo__popup-text">
                                                            <span>{{$flight->Remarks}}</span>
                                                        </p>
                                                    </div>
                                                    @endif
                                                    <div class="gallery-photo__info">
                                                        <div class="gallery-photo__section">
                                                            <span class="gallery-photo__text">{{$flight->Photograper}}</span>
                                                            <span class="gallery-photo__text gallery-photo__text--nocrop">{{$flight->Registration}}</span>
                                                        </div>
                                                        <div class="gallery-photo__section">
                                                            <span class="gallery-photo__text gallery-photo__text--nocrop">
                                                                <span class="fa fa-eye"></span>
                                                                <span>{{$flight->view_count}}</span>
                                                                <span class="fa fa-star"></span>
                                                                <span>{{$flight->fav_count}}</span>
                                                                <span class="fa fa-commenting-o"></span>
                                                                <span>{{$flight->comment_count}}</span>
                                                            </span>
                                                            <span class="gallery-photo__text gallery-photo__text--aircraft">Airbus{{$flight->Aircraft}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                </div>

                                <div class="col-4">

                                    <div class="grid-column gallery">
                                        @foreach($likeLocation as $flight)
                                        <div class="col">
                                            <div class="gallery-photo">
                                                <a href="/photo/{{$flight->id}}" class="gallery-photo__frame">
                                                    <img src="{{$flight->img_url}}" class="gallery-photo__img"   >
                                                    @if($flight->Remarks)
                                                     <div class="gallery-photo__popup">
                                                        <p class="gallery-photo__popup-text">
                                                            <span>{{$flight->Remarks}}</span>
                                                        </p>
                                                    </div>
                                                    @endif
                                                    <div class="gallery-photo__info">
                                                        <div class="gallery-photo__section">
                                                            <span class="gallery-photo__text">{{$flight->Photograper}}</span>
                                                            <span class="gallery-photo__text gallery-photo__text--nocrop">{{$flight->Registration}}</span>
                                                        </div>
                                                        <div class="gallery-photo__section">
                                                            <span class="gallery-photo__text gallery-photo__text--nocrop">
                                                                <span class="fa fa-eye"></span>
                                                                <span>{{$flight->view_count}}</span>
                                                                <span class="fa fa-star"></span>
                                                                <span>{{$flight->fav_count}}</span>
                                                                <span class="fa fa-commenting-o"></span>
                                                                <span>{{$flight->comment_count}}</span>
                                                            </span>
                                                            <span class="gallery-photo__text gallery-photo__text--aircraft">Airbus{{$flight->Aircraft}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>

                                </div>

                                <div class="col-4">

                                    <div class="grid-column gallery">

                                        @foreach($likePhotographer as $flight)
                                        <div class="col">
                                            <div class="gallery-photo">
                                                <a href="/photo/{{$flight->id}}" class="gallery-photo__frame">
                                                    <img src="{{$flight->img_url}}" class="gallery-photo__img"   >
                                                    @if($flight->Remarks)
                                                    <div class="gallery-photo__popup">
                                                        <p class="gallery-photo__popup-text">
                                                            <span>{{$flight->Remarks}}</span>
                                                        </p>
                                                    </div>
                                                    @endif
                                                    <div class="gallery-photo__info">
                                                        <div class="gallery-photo__section">
                                                            <span class="gallery-photo__text">{{$flight->Photograper}}</span>
                                                            <span class="gallery-photo__text gallery-photo__text--nocrop">{{$flight->Registration}}</span>
                                                        </div>
                                                        <div class="gallery-photo__section">
                                                            <span class="gallery-photo__text gallery-photo__text--nocrop">
                                                                <span class="fa fa-eye"></span>
                                                                <span>{{$flight->view_count}}</span>
                                                                <span class="fa fa-star"></span>
                                                                <span>{{$flight->fav_count}}</span>
                                                                <span class="fa fa-commenting-o"></span>
                                                                <span>{{$flight->comment_count}}</span>
                                                            </span>
                                                            <span class="gallery-photo__text gallery-photo__text--aircraft">Airbus{{$flight->Aircraft}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach



                                    </div>

                                </div>

                            </div>

                        </div></section>

                </div>

                <div class="wrapper__flexCol wrapper__flexCol--aside">

                    <section class="desktop-only desktop-only--block">

                        <div class="wrapper__content wrapper__content--small">
                            <div class="grid-middle">

                                <div class="col">
                                    <a class="btn btn--large btn--block btn--picton-blue"  href="javascript:like_photo({{$detailphoto->id}});">
                                        <span>Like Photo</span>
                                    </a>

                                    
                                </div>
                            </div>
                        </div>

                        <div class="wrapper__content wrapper__content--small">

                        </div>

                    </section>
                </div>

            </div>

        </div>

    </section>

</main>








@include('footer')       

@endsection