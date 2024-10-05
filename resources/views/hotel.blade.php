@extends('app')

@section('content')
    <section class="site-hero overlay page-inside" style="background-image: url({{ asset('img/front2.jpg') }});">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up">Rooms</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Enjoy your stay.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light">
        <div class="half d-md-flex d-block">
            <div class="image" data-aos="fade" style="background-image: url({{ asset('img/suite.jpg') }});"></div>
            <div class="text" data-aos="fade-right" data-aos-delay="200">
                <h2>Suite</h2>
                <p>Private suite with 1 double bed, with easy access to the Pool and a Garden view, complete with air conditioning, free Wi-Fi and
                    amenities. Perfect for 1-2 persons.</p>
                <span>Starts from</span>
                <h3>Rp {{ number_format($prices[0]->price) }}</h3>
            </div>
        </div>

        <div class="half d-md-flex d-block">
            <div class="image order-2" data-aos="fade" style="background-image: url({{ asset('img/double.jpg') }});"></div>
            <div class="text" data-aos="fade-left" data-aos-delay="200">
                <h2>Double Room</h2>
                <p>Room with 2 double beds, complete with pool, courtyard and garden view and access, included all the features from the Suite room.
                    Perfect for more than 3 persons.</p>
                <span>Starts from</span>
                <h3>Rp {{ number_format($prices[1]->price) }}</h3>
            </div>
        </div>

    </section>
    <section class="section slider-section">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-md-8">
                    <h2 class="heading" data-aos="fade-up">Hotel Gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="slider-item">
                            <img src="img/pool.jpg" alt="Turtle beach hotel pool" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/double.jpg" alt="Turtle beach hotel double room" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/double2.jpg" alt="Turtle beach hotel double room 2" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/bedroom.jpg" alt="Turtle beach hotel bedroom" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/washroom.jpg" alt="Turtle beach hotel washroom" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/washroom2.jpg" alt="Turtle beach hotel washroom 2" class="img-fluid">
                        </div>
                        <div class="slider-item">
                            <img src="img/double3.jpg" alt="Turtle beach hotel double room 3" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
