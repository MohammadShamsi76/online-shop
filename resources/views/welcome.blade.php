<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('lib/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('lib/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/homepage.css')}}">


    <title>Online-Shop</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">New</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-login" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="top-section" class="container">
    <div class="row">
        <div class="col-md-5 m-auto">
            <h1>Buy Anything,<span>anytime</span> without harassment</h1>
            <p>But i must explain to you how all this mistaken idea of denouncing pleasure and parsing pain was born and
                i will give complete </p>
            <a href="#">download app</a>
        </div>
        <div class="col-md-7">
            <img src="{{asset('image/homepage/top_section.svg')}}" alt="top_section">
        </div>
    </div>
</section>
<section id="slider-company">
    <h2>Check out some our <span>world class partner</span></h2>
    <div class="owl-carousel owl-theme">
        <div class="item"><img src="{{asset('image/homepage/logo/1.jpg')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/2.jpg')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/3.png')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/4.png')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/5.png')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/6.png')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/7.png')}}" alt=""></div>
        <div class="item"><img src="{{asset('image/homepage/logo/8.png')}}" alt=""></div>
    </div>
</section>
<div class="row buy-section container-fluid">
    <div class="col-md-5">
        <img src="{{asset('image/homepage/buy.jpg')}}" alt="">
    </div>
    <div class="col-md-7">
        <h2>We provide best services</h2>
        <h3>Find everything in on platform</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</p>
        <a href="#" class="btn-history">our history</a>
        <a href="#" class="btn-player"><i class="fa fa-play"></i>Play video</a>
        <div class="row rate-score">
            <div class="col-md-6">
                <i class="fa fa-plane"></i>
                <ul>
                    <li>100%</li>
                    <li> <span>Customer satisfaction</span></li>
                </ul>
            </div>
            <div class="col-md-6">
                <i class="fa fa-star"></i>
                <ul>
                    <li>100%</li>
                    <li> <span>Customer satisfaction</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('lib/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('lib/js/popper.min.js')}}"></script>
<script src="{{asset('lib/js/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/homepage/homepage.js')}}"></script>

</body>
</html>
