<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="tsi-footer-two pt-150 lg-pt-100 bg-white">
				<div class="container">
					<div class="row">
						<div class="col-xl-2 col-lg-2 mb-40">
							<div class="logo"><a href="/"><img src="{{url('images/logo/logo-black.svg') }}" alt="" width="127"></a></div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 mb-40">
							<h5 class="title">Services</h5>
							<ul class="footer-list style-none">
								<li><a href="{{ url('/services/web-mobile-development') }}">Web & Mobile Development</a></li>
								<li><a href="{{ url('/services/custom-app-development') }}">Custom App Development</a></li>
								<li><a href="{{ url('/technologies/artificial-intelligence-development') }}">Artificial Intelligence</a></li>
								<li><a href="{{ url('/technologies/machine-learning') }}">Machine Learning</a></li>
								<li><a href="{{ url('/services/product-design-services') }}">Product Design</a></li>
								<li><a href="{{ url('/services/product-strategy-consulting') }}">Product Strategy</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 mb-40">
							<h5 class="title">Technologies</h5>
							<ul class="footer-list style-none">
								<li><a href="{{ url('/technologies/react-native-app-development') }}">React Native</a></li>
								<li><a href="{{ url('/technologies/golang-development') }}">Golang</a></li>
								<li><a href="{{ url('/technologies/node-js-development') }}">Nodejs</a></li>
								<li><a href="{{ url('/technologies/android-development') }}">Android</a></li>
								<li><a href="{{ url('/technologies/frontend-development') }}">Frontend</a></li>
								<li><a href="{{ url('/technologies/backend-development') }}">Backend</a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 mb-40">
							<div class="newsletter">
								<h5 class="title">Newslettert</h5>
								<p>Follow the most recent IT <span>trends</span> and <span>insights</span>.</p>
								@if (\Session::has('Newslatter_success'))
									<div class="alert alert-success">
										<p>{{ \Session::get('Newslatter_success') }}</p>
									</div><br />
									@endif
									@if (\Session::has('Newslatter_failure'))
									<div class="alert alert-danger">
										<p>{{ \Session::get('Newslatter_failure') }}</p>
									</div><br />
								@endif
								<form action="{{url('newsletter/store')}}" method="post">
									 @csrf
									<input type="email" placeholder="Enter your email" name="email">
									<button class="dark-btn">Sign Up</button>
								</form>
								<div class="info">We only send interesting and relevant emails.</div>
							</div> <!-- /.newsletter -->
						</div>
					</div>
					{{-- <div class="row mt-50"  style="justify-content: right">
						<div class="col-md-5 row" >
							<div class="col-md-3"><img src="images/badges/11aa7a8a9096a808db5e468255016f70.png" alt=""></div>
							<div class="col-md-3"><img src="https://assets.goodfirms.co/directory/top-software-development-companies_1503990707.png" data-lazy-src="https://www.softwareworld.co/wp-content/uploads/2020/03/Top_Rated_software-2021.png" alt=""></div>
							<div class="col-md-3"><img src="images/badges/Badge-Top-Software-Development-Companies-2022.png" data-lazy-src="https://www.softwareworld.co/wp-content/uploads/2020/03/Top_Rated_software-2021.png" alt=""></div>
							<div class="col-md-3"><img src="https://www.softwareworld.co/wp-content/uploads/2020/03/Top_Rated_software-2021.png" data-lazy-src="https://www.softwareworld.co/wp-content/uploads/2020/03/Top_Rated_software-2021.png" alt=""></div>
						</div>
					</div> --}}
				</div>
				<div class="container">
					<div class="bottom-footer">
						<div class="row">
							<div class="col-lg-4 order-lg-1 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
									<li><a href="#">Privacy &amp; Terms.</a></li>
									<li><a href="{{ url('/contact') }}">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-lg-3 order-lg-3 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
									<li><a href="https://web.facebook.com/thesoftwareinsight/"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/tsoftwarei/"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://twitter.com/tsoftwarei"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://github.com/thesoftwareinsight"><i class="fab fa-github"></i></a></li>
									<li><a href="https://www.linkedin.com/company/thesoftwareinsight"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="https://thesoftwareinsight.medium.com/"><i class="fab fa-medium"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-5 order-lg-2 mb-15">
								<p class="copyright text-center">Copyright @ 2022 The Software Insight inc. All right reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>