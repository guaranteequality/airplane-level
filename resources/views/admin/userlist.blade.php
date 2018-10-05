
@extends('layouts.admin-layout')

@section('content')	
<link rel="stylesheet" href="{{asset('admin/css/userlist.css')}}">
<div class="row">
    <div class="col-lg-12">
        <div class="main-box no-header clearfix">
            <div class="main-box-body clearfix">
                <div class="table-responsive">

                    <table class="table user-list">
                        <thead>
                            <tr>

                                <th colspan="2">
                                    <span>
                                        User</span>
                                </th>
                                <th>
                                    <span>
                                        Created</span>
                                </th>
                                <th class="text-center">
                                    <span>
                                        Status</span>
                                </th>
                                <th>
                                    <span>
                                        Email</span>
                                </th>
                                <th>
                                    &nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                            <tr class='userdata_{{$user->id}}'>
                                <td>
                                    @if(isset($user->image))
                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                    @else
                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                    @endif

                                </td>
                                <td>  
                                    <a href="#" class="">
                                        {{$user->name}}
                                    </a>
                                    <br>
                                    @if($user->type==1)
                                    <span class="user-subhead">
                                        Admin</span>
                                    @else
                                    <span class="user-subhead">
                                        Member</span>
                                    @endif
                                </td>
                                <td>
                                    {{$user->created_at}}</td>
                                <td class="text-center userstatus_{{$user->id}}" >

                                    @if($user->permission==1)
                                    <span class="label label-danger text-white">
                                        Active</span>                                         
                                    @else
                                    <span class="label label-warning text-white">
                                        Inactive</span>
                                    @endif

                                </td>
                                <td>
                                    <a href="#">
                                        {{$user->email}}</a>
                                </td>
                                <td style="width: 20%;">
                                    <a href="javascript:view({{$user->id}});" class="table-link">

                                        <i class="batch-icon batch-icon-zoom-in batch-icon-md"></i>


                                    </a>
                                    <a href="javascript:active({{$user->id}});" class="table-link">

                                        <i class="batch-icon batch-icon-pencil batch-icon-md"></i>


                                    </a>
                                    <a href="javascript:remove({{$user->id}});" class="table-link danger">

                                        <i class="batch-icon batch-icon-delete batch-icon-md"></i>


                                    </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
                <nav aria-label="Page navigation example">
                    {{ $users->links() }} 
                </nav>

            </div>
        </div>
    </div>
</div>
@foreach($users as $user)

<div class="modal fade userdatamodal_{{$user->id}}"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 mx-auto">
                        <div class="m-portlet m-portlet--full-height  ">
                            <div class="m-portlet__body">
                                <div class="m-card-profile text-center">
                                    <div class="m-card-profile__title m--hide">

                                    </div>
                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper">
                                            @if(isset($user->image))
                                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                            @else
                                            <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="m-card-profile__details">
                                        <span class="m-card-profile__name">
                                            {{$user->name}}
                                        </span>
                                        <a href="" class="m-card-profile__email m-link">
                                            {{$user->email }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endforeach


<div class="modal fade removemodal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Are you sure?</h5>
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
<script type="text/javascript" src="{{asset('admin/js/userlist.js')}}"></script>
@endsection