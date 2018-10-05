
@extends('layouts.forum')

@section('content')             
<div class="breadcrumbs-bar breadcrumbs-bar--top ">
    <!--&lt;!&ndash; IF U_MARK_FORUMS && SCRIPT_NAME == "index" && $breadcrumbsPos == "top" &ndash;&gt;-->
    <!--<a href="" class="btn btn-bare mark-read mark-read&#45;&#45;index" accesskey="m" data-ajax="mark_forums_read"><i class="fi fi-check-all"></i> Mark forums read</a>-->
    <!--&lt;!&ndash; ENDIF &ndash;&gt;-->
    <ol class="nav-breadcrumbs">

        <li class="crumb crumb--home" itemtype="/" itemscope="">
            <a href="/" itemprop="url" title="Homes">
              <span class="icon fa fa-home"></span>  <span itemprop="title">Home</span><span class="icon fa fa-angle-double-right"></span></a>
        </li>
        <li class="crumb" itemtype="/forums" itemscope="">
            <a href="/forums" itemprop="url" accesskey="h" data-navbar-reference="index" title="Aviation Forums">
                <span itemprop="title">Forum Categories</span><span class="icon fa fa-angle-double-right"></span></a>
        </li>
        <li class="crumb crumb--previous" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" data-forum-id="3">
            <a href="/forums/{{$category->id}}" itemprop="url" title="Civil Aviation"><span itemprop="title">  {{$category->name}}</span><span class="icon fa fa-angle-double-right"></span></a>
        </li>
    </ol>
</div>
<div class="container container-no-padding">




    <div class="big-grid">
        <div class="col-maincontent">
            <div class="page-header">
                <div class="page-header-inner">
                    <h2 class="page-title"><a href="javascript:;">{{$forum->title}}</a></h2>
                </div>
                <!--<div class="action-bar">-->
                <!--</div>-->
            </div>
            <div class="action-bar top">
                <div class="buttons">
                    <a href="/newreply/{{$forum->id}}" class="btn btn-success btn-createnew" title="Post a reply">
                        <i class="fi fi-plus"></i> Post Reply
                    </a>
                  
                </div>
        
                 <div class="right-side">
                    <!--300068 topics-->
                    <ul class="pagination">
                       {{ $replys->links() }}     </ul>
                </div>
            </div>
            <div class="postlist">










                @foreach($replys as $reply)
                <div class="post has-profile unreadpost online">
                    <a class="st-anchor" id="p20377635">&nbsp;</a>
                    <div class="inner">
                        <dl class="postprofile" id="profile20377635">
                            <dt class="avatar-container">
                            <a href="javascript:;" class="avatar">
                            <img class="avatar" src="{{$reply->photo}}" width="80px" height="80px" alt="User avatar" style="width: 80px; height:80px;"></a>    </dt>
                            <dt class="profile-main no-profile-rank">
                                <a href="javascript:;" class="username">{{$reply->userName}}</a>
<!--                                <span class="has-tooltip user-status-indicator" title="" data-original-title="Online"></span>-->
                            </dt>
                         
                            <dd class="profile-posts"><strong> </strong>
                            </dd>   
                              <dd class="profile-joined"><strong> </strong>
                               <span class="timestamp" title=""> </span></dd>
                        </dl>
                        <div class="postbody">
                            <div id="post_content20377635">
                                <h3><a href="#p20377635">{{$reply->title}}</a></h3>
                      
                                <p class="author"><span class="" title="{{$reply->created_at}}"><i class="fa fa-calendar"></i>{{$reply->created_at}}</span></p>
                                <div class="content">
                                <?php echo $reply->content;?>
                                </div>
                                <div id="sig20377635" class="signature"></div>
                            </div>
                        </div>
                        <div class="back2top"><a href="#top" class="top" title="Top">Top</a></div>
                    </div>
                </div>

                    @endforeach




            </div>






        </div>
    </div>
</div>
@endsection