<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DPS| About us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    {{-- <link href="images/apple-touch-icon.png" type="images/x-icon" rel="shortcut icon"> --}}
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/core.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <!-- customizer style css -->
    <link href="#" data-style="styles" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/default.css')}}" rel="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- Modernizr JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->


    <!-- Pre Loader
	============================================ -->
    <div class="preloader">
        <div class="loading-center">
            <div class="loading-center-absolute">
                <div class="object object_one"></div>
                <div class="object object_two"></div>
                <div class="object object_three"></div>
            </div>
        </div>
    </div>
    <!-- Body main wrapper start -->
    <div class="wrapper white-bg">
        <!--Header section start-->
        <div class="header sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="logo">
                            <a href="index.html"><img src="/images/logo/Digitech-Photo-Solutions-Logo.png" alt="DPS"></a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-6">
                        <div class="mgea-full-width">
                            <div class="header-right">
                                <div class="header-menu hidden-sm hidden-xs">
                                    <div class="menu">
                                        <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                            {{-- <li><a href="about-us.html">about</a></li> --}}
                                            <li><a href="{{route('contact')}}">contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search">
                                    <div class="search-inner">
                                        <a href="#"><i class="mdi mdi-magnify"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="search-inside" style="display: none;">
                                <a href="#" class="search-close"><i class="mdi mdi-close"></i></a>
                                <div class="search-overlay"></div>
                                <div class="searchbar-inner">
                                    <div class="search">
                                        <form action="#">
                                            <input type="search" placeholder="Search here"><button type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile menu start -->
            <div class="mobile-menu-area hidden-lg hidden-md">
                <div class="container">
                    <div class="col-md-12">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">about</a></li>
                                <li><a href="contact-us.html">contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Mobile menu end -->
        </div>
       <!--Header section end-->
        <!--Breadcrubs start-->
        {{-- <div class="breadcrubs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcurbs-inner text-center">
                            <h3 class="breadcrubs-title">
                                Our blog
                            </h3>
                            <ul>
                                <li><a href="index.html">home <span>//</span>  </a></li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--Breadcrubs end--> --}}
       
       <!--contact us pages start-->
        <div class="contact-us">
            <div class="contact-information text-center ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-contact-information">
                                <div class="contact-icon">
                                    <a href="#"><i class="mdi mdi-phone"></i></a>
                                </div>
                                <p>+254731955712</p>
                                <p>+254713955712</p>
                                <p>+254777955710</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-contact-information">
                                <div class="contact-icon">
                                    <a href="#"><i class="mdi mdi-dribbble"></i></a>
                                </div>
                                <p> studio@dpsstudio.co.ke</p>
                                {{-- <p>urwebsitenaem.com</p> --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-contact-information">
                                <div class="contact-icon">
                                    <a href="#"><i class="mdi mdi-map-marker"></i></a>
                                </div>
                                <p>Ground floor Menengai II House, River Road, opposite Family Bank,</p>
                                <p>Nairobi Kenya..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!--Contact bottom section-->
            <div class="contact-bottom-section ptb-100">
                <div class="bg-img"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 contact-form-div">
                            <div class="contact-form">
                                <div class="contact-form-title">
                                    <h2>Get In Touch</h2>
                                </div>
                                <div class="contact-form-box">
                                    <p class="form-messege"></p>
                                <form id="contact-form" action="{{route('contact-us')}}" method="post">
                                    @csrf
                                        <input name="name" type="text" placeholder="Name">
                                        <input name="email" type="text" placeholder="Email">
                                        <textarea name="message" placeholder="Message"></textarea>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 map-div">
                            <div id="contact-map" class="map-area">
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d15955.264822026104!2d36.819058714975526!3d-1.2841888850135295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x182f11299e51a7b3%3A0xcd91ac01b702b7de!2sLuthuli%20Ave%2C%20Nairobi!3m2!1d-1.2841889!2d36.8278135!5e0!3m2!1sen!2ske!4v1576924707081!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact bottom section end-->
            
        </div>
       <!--contact us pages end-->
       

        <!--Footer section start-->
        <div class="footer">
            <div class="footer-top ptb-100 grey-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer">
                                <h3 class="single-footer-title">Contact us</h3>
                                <p style="color: black;">Depending on your convenience you can visit us at any of the following branches; </p>
                                <div class="single-footer-details mt-30">
                                    <p class="addresses">
                                        <strong>Address1:</strong> Ground floor Menengai II House, River Road, opposite Family Bank.<br>Nairobi Kenya.
                                    </p>
                                    <p class="addresses">
                                        <strong>Address2:</strong> Habib House ground floor, Gaberone road off Luthuli Avenue.<br>Nairobi Kenya.
                                    </p>
                                    <p class="addresses">
                                        <strong>Address2:</strong> Krishna House ground floor next to Ufundi co-operative building, Moktar Dadda Street (Jeevanjee).<br>Nairobi Kenya.
                                    </p>
                                    <p class="email">
                                        <strong> Email:</strong> studio@dpsstudio.co.ke, <br>
                                    </p>
                                    <p class="phon">
                                        <strong>Phone:</strong>(+254731955712)<br>(+254713955712)<br>(+254777955710)
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-footer">
                                <h3 class="single-footer-title">open hours</h3>
                                <div class="single-footer-details mt-30">
                                    <div class="open-list">
                                        <ul>
                                            <h4></h4>
                                            <li>jeevanjee: Monday- Friday. . .  <span>7 AM - 7PM</span></li>
                                            <li>River Road: Monday- Friday. . .  <span>7 AM - 6PM</span></li>
                                            <li>Luthuli avenue: Monday- Friday. . .  <span>7:30 AM - 6PM</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright text-center ptb-20 white-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <p>Copyright&copy; 2019.All right reserved.Created by <a target="_blank" href="">DPS</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer section end-->
    </div>
    <!-- Body main wrapper end -->
      <!-- Map js code here -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="js/map.js"></script>
    
    
    <!-- All js plugins included in this file. -->
    <script src="{{asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nivo.slider.pack.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/animated-headlines.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.collapse.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    $(document).ready(function(){
        @if(Session::has('success'))
        toastr.success("{{ Session::get('sucess') }}");
        @endif

        @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
        @endif
    //     $('#contact-form').submit(function(e){
    //         e.preventdefault();
    //         var form_data = $(this).serialize();

    //         $.ajax({
    //             url:"{{route('contact-us')}}",
    //             type:"post",
    //             data:form_data,
    //             success:function(res){
    //                 if(res.status ==1 ){

    //                 }
    //             },
    //             error:function(err){
    //                 toastr.error('there was an eror', 'error');
    //             }
    //         })
    //     })
    })
    </script>

</body>

</html>
        