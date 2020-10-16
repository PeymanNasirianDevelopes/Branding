<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->


    <title>Jecto - Job Board and Portal HTML Template</title>

@include("files.css")

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
</head>
<body>


<!-- Navbar -->
@include ("parts.navbar")
<!-- End Navbar -->

<!-- Banner -->
@include("parts.banner")
<!-- End Banner -->

<!-- Support -->
@include("parts.support")
<!-- End Support -->

<!-- Company -->
@include("parts.ads")
<!-- End Company -->

<!-- Explore -->
@include("parts.explore")
<!-- End Explore -->

<!-- Categories -->
@include("parts.category")
<!-- End Categories -->

<!-- Work -->
@include("parts.work")
<!-- End Work -->

<!-- Jobs -->
@include("parts.jobs")
<!-- End Jobs -->

<!-- Candidate -->
@include("parts.resume")
<!-- End Candidate -->

<!-- Location -->
@include("parts.location")
<!-- End Location -->

<!-- Testimonial -->
@include("parts.testimonials")
<!-- End Testimonial -->

<!-- Blog -->
@include("parts.blog")
<!-- End Blog -->

<!-- Register -->
<div class="register-area">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-4">
                <div class="register-item">
                    <h3>
                        <span class="odometer" data-count="6,789,990">00</span>
                    </h3>
                    <p>Registered Users</p>
                </div>
            </div>
            <div class="col-6 col-sm-4 col-lg-4">
                <div class="register-item">
                    <h3>
                        <span class="odometer" data-count="8,098,234">00</span>
                    </h3>
                    <p>Global Employers</p>
                </div>
            </div>
            <div class="col-6 offset-4 offset-sm-0 col-sm-4 col-lg-4">
                <div class="register-item">
                    <h3>
                        <span class="odometer" data-count="3,678,890">00</span>
                    </h3>
                    <p>Available Jobs</p>
                </div>
            </div>
        </div>
        <ul>
            <li>
                <a href="" target="_blank">
                    <img src="{{asset("storage/images/app10000.png")}}" alt="App">
                </a>
            </li>
            <li>
                <a href="" target="_blank">
                    <img src="{{asset("storage/images/app20000.png")}}" alt="App">
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- End Register -->


<!-- Footer -->
@include("parts.footer")
<!-- End Copyright -->


@include("files.js")
</body>
</html>

