
@extends('layouts.forum')

@section('content')             
<div class="breadcrumbs-bar breadcrumbs-bar--top ">
    <!--&lt;!&ndash; IF U_MARK_FORUMS && SCRIPT_NAME == "index" && $breadcrumbsPos == "top" &ndash;&gt;-->
    <!--<a href="" class="btn btn-bare mark-read mark-read&#45;&#45;index" accesskey="m" data-ajax="mark_forums_read"><i class="fi fi-check-all"></i> Mark forums read</a>-->
    <!--&lt;!&ndash; ENDIF &ndash;&gt;-->
    <ol class="nav-breadcrumbs">
        <!-- <li class="quick-nav-link dd-container jumpbox">
        <a href="javascript:void(0)" data-toggle="dropdown" title="Jump to">
        <i class="fi fi-open-in-new"></i>
        </a>
        <ul class="dropdown-menu jumpbox-dropdown" role="menu">
        <li><a href="./viewforum.php?f=3&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Civil Aviation</span></a></li>
        <li><a href="./viewforum.php?f=4&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Travel, Polls &amp; Preferences</span></a></li>
        <li><a href="./viewforum.php?f=5&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Technical/Operations</span></a></li>
        <li><a href="./viewforum.php?f=6&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Aviation Hobby</span></a></li>
        <li><a href="./viewforum.php?f=7&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Aviation Photography</span></a></li>
        <li><a href="./viewforum.php?f=8&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Photography Feedback</span></a></li>
        <li><a href="./viewforum.php?f=9&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Trip Reports</span></a></li>
        <li><a href="./viewforum.php?f=10&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Military Aviation &amp; Space Flight</span></a></li>
        <li><a href="./viewforum.php?f=11&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Non-Aviation</span></a></li>
        <li><a href="./viewforum.php?f=12&amp;sid=2abee45c2800eebbaf224f5dc7aa9ecb" role="menuitem" tabindex="-1"><span>Site Related</span></a></li>
        </ul>
        </li>       -->
        <li class="crumb crumb--home" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
            <a href="/" itemprop="url" data-navbar-reference="home" title="Airliners.net">
               <span class="icon fa fa-home"></span> <span itemprop="title">Home</span><span class="icon fa fa-angle-double-right"></span></a>
        </li>
        <li class="crumb crumb--previous" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="">
            <a href="/forums" itemprop="url" accesskey="h" data-navbar-reference="index" title="Aviation Forums">
                <span itemprop="title">Aviation Forums</span><span class="icon fa fa-angle-double-right"></span></a>
        </li>
        <li class="crumb" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" data-forum-id="3">
            <a href="/forums/{{$category->id}}" itemprop="url" title="Civil Aviation">
                <span itemprop="title">{{$category->name}}</span><span class="icon fa fa-angle-double-right"></span></a>
        </li>
    </ol>
