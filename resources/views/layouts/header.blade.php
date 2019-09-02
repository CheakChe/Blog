<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>{{config('app.name')}}</title>
	<link rel="icon" href="{{'/favicon.ico'}}">
	<link rel="stylesheet" href="{{'/css/app.css'}}">
	<link rel="stylesheet" href="{{'/css/reset.css'}}">
</head>
<body>
	<header class="header">
		<div class="header_logo  margin_auto">
			<a href="/"><img src="{{'/img/BAcademy.svg'}}" alt="logo"  width="200"></a>
		</div>
		<nav class="header_menu margin_auto">
			<a href="#">{{__('header.Home')}}</a>
			<a href="#about_us">{{__('header.About')}}</a>
			<a href="#">{{__('header.Blog')}}</a>
			<a href="#">{{__('header.Contact')}}</a>
		</nav>
		<div class="header_button-menu margin_auto">
			<button class="button-basic button-margin"><a href="#">{{__('header.Log')}}</a></button>
			<button class="button-basic button-margin"><a href="#">{{__('header.Sign')}}</a></button>
			<div class="header_topmenu">	
				<li class="header_language-button">
					<button class="button-basic button-margin">{{__('header.Language')}}:{{config('app.locale')}}</button>
					<ul class="header_language_submenu">
						<a href="{{ url('/en') }}"><li class="button-basic button-margin">English</li></a>
						<a href="{{ url('/sk') }}"><li class="button-basic button-margin">Slovenský</li></a>
						<a href="{{ url('/ru') }}"><li class="button-basic button-margin">Русский</li></a>
					</ul>
				</li>
			</div>
		</div>
	</header>
