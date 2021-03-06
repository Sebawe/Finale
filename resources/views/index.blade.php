
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>Mega Jordan</title>
    <!-- Meta Description -->
    
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700&amp;subset=latin-ext" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->

    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
    
    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body id="body">

    <!-- preloader -->
    <div id="preloader">
        <img src="img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

    <!-- 
        Fixed Navigation
        ==================================== -->
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand" href="#body">
                    <h1 id="logo">
                        Mega Jordan
                    </h1>
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">Home</a></li>
                    
                    <li><a href="#works" title="المنتجات">Products</a></li>
                    <li><a href="#team" title="الماركات">Brands</a></li>
                    <li><a href="#contact" title="تواصل معنا">Contact</a></li>
                    <li><a href="/maintenance" title="الصيانة">Maintenance</a></li>
                    <li><a href="https://www.facebook.com/MegaJO" class="fa fa-facebook" target="_blank"></a>
                    </li>
                    <li><a href="tel:079-130-3421" class="fa fa-phone"> <span class="phone">(06) 568 0585 </span></a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>
    <!--
        End Fixed Navigation
        ==================================== -->



    <!--
        Home Slider
        ==================================== -->

    <section id="slider">
        <div id="myCarousel"  class="carousel slide" data-ride="carousel">

            <!-- Indicators bullet -->
           
            <!-- End Indicators bullet -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <!-- single slide -->
                <div class="item active" style="background-image: url(img/network.jpg); background-position: center 10%;">

                </div>

                <!-- end single slide -->

                <!-- single slide -->
                <div class="item" style="background-image: url(img/banner.jpg);">

                </div>


                <div class="item active" style="background-image: url(img/slider3.png);">

                </div>

                
            </div>

            <a class="left arrow2 carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class="fa fa-angle-left fa-3x"></i>
              </a>
              <a class="right arrow1 carousel-control-prev" href="#myCarousel" role="button" data-slide="next">
              <i class="fa fa-angle-right fa-3x"></i>
              </a>


            <!-- end single slide -->

        </div>
        <!-- End Wrapper for slides -->

       
    </section>
    <section class="info-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 info">
                    <img src="img/main-logo.png" class="main-logo lap-logo">
                </div>
            </div>

        </div>

        <section id="works" class="works clearfix">
            <div class="container">
                <div class="row">
    
                  
    
                    <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                        <ul class="text-center">
                            <li><a href="javascript:;" data-filter="all" class="active filter">Mega Choice</a></li>
                            <li><a href="javascript:;" data-filter=".laptops" class="filter">Laptops</a></li>
                            <li><a href="javascript:;" data-filter=".desktops" class="filter">Desktops</a></li>
                            <li><a href="javascript:;" data-filter=".printers" class="filter">Printers</a></li>
                            <li><a href="javascript:;" data-filter=".monitors" class="filter">Monitors</a></li>
                            <li><a href="/products" data-filter="all" class="filter" target="_blank">See More</a></li>
                        </ul>
                    </div>
    
                </div>
            </div>
    
            <div class="project-wrapper" id="style-7">
                @foreach ($product as $i)
                    <figure class="mix work-item {{$i->category}}" data-toggle="modal" data-target="#modal{{$i->id}}">
                            <img src="{{Storage::url($i->id) .'?'. time()}}" style="object-fit:cover;">
                            <figcaption class = "overlay">
                                    <a class="" rel="works" title="{{$i->title}}"><i class="fa fa-eye fa-lg"></i> </a>
                                    <h4>{{$i->title}}</h4>
                                    <p>{{$i->description}}</p>
                                </figcaption>
                    </figure>

                    <div class="modal fade" id="modal{{$i->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="aria{{$i->modal}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                    <h3 class="modal-title" id="exampleModalLabel" style="color:black">{{$i->title}}</h3>
                                        
                                    </div>
                                    <div class="modal-body" style="color:black">
                                        <div class="card">
                                            <img class="mx-auto" style="max-width: 380px; display:block; margin-right:auto;margin-left:auto;" src="{{Storage::url($i->id) .'?'. time()}}"
                                                    alt="">
                                            <div class="card-body">
                                                <h3 class="card-title">
                                                    <a href="#">{{$i->title}}</a>
                                                </h3>
                                            <h2>{{$i->price}} JD</h2>
                                            <h2 class="card-text" style="font-family: monospace: color:black;">{{$i->description}}</h2>
                                            </div>
                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                            
                                    </div>
                                </div>
                            </div>
                            </div>
                @endforeach
           
                    <figure class="mix work-item monitors laptops printers desktops">
                            <a href="/products"  title="See More" class="see-more" target="_blank">
                        <img src="img/works/see-more.png" alt="">
                    </a>
                    </figure>
            
                
    
            </div>
    
    
        </section>

        


    </section>


    

    
    <!--
        End Features
        ==================================== -->


    <!--
        Our Works
        ==================================== -->

   

    <!--
        End Our Works
        ==================================== -->

    <!--
        Meet Our Team
        ==================================== -->

        <section id="team" class="team">
            <div class="container">
                <div class="row">
    
                    <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                        <h2>Brands</h2>
                        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                    </div>
    
                    <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
    
                    </div>
    
                    <!-- single member -->
                    @foreach ($brand as $x)
                        <figure class="team-member col-md-1 col-sm-6 col-xs-6 text-center wow fadeInUp animated"
                        data-wow-duration="500ms" data-wow-delay="{{400 + (100 * number_format($x->id))}}ms">
                            <div class="member-thumb">
                                <img src="{{asset("storage/brands/$x->name").'?'. time()}}" style="max-width:90%" alt="Team Member" class="">
                            </div>
                        </figure>
                    @endforeach
                    
                  
                </div>
            </div>
        </section>

    <!--
        End Meet Our Team
        ==================================== -->

    <!--
        Some fun facts
        ==================================== -->

    <section id="facts" class="facts">
        
        
                
                    <div class="col-lg-6 col-md-8 mycard d-flex" style = "background: url(img/works/security-slider-image-cropped-2.jpg);  ">
                       
                        
                        <div class="mydiv d-flex" style = "justify-content:center">
                            <h1><strong>Services</strong></h1>
                        </div>
                    </div>
                  
                    <div class="col-lg-6 col-md-8 mycard" style="background: url(img/works/Untitled.png); justify-content: flex-end;">
                      <div class="mydiv d-flex" style = "justify-content:center">
                           <h1><strong>Maintenance</strong></h1>
                       </div></a>
                        
                    </div>
                
        
                
    </section>
<br>
    <!--
        End Some fun facts
        ==================================== -->
        <section class="bg-light" id="ourteam">
            <div class="container">
              <div class="row">
                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Our Team</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

              </div>
              <div class="row">
                @foreach ($team as $x)
                <div class="col-sm-3 text-center wow fadeInUp animated"
              data-wow-duration="500ms" data-wow-delay="{{900 + ((number_format($x->id) - 1) * 200)}}ms">
                  <div class="team-member">
                        <div class="mx-auto rounded-circle" src="{{asset("storage/teamers/$x->id").'?'. time()}}" alt="" style=" width: 180px;
                        height: 180px;
                        border: 7px solid #fff;
                        border-radius: 50%;
                        overflow: hidden
                        ">
                        <img class="mx-auto rounded-circle" src="{{asset("storage/teamers/$x->id").'?'. time()}}" alt="" width="180" style="position:relative; top: -20%; left:-5%">
                        </div>
                    
                    <h4 class="team-name">{{$x->name}}</h4>
                    
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="http://www.{{$x->link}}">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      
                      
                    </ul>
                  </div>
                </div>
                @endforeach
               
               
       
              </div>
              
            </div>
          </section>


    <!--
        Contact Us
        ==================================== -->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50" style="width: 100%;">

                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Contact us</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- contact address 
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3>Or visit us</h3>
                        <p>27b/Wasfi-tal st.</p>
                        <p>(079-130-3421)</p>
                    </div>
                </div>
                end contact address -->

                <!-- contact form -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown animated p-0" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <div class="contact-form" id="contact-form">
                        <form method="POST" action="/" id="contact-form w-100">
                            {{ csrf_field() }}
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control" required="true">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="true">
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message" class="form-control" style = "height: 100px" required="true"></textarea>
                            </div>
                            <div class="input-group" style="margin-top:20px;">
                                <input type="submit" id="form-submit" class="pull-right" value="Send message">
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
                <!-- end contact form -->

                <!-- footer social links
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <ul class="footer-social">
                       
                        <li><a href="https://www.twitter.com/Themefisher"><i class="fa fa-twitter fa-2x"></i></a></li>
                        
                        <li><a href="https://www.facebook.com/Themefisher"><i class="fa fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
                end footer social links -->

            </div>
        </div>

        <div class="mapouter" style = "width: 100%"><div class="gmap_canvas"><iframe height="220" id="gmap_canvas" src="https://maps.google.com/maps?q=Mega%20Jordan%20for%20Computer&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width:100%;"></iframe></div><style>.mapouter{text-align:right;height:220px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:220px;width:100%;}</style></div>

    </section>

    <!--
        End Contact Us
        ==================================== -->


    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
                    <h1 class="mygreen">Mega Jordan</h1>
                       <div class="footer-single">
                        
                        
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="footer-single">
                        <h6>Subscribe </h6>
                        <form action="#" class="subscribe">
                            <input type="text" name="subscribe" id="subscribe">
                            <input type="submit" value="&#8594;" id="subs">
                        </form>
                        <p>eusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="footer-single">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="#">Inside Us</a></li>
                            <li><a href="#">Flickr</a></li>
                            <li><a href="#">Google</a></li>
                            <li><a href="#">Forum</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="footer-single">
                        <h6>Support</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Market Blog</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Pressroom</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-center">
                        Copyright © 2019 . All rights reserved.
                        Designed & developed by Abdallah Ramadan & Sebawe Syaj
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
		================================================== -->
    <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="/js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 120, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true // act on asynchronously loaded content (default is true)
        });
        wow.init();
    </script>
    <!-- Custom Functions -->
    <script src="js/custom.js"></script>

    <script type="text/javascript">
        $(function () {
            /* ========================================================================= */
            /*	Contact Form
            /* ========================================================================= */

            $('#contact-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "come on, you have a name don't you?",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    email: {
                        required: "no email, no message"
                    },
                    message: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?"
                    }
                },
                submitHandler: function (form) {
                    $(form).ajaxSubmit({
                        type: "POST",
                        data: $(form).serialize(),
                        url: "process.php",
                        success: function () {
                            $('#contact-form :input').attr('disabled', 'disabled');
                            $('#contact-form').fadeTo("slow", 0.15, function () {
                                $(this).find(':input').attr('disabled',
                                    'disabled');
                                $(this).find('label').css('cursor', 'default');
                                $('#success').fadeIn();
                            });
                        },
                        error: function () {
                            $('#contact-form').fadeTo("slow", 0.15, function () {
                                $('#error').fadeIn();
                            });
                        }
                    });
                }
            });
        });

        
    </script>
</body>

</html>