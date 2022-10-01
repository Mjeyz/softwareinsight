<!--
=====================================================
    Contact Section Two
=====================================================
-->
<div class="contact-section-two mt-200 mb-80 lg-mt-120">
    <div class="bg-wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-5 me-auto">
                    <div class="contact-meta-one">
                        <div class="title-style-one">
                            <h2 class="title">Let’s talk <br>about your big <span>project</span></h2>
                        </div>
                        <p class="text-lg">From Design to Delivery, Software Insight is your one stop solution for mobile app development, website design and digital marketing solutions.</p>
                        <div class="help-text"><span>Urgent?</span> Call Us:</div>
                        <a href="tel:+227-300-3676" class="call-button">+227 300-3676</a>
                    </div> <!-- /.contact-meta-one -->
                </div>
                <div class="col-lg-7">
                    <div class="form-style-one with-border md-mt-40">
                        @if(session('home_contact_success'))
                            <div class="alert alert-success">
                                {{ session('home_contact_success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('contact' )}}" name="contactForm">
                            <div class="messages"></div>
                            @csrf
                            <div class="row controls {{ $errors->has('name') ? 'has-error' : '' }}">
                                <div class="col-6">
                                    <div class="input-group-meta form-group mb-25">
                                        <label>Name*</label>
                                        <input type="text" placeholder="Type your name" name="name" required="required" data-error="Name is required.">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-meta form-group mb-25">
                                        <label>Company name (optional)</label>
                                        <input type="text" placeholder="Type your company name" name="company_name">
                                        <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-meta form-group mb-25">
                                        <label>Email*</label>
                                        <input type="text" placeholder="Type your email" name="email" required="required" data-error="Email is required.">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group-meta form-group mb-25">
                                        <label>Phone (optional)</label>
                                        <input type="text" placeholder="Type your phone number" name="phone">
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group-meta form-group mb-35">
                                        <label>How can we help you?*</label>
                                        <textarea placeholder="Give us some details about your project" name="message" required="required" data-error="Please, leave us a message."></textarea>
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="theme-btn-one ripple-btn w-100" type="submit">Send Message</button></div>
                                </div>
                        </form>
                        <img src="{{ url('images/shape/shape_12.svg') }}" alt="" class="shapes shape-one">
                    </div> <!-- /.form-style-one -->
                </div>
            </div>
        </div>
    </div> <!-- /.bg-wrapper -->
</div> <!-- /.contact-section-two -->