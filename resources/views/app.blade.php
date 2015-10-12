<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BlackJack</title>

        <!-- Vendor CSS -->
        <link href="{{ asset('/css/ripples.min.css')}}" rel="stylesheet">

        <link href="{{ asset('material_vendors/fullcalendar/fullcalendar.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/material-icons/material-design-iconic-font.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/socicon/socicon.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link href="{{ asset('material_vendors/animate-css/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/noUiSlider/jquery.nouislider.min.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/farbtastic/farbtastic.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/summernote/summernote.css')}}" rel="stylesheet">
        <link href="{{ asset('material_vendors/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">


        <!-- CSS -->
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <script type="text/javascript"
                   src="https://maps.google.com/maps/api/js?sensor=false"></script>

       <style type="text/css">

           .top-menu > li > a.tm-search {
             background-image: url("../img/icons/search.png");
           }

           .top-menu > li > a.tm-notification {
             background-image: url("../img/icons/notification.png");
           }

           .top-menu > li > a.tm-settings {
             background-image: url("../img/icons/ellipsis.png");
           }
       </style>


    </head>
    <body>
      <header id="header">
                <ul class="header-inner">
                    <li id="menu-trigger" data-trigger="#sidebar">
                        <div class="line-wrap">
                            <div class="line top"></div>
                            <div class="line center"></div>
                            <div class="line bottom"></div>
                        </div>
                    </li>

                    <li class="logo hidden-xs">
                        <a href="index.html">BlackJack</a>
                    </li>
                </ul>

            </header>

            <section id="main">
                <section id="content">
                    @yield('content')
                </section>
            </section>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="{{ asset('js/material/jquery-2.1.1.min.js')}}"></script>
        <script src="{{ asset('js/material/bootstrap.min.js')}}"></script>

        <script src="{{ asset('material_vendors/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ asset('material_vendors/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{ asset('material_vendors/flot/plugins/curvedLines.js')}}"></script>
        <script src="{{ asset('material_vendors/sparklines/jquery.sparkline.min.js')}}"></script>
        <script src="{{ asset('material_vendors/easypiechart/jquery.easypiechart.min.js')}}"></script>

        <script src="{{ asset('material_vendors/fullcalendar/lib/moment.min.js')}}"></script>
        <script src="{{ asset('material_vendors/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{ asset('material_vendors/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
        <script src="{{ asset('material_vendors/auto-size/jquery.autosize.min.js')}}"></script>
        <script src="{{ asset('material_vendors/nicescroll/jquery.nicescroll.min.js')}}"></script>
        <script src="{{ asset('material_vendors/waves/waves.min.js')}}"></script>
        <script src="{{ asset('material_vendors/bootstrap-growl/bootstrap-growl.min.js')}}"></script>
        <script src="{{ asset('material_vendors/sweet-alert/sweet-alert.min.js')}}"></script>

        <!--FORM -->
        <script src="{{ asset('material_vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ asset('material_vendors/fileinput/fileinput.min.js')}}"></script>
        <script src="{{ asset('material_vendors/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{ asset('material_vendors/moment/moment.min.js')}}"></script>
        <script src="{{ asset('material_vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('material_vendors/noUiSlider/jquery.nouislider.all.min.js')}}"></script>
        <script src="{{ asset('material_vendors/input-mask/input-mask.min.js')}}"></script>
        <script src="{{ asset('material_vendors/farbtastic/farbtastic.min.js')}}"></script>
        <script src="{{ asset('material_vendors/summernote/summernote.min.js')}}"></script>

        <script src="{{ asset('js/material/flot-charts/curved-line-chart.js')}}"></script>
        <script src="{{ asset('js/material/flot-charts/line-chart.js')}}"></script>
        <script src="{{ asset('js/material/charts.js')}}"></script>



        <script src="{{ asset('js/material/charts.js')}}"></script>
        <script src="{{ asset('js/material/functions.js')}}"></script>
        <script src="{{ asset('js/material/demo.js')}}"></script>


    </body>
  </html>
