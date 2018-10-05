
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
               <span class="icon fa fa-home"></span> <span itemprop="title">Home</span></a>
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
<h2 class="posting-title"><a href="/forums/{{$category->id}}">{{$category->name}}</a></h2>      
<form id="postform"action="/topicsave" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="panel" id="postingbox">
    <div class="inner">
        <h3>Post a new topic</h3>
        <fieldset class="st-editor">
            <dl style="clear: left;">
                <dd>
                    <input type="hidden" name="categoryid" value="{{$category->id}}">
                    <input type="text" placeholder="Enter Title" id="forumtitle" name="forumtitle" class="form-control" size="45" maxlength="120">
                </dd>
            </dl>
            <div class="st-editor__box">


                <div id="message-box">


                    <textarea name="forumcontent" id="forumcontent" rows="25" cols="76" tabindex="4" class="inputbox"></textarea>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<fieldset class="submit-buttons">
    <input type="submit" accesskey="s" tabindex="6" name="post" value="Submit" class="button1 default-submit-action">&nbsp;
</fieldset>


</form>    

<link href="{{asset('css/forumn.css')}}" rel="stylesheet">


@endsection