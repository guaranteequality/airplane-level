
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
                                    Title</span>
                            </th>
                            <th>
                                <span >
                                    Content</span>
                            </th>
                            <th>
                                <span>
                                    Created</span>
                            </th>  
                            <th>
                                &nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($forums as $forum)
                        <tr class='userdata_{{$forum->id}}'>

                            <td>  
                                <a href="javascript:view({{$forum->id}});" class="">
                                    {{$forum->title}}
                                </a>

                            </td>
                            <td class="" style="max-width: 150px; overflow-wrap: break-word;">
                                {{$forum->content}}</td>
                            <td>
                                {{$forum->created_at}}</td>


                            <td>
                                <a href="javascript:view({{$forum->id}});" class="table-link">

                                    <i class="batch-icon batch-icon-zoom-in batch-icon-md"></i>


                                </a>   
                                <a href="javascript:remove({{$forum->id}});" class="table-link danger">

                                    <i class="batch-icon batch-icon-delete batch-icon-md"></i>


                                </a>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
                <!--                </div>-->
                <nav aria-label="Page navigation example">
                    {{ $forums->links() }} 
                </nav>
            </div>
        </div>
    </div>
</div>

@foreach($forums as $forum)
<div class="modal fade preview_{{$forum->id}}" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Forum</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>

                    {{$forum->title}}

                </h3>  
                <h5 class="text-justify"  class="" style=" overflow-wrap: break-word;">  
                    {{$forum->content}}

                </h5>
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
<script type="text/javascript" src="{{asset('admin/js/forum.js')}}"></script>
@endsection