
@extends('layouts.forum')

@section('content')             

<div class="container container-no-padding">
    <a id="start__content" class="anchor"></a>
    <!-- Global Alerts -->
    <!-- REMOVE THIS LINE TO ENABLE

    <div class="alert alert-info alert-dismissible fade in" role="alert" id="globalAlertExample1">
    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>

    This alert shows on all pages. Feel free to edit this text

    </div>

    REMOVE THIS LINE TO ENABLE -->
    <!-- Index Alerts -->
    <!-- REMOVE THIS LINE TO ENABLE

    <div class="alert alert-info alert-dismissible fade in" role="alert" id="indexAlertExample">
    <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>

    This notice will only appear on forum index. Feel free to edit this text

    </div>

    REMOVE THIS LINE TO ENABLE -->
    <div class="big-grid no-sidebar">
        <div class="col-maincontent">
            <div class="category-wrapper">
                <div class="category-header" style="">
                    Aviation Forums   
                    <a href="javascript:void(0)" class="close" data-toggle="collapse" data-target="#forum-3" aria-expanded="true" aria-controls="forum-3"></a>
                </div>
                <div class="category-inner collapse in" id="forum-3">
                    <ol class="itemlist itemlist--forums itemlist--forums--full">

                        @foreach($categories as $category)
                        <li class="itemlist__item forum_read has-lastpostavatar">
                            <div class="item-inner">
                                <div class="item-col-icon" title="No unread posts">
                                    <i class="fa fa-comments-o fa-2x"></i>
                                </div>
                                <div class="item-col-main">
                                    <a class="item-title" href="/forums/{{$category->id}}">{{$category->name}}</a>
                                    <span class="item-info">{{$category->description}}</span>
                                    <span class="item-lastpost--inline">
                                        <span class="lastpost-label-inline">Last post<!--:--></span>
                                        <!--<a href="./viewtopic.php?f=3&amp;p=20473479#p20473479" title="Re: Interview with LH CEO interesting comments regarding fleet" class="lastsubject-inline">Re: Interview with LH CEO int…</a>-->
                                        by <a href="javascript:;" class="username">ap305</a>,
                                        <a href="http://www.airliners.net/forum/viewtopic.php?f=3&amp;p=20473479#p20473479"><span class="timestamp" title="Mon Jun 11, 2018 9:50 am">2 hours ago</span></a>
                                    </span>
                                    <div class="item-stats--inline">
                                        <span class="item-stat item-stat--topics">
                                            <span class="item-stat__count formatted-numcounter"></span>
                                            <span class="item-stat__label">Topics</span>
                                        </span>
                                        <span class="item-stat item-stat--posts">
                                            <span class="item-stat__count formatted-numcounter">5,354,944</span>
                                            <span class="item-stat__label">Posts</span>
                                        </span>
                                    </div>
                                </div>
                                <a class="item-col-feed" title="Feed - Civil Aviation" href="http://www.airliners.net/forum/feed.php?f=3"><i class="fi fi-rss"></i></a>
                                <div class="item-col-stats">
                                    <span class="item-stat item-stat--topics">
                                        <span class="item-stat__count formatted-numcounter">{{$category->topiccount}}</span>
                                        <span class="item-stat__label">Topics</span>
                                    </span>
                                    <!--  <span class="item-stat item-stat--posts">
                                    <span class="item-stat__count formatted-numcounter">{{$category->topiccount}}</span>
                                    <span class="item-stat__label">Posts</span>
                                    </span>-->
                                </div>
                                <div class="item-col-lastpost">
                                    <span class="lastpostavatar">
                                        <img class="avatar" src="./Airliners.net - Aviation Forums_files/no_avatar.gif" width="30" height="30" alt=""></span>    
                                    <a href="javascript:;" title="Re:{{$category->last_topic}}" class="item-lastpost__title">
                                        Recent:{{$category->last_topic}}</a>
                                    <div class="item-lastpost__info">
                                        by <a href="http://www.airliners.net/forum/memberlist.php?mode=viewprofile&amp;u=1215" class="username">{{$category->UserName}}</a>
                                        <span class="item-lastpost__time timestamp" title="Mon Jun 11, 2018 9:50 am" style="display: inline;">{{$category->updated_at}}</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @endforeach
                    </ol>
                </div><!-- category-inner END -->
            </div><!-- category-wrapper END -->
            <a id="recent_topics"></a>
            <div class="recent-topics forumbg">
                <div class="inner">
                    <div class="section-header">
                        <span>Recent Topics</span>
                    </div>
                    <ul class="itemlist itemlist--topics itemlist--topics--full">
                        @foreach($recent as $re)
                        <li data-topic-id="1396275" class="itemlist__item topic_read">
                            <div class="item-inner">
                                <div class="item-col-icon">
                                    <i class="fa fa-commenting-o fa-2x"></i>
                                </div>
                                <div class="item-col-main">
                                    <a href="/reply/{{$re->id}}" class="item-title">
                                        {{$re->title}}</a>
                                    <div class="item-info">
                                    <?php $re->content;?>               </div>
                                    <div class="item-lastpost--inline">

                                        Last post
                                        by
                                        <a href="javascript:;" class="username">
                                            {{$re->UserName}}</a>
                                        <span class="lastpostavatar"><img class="avatar" src="{{$re->photo}}" width="30" height="30" alt=""></span>,
                                        <a href="javascript:;" class="topic-lastpost-time">
                                            <span class="timestamp" >{{$re->created_at}}</span></a>
                                    </div>
                                    <div class="item-stats--inline">
                                        <span class="item-stat item-stat--posts">
                                            <span class="topic-posts-count"><span class="formatted-numcounter">6</span></span>
                                            <span class="topic-posts-label">Replies</span>
                                        </span>
                                        <span class="item-stat item-stat--views">
                                            <span class="item-stat__count"><span class="formatted-numcounter">713</span></span>
                                            <span class="item-stat__label">Views</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- PAGINATION BLOCK -->
                                <div class="item-col-pagination">
                                </div>
                                <!-- STAT BLOCK -->
                                <div class="item-col-stats">
                                    <span class="item-stat--v2 item-stat--views">
                                        <span class="item-stat__count"><span class="formatted-numcounter">{{$re->view_count}}</span></span>
                                        <span class="item-stat__label">Views</span>
                                    </span>                                                                       
                                </div>
                                <!-- LASTPOST BLOCK -->
                                <div class="item-col-lastpost">
                                    <span class="hidden">Last post</span>
                                    <a href="javascript:;" class="username">{{$re->UserName}}</a><span class="lastpostavatar">
                                        <img class="avatar" src="{{$re->photo}}" width="30" height="30" alt=""></span>
                                    <br>
                                    <a href="javascript;;" class="item-lastpost__time">
                                        <span class="timestamp" style="display: inline;">{{$re->created_at}}</span></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Who is online -->

    <!-- Statistics (shows only on index) -->

    <!-- Birthdays -->
</div><!-- .container END -->








<link href="{{asset('css/forumn.css')}}" rel="stylesheet">


@endsection