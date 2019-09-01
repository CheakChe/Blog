<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<title>{{config('app.name')}}</title>
	<link rel="icon" href="{{'favicon.ico'}}">
	<link rel="stylesheet" href="{{'css/app.css'}}">
	<link rel="stylesheet" href="{{'css/reset.css'}}">
</head>
<body>
	<header class="header">
		<div class="header_logo  margin_auto">
			<a href="#"><img src="{{'img/BAcademy.svg'}}" alt="logo"  width="200"></a>
		</div>
		<nav class="header_menu margin_auto">
			<a href="#">Home</a>
			<a href="#about_us">About us</a>
			<a href="#">Blog</a>
			<a href="#">Contact</a>
		</nav>
		<div class="header_button-menu margin_auto">
			<button class="button-basic button-margin"><a href="#">Log in</a></button>
			<button class="button-basic button-margin"><a href="#">Sign up</a></button>
			<div class="header_topmenu">	
				<li class="header_language-button">
					<button class="button-basic button-margin">Language</button>
					<ul class="header_language_submenu">
						<li class="button-basic button-margin">Sk</li>
						<li class="button-basic button-margin">En</li>
						<li class="button-basic button-margin">Ru</li>
					</ul>
				</li>
			</div>
		</div>
	</header>
