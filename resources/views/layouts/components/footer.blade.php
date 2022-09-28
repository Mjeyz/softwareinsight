<!--
			=====================================================
				Footer
			=====================================================
			-->
			<footer class="vcamp-footer-two pt-150 lg-pt-100 bg-white">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-2 mb-40">
							<div class="logo"><a href="/"><img src="images/logo/logo-black.svg" alt="" width="127"></a></div>
							<div class="reviews">
								<div class="logo"><img src="" alt=""></div>
								<div class="logo"><img src="" alt=""></div>
								<div class="logo"><img src="" alt=""></div>
								<div class="logo"><img src="" alt=""></div>
								<div class="logo"><img src="" alt=""></div>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 col-sm-6 mb-40">
							<h5 class="title">Links</h5>
							<ul class="footer-list style-none">
								<li><a href="#">Home</a></li>
								<li><a href="#">Pricing</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Service</a></li>
								<li><a href="#">Features</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 mb-40">
							<h5 class="title">Legal</h5>
							<ul class="footer-list style-none">
								<li><a href="#">Terms of use</a></li>
								<li><a href="#">Terms &amp; conditions</a></li>
								<li><a href="#">Privacy policy</a></li>
								<li><a href="#">Cookie policy</a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 mb-40">
							<div class="newsletter">
								<h5 class="title">Newslettert</h5>
								<p>Join over <span>68,000</span> people getting our emails</p>
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
				</div>
				<div class="container">
					<div class="bottom-footer">
						<div class="row">
							<div class="col-lg-4 order-lg-1 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-start footer-nav style-none">
									<li><a href="#">Privacy &amp; Terms.</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-lg-3 order-lg-3 mb-15">
								<ul class="d-flex justify-content-center justify-content-lg-end social-icon style-none">
									<li><a href="https://web.facebook.com/Muzammil.Jumshaid/"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="https://www.instagram.com/thesoftwareinsight/"><i class="fab fa-instagram"></i></a></li>
									<li><a href="https://twitter.com/tsoftwarei"><i class="fab fa-twitter"></i></a></li>
								</ul>
							</div>
							<div class="col-lg-5 order-lg-2 mb-15">
								<p class="copyright text-center">Copyright @ 2022 The Software Insight inc. All right reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>