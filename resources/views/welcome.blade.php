@extends('app')

@section('content')
    <section class="site-hero overlay" style="background-image: url({{ asset('img/front.jpg') }})">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up">Turtle Beach Hotel</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Enjoy our laid-back hotel &amp; resort experience.
                    </p>
                    <p data-aos="fade-up" data-aos-delay="100"><a href="{{ route('hotel') }}"
                            class="btn uppercase btn-primary mr-md-2 mr-0 mb-3 d-sm-inline d-block">See the Rooms</a></p>
                </div>
            </div>
            <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
        </div>
    </section>
    <section class="section slider-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="heading" data-aos="fade-up">Great for visitors.</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Set on a beach along the Bali Sea, this laid-back hotel is a 6-minute walk
                        to the H2O Yoga and Meditation Center. The Gili Air ferry terminal is a 12-minute walk away.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="slider-item">
                            <img src="img/pool.jpg" alt="Turtle beach hotel pool" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/front2.jpg" alt="Turtle beach hotel" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/double.jpg" alt="Turtle beach hotel double room" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/suite.jpg" alt="Turtle beach hotel double room" class="img-fluid">
                        </div>
                    </div>
                    <!-- END slider -->
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="section testimonial-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="heading" data-aos="fade-up">Testimonial</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial text-center">
                        <blockquote>

                            <p>&ldquo;We stara stayed as a family of four for a week here. Awesome location on the turtle beach, next to lots of
                                good restaurants. The bungalows are a little basic but will serviced and clean. And the staff were really good, so
                                anything we had an issue with, they fixed right away (eg. more comfy pillows, a kettle). The pool is nice and the
                                kids really enjoyed it.&rdquo;
                            </p>
                        </blockquote>
                        <p><em>&mdash; David K</em></p>

                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial text-center">
                        <blockquote>

                            <p>&ldquo;We booked a last-minute trip to Gili Air and found Turtle Beach. The bungalow is spacious and more traditional
                                Indonesian style. The room was clean, the bed was comfortable and the outside bathroom was ok. Breakfast had a good choice
                                between noodles, rice, cereal, eggs, fruit and pancakes. You will need booties to use the beach directly opposite, but
                                nicer beaches are only five to ten minutes walk away (near Zipp), you can also rent a bike from out the front. The staff
                                were friendly and accommodating. A good budget option with a pool. I would stay here again if I came back to Gili
                                Air.&rdquo;
                            </p>
                        </blockquote>
                        <p><em>&mdash; Jen D</em></p>

                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial text-center">
                        <blockquote>
                            <p>&ldquo;We really enjoyed our weeklong stay at Turtle Beach hotel. Our room stayed cool and mostly dry under daily
                                torrential rain. The pool is lovely. The staff are so kind and friendly we felt very welcome. Turtle and reef
                                right off the front door.&rdquo;</p>
                        </blockquote>
                        <p><em>&mdash; Victoria C</em></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
