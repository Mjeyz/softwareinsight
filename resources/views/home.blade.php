@include('layouts.components.head')

		<div class="main-page-wrapper light-bg">
		@include('layouts.components.preloader')


		@include('layouts.components.home.navbar')
			
			<!-- 
			=============================================
				Theme Hero Banner
			============================================== 
			-->
			<div class="hero-banner-eight">
				<div class="social-elemnet">
					<ul class="style-none d-flex align-items-center">
						<li><a href="#" class="tran3s">Fb.</a></li>
						<li><a href="#" class="tran3s">Tw.</a></li>
						<li><a href="#" class="tran3s">Inst.</a></li>
					</ul>
				</div>
				<div class="scroll-bar"></div>
				
				<div class="banner-content h-100 d-md-flex align-items-center justify-content-between">
					<div class="text-wrapper">
						<h1 class="hero-heading">Quality Software On <i>Time</i> Every time</h1>
						<p class="hero-sub-heading text-lg">We take pride in our work and are always excited to see the idea that hits home. We love to help make products and apps real. </p>
						<a href="contactV3.html" class="theme-btn-eleven ripple-btn">Let’s work togather</a>
						<div class="row mt-4">
							<div class="col-md-3"><a href="#"><img src="{{url('./images/reviews/clutch-01.png') }}" alt=""></a></div>
							<div class="col-md-3"><img src="{{url('./images/reviews/techimply.svg') }}" alt=""></a></div>
							<div class="col-md-3"><img src="{{url('./images/reviews//w_s_top_web_dev_black_text.svg') }}" alt=""></a></div>
						</div>
					</div> <!-- /.text-wrapper -->

					<div class="img-wrapper position-relative">
						<img src="{{url('images/media/img_69.png') }}" alt="">
					</div>
				</div> <!-- /.banner-content -->
			</div>
			


			
			<div class="tsi-feature-section-three mt-200 lg-mt-150 md-mt-120">
				<div class="container">
					<div class="row mb-75 lg-mb-50 md-mb-20">
						<div class="col-xl-6 col-lg-5" data-aos="fade-right">
							<div class="title-style-one">
								<h2 class="title">Your <span>challenge</span> is our progress.</h2>
							</div>
						</div>
						<div class="col-lg-5 ms-auto" data-aos="fade-left">
							<p class="meta-info-text text-lg ps-xxl-5 md-pt-20">We are a full service software development company with a focus on delivering quality software solutions that help our customers maximize their return on investment. We offer the best of design, development, and deployment services for your digital products.</p>
						</div>
					</div>
					<div class="partner-slider-one mt-150 md-mt-80">
				</div> <!-- /.partner-slider-one -->
				</div>
			</div> <!-- /.tsi-feature-section-three -->
			
			@include('layouts.components.clients')

			<div class="tsi-feature-section-one box-layout mt-75">
				<div class="bg-wrapper">
					<img src="{{url('images/shape/shape_01.svg') }}" alt="" class="shapes shape-one">
					<div class="container">
						<div class="row">
							<div class="col-xxl-4 col-lg-5" data-aos="fade-right">
								<div class="title-style-one">
									<div class="upper-title">What we do</div>
									<h2 class="title">We Provide <span>Awesome</span> Services To You</h2>
								</div>
								<p class="meta-info-text text-lg">We helping client  to create  with our talented expert.</p>
								<a href="serviceV1.html" class="theme-btn-seven ripple-btn">Discover More</a>
							</div>

							<div class="col-lg-7 ms-auto" data-aos="fade-left">
								<div class="row">
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon d-flex align-items-center justify-content-center"><img src="{{url('images/icons/product-design.svg') }}" alt="" class="tran3s" style="width: 40px;"></div>
											<h4 class="title">Product Design</h4>
											<p>We create delightful UX for web, mobile, and desktop products that are simple to use and easy to navigate for your users.</p>
											<a href="serviceV1.html" class="arrow-icon"><img src="{{url('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon d-flex align-items-center justify-content-center"><img src="{{url('images/icons/frontend.svg') }}" alt="" class="tran3s" style="width: 40px;"></div>
											<h4 class="title">Web Development</h4>
											<p>We create beautiful, fast and secure web applications tailored exclusively for your business goals.</p>
											<a href="serviceV1.html" class="arrow-icon"><img src="{{url('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon d-flex align-items-center justify-content-center"><img src="{{url('images/icons/web-mobile.svg') }}" alt="" class="tran3s" style="width: 40px;"></div>
											<h4 class="title">Mobile Apps Development</h4>
											<p>We provide unique mobile applications with excellent UX that are well-designed, optimized, and support iOS and Android.</p>
											<a href="serviceV1.html" class="arrow-icon"><img src="{{url('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
									<div class="col-sm-6">
										<div class="card-style-one">
											<div class="icon d-flex align-items-center justify-content-center"><img src="{{url('images/icons/strategy.svg') }}" alt="" class="tran3s" style="width: 40px;"></div>
											<h4 class="title">Strategy & Research</h4>
											<p>we provide the latest digital transformation solutions and end-to-end business intelligence services to minimize risks and leverage opportunities ahead.</p>
											<a href="serviceV1.html" class="arrow-icon"><img src="{{url('images/icon/icon_08.svg') }}" alt="" class="tran3s"></a>
										</div> <!-- /.card-style-one -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- /.bg-wrapper -->
			</div> <!-- /.tsi-feature-section-one -->


			@include('layouts.components.counter')			
			@include('layouts.components.proude_projects')

			<!-- 
			=============================================
				Vcamp Feature Section Four
			============================================== 
			-->
			<div class="tsi-feature-section-four mt-250 lg-mt-150 md-mt-120">
				<img src="{{url('images/shape/shape_05.svg') }}" alt="" class="shapes shape-one">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-xl-5 col-lg-6" data-aos="fade-right">
							<div class="text-wrapper mb-130 lg-mb-70">
								<div class="title-style-one">
									<h2 class="title">How we claim to excel for your <span>business</span>?</h2>
								</div>
								<p class="meta-info-text text-lg">We are the solution which can allow you to reach your goals in an effective manner, within the shortest span of time and at the lowest possible cost.</p>
								<a href="about-usV2.html" class="theme-btn-three">Learn more <i class="fas fa-angle-right"></i></a>
							</div> <!-- /.text-wrapper -->
						</div>
						<div class="col-lg-6 ms-auto">
							<div class="row gx-5">
								<div class="col-sm-6" data-aos="fade-up">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{url('images/icon/icon_29.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">High quality code</h4>
										<p>We are the experts in developing websites and mobile applications. Our team of skilled developers creates high-quality custom applications.</p>
									</div> <!-- /.card-style-four -->
								</div>
								<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{url('images/icon/icon_30.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">Full stack team</h4>
										<p>We are good in development of full stack apps. Our team is best full stack developers</p>
									</div> <!-- /.card-style-four -->
								</div>
								<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{url('images/icon/icon_31.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">Agile approach</h4>
										<p>We use the Agile process to build incredible applications that are tailored to your company's needs.</p>
									</div> <!-- /.card-style-four -->
								</div>
								<div class="col-sm-6" data-aos="fade-up" data-aos-delay="100">
									<div class="card-style-four mb-130 lg-mb-70">
										<div class="icon d-flex align-items-end"><img src="{{url('images/icon/icon_32.svg') }}" alt="" class="tran3s"></div>
										<h4 class="title">Trustful Communication</h4>
										<p>We believe in the power of our skills and talents; we are constantly strengthening and growing, to ensure that our clients receive the best possible service.</p>
									</div> <!-- /.card-style-four -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.tsi-feature-section-four -->



			@include('layout.components.feedback2')

			@include('layouts.components.home.contact')
			<!--
			=====================================================
				Address Section Two
			=====================================================
			-->
			<div class="address-section-two">
				<div class="container">
					<div class="inner-content modi-foot-home">
						<div class="row g-0">
							<div class="col-md-6">
								<div class="address-block-two d-flex border-right">
									<img src="images/icon/icon_34.svg" alt="" class="icon">
									<div class="text-meta">
										<h4 class="title">Our Address</h4>
										<p>1012 Pebda Parkway, Mirpur 2 <br>Dhaka, Bangladesh</p>
									</div> <!-- /.text-meta -->
								</div> <!-- /.address-block-two -->
							</div>
							<div class="col-md-6">
								<div class="address-block-two d-flex">
									<img src="images/icon/icon_35.svg" alt="" class="icon">
									<div class="text-meta">
										<h4 class="title">Contact Info</h4>
										<p>Open a chat or give us call at <br><a href="#">310.841.5500</a></p>
									</div> <!-- /.text-meta -->
								</div> <!-- /.address-block-two -->
							</div>
						</div>
					</div> <!-- /.inner-content -->
				</div>
			</div> <!-- /.address-section-two -->
			


			
            @include('layouts.components.footer')
            @include('layouts.components.foot')