<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Woostem | Amazing Stock Control</title>
    <meta name="description"
          content="Knight is a beautiful Bootstrap 4 template for product landing pages."/>

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!--x-icon-->
	<link rel="icon" type="image/x-icon" href="assests/images/woo-icon.ico" />

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="css/default.css" id="theme-color">
</head>
<body>

<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="">
                Woo Inc.
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#info">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll d-flex flex-row align-items-center text-primary" href="signin.php">
                             Sign in
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>

<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">WOOSTEM</h1>
                <p class="lead py-3">A control system that is quick, secure, and responsive, and is managed by stockholders and administrators.</p>
                <button id="myButton" class="btn btn-primary d-inline-flex flex-row align-items-center">
                    Get started now
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button>

                <script>
                    document.getElementById("myButton").addEventListener("click", function() {
                    window.location.href = "signin.php";
                    });
                </script>

            </div>
        </div>
    </div>
</section>

<!-- features section -->
<section class="pt-6 pb-7" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Woostem offers everything you need.</h2>
                <p class="text-muted lead">Incredible Stock Control & Management Sys capable of Invoice generation, Lightweight and easy to use, Order management and product management can be done with ease, Report management, User wise view report..</p>
            </div>
        </div>
        
        </div>
    </div>
</section>


<!--footer-->
<footer class="py-6" id="info">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mr-auto">
                <h5>About Woostem</h5>
                <p class="text-muted">Woostem is a fast, secure, and responsive Database system created by Dev 67. It can manage system information by add, update, view and delete brand and product. The control system is a open-source software, and can be managed by stockholders and owners with provision.</p>
                <ul class="list-inline social social-sm">
                    <li class="list-inline-item">
                        <a href="https://facebook.com"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://wa.me/+254738400313"><i class="fa fa-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#privacy">Privacy</a></li>
                    <li><a href="#t&c">Terms</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Partner</h5>
                <ul class="list-unstyled">
                    <li><a href="#stake">Affiliates</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Help</h5>
                <ul class="list-unstyled">
                    <li><a href="#help&support">Support</a></li>
                    <li><a href="signin.php">Log in</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-muted text-center small-xl">
                &copy; <?php echo $company_data['company_name'] ?? '' ?>2022 - <?php echo date('Y') ?> Woostem | All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<!--scroll to top-->
<div class="scroll-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- theme switcher (FOR DEMO ONLY - REMOVE FROM PRODUCTION)-->
<div class="switcher-wrap">
    <div class="switcher-trigger">
        <span class="fa fa-gear"></span>
    </div>
    <div class="color-switcher">
        <h6>Color Switcher</h6>
        <ul class="mt-3 clearfix">
            <li class="bg-teal active" data-color="default" title="Default Teal"></li>
            <li class="bg-purple" data-color="purple" title="Purple"></li>
            <li class="bg-blue" data-color="blue" title="Blue"></li>
            <li class="bg-red" data-color="red" title="Red"></li>
            <li class="bg-green" data-color="green" title="Green"></li>
            <li class="bg-indigo" data-color="indigo" title="Indigo"></li>
            <li class="bg-orange" data-color="orange" title="Orange"></li>
            <li class="bg-cyan" data-color="cyan" title="Cyan"></li>
            <li class="bg-yellow" data-color="yellow" title="Yellow"></li>
            <li class="bg-pink" data-color="pink" title="Pink"></li>
        </ul>
        <p>These are distinguished colors. You can <b>easily</b> change to your suitable color scheme.</p>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>