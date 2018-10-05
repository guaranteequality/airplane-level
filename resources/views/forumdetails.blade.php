
@extends('layouts.main')

@section('content')             
		 
		 				
@include('header')	
     
<main>
	 <div id="forum-latest" class="forum-latest forum-latest--index">
	  @foreach($forumDetailData as $item)
		 <a href="/forum/{{$item->id}}" target="_blank" class="forum-latest__post">
			<span class="forum-latest__post-title">{{$item->title}}</span>
			<div class="forum-latest__post-stats">
			   <div class="forum-latest__post-stats-photo">
				  <img src="{{ asset('imgs/user.png') }}" class="img-responsive" alt="">
			   </div>
			   <div class="forum-latest__post-stats-category">
				  <span>{{$item->name}}</span>
			   </div>
			   <div class="forum-latest__post-stats-category">
				  <span>{{$item->content}}</span>
			   </div>
			   <div class="forum-latest__post-stats-time">
				  <span>{{$item->created_at}}</span>
			   </div>
			</div>
		 </a>
		 
		@endforeach
		 
	  </div>
</main>
 		 				
@include('footer')       
	
@endsection