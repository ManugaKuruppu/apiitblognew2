<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>APIIT Blog Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>





<!-- Topbar End -->
<!DOCTYPE html>
<html>

<head>
    <title>Your Website</title>
    <style>
        .logo {
            width: 250px;
            /* Adjust the width as needed */
            height: auto;
            /* Ensures the aspect ratio is maintained */
            display: block;
            /* Ensures the logo is displayed as a block element */
            margin: 0 auto;
            /* Centers the logo horizontally within its container */
            margin-left: 20px;
            /* Moves the logo slightly to the left */
            filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.2));
            /* Adds a drop shadow effect */
            transition: transform 0.3s ease-in-out;
            /* Adds a smooth transition on hover */
        }

        .logo:hover {
            transform: scale(1.1);
            /* Increases the size of the logo slightly on hover */
        }

        /* Additional styles for the container and row */
        .container-fluid {
            background-color: #f8f9fa;
            /* Background color for the container */
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .bg-white {
            background-color: #ffffff;
            /* Background color for the row */
        }

        .py-3 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .px-lg-5 {
            padding-left: 3rem;
            padding-right: 3rem;
        }

        /* For slides in the slideshow */
        .slideshow-slide {
            flex: 1 0 0;
            /* Let slides fill available space evenly */
        }
    </style>
</head>

<body>
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="index.html" class="navbar-brand p-0 d-none d-lg-block">
                    <img src="img/apiit-logo.png" alt="Your Logo" class="logo">
                </a>
            </div>
            <div class="col-lg-4">
                <a class="navbar-brand p-0 d-none d-lg-block">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Hi,
                                    {{ Auth::user()->name }}</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <a href="https://htmlcodex.com"></a>
            </div>
        </div>
    </div>
</body>

</html>



<!-- Navbar Start -->
<style>
    /* Custom styles */
    body, html {
        margin: 0;
        padding: 0;
    }
    .navbar {
        background: linear-gradient(to right, rgba(17, 148, 180, 0.897), rgba(0, 150, 255, 0));
    }
    .navbar-nav {
        margin: 0 auto; /* Center the navbar links */
    }
    .navbar-nav .nav-item {
        padding: 0 10px; /* Adjust spacing between navbar items */
    }
</style>
</head>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark py-2 py-lg-0 px-lg-5">

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0"> <!-- Changed mr-auto to mx-auto to center links -->
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="category.html" class="nav-item nav-link">Categories</a>
                    <a href="single.html" class="nav-item nav-link">Events</a>
                    <a href="single.html" class="nav-item nav-link">Blogs</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                     <form class="input-group ml-auto d-none d-lg-flex" action="{{ url('search') }}" method="get">
                    @csrf

                        <input
                            class="form-control border-0"
                            type="search" name="search" placeholder="Search
                                                ">
                        <button
                            class="input-group-text bg-primary text-dark border-0 px-3 input-group-append"
                            type="submit"><i class="fa fa-search"></i></button>
                </form>
                </div>





            </div>
        </nav>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Navbar End -->

<div class="relative h-screen overflow-hidden">
    <div class="absolute inset-0 flex justify-center items-center">
        <div class="absolute inset-0 bg-cover bg-center"
             style="background-image: linear-gradient(to bottom, rgba(0, 0, 255, 0.2), rgba(2, 2, 2, 0.774)), url('{{ asset('img/back1.jpg') }}');">
            <h1 class="text-6xl font-bold text-white absolute inset-0 flex justify-center items-center animate-bounce-once">Welcome To Our Blogs!</h1>
        </div>
    </div>
</div>

<style>
@keyframes bounce-once {
    0% { transform: translateY(-10px); }
    50% { transform: translateY(0px); }
    100% { transform: translateY(-10px); }
}

.animate-bounce-once {
    animation: bounce-once 2s ease-in-out;
}
</style>




                    <!-- Add more slides as needed -->
                  </div>

            </div>
            <!-- Header content goes here -->
        </div>
    </div>
    <!-- Header content goes here -->
</div>




<section>

    <p>Dummy Content</p>
</section>





<!-- Main News Slider Start -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="img/casarol2.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">


                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Welcome to APIIT Stduent Blogs!</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="img/casarol1.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">

                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Create your own article and let others see it!</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="img/casarol3.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">


                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="">Experience what others have experienced!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="img/computing school.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">


                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Computing School</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="img/law school.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">


                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Law School</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="img/business school.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">


                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Business School</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="img/foundation school.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">


                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Foundation School</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main News Slider End -->


<!-- Featured News Slider Start -->

<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
        </div>
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">
            @foreach ($data as $featuredblog)
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="/pos/{{ $featuredblog->image }}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="">{{ $featuredblog->category }}</a>
                            <a class="text-white" href=""><small>{{ $featuredblog->date }}</small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold"
                            href="">{{ $featuredblog->title }}</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Featured News Slider End -->

<br>
<br>





<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">Latest Blogs</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View
                                All</a>
                        </div>
                    </div>





                    @foreach ($ldata as $l)
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="/latestpos/{{ $l->image }}"
                                    style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">{{ $l->category }}</a>
                                        <a class="text-body" href=""><small>{{ $l->date }}</small></a>
                                    </div>
                                    <p>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold"
                                            href="">{{ $l->title }}</a>
                                    <p class="m-0">{{ $l->description }}</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/user.jpg" width="25"
                                            height="25" alt="">
                                        <small>{{ $l->author }}</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <div class="col-lg-4">
                <!-- Social Follow Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">

                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                            style="background: #52AAF4;">
                            <i class="fab fa-twitter text-center py-4 mr-3"
                                style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                            style="background: #0185AE;">
                            <i class="fab fa-linkedin-in text-center py-4 mr-3"
                                style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Connects</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                            style="background: #C8359D;">
                            <i class="fab fa-instagram text-center py-4 mr-3"
                                style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none mb-3"
                            style="background: #DC472E;">
                            <i class="fab fa-youtube text-center py-4 mr-3"
                                style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Subscribers</span>
                        </a>
                        <a href="" class="d-block w-100 text-white text-decoration-none"
                            style="background: #055570;">
                            <i class="fab fa-vimeo-v text-center py-4 mr-3"
                                style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                            <span class="font-weight-medium">12,345 Followers</span>
                        </a>
                    </div>
                </div>
                <!-- Social Follow End -->




                <!-- Tags Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                    </div>
                    <div class="bg-white border border-top-0 p-3">
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                            <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                        </div>
                    </div>
                </div>
                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
    <div class="row py-4">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Contact Us</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Colombo, Sri Lanka</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>+94 11 234 5678</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>info@example.lk</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-twitter"></i> </a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-facebook-f"></i> </a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-linkedin-in"></i> </a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i
                        class="fab fa-instagram"></i> </a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Latest News</h5>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                        href="">Business</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">New Business Trends in Sri Lanka</a>
            </div>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                        href="">Technology</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Advancements in AI and Machine Learning</a>
            </div>
            <div class="">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2"
                        href="">Legal</a>
                    <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">Understanding Intellectual Property Laws</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Explore Categories</h5>
            <div class="m-n1">
                <a href="#" class="btn btn-sm btn-secondary m-1">Technology</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Business</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Legal</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Finance</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Marketing</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Management</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Cybersecurity</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Entrepreneurship</a>
                <a href="#" class="btn btn-sm btn-secondary m-1">Digital Transformation</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#">APIIT Student Blog</a>. All Rights Reserved.
        Designed by Group 2</a>
    </p>
</div>
<!-- Footer End -->







<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    const slides = document.querySelectorAll('.slideshow-slide');
    let currentSlide = 0;

    function nextSlide() {
        slides[currentSlide].classList.remove('opacity-100');
        slides[currentSlide].classList.add('opacity-0');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.remove('opacity-0');
        slides[currentSlide].classList.add('opacity-100');
    }

    setInterval(nextSlide, 5000); // Change slide every 5 seconds (adjust as needed)
</script>

</body>

</html>
