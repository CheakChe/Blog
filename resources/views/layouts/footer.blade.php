	<footer id="contant" class="footer">
		<div class="footer_logo margin_auto_horizont">
			<a href="/{{ str_replace('_', '-', app()->getLocale()) }}">
				<img src="{{'/img/BAcademy.svg'}}" alt="logo"  width="200">
			</a>
		</div>
		<div class="footer_about-us margin_auto_horizont">
			<p class="about-font">{{__('header.About')}}</p>
			<br>
			<a href="#">{{__('footer.TermsAndConditions')}}</a>
			<br>
			<a href="#">{{__('footer.PrivacyPolicy')}}</a>
		</div>
		<div class="footer_contant margin_auto_horizont">
			<p class="about-font">{{__('footer.Letsstayintouch')}}</p>
			<br>
			<ul>
				<li class="footer_li-display">
					<p>{{__('footer.Adress')}}:</p>
					<p class="adress-place">{{__('footer.AdressPlace')}}</p>
				</li>
				<br>
				<li class="footer_li-display">
					<p>{{__('footer.Phonenumber')}}:</p>
					<p>+421907507774</td>
				</li>
				<br>
				<li class="footer_li-display">
					<p>E-mail:</p>
					<div class="mail">
						<p>
							<a href="mailto:info@bitcoinacademy.international">
								info@bitcoinacademy.international
							</a>
							<br>
							<a href="mailto:bitcoinacademy@bitcoinacademy.international">
								bitcoinacademy@bitcoinacademy.international
							</a>
						</p>
					</div>
				</li>
				<br>
				<li class="footer_li-display">
					<p class="footer_follow">{{__('footer.Followus')}}</p>
					<div>
						<a href="#"><img width="50px" src="{{'/img/vk.png'}}" alt="vk"></a>
						<a href="#"><img width="50px" src="{{'/img/telegram.png'}}" alt="telegram"></a>
					</div>
				</li>
			</ul>
		</div>
	</footer>

	<script src="{{'/js/particles.js'}}"></script>
	<script src="{{'/js/app.js'}}"></script>
</body>
</html>