<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>{{auth()->user()->name . " ". auth()->user()->last_name}} Profile | Edit</title>
    @include("auth.users.files.css")

</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="loader-inner">
        <div class="loader-inner-cirle"></div>
    </div>
</div>
<!--loader end-->
<!-- main start  -->
<div id="main">
    <!-- header -->
@include("auth.users.parts.navbar")
<!-- header end-->
    <!-- wrapper-->
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
        @include("auth.users.parts.header")
        <!--  section  end-->
            <!--  section  -->
            <section class="gray-bg main-dashboard-sec" id="sec1">
                <div class="container">
                    <!--  dashboard-menu-->
                @include("auth.users.parts.menu")
                <!-- dashboard-menu  end-->
                    <!-- dashboard content-->
                    <div class="col-md-9">




                 @yield('content')



                    </div>
                    <!-- dashboard content end-->
                </div>
            </section>
            <!--  section  end-->
            <div class="limit-box fl-wrap"></div>
        </div>
        <!--content end-->
    </div>
    <!-- wrapper end-->
    <!--footer -->
    <footer class="main-footer fl-wrap">

        <!--sub-footer-->
        <div class="copyright-area two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-item">
                            <ul>
                                <li>
                                    <a href="" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class='bx bxl-linkedin-square'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class='bx bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-item">
                            <p>Copyright @2020 Design & Developed by <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--sub-footer end -->
    </footer>
    <!--footer end -->
    <!--map-modal -->
    <div class="map-modal-wrap">
        <div class="map-modal-wrap-overlay"></div>
        <div class="map-modal-item">
            <div class="map-modal-container fl-wrap">
                <div class="map-modal fl-wrap">
                    <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                </div>
                <h3><span>Location for : </span><a href="">Listing Title</a></h3>
                <div class="map-modal-close"><i class="fal fa-times"></i></div>
            </div>
        </div>
    </div>
    <!--map-modal end -->


</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script src="{{asset("dashboard/jquery00.js")}}"></script>
<script src="{{asset("dashboard/plugins0.js")}}"></script>
<script src="{{asset("dashboard/scripts0.js")}}"></script>
<script src="{{asset("dashboard/charts00.js")}}"></script>
<script src="{{asset("dashboard/dashboar.js")}}"></script>
<script type="text/javascript" src='https://maps.google.com/maps/api/js?key=AIzaSyA7yVZI6DvDbYQJLj_SH0xYoTt0dzUfIZ4&sensor=false&libraries=places&language=fa'></script>
<script src="{{asset("js/map-add0.js")}}"></script>


<!-- link for bootstrap style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="{{asset("country")}}/assets/js/geodatasource-cr.min.js"></script>
<link rel="stylesheet" href="{{asset("country")}}/assets/css/geodatasource-countryflag-round.css">

<!-- link for semantic-ui style -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />

<!-- link to all languages po files -->
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/ar/LC_MESSAGES/ar.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/cs/LC_MESSAGES/cs.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/da/LC_MESSAGES/da.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/de/LC_MESSAGES/de.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/en/LC_MESSAGES/en.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/es/LC_MESSAGES/es.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/fr/LC_MESSAGES/fr.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/it/LC_MESSAGES/it.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/ja/LC_MESSAGES/ja.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/ko/LC_MESSAGES/ko.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/ms/LC_MESSAGES/ms.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/nl/LC_MESSAGES/nl.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/pt/LC_MESSAGES/pt.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/ru/LC_MESSAGES/ru.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/sv/LC_MESSAGES/sv.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/vi/LC_MESSAGES/vi.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/zh-cn/LC_MESSAGES/zh-cn.po" />
<link rel="gettext" type="application/x-po" href="{{asset("country")}}/languages/zh-tw/LC_MESSAGES/zh-tw.po" />

<script type="text/javascript" src="{{asset("country")}}/assets/js/Gettext.js"></script>
</body>
</html>

