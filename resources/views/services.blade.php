@include('layouts.components.head')
		<div class="main-page-wrapper">
			@include('layouts.components.preloader')

			@include('layouts.components.home.navbar')
			<!-- 
			=============================================
				Inside Page Banner
			============================================== 
			-->
			<div class="inside-hero-three bg-color">
				<img src="{{url('images/shape/shape_35.svg') }}" alt="" class="shapes shape-one">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h2 class="page-title font-recoleta">All-in-one <span>development</span> services for business leaders</h2>
						</div>
						<div class="col-xxl-5 col-md-6 ms-auto">
							<p>We answer business challenges with custom-made software. Instead of managing separate vendors, you can focus on the important part – your business.</p>
						</div>
					</div>
				</div>
			</div> <!-- /.inside-hero-three -->
			
			<div class="tsi-feature-section-three mt-200 lg-mt-80">
				<div class="container">
					<div class="row">
						<div class="col-xl-4" data-aos="fade-right">
							<div class="service-title mt-100 lg-mt-40 lg-mb-40">Strategy & Marketing</div>
						</div>
						<div class="col-xl-4 col-sm-6" data-aos="fade-up">
							<div class="card-style-three mb-100 lg-mb-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="images/icon/icon_24.svg" alt="" class="tran3s"></div>
								<h4 class="title">Ideation and strategy </h4>
								<ul class="style-none">
									<li><a href="#"><span>Product Strategy</span></a></li>
                                    <li><a href="#"><span>Digital Transformation</span></a></li>
                                    <li><a href="#"><span>Research and Development</span></a></li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
                        <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="card-style-three mb-100 lg-mb-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="images/icon/icon_26.svg" alt="" class="tran3s"></div>
								<h4 class="title">SEO Services</h4>
								<ul class="style-none">
									<li>Keyword Research</li>
									<li>Business Directories</li>
									<li>Backlink Building</li>
									<li>Content Creation</li>
									<li>Business Directories</li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
                        <div class="row">
                            <div class="col-xl-4" data-aos="fade-right">
                                <div class="service-title mt-100 lg-mt-40 lg-mb-40">Development</div>
                            </div>
                            <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-style-three mb-100 lg-mb-50">
                                    <div class="icon d-flex align-items-center justify-content-center"><img src="images/icon/icon_25.svg" alt="" class="tran3s"></div>
                                    <h4 class="title">Product Design</h4>
                                    <ul class="style-none">
                                        <li><a href="#"><span>UI Design</span></a></li>
                                        <li><a href="#"><span>UX Design</span></a></li>
                                        <li><a href="#"><span>Workshops</span></a></li>
                                    </ul>
                                </div> <!-- /.card-style-three -->
                            </div>
                            
						<div class="col-xl-4 col-sm-6" data-aos="fade-up">
							<div class="card-style-three mb-100 lg-mb-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="images/icon/icon_27.svg" alt="" class="tran3s"></div>
								<h4 class="title">Web & Mobile</h4>
								<ul class="style-none">
									<li><a href="#"><span>iOS</span></a></li>
                                    <li><a href="#"><span>Android</span></a></li>
                                    <li><a href="#"><span>Cross-Platform</span></a></li>
                                    <li><a href="#"><span>Frontend</span></a></li>
                                    <li><a href="#"><span>Backend</span></a></li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
                        </div>
					</div>
					<div class="row">
						<div class="col-xl-4" data-aos="fade-right">
							<div class="service-title mt-100 lg-mt-40 lg-mb-40"></div>
						</div>
						<div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="card-style-three mb-100 lg-mb-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="images/icon/icon_26.svg" alt="" class="tran3s"></div>
								<h4 class="title">Artificial intelligence</h4>
								<ul class="style-none">
                                    <li><a href="#"><span>Data Science</span></a></li>
                                    <li><a href="#"><span>Machine Learning</span></a></li>
                                    <li><a href="#"><span>Computer Vision</span></a></li>
                                    <li><a href="#"><span>Voice Assistants & Chatbots</span></a></li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
                        <div class="col-xl-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
							<div class="card-style-three mb-100 lg-mb-50">
								<div class="icon d-flex align-items-center justify-content-center"><img src="images/icon/icon_26.svg" alt="" class="tran3s"></div>
								<h4 class="title">Cloud Services</h4>
								<ul class="style-none">
                                    <li><a href="#"><span>Cloud App Development</span></a></li>
                                    <li><a href="#"><span>Cloud Deployment</span></a></li>
                                    <li><a href="#"><span>AWS Cloud Development</span></a></li>
                                    <li><a href="#"><span>Google Cloud Development</span></a></li>
								</ul>
							</div> <!-- /.card-style-three -->
						</div>
					</div>
				</div>
			</div> <!-- /.tsi-feature-section-three -->


            @include('layouts.components.clients')

			@include('layouts.components.claim_excel')
			@include('layouts.components.counter')
            @include('layouts.components.industries.expertise')
            <div class="bg-light">
                @include('layouts.components.proude_projects')
                    @include('layouts.components.home.contact')
                @include('layouts.components.feedback')
            </div>
			@include('layouts.components.footer');

			@include('layouts.components.foot');