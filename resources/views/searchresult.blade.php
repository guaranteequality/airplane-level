
@extends('layouts.main')

@section('content')             


@include('header')    
<main class="main" role="main">


    <section class="main__section main__section--show-photos">

        <div class="wrapper">
            <div class="wrapper__content wrapper__content--small">
                <div class="paging">
                    <nav aria-label="Page navigation example">
                        {{ $result->links() }}  
                    </nav>
                </div>
            </div>
        </div>


        <div id="results" class="results">

            @if(count($result)>0)
            @foreach($result as $flight)
            <div class="result" data-photo="8974603">

                <div class="result__section result__section--photo-wrapper">
                    <a href="/photo/{{$flight->id}}" class="result__photoLink">
                        <img src="{{$flight->img_url}}" class="result__photo"   alt="" title="">
                    </a>
                </div>

                <div class="result__section result__section--info-wrapper">

                    <section class="mobile-only">
                        <ul class="result__infoList">
                            <li class="result__infoListItem">
                                <span class="result__infoListText result__infoListText--photographer"><a href="" class="link">{{$flight->Photograper}}</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText"><a href="/photo/{{$flight->id}}" class="link">{{$flight->Registration}}</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText">


                                    <a href="/registration/C-GNCH" class="link">{{$flight->SerialNumber}}</a>
                                </span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText"><a href="/airline/Sunwing Airlines" class="link">{{$flight->aircraft_model_name}}</a></span>
                            </li>
                        </ul>
                        <div class="result__arrow">
                            <a href="/photo/{{$flight->id}}" class="link">
                                <span class="icon icon-arrow-right3"></span>
                            </a>
                        </div>
                    </section>

                    <section class="desktop-only desktop-only--block">
                        <ul class="result__infoList">
                            <li class="result__infoListItem">
                                <span class="result__infoListText">Airline: <a href="/airline/Sunwing Airlines" class="link">{{$flight->AirLineName}}</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText">Reg: <a href="/info/737-39438" class="link">{{$flight->Registration}}</a> | <a href="/registration/C-GNCH" class="link">C-GNCH photos</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText">Aircraft: <a href="/aircraft/Boeing 737-81D" class="link">{{$flight->aircraft_model_name}}</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText">Serial #: <a href="/aircraft/manufacturer/Boeing/serial/39438" class="link">{{$flight->SerialNumber}}</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText">Photo date: <a href="/photo/date/2018-05-19/2018-05-19" class="link">{{$flight->PhotoDate}}</a></span>
                            </li>
                            <li class="result__infoListItem">
                                <span class="result__infoListText">Uploaded: {{$flight->created_at}}</span>
                            </li>
                        </ul>
                    </section>

                    <div class="result__stats">
                        <div class="result__stat">
                            <span class="desktop-only desktop-only--inline">Likes: </span>
                            <span class="mobile-only icon icon-star-full2"></span> {{$flight->fav_count}}
                        </div>
                        <div class="result__stat">
                            <span class="desktop-only desktop-only--inline">Comments: </span>
                            <span class="mobile-only icon icon-bubble-dots"></span> {{$flight->comment_count}}
                        </div>
                        <div class="result__stat">
                            <span class="desktop-only desktop-only--inline">Views: </span>
                            <span class="mobile-only icon icon icon-eye2"></span> {{$flight->view_count}}
                        </div>
                    </div>

                </div>

                <div class="result__section result__section--info2-wrapper">

                    <ul class="result__infoList">
                        <li class="result__infoListItem">
                            <span class="result__infoListText">Location: <br> <a href="/airport/Dublin - EIDW" class="link">{{$flight->airpot_name}}, {{$flight->country_name}}</a></span>
                        </li>
                    </ul>

                    <ul class="result__infoList">
                        <li class="result__infoListItem">
                            @if($flight->Photograper)
                            <span class="result__infoListText result__infoListText--photographer">By: <a href="/photographer/8069/photos" class="link">{{$flight->Photograper}}</a></span>
                            <span class="result__user-content">
                                <a href="/photographer/8069/photos" class="link">Photos</a> | <a href="/photographer/8069" class="link">Profile</a> | <a href="/photographer/8069#contact" class="link">Contact</a>
                            </span>
                            @endif
                        </li>
                    </ul>




                </div>



            </div>
            @endforeach
            @else
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">No Result!</h4>
                <p>Sorry, We are have not results for your requirements.</p>
                <p class="mb-0">Please input searchkey again</p>
            </div>
            @endif




        </div>
        <div class="wrapper">
            <div class="wrapper__content wrapper__content--small">
                <div class="paging">

                </div>
            </div>
        </div>

    </section>

</main>


@include('footer')       

@endsection