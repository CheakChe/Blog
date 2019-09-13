@extends('layouts.template')

@section('content')
<main class="main">
	<div id="particles-js" class="particles"></div>
	<div class="main_introduction">
	 	<p class="main_introduction_p1">{{__('index.ETE')}}</p>
	 	<p class="main_introduction_p2">
	 		{{__('index.BAdescription')}}
	 	</p>
	 	<br>
		<a class="button-basic button-margin-eshop" href="#">EShop</a>
 	</div>
 	<div id="about_us" class="main_bacademy">
 		<p class="main_bacademy_p1">{{__('index.WhatBA')}}</p>
 		<p class="main_bacademy_p2">
 			{{__('index.WhatBAdescription')}}
 		</p>
 		<button class="button-basic main_bacademy_button-sign-up button-padding">{{__('header.Sign')}}</button>
 	</div>
 	<div class="main_logo">
 		<div  class="main_logo_dark ">
 			<img class="logo-width" src="{{'img/logo_company/waves.png'}}" alt="waves">
 			<img class="logo-width" src="{{'img/logo_company/bitmex.png'}}" alt="bitmex">
 			<img class="logo-width" src="{{'img/logo_company/poloniex.png'}}" alt="poloniex">
 			<img class="logo-width" src="{{'img/logo_company/kraken.png'}}" alt="kraken">
 			<img class="logo-width" src="{{'img/logo_company/bitfinex.png'}}" alt="bitfinex">
 		</div>
 		<div class="main_logo_light">
 			<img class="logo-width logo-padding" src="{{'img/logo_company/coincodex.png'}}" alt="coincodex">
 			<img class="logo-width" src="{{'img/logo_company/blockchain.png'}}" alt="blockchain">
 			<img class="logo-width" src="{{'img/logo_company/xapo.png'}}" alt="xapo">
 			<img class="logo-width" src="{{'img/logo_company/coinbase.png'}}" alt="coinbase">
 			<img class="logo-width" src="{{'img/logo_company/block-io.png'}}" alt="block io">
 			<img class="logo-width logo-padding" src="{{'img/logo_company/airbitz.png'}}" alt="airbitz">
 		</div>
 	</div>
 	<div id="blog" class="main-articles">
 		<p class="main-articles_title">{{__('index.Articles')}}</p>
 		<div class="main-article_quantity">
 			@foreach($articles as $article)
 				@if(str_replace('_', '-', app()->getLocale()) == $article->language)
	 			<a href="{{ url(str_replace('_', '-', app()->getLocale()).'/article/'.$article->id)}}">
		 			<div class="main-articles_show">
		 				<img width="250px" src="{{'img/'.$article->image}}" alt="{{$article->title}}">
						<p>{{$article->title}}</p>
						<p>{{substr($article->text, 0, 150).'...'}}</p>
					</div>
				</a>
				@endif
			@endforeach
		</div>
 	</div>
</main>
@endsection