</div>
<div class="container container-no-padding">

    <a id="start__content" class="anchor"></a>
    <!-- Global Alerts -->
    <!-- REMOVE THIS LINE TO ENABLE

    <div class="alert alert-info alert-dismissible fade in" role="alert" id="globalAlertExample1">
    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>

    This alert shows on all pages. Feel free to edit this text

    </div>

    REMOVE THIS LINE TO ENABLE --><div class="big-grid">
        <div class="col-maincontent">
            <div class="page-header">
                <div class="page-header-inner">
                    <h2 class="forum-title"><a href="/forums/{{$category->id}}">{{$category->name}}</a></h2>
                <p class="forum-description">{{$category->description}}</p>    </div>
                <div class="action-bar">
                </div>
            </div>
            <div class="action-bar top">
                <div class="buttons">
                    <a href="/newtopic/{{$category->id}}" class="btn btn-success btn-createnew" title="Post a new topic">
                        <i class="fi fi-plus"></i> New Topic
                    </a>
                </div>
             
                <div class="right-side">
                    <!--300068 topics-->
                    <ul class="pagination">
                       {{ $forums->links() }}     </ul>
                </div>
            </div>

            <div class="forumbg">
                <div class="inner">
                    <div class="section-header">
                        <span>Topics</span>
                        <span class="topic-count">300068 topics</span>
                    </div>
                    <ul class="itemlist itemlist--topics itemlist--topics--full itemlist--has-colbar">
                        @foreach($forums as $forum)
                        
                     
                        <li data-topic-id="1390969" class="itemlist__item topic_read_hot">
                            <div class="item-inner">
                                <div class="item-col-icon">
                                    <i class="fa fa-comments-o fa-2x"></i>
                                </div>
                                <div class="item-col-main">
                                    <a href="/reply/{{$forum->id}}" class="item-title">{{$forum->title}}</a>
                                    <div class="item-info">
                                        <span><?php echo $forum->content; ?></span>
                                    </div>
                                    <div class="item-lastpost--inline">
                                        <span class="reply-counter">
                                            <span class="formatted-numcounter">302</span>
                                            <i class="fi fi-message-text-outline"></i>
                                        </span>
                                        Last post
                                        by
                                        <a href="" class="username">{{$forum->userName}}</a><span class="lastpostavatar"><img class="avatar" src="./styles/canvas/theme/images/no_avatar.gif" width="30" height="30" alt=""></span>,
                                        <a href="" class="topic-lastpost-time"><span class="timestamp" title="Mon Jun 11, 2018 4:52 pm">{{$forum->created_at}}</span></a>
                                    </div>
                                    <div class="item-stats--inline">
                                        <span class="item-stat item-stat--posts">
                                            <span class="topic-posts-count"><span class="formatted-numcounter">302</span></span>
                                            <span class="topic-posts-label">Replies</span>
                                        </span>
                                        <span class="item-stat item-stat--views">
                                            <span class="item-stat__count"><span class="formatted-numcounter">{{$forum->view_count}}</span></span>
                                            <span class="item-stat__label">Views</span>
                                        </span>
                                    </div>
                                </div>

                                <!-- STAT BLOCK -->
                                <div class="item-col-stats">
                                    <span class="item-stat--v2 item-stat--views">
                                        <span class="item-stat__count"><span class="formatted-numcounter">{{$forum->view_count}}</span></span>
                                        <span class="item-stat__label">Views</span>
                                    </span>
                                    <span class="item-stat--v2 item-stat--posts has-tooltip" data-placement="left" title="" data-original-title=" ">
                                        <span class="item-stat__label"><i class="fi fi-comment-multiple-outline"></i></span>
                                        <span class="item-stat__count"><span class="formatted-numcounter"></span></span>
                                    </span>
                                </div>
                                <!-- LASTPOST BLOCK -->
                                <div class="item-col-lastpost">
                                    <span class="hidden">Last post</span> <a href="./memberlist.php?mode=viewprofile&amp;u=735235" class="username">{{$forum->userName}}</a><span class="lastpostavatar">
                                    <img class="avatar" src="{{$forum->photo}}" width="30" height="30" alt=""></span>
                                    <br>
                                    <a href="./viewtopic.php?f=3&amp;t=1390969&amp;p=20474225#p20474225" class="item-lastpost__time"><span class="timestamp" title="Mon Jun 11, 2018 4:52 pm" style="display: inline;">{{$forum->created_at}}</span></a>
                                </div>
                            </div>
                        </li>
                           @endforeach
                    </ul>
                </div>
            </div>
       
          
          
      
        </div>
    </div>
</div>


<!--
<main class="main" role="main">

<div class="container">


<nav class="navbar navbar-expand-lg navbar-light bg-light rounded pl-0 pr-0">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExample09">
<ul class="navbar-nav mr-auto">

<li class="nav-item">
<a class="nav-link" href="/"><i class="fa fa-home"></i>Home&nbsp;&nbsp;/</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/forums">Forum Categories&nbsp;&nbsp;/</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/forums/{{$category->id}}">{{$category->name}}</a>
</li>

</ul>

</div>
</nav>
<div class="page-title mt-3">

<h4>{{$category->name}}</h4>
<h6>{{$category->description}}</h6>
</div>
<nav class="navbar navbar-light bg-light justify-content-between">
<a class="navbar-brand btn   btn--large btn--picton-blue text-white" href="/newtopic/{{$category->id}}"><i class="fa fa-plus"></i>&nbsp;New Topic</a>
<form class="form-inline  my-2 mr-auto">
<input class="form-control" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success h-100 my-sm-0" type="submit">Search</button>
</form> 
<div class="form-inline ml-auto">
pagelink
</div>
</nav>
<div class="topoptons">
<div class=" row col-12">
<table class="table">
@foreach($forums as $forum)
<tr>
<td><i class="fa fa-commenting-o"></i></td>
<td>
<h6><a href="/reply/{{$forum->id}}">{{$forum->title}}</a></h6>
<h6>{{$forum->content}}</h6>
</td>
<td>
{{$forum->created_at}}
</td>
<td>
<i class="fa fa-commenting-o"></i> 23
</td>

</tr>


@endforeach
</table>
</div>

</div>
</div>

</main>

-->




<link href="{{asset('css/forumn.css')}}" rel="stylesheet">



@endsection