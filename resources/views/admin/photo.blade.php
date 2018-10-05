
@extends('layouts.admin-layout')

@section('content')

	
<link rel="stylesheet" href="{{asset('admin/css/userlist.css')}}">
<div class="row">
    <div class="col-lg-12">
        <div class="main-box no-header clearfix">
            <div class="main-box-body clearfix">
                <!--                <div class="table-responsive">-->
                <table class="table user-list">
                    <colgroup>
                        <col width="20%">
                        <col width="60%">
                        <col width="10%">
                        <col width="20%">
                    </colgroup>
                    <thead>
                        <tr>

                            <th >
                                <span>
                                    photo</span>
                            </th>
                            <th>
                                <span >
                                    Registration</span>
                            </th>
                            <th>
                                <span>
                                    Created_at</span>
                            </th>  
                            <th>
                                &nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($photos as $photo)
                        <tr class='userdata_{{$photo->id}}'>

                            <td>  
                                <a href="javascript:view({{$photo->id}});" class="">
                                    <img src="{{$photo->img_url}}" width="170px" height="auto">
                                </a>

                            </td>
                            <td class="" style="max-width: 150px; overflow-wrap: break-word;">
                                {{$photo->Registration}}</td>
                            <td>
                                {{$photo->created_at}}</td>


                            <td>
                                <a href="javascript:view({{$photo->id}});" class="table-link">

                                    <i class="batch-icon batch-icon-zoom-in batch-icon-md"></i>


                                </a>   
                                <a href="javascript:remove({{$photo->id}});" class="table-link danger">

                                    <i class="batch-icon batch-icon-delete batch-icon-md"></i>


                                </a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
                <!--                </div>-->
                <nav aria-label="Page navigation example">
                    {{ $photos->links() }} 
                </nav>
            </div>
        </div>
    </div>
</div>

@foreach($photos as $photo)
<div class="modal fade preview_{{$photo->id}}" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Photo View</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="container">
                        <div id="large-photo-wrapper" class="wrapper large-photo">
                            <div class="large-photo__desktop">
                                <a id="show-large-photo" href="javascript:;" rel="modal:open">
                                    <img src="{{$photo->img_url}}" class="w-100" alt="15-0051 - Airbus A400M - Turkey - Air Force" title="Photo of 15-0051 - Airbus A400M - Turkey - Air Force">
                                </a>
                                <div class=" m-0 grid text-light bg-dark row">
                                    <div class="col-6 text-left"><img src="{{asset('imgs/watermark.png')}}" style="height: 20px; width:auto;"></div>
                                    <div class="col-6 text-right">Image Copyright&copy;{{$photo->Photograper}}</div>

                                </div>
                            </div>
                        </div>
                         <div class="wrapper__content wrapper__content--small">

                            <div class="row">
                                <div class="col-4">
                                    <div class="grid-noBottom">
                                        <div class="col">
                                            <span class="headerText3 color-dusty-gray">Registration</span>
                                            <span class="headerText4 color-shark" >{{$photo->Registration}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 grid-noGutter-noBottom">
                                    <div class="col">
                                        <h6 class="headerText3 color-dusty-gray">Photo Date</h6>
                                        <span class="headerText4 color-shark">{{$photo->PhotoDate}}</span>
                                    </div>
                                    <div class="col">
                                        <h6 class="headerText3 color-dusty-gray">Uploaded</h6>
                                        <span class="headerText4 color-shark">{{$photo->created_at}}</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="grid-noBottom">
                                        <div class="col">
                                            <span class="headerText3 color-dusty-gray">Views</span>
                                            <a href="javascript:;">
                                                <span class="headerText4 color-shark">{{$photo->view_count}}</span>
                                            </a>
                                        </div>
                                        <div class="col photoLikes">
                                            <span class="headerText3 color-dusty-gray">Likes</span>    
                                            <span class="headerText4 color-shark fav_count"  >{{ $photo->fav_count}}</span>
                                            <div>
                                                <ul>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="wrapper__content wrapper__content--small">

                                <div class="row">
                                    <div class="col-4">
                                        <span class="headerText3 color-dusty-gray">Badges</span>
                                        <div class="badges">
                                            <span>None</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span class="headerText3 color-dusty-gray">Notes</span>
                                        <span>{{$photo->Remarks}}</span>
                                    </div>
                                    <div class="col-4">
                                        <span class="headerText3 color-dusty-gray">Camera</span>
                                        <span class="text text--block">


                                        </span></div>
                                </div>

                            </div>

                            <div class="wrapper__content wrapper__content--small">

                                <div class="row">



                                    <div class="col-4">
                                        <ul class="list list--unstyled">
                                            <li class="list__item">
                                                <span class="head"><span>Aircraft</span></span>
                                            </li>
                                            <li class="list__item">
                                                <span>Reg:                                                             <a href="/registration/15-0051" class="link">{{$photo->Registration}}</a></span>
                                            </li>
                                            <li class="list__item">
                                                <span>Aircraft: <span class="header-reset"><a href="/aircraft/Airbus+A400M" class="link">{{$photo->aircraft_model_name}}</a></span>
                                                </span></li>
                                            <li class="list__item">
                                                <span>Airline: <a href="/airline/Turkey+-+Air+Force" class="link">{{$photo->AirLineName}}</a></span>
                                            </li>
                                            <li class="list__item">
                                                <span>Serial #:
                                                    <span class="header-reset">
                                                        <a class="link" href="/aircraft/manufacturer/Airbus/serial/051">
                                                            {{$photo->SerialNumber}}                                                                    </a>
                                                    </span>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-4">
                                        <ul class="list list--unstyled">
                                            <li class="list__item">
                                                <span class="head"><span>Photo Location</span></span>
                                            </li>
                                            <li class="list__item">
                                                <span>
                                                    <span class="header-reset">
                                                        <span>
                                                            <a class="link" href="javascript:;">{{$photo->airpot_name}}</a>
                                                        </span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="list__item">
                                                <span><a class="link" href="javascript:;">{{$photo->CountryName}}</a></span>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="col-4">
                                        <ul class="list list--unstyled">
                                            <li class="list__item">
                                                <span class="head"><span>Photographer</span></span>
                                            </li>
                                            <li class="list__item">
                                                <span><h6 class="header-reset">{{$photo->Photograper}}</h6></span>
                                            </li>
                                            @if($photo->Photograper)
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

             
                        </div>
                    </div>
                </div>
                <span class="text-justify"  class="" style=" overflow-wrap: break-word;">  

                </span>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>


@endforeach



<div class="modal fade removemodal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title">Are you sure?</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btnYes">Yes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('admin/js/photo.js')}}"></script>
@endsection