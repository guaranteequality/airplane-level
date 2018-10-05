
@extends('layouts.main')

@section('content')			 

@include('header')	

<main class="main" role="main">
    <div class="container">
        <h4 class="text-center">
            Welcome to AirlinePics.com!  Your home for {{$photos}} airline photos!
        </h4>

    </div>
    <section class="main__section">
        <div class="wrapper">

            <div class="grid">
                <div class="col-9_sm-12">
                    <div class="wrapper__content">
                        <div id="subnav-hero" class="subnav subnav--header subnav--index" data-subnav-group="1">
                            <button class="subnav__btn subnav__btn--prev">
                                <span class="icon icon-arrow-left3"></span>
                            </button>
                            <div class="subnav__content">
                                <div class="subnav__items">
                                    <div class="subnav__item  subnav__item--active" role="button" data-link="tab1">
                                        <span class="subnav__item-text">Most Popular Today</span>
                                    </div>
                                    <div class="subnav__item" role="button" data-link="tab2">
                                        <span class="subnav__item-text">Most Liked Photos</span>
                                    </div>
                                    <div class="subnav__item" role="button" data-link="tab3">
                                        <span class="subnav__item-text">Most Popular (All Time)</span>
                                    </div>
                                </div>
                            </div>
                            <button class="subnav__btn subnav__btn--next">
                                <span class="icon icon-arrow-right3"></span>
                            </button>
                            <div class="click-to-view-more" style="top: 10px">
                                <a href="/showphotos.php?catsearch=2" class="link">
                                    <span>More <span class="more-of-text">
                                            Screeners' choice

                                        </span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9_sm-12">
                    <div class="subnav-content" data-subnav-group="1">
                        <div class="grid gallery highlighted top">

                            <div class="col-12_xs-12">
                                <div class="gallery-photo tab_slide active" id="tab1">

                                    <ul class="pgwSlider1">
                                        @foreach($mostpopular as $popular)
                                        <li>
                                            <a href="/photo/{{$popular->id}}" class="gallery-photo__frame">
                                                <img src="{{$popular->img_url}}">
                                                <span>
                                                    {{$popular->Registration}}
                                                </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>    
                                </div>
                                <div class="gallery-photo tab_slide" id="tab2">
                                    <ul class="pgwSlider1">
                                        @foreach($mostlikephoto as $popular2)
                                        <li>
                                            <a href="/photo/{{$popular->id}}" class="gallery-photo__frame">
                                                <img src="{{$popular->img_url}}">
                                                <span>
                                                    {{$popular2->Registration}}
                                                </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>    

                                </div>
                                <div class="gallery-photo tab_slide" id="tab3">
                                    <ul class="pgwSlider1">
                                        @foreach($mostviewtotal as $popular3)

                                        <li>
                                            <a href="/photo/{{$popular->id}}" class="gallery-photo__frame">
                                                <img src="{{$popular->img_url}}">
                                                <span>
                                                    {{$popular3->Registration}}
                                                </span>
                                            </a>
                                        </li>

                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            @foreach($topphotos as $data)
                            <!--   <div class="col-4_xs-6">
                            <div class="gallery-photo">
                            <a href="/photo/{{$data->id}}" class="gallery-photo__frame">
                            <img src="{{$data->img_url}}" class="gallery-photo__img"  alt="{{$data->title}}-{{$data->detail}}" title="{{$data->title}}-{{$data->detail}}">
                            <div class="gallery-photo__popup">
                            <p class="gallery-photo__popup-text">
                            <span>{{$data->detail}}</span>
                            </p>
                            </div>
                            <div class="gallery-photo__info">
                            <div class="gallery-photo__section">
                            <span class="gallery-photo__text">{{$data->title}}</span>
                            <span class="gallery-photo__text gallery-photo__text--nocrop">{{$data->sub_title}}</span>
                            </div>
                            <div class="gallery-photo__section">
                            <span class="gallery-photo__text gallery-photo__text--nocrop">
                            <span class="fa fa-eye"></span>
                            <span>{{$data->view_count}}</span>
                            <span class="fa fa-star"></span>
                            <span>{{$data->fav_count}}</span>
                            <span class="fa fa-commenting-o"></span>
                            <span>{{$data->comment_count}}</span>
                            </span>
                            <span class="gallery-photo__text">{{$data->id}}</span>
                            </div>
                            </div>
                            </a>
                            </div>
                            </div>
                            -->
                            @endforeach

                        </div>

                        <div class="mobile-only text-center">
                            <a href="/showphotos.php?catsearch=16777216" class="link">
                                <span>More Today's most popular</span>
                            </a>
                        </div>
                    </div>



                </div>
                <div class="col-3_sm-12">
                    <div class="index-col" style="height: auto;">
                        <!-- START UPLOAD TEMPTATION -->
                        <div id="index-temptation" class="index-temptation" style="overflow: hidden;">
                            <h2 class="box__head">Share your aviation photos</h2>
                            <div class="wrapper__content clearfix">
                                <div class="pull-left pad-right">
                                    <img src="{{ asset('imgs/photographer.png') }}" alt="Upload photo" class="img__photographer">
                                </div>
                                <p style="padding-left: 40px;">JetPhotos lets you share your best photos with millions of aviation enthusiasts.</p>
                            </div>
                            <button onclick="window.location='/upload'" class="btn btn--block btn--large btn--picton-blue" role="button">
                                <span class="fa fa-cloud-upload"></span>
                                <span>Upload photos</span>
                            </button>
                        </div>
                        <!-- END UPLOAD TEMPTATION -->
                        <!-- START FORUM LATEST -->
                        <!--        <div id="index-forum" class="index-forum">
                        <h2 class="box__head box__head--noBottom clearfix">
                        <span>Latest Discussions</span>
                        <a href="http://forums.jetphotos.com/" target="_blank" class="link pull-right">
                        <span class="index-forum__link">Forum</span>
                        </a>
                        </h2>
                        <div id="forum-latest" class="forum-latest forum-latest--index">
                        @foreach($forumdata as $item)
                        <a href="/forum/{{$item->id}}" target="_blank" class="forum-latest__post">
                        <span class="forum-latest__post-title">{{$item->title}}</span>
                        <div class="forum-latest__post-stats">
                        <div class="forum-latest__post-stats-photo">
                        <img src="{{ asset('imgs/user.png') }}" class="img-responsive" alt="">
                        </div>
                        <div class="forum-latest__post-stats-category">
                        <span>{{$item->name}}</span>
                        </div>
                        <div class="forum-latest__post-stats-time">
                        <span>{{$item->created_at}}</span>
                        </div>
                        </div>
                        </a>

                        @endforeach

                        </div>
                        </div>-->
                        <!-- END FORUM LATEST -->
                        <!-- START FACEBOOK/TWITTER FOLLOW -->
                        <!--  <div id="index-like-jp" class="index-like-jp">
                        <div class="grid-noBottom">
                        <div class="col">
                        <div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/jetphotos.net/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=129&amp;href=https%3A%2F%2Fwww.facebook.com%2Fjetphotos.net%2F&amp;layout=button_count&amp;locale=en_GB&amp;sdk=joey&amp;share=false&amp;show_faces=false&amp;size=small"><span style="vertical-align: top; width: 0px; height: 0px; overflow: hidden;"></span></div>
                        </div>
                        <div class="col">
                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="https://platform.twitter.com/widgets/follow_button.ed3aa96ee3d5c426af8aa717469ea983.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=JetPhotos&amp;show_count=true&amp;show_screen_name=false&amp;size=m&amp;time=1528455258985" style="position: static; visibility: visible; width: 156px; height: 20px;" data-screen-name="JetPhotos"></iframe>
                        <script>
                        (function() {
                        window.twttr = (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                        t = window.twttr || {};
                        if (d.getElementById(id)) return t;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "https://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);

                        t._e = [];
                        t.ready = function(f) {
                        t._e.push(f);
                        };

                        return t;
                        }(document, "script", "twitter-wjs"));
                        })();
                        </script>
                        </div>
                        </div>
                        </div>     -->
                        <!-- END FACEBOOK/TWITTER FOLLOW -->
                    </div>
                </div>
            </div>
            <div class="grid">
                <div class="col-8_sm-12">
                    <div class="wrapper__content">     
                        <div class="index-col" style="height: auto;">
                            <div id="index-temptation" class="index-temptation" style="overflow: hidden;">
                                <h2 class="box__head"><strong>Search Photos:</strong></h2>
                                <div class="wrapper__content clearfix grid">
                                    <div class="col-2_sm-2 my-auto">
                                        <label for="comment" class="my-auto">Aircraft Type:</label>
                                    </div>
                                    <div class="col-10_sm-10">
                                        <div class="grid">
                                            <select id="select_aircraft" class="form-control col-6_sm-12  ">
                                                <option value='0'>All Manufacturers</option>
                                                @foreach($aircraft as $air_craft)
                                                <option value="{{$air_craft->id}}">{{$air_craft->Name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-2_sm-2 my-auto">
                                        <label for="comment" class="my-auto">Photographer:</label>
                                    </div>
                                    <div class="col-10_sm-10">
                                        <div class="grid">
                                            <select id="select_photographer" class="form-control col-6_sm-12  ">
                                                <option value='0'>All Photographers</option>
                                                @foreach($users as $user)
                                                <option value='{{$user->name}}'>{{$user->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-2_sm-2 my-auto">
                                        <label for="comment" class="my-auto">Airline:</label>
                                    </div>
                                    <div class="col-10_sm-10">
                                        <div class="grid">
                                            <select id="select_airlines" class="form-control col-12_sm-12  ">
                                                <option value='0'>All Airelines</option>
                                                @foreach($airlines as $airline)
                                                <option value='{{$airline->id}}'>{{$airline->Name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>
                                    <div class="col-2_sm-2 mt-2">
                                        <label for="comment" class="my-auto">Location:</label>
                                    </div>
                                    <div class="col-10_sm-10">
                                        <div class="grid">
                                            <select id="select_Country" name="country" class="form-control col-6_sm-12  mt-1">

                                            </select>
                                            <select id="select_airport" name="select_airport" class="form-control col-6_sm-12  mt-1">
                                            </select>


                                        </div>

                                    </div>
                                    <div class="col-2_sm-2 my-auto">

                                    </div>
                                    <div class="col-10_sm-10">
                                        <button onclick="" class="btn btn--block btn--large btn--picton-blue btn-success" role="button" id="btnSearch">

                                            <span class="text-uppercase">Show me Photos!</span>
                                        </button>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="wrapper__content">
                        <div style="position: relative">
                            <h2 class="head">
                                <span><strong>New Photos</strong></span>
                                <span class="icon icon-question3 color-nobel" data-tooltip="Photos of new registrations recently added to the database." style="font-size: 12px"></span>
                            </h2>
                            <div class="click-to-view-more">
                                <a href="/photo" class="link">
                                    <span>More New registrations</span>
                                </a>
                            </div>
                        </div>
                        <div class="grid-3_sm-2 gallery highlighted registrations">
                            @foreach($newPhoto as $nphoto)

                            <div class="col">
                        <div class="gallery-photo">
                            <a href="#" class="gallery-photo__delete delete-album-photo hidden" data-set-id="" data-album-photo-id="8578310">
                                <span>Remove</span>
                            </a>
                            <a href="/photo/{{$nphoto->id}}" class="gallery-photo__frame">
                                <img src="{{$nphoto->img_url}}" class="gallery-photo__img" alt="{{$nphoto->title}}-{{$nphoto->detail}}" title="{{$nphoto->title}}-{{$nphoto->detail}}">
                                @if($data->Remarks)
                                <div class="gallery-photo__popup">
                                    
                                     <p class="gallery-photo__popup-text">
                                        <span>{{$nphoto->Remarks}}</span>
                                    </p>
                                   
                                </div>  
                                 @endif
                                <div class="gallery-photo__info">
                                    <div class="gallery-photo__section">
                                        <span class="gallery-photo__text">{{$nphoto->Photograper}}</span>
                                        <span class="gallery-photo__text gallery-photo__text--nocrop">{{$nphoto->Registration}}</span>
                                    </div>
                                    <div class="gallery-photo__section">
                                        <span class="gallery-photo__text gallery-photo__text--nocrop">
                                            <span class="fa fa-eye"></span>
                                            <span>{{$nphoto->view_count}}</span>
                                            <span class="fa fa-star"></span>
                                            <span>{{$nphoto->fav_count}}</span>
                                            <span class="fa fa-commenting-o"></span>
                                            <span>{{$nphoto->comment_count}}</span>
                                        </span>
                                        <span class="gallery-photo__text gallery-photo__text--aircraft">{{$nphoto->aircraft_type_name}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                            @endforeach



                        </div>
                    </div>
                </div>
                <div class="col-4_sm-12">
                    <div class="wrapper__content"  >      
                        <div class="index-col"  >
                            <div id="index-temptation" class="index-temptation" >
                                <h2 class="box__head    ">
                                    <span><strong>Recent News:</strong></span>
                                    <a href="/forums" target="_blank" class="link pull-right">
                                        <span class="index-forum__link">Forum</span>
                                    </a>
                                </h2>
                                <div  class="forum-latest forum-latest--index grid">
                                    @foreach($forumdata as $item)

                                    <div class="col-4_sm_12">
                                        <img src="https://cdn.jetphotos.com/400/6/39032_1492845486.jpg" alt="">
                                    </div>
                                    <div class="col-8_sm_12">
                                        <a href="/forum/{{$item->id}}" target="_blank" class="forum-latest__post grid">
                                            <span class="forum-latest__post-title">{{$item->title}}</span>
                                            <div class="forum-latest__post-stats">
                                                <div class="forum-latest__post-stats-photo">
                                                    <!--                                                <img src="{{ asset('imgs/user.png') }}" class="img-responsive" alt="">-->
                                                </div>
                                                <div class="forum-latest__post-stats-category">
                                                    <span>{{$item->name}}</span>
                                                </div>
                                                <div class="forum-latest__post-stats-time">
                                                    <span>{{$item->created_at}}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>


                                    @endforeach

                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <!-- START REGISTRATION GALLERY -->
            <div class="wrapper__content">
                <div style="position: relative">
                    <h2 class="head">
                        <span><strong>Random Photos</strong></span>
                        <span class="icon icon-question3 color-nobel" data-tooltip="Photos of new registrations recently added to the database." style="font-size: 12px"></span>
                    </h2>
                    <div class="click-to-view-more">
                        <a href="/photo" class="link">
                            <span>More Random Photos</span>
                        </a>
                    </div>
                </div>
                <div class="grid-4_sm-2 gallery highlighted registrations">

                    @foreach($randomphotos as $data)
                    <div class="col">
                        <div class="gallery-photo">
                            <a href="#" class="gallery-photo__delete delete-album-photo hidden" data-set-id="" data-album-photo-id="8578310">
                                <span>Remove</span>
                            </a>
                            <a href="/photo/{{$data->id}}" class="gallery-photo__frame">
                                <img src="{{$data->img_url}}" class="gallery-photo__img" alt="{{$data->title}}-{{$data->detail}}" title="{{$data->title}}-{{$data->detail}}">
                                @if($data->Remarks)
                                <div class="gallery-photo__popup">
                                    
                                    <p class="gallery-photo__popup-text">
                                        <span>{{$data->Remarks}}</span>
                                    </p>
                                   
                                </div> 
                                  @endif
                                <div class="gallery-photo__info">
                                    <div class="gallery-photo__section">
                                        <span class="gallery-photo__text">{{$data->Photograper}}</span>
                                        <span class="gallery-photo__text gallery-photo__text--nocrop">{{$data->Registration}}</span>
                                    </div>
                                    <div class="gallery-photo__section">
                                        <span class="gallery-photo__text gallery-photo__text--nocrop">
                                            <span class="fa fa-eye"></span>
                                            <span>{{$data->view_count}}</span>
                                            <span class="fa fa-star"></span>
                                            <span>{{$data->fav_count}}</span>
                                            <span class="fa fa-commenting-o"></span>
                                            <span>{{$data->comment_count}}</span>
                                        </span>
                                        <span class="gallery-photo__text gallery-photo__text--aircraft">{{$data->aircraft_type_name}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach  
                </div>
                <div class="mobile-only wrapper__content text-center">
                    <a href="/showphotos.php?catsearch=134217728" class="link">
                        <span>More New registrations</span>
                    </a>
                </div>
            </div>


            <div class="wrapper__content">
                <div class="box box--white">
                    <h2 class="head head--no-bottom">JetPhotos at a glance</h2>
                </div>
                <div class="box box--white box--no-padding">
                    <div class="grid visit-stats total">
                        <div class="col-3_sm-12">
                            <div class="visit-stats__stat">
                                <div class="visit-stats__left">
                                    <span class="fa fa-camera visit-stats__icon"></span>
                                </div>
                                <div class="visit-stats__right photographers">
                                    <h2 class="visit-stats__number"><?php echo count($users);?></h2>
                                    <h3 class="visit-stats__category">Photographers</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3_sm-12">
                            <div class="visit-stats__stat">
                                <div class="visit-stats__left">
                                    <span class="fa fa-plane visit-stats__icon"></span>
                                </div>
                                <div class="visit-stats__right regs">
                                    <h2 class="visit-stats__number"><?php echo count($uniqueRegistration); ?></h2>
                                    <h3 class="visit-stats__category">Unique registrations</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3_sm-12">
                            <div class="visit-stats__stat">
                                <div class="visit-stats__left">
                                    <span class="fa fa-image visit-stats__icon"></span>
                                </div>
                                <div class="visit-stats__right photos">
                                    <h2 class="visit-stats__number">{{$photos}}</h2>
                                    <h3 class="visit-stats__category">Photos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-3_sm-12">
                            <div class="visit-stats__stat visit-stats__stat--no-border">
                                <div class="visit-stats__left">
                                    <span class="fa fa-eye visit-stats__icon"></span>
                                </div>
                                <div class="visit-stats__right views">
                                    <h2 class="visit-stats__number">{{$view_count}}</h2>
                                    <h3 class="visit-stats__category">Photo Views</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript" src="{{ asset('js/hompage.js') }}"></script>

@include('footer')       

@endsection