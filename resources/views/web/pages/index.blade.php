<!DOCTYPE html>
<html lang="en">

@include('web.includes.head')

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @include('web.includes.topbar')


    @include('web.includes.navbar')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('web/img/truck1.jpg') }}" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Seamless travel with eTruck Services
                                    </h1>
                                <p class="fs-5 text-white mb-4 pb-2">Find the best and cheap trucks for shifting households for secure property transportation.</p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Register</a>
                                <a href=""
                                    class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('web/img/download (7).jpg') }}" alt="">
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Smart Seamless Solution For
                                    Shifting households</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Enjoy your travel moments with eTruck services and please come againg.</p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Register</a>
                                <a href=""
                                    class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
<<<<<<< HEAD
                <img class="img-fluid" src="{{ asset('web/img/download (6).jpg') }}" alt="">
=======
                <img class="img-fluid" src="{{ asset('web/img/carousel-3.jpg') }}" alt="">
>>>>>>> 83e4508ce2e386a06088633cafdab8404850ffb7
                <div class="carousel-inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8 text-center">
                                <h1 class="display-3 text-white animated slideInDown mb-4">Innovative Solution For Ugandan shifters
                                    </h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Over 60% of the people in urban areas rely on renting since they own no permanent households. No worries, etruck services has provided a safe and secure means of property transportation as you shift. Trust us, your safe travel is our priority!</p>
                                <a href=""
                                    class="btn btn-primary rounded-pill py-md-3 px-md-5 me-3 animated slideInLeft">Register</a>
                                <a href=""
                                    class="btn btn-light rounded-pill py-md-3 px-md-5 animated slideInRight">Log in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="{{ asset('web/img/icon/icon-3.png') }}" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">01</h1>
                        </div>
                        <h5 class="text-white">Property Safety</h5>
                        <hr class="w-25">
                        <span>Your property is transported by validated and professional drivers. So be rest assured of proper property management. Your property is free from damage all the time. Thank you for trusting us.
                            </span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="{{ asset('web/img/icon/icon-4.png')  }}" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">02</h1>
                        </div>
                        <h5 class="text-white">Order Truck</h5>
                        <hr class="w-25">
                        <span>Our site allows customers to order registered trucks of their choice depending on the truck type and size. The customers' decision is made basing on the amount of property they have and how much they are willing to pay for transportation as generated by the application.
                            </span>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-dark p-4 p-xl-5">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="btn-square rounded-circle"
                                style="width: 64px; height: 64px; background: #000000;">
                                <img class="img-fluid" src="{{ asset('web/img/icon/icon-2.pngimg/icon/icon-2.png')  }}" alt="Icon">
                            </div>
                            <h1 class="display-1 mb-0" style="color: #000000;">03</h1>
                        </div>
                        <h5 class="text-white">24/7 Support</h5>
                        <hr class="w-25">
                        <span>With eTruck services, you are rest assured of unlimited service with both cash and cashless payment methods enabled. 24/7 full packaged service.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('web/img/download (2).jpg') }}"
                            style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                        <h1 class="display-5 mb-4">About Us</h1>
                        <p class="mb-4 pb-2">We are a transportation company that provides property transportation to urban and rural shifting households. However, our services are more readily available to urban sited shifters. We negoitiate for our customers and they access and receive the transportation service at rekatively lower costs.</p>
                        <div class="row g-4 mb-4 pb-3">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle"
                                        style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="{{ asset('web/img/icon/icon-1.png') }}"
                                            alt="Icon">
                                    </div>
                                    <div class="ms-4">
                                        <h2 class="mb-1" data-toggle="counter-up">0784183584</h2>
                                        <p class="fw-medium text-primary mb-0">call us</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center">
                                    <div class="btn-square bg-white rounded-circle"
                                        style="width: 64px; height: 64px;">
                                        <img class="img-fluid" src="{{ asset('web/img/icon/icon-5.png') }}"
                                            alt="Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary rounded-pill py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    

    


    
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
                <h1 class="display-5 mb-5">Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('web/img/team-1.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('web/img/team-2.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('web/img/team-3.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden position-relative">
                            <img class="img-fluid" src="{{ asset('web/img/team-4.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-dark rounded-circle m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    @include('web.includes.footer')

    @include('web.includes.copyright')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    @include('web.includes.scripts')
</body>

</html>
