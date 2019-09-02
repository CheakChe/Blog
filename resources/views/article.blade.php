@include('layouts.header')
<div class="main">
	<div class="main_introduction main_introduction_p2">
		<p class="main_introduction_p1">{{$article->title}}</p>
		<p class="main_float">{{__('index.date').$article->created_at}}</p>
		<img width="500px" src="{{'/img/'.$article->image}}" alt="{{$article->title}}">
		<p class="main_article-text">{{$article->text}}</p>
		<p class="main_float">{{__('index.views').$article->views}}</p>
	</div>
</div>