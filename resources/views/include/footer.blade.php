		<footer id="footer">

			<div id="footer-innertube">

				<div id="footer-address">
					<h5>Address</h5>
					<ul>
						<li>123 Street Address,</li>
						<li>Lovely City,</li>
						<li>My Country</li>
					</ul>
				</div><!-- footer-address end -->

				<div id="footer-contact">
					<h5>Contact</h5>
					<ul>
						<li>000 123 456 789</li>
						<li><a href="mailto:#" title="Send me an email">address@email.com</a></li>
						<li><a href="contact.php">Contact form<span class="raquo">&#187;</span></a></li>
					</ul>
				</div><!-- footer-contact end -->

				<div id="footer-social">
					<h5>Social</h5>
					<ul>
						<li><a href="#" title=""><img src="{{asset('img/twitter.png')}}" alt="twitter" title="My Twitter profile"></a></li>
						<li><a href="#" title=""><img src="{{asset('img/facebook.png')}}" alt="facebook" title="My Facebook profile"></a></li>
						<li><a href="#" title=""><img src="img/flickr.png" alt="flickr" title="My Flickr profile"></a></li>
						<li><a href="#" title=""><img src="img/linkedin.png" alt="linkedin" title="My Linkedin profile"></a></li>
					</ul>
				</div><!-- footer-social end -->

				<div id="footer-resume">
					<h5>Resume</h5>
					<div id="download-resume"><a href="#"></a></div>
				</div><!-- footer-resume end -->

				<div class="clear"></div>

				<ul id="footer-nav">
                    <li><a href="/">Главная</a></li>
                    <li><a href="portfolio.html">Портфолио</a></li>
                    <li><a href="project.html">Проекты</a></li>
                    <li><a href="about.html">Обо мне</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                    <li><a href="{{route('blog')}}">Мой блог</a></li>
				</ul>

				<div id="go-top"></div>
				<div class="clear"></div>
			</div><!-- footer-innertube end -->
            <div class="container-fluid pb-3">
                <div class="d-flex justify-center text-center">
                    <div class="copyright col-12">
                        <span itemprop="copyright">
                            {{ date('Y') }} &copy; All Copyrights "{{config('app.name', 'Laravel')}}"
                        </span>
                    </div>
                </div>
            </div>
		</footer>
