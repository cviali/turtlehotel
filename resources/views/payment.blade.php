@extends('app')

@section('content')
    <section class="site-hero overlay page-inside" style="background-image: url({{ asset('img/front2.jpg') }});">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center">
                    <h1 class="heading" data-aos="fade-up">Reserve</h1>
                    <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Finish your reservation.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-primary contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                    <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5" style="margin-top: -150px;">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control ">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control ">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control ">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button type="submit" class="btn btn-primary">
                                    <span class="fa fa-paypal"></span>
                                    <span>Pay with Paypal</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-10 ml-auto contact-info">
                            <p><span class="d-block">Room Type:</span> <span> Suite</span></p>
                            <p><span class="d-block">Date:</span> <span> October 10th 2024 15:30</span></p>
                            <p><span class="d-block">Duration:</span> <span> 3 Nights</span></p>
                            <p><span class="d-block">Total:</span> <span> Rp. 950.000</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
