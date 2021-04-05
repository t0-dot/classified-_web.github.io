<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/event-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:09:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <title>BOOTCLASIFIED - Responsive Classified Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">


    <link href="assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <!-- bxSlider CSS file -->
    <link href="assets/plugins/bxslider/jquery.bxslider.css" rel="stylesheet"/>

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->
    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
    <script src="assets/plugins/modernizr/modernizr-custom.js"></script>


</head>
<body>
<div id="wrapper">


   <?php include 'header.php';?>
    <!-- /.header -->

    <label class="theme-switcher theme-switcher-left-right">
    	<span class="theme-switcher-label" data-on="Dark Off" data-off="Dark Mode"></span>
    	<span class="theme-switcher-handle"></span>
    </label>


    <div class="intro-modern">
        <div class="inner">
            <div class="container text-center">
                <p class="title-6-sub top animateme fittext3 animated fadeIn">
                    Browse Event

                </p>
                <h1 class="title-6 animated fadeInDown"> Events Classified </h1>


                <div class="row search-row animated fadeInUp">
                    <div class="col-xl-4 col-sm-4 search-col relative">
                        <div class="search-col-inner">
                        <i class="icon-docs icon-append"></i>
                        <div class="search-col-input">
                            <input type="text" name="ads" class="form-control has-icon "  placeholder="Search events nearby" value="">
                        </div>
                    </div></div>
                    <div class="col-xl-4 col-sm-4 search-col relative locationicon">
                        <div class="search-col-inner">
                        <i class="icon-location-2 icon-append"></i>
                        <div class="search-col-input">

                            <input type="text" name="country" id="autocomplete-ajax"
                                   class="form-control locinput input-rel searchtag-input has-icon"
                                   placeholder="City or Location" value="">
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-4 search-col">
                        <button class="btn btn-primary btn-search btn-block  btn-gradient"><strong>Search</strong>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="layer-bg">

        </div>

        <div class="bg-slider-wrapper">
            <div class="bg-slider">
                <div class="bg-item" style="background-image: url(images/events/1-large_x2.jpg);"></div>
                <div class="bg-item" style="background-image: url(images/events/5-large_x2.jpg);"></div>
                <div class="bg-item" style="background-image: url(images/events/6-large_x2.jpg);"></div>
            </div>
        </div>
    </div>
    <!-- /.intro -->

    <section class="event-featured section-ev">
        <div class="container">
            <div class="col-12 title-box text-center section-header">
                <h2 class="title"> Featured Events in <a class="ev">NewYork</a></h2>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card card-event info-overlay featured">
                        <div class="img has-background"
                             style="background-image: url(images/events/10-large.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-success">featured</span>
								</span>

                                <div class="event-pop-info">
                                    <p class="price">$120.00</p>
                                    <p class="publisher">by <strong>Sports Olc.</strong></p>
                                    <div class="time">
                                        <i class="fa fa-calendar-alt"></i>
                                        Starts on Fri, Jan 19
                                    </div>
                                </div>
                            </a>
                            <!-- //
                            to generate 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title"><a href="event-details.php">The Ultimate Deal On Race</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card card-event info-overlay featured">
                        <div class="img has-background"
                             style="background-image: url(images/events/4-large.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-success">featured</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$20.00</p>
                                    <p class="publisher">by <strong>Global Eve</strong></p>
                                    <div class="time">
                                        <i class="fa fa-calendar-alt"></i>
                                        Starts on Mon, Sept 18
                                    </div>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title"><a href="event-details.php"> Trance festivals cape town 2018 </a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card card-event info-overlay featured">
                        <div class="img has-background"
                             style="background-image: url(images/events/5-large.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-success">featured</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$80.00</p>
                                    <p class="publisher">by <strong>Concert & Fest. </strong></p>
                                    <div class="time">
                                        <i class="fa fa-calendar-alt"></i>
                                        Starts on Wed, Oct 18
                                    </div>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title"><a href="event-details.php"> Ways To Reinvent Your concert</a>
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-6">
                    <div class="card card-event info-overlay featured">
                        <div class="img has-background"
                             style="background-image: url(images/events/6-large.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-success">featured</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$60.00</p>
                                    <p class="publisher">by <strong>Rock Nat. </strong></p>
                                    <div class="time">
                                        <i class="fa fa-calendar-alt"></i>
                                        Starts on Sat, Dec 18
                                    </div>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title"><a href="event-details.php">Texas Rock & Metal Fest 2018</a>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>


            <div style="clear: both"></div>

        </div>
    </section>
    <!-- /.main-container -->

    <section class="event-listing section-ev">
        <div class="container">
            <div class="section-header listing-title-holder">


                <div class="row for-list align-center">
                    <div class="event-title-holder  col-lg-4 col-md-3 col-sm-12 mr-auto">
                        <h2 class="title text-left"> EXPLORE YOUR EVENTS </h2>

                    </div>

                    <div class="event-filters-wrapper col">
                        <div class="input-group row">
                            <!-- Example single danger button -->
                            <div class="btn-group col ">
                                <button type="button" class="btn btn-default btn-block btn-line dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    FEATURED EVENTS
                                </button>
                                <div class="dropdown-menu dropdown-line">
                                    <a class="dropdown-item" href="#">Featured events</a>
                                    <a class="dropdown-item" href="#">New added</a>
                                    <a class="dropdown-item" href="#">Popular</a>
                                    <a class="dropdown-item" href="#">recommended</a>
                                </div>
                            </div>

                            <div class="btn-group col ">
                                <button type="button" class="btn btn-default btn-block btn-line dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    By Date
                                </button>
                                <div class="dropdown-menu dropdown-line">
                                    <a class="dropdown-item" href="#">All Events</a>
                                    <a class="dropdown-item" href="#"> Today</a>
                                    <a class="dropdown-item" href="#"> This week</a>
                                    <a class="dropdown-item" href="#"> Next Month</a>
                                </div>
                            </div>

                            <div class="btn-group col">
                                <button type="button" class="btn btn-default btn-block btn-line dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    By Location
                                </button>

                                <div class="dropdown-menu dropdown-line has-form stay">
                                    <div class="dropdown-item ">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio"
                                                   class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">5 miles from
                                                zip</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio"
                                                   class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">5 miles from
                                                zip</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio"
                                                   class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">5 miles from
                                                zip</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio"
                                                   class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">10 miles from
                                                zip</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-item">
                                        <a class="dropdown-clear-filter">X</a>
                                    </div>

                                </div>


                            </div>

                            <div class="btn-group col">
                                <button type="button" class="btn btn-default btn-block btn-line dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    By Category
                                </button>
                                <div class="dropdown-menu dropdown-line has-form stay">
                                    <div class="dropdown-item ">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Popular</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Music</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label" for="customCheck3">Food and
                                                drink</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">Business </label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Technology</label>
                                        </div>
                                    </div>

                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label" for="customCheck7">Sports and
                                                fitness</label>
                                        </div>
                                    </div>


                                    <div class="dropdown-divider"></div>
                                    <div class="dropdown-item">
                                        <a class="dropdown-clear-filter">X</a>
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/1-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> FREE</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">FREE</p>
                                    <p class="publisher">by <strong>Viagrand</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">exercitation consequat aliqua et nulla nostrud duis mollit</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Valle, Louisiana, 1259 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-03-19 03:08pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Parrish Zamora </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/2-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $292</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$292</p>
                                    <p class="publisher">by <strong>Musix</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">aute ea proident labore nulla pariatur quis aliqua</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Seymour, Kentucky, 3314 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-04-01 11:05pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Calderon White </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/3-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $354</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$354</p>
                                    <p class="publisher">by <strong>Zaggles</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">culpa qui ut sint voluptate nisi sunt reprehenderit</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Vincent, Missouri, 1554 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-03-07 12:29pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Beatriz Norris </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/4-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $159</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$159</p>
                                    <p class="publisher">by <strong>Callflex</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">nulla cillum dolore nulla dolore do elit aliquip</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Springville, Arizona, 6924 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-01-05 09:26pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Kerri Stevenson </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/5-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> FREE</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">FREE</p>
                                    <p class="publisher">by <strong>Exodoc</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">ex ullamco exercitation deserunt occaecat dolore excepteur quis</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Singer, Iowa, 1079 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-02-01 07:23pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Good Moore </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/6-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $179</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$179</p>
                                    <p class="publisher">by <strong>Austex</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">velit aute exercitation ut labore quis velit culpa</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Belvoir, North Carolina, 5102 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-01-01 02:06pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Baxter Henderson </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/7-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $167</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$167</p>
                                    <p class="publisher">by <strong>Zillacom</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">minim duis amet elit nostrud adipisicing tempor occaecat</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Boonville, Florida, 8794 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-03-21 04:21pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Angelita Potts </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/8-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $167</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$120</p>
                                    <p class="publisher">by <strong>Zillacom</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">minim duis amet elit nostrud adipisicing tempor occaecat</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Boonville, Florida, 8794 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-03-21 04:21pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Angelita Potts </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 event-item-col">
                    <div class="card card-event info-overlay">
                        <div class="img has-background"
                             style="background-image: url(images/events/9-large.jpg); background-size:cover ">
                            <div class="pop-info ">
                                    <span class="event-badges ">
									    <span class="badge price-tag big badge-default"> $120</span>
								    </span>
                            </div>

                            <a href="event-details.php" class="event-pop-link">
                                    <span class="event-badges ">
									<span class="badge badge-danger"> TOP RATED</span>
								</span>

                                <div class="event-pop-info">

                                    <p class="price">$120</p>
                                    <p class="publisher">by <strong>Insectus</strong></p>
                                    <div class="event-rating">
                                        <div class="star">
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                            <i class="fa  fa-star"></i>
                                        </div>
                                        <div class="review-count"> 5.0 | 101 reviews</div>
                                    </div>

                                </div>
                            </a>


                            <!-- //
                            To make 100% fit to box & responsive i used a fake image based on actual image ratio.
                            Tf you think you will use all same size image then you can remove background image and
                            use image below as a main src image.
                            -->
                            <a href="event-details.php">
                                <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                     src="images/10x6.gif"> </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="event-details.php">aliqua amet adipisicing eu Lorem aliqua laborum cupidatat</a>
                            </h4>
                            <p class="card-text hide">Donec imperdiet leo ac ipsum blandit auctor.</p>

                            <div class="card-event-info">
                                <p class="event-location"><i class="fa icon-location-1"></i>
                                    <a class="location" href="#">Sanford, Idaho, 6419 </a></p>
                                <p class="event-time"><i class="fa icon-calendar-1"></i> 2018-03-04 02:20pm </p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="pull-left left">
                                <div class="">by <a href="aurthor.php">Nell Hopper </a></div>
                            </div>
                            <div class="pull-right right social-link">
                                <a href="#"><i class="fa  fa-share-alt"></i> </a>

                                <a href="#"><i class="fa  fa-heart"></i> </a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="load-more  col-lg-12 text-center">
                    <a class="btn btn-default btn-wide btn-more " href="event-category.php">
                        <i class="fas fa-plus"></i> Load More
                    </a>
                </div>

            </div>


        </div>

    </section>

    <section class="event-category section-ev">
        <div class="container">
            <div class="col-12 title-box text-center section-header">
                <h2 class="title"> Explore by category</h2>
            </div>


            <div class="row">

                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/1.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Fitness </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/9.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">

                                <div class="event-pop-info">
                                    <p class="ec-title"> Travel </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>

                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/4.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Music </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/5.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Learning </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/6.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Photography </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/7.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Opera </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/3.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Tennis </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/8.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Education </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>

                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/2.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Running </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>

                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/10.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Video Games </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>

                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/11.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Fashion & Beauty </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>

                <div class=" col-md-3 col-sm-6 col-6 event-item-col">
                    <div class="card card-event info-overlay overlay-visible card-category">
                        <div class="img has-background"
                             style="background-image: url(images/events/category/12.jpg); background-size:cover ">
                            <a href="event-details.php" class="event-pop-link">


                                <div class="event-pop-info">

                                    <p class="ec-title"> Food </p>
                                </div>

                            </a>
                            <img alt="340x230" class="card-img-top img-responsive" data-holder-rendered="true"
                                 src="images/3x1.gif">
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </section>


    <div class="page-info hasOverly" style="background: url(images/bg.jpg); background-size:cover">
        <div class="bg-overly">
            <div class="container text-center section-promo">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-group"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100K+</span></h5>

                                    <div class="iconbox-wrap-text">Events</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-th-large-1"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>100</span></h5>

                                    <div class="iconbox-wrap-text">Categories</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6  col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon  icon-map"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>700</span></h5>

                                    <div class="iconbox-wrap-text">Location</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                    <div class="col-sm-3 col-xs-6 col-xxs-12">
                        <div class="iconbox-wrap">
                            <div class="iconbox">
                                <div class="iconbox-wrap-icon">
                                    <i class="icon icon-facebook"></i>
                                </div>
                                <div class="iconbox-wrap-content">
                                    <h5><span>50,000</span></h5>

                                    <div class="iconbox-wrap-text"> Facebook Fans</div>
                                </div>
                            </div>
                            <!-- /..iconbox -->
                        </div>
                        <!--/.iconbox-wrap-->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /.page-info -->

    <div class="page-bottom-info">
        <div class="page-bottom-info-inner">

            <div class="page-bottom-info-content text-center">
                <h1>If you have any questions, comments or concerns, please call the Classified Advertising department
                    at (000) 555-5556</h1>
                <a class="btn  btn-lg btn-primary-dark" href="tel:+000000000">
                    <i class="icon-mobile"></i> <span class="hide-xs color50">Call Now:</span> (000) 555-5555 </a>
            </div>

        </div>
    </div>

    <?php include 'footer.php';?>

</div>
<!-- /.wrapper -->


<!-- Modal Change City -->

<div class="modal fade modalHasList" id="select-country" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title uppercase font-weight-bold" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>

				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
						class="sr-only">Close</span></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="row" style="padding: 0 20px">
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-af"> </span>
								<a href="#AF">
									Afghanistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-al"> </span>
								<a href="#AL">
									Albania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dz"> </span>
								<a href="#DZ">
									Algeria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ad"> </span>
								<a href="#AD">
									Andorra
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ao"> </span>
								<a href="#AO">
									Angola
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ar"> </span>
								<a href="#AR">
									Argentina
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-am"> </span>
								<a href="#AM">
									Armenia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-au"> </span>
								<a href="#AU">
									Australia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-at"> </span>
								<a href="#AT">
									Austria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-az"> </span>
								<a href="#AZ">
									Azerbaijan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bs"> </span>
								<a href="#BS">
									Bahamas
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bh"> </span>
								<a href="#BH">
									Bahrain
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bd"> </span>
								<a href="#BD">
									Bangladesh
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-by"> </span>
								<a href="#BY">
									Belarus
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-be"> </span>
								<a href="#BE">
									Belgium
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bz"> </span>
								<a href="#BZ">
									Belize
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bj"> </span>
								<a href="#BJ">
									Benin
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bo"> </span>
								<a href="#BO">
									Bolivia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ba"> </span>
								<a href="#BA">
									Bosnia and Herzegovina
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bw"> </span>
								<a href="#BW">
									Botswana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-br"> </span>
								<a href="#BR">
									Brazil
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bn"> </span>
								<a href="#BN">
									Brunei
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bg"> </span>
								<a href="#BG">
									Bulgaria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bf"> </span>
								<a href="#BF">
									Burkina Faso
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-bi"> </span>
								<a href="#BI">
									Burundi
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kh"> </span>
								<a href="#KH">
									Cambodia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cm"> </span>
								<a href="#CM">
									Cameroon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ca"> </span>
								<a href="#CA">
									Canada
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cv"> </span>
								<a href="#CV">
									Cape Verde
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cf"> </span>
								<a href="#CF">
									Central African Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-td"> </span>
								<a href="#TD">
									Chad
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cl"> </span>
								<a href="#CL">
									Chile
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cn"> </span>
								<a href="#CN">
									China
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-co"> </span>
								<a href="#CO">
									Colombia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-km"> </span>
								<a href="#KM">
									Comoros
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cg"> </span>
								<a href="#CG">
									Congo - Brazzaville
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cd"> </span>
								<a href="#CD">
									Congo - Kinshasa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cr"> </span>
								<a href="#CR">
									Costa Rica
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hr"> </span>
								<a href="#HR">
									Croatia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cu"> </span>
								<a href="#CU">
									Cuba
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cy"> </span>
								<a href="#CY">
									Cyprus
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-cz"> </span>
								<a href="#CZ">
									Czech Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ci"> </span>
								<a href="#CI">
									Côte d’Ivoire
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dk"> </span>
								<a href="#DK">
									Denmark
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dj"> </span>
								<a href="#DJ">
									Djibouti
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-dm"> </span>
								<a href="#DM">
									Dominica
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-do"> </span>
								<a href="#DO">
									Dominican Republic
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ec"> </span>
								<a href="#EC">
									Ecuador
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-eg"> </span>
								<a href="#EG">
									Egypt
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gq"> </span>
								<a href="#GQ">
									Equatorial Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-er"> </span>
								<a href="#ER">
									Eritrea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ee"> </span>
								<a href="#EE">
									Estonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-et"> </span>
								<a href="#ET">
									Ethiopia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fj"> </span>
								<a href="#FJ">
									Fiji
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fi"> </span>
								<a href="#FI">
									Finland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fr"> </span>
								<a href="#FR">
									France
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ga"> </span>
								<a href="#GA">
									Gabon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gm"> </span>
								<a href="#GM">
									Gambia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ge"> </span>
								<a href="#GE">
									Georgia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-de"> </span>
								<a href="#DE">
									Germany
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gh"> </span>
								<a href="#GH">
									Ghana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gi"> </span>
								<a href="#GI">
									Gibraltar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gr"> </span>
								<a href="#GR">
									Greece
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gl"> </span>
								<a href="#GL">
									Greenland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gd"> </span>
								<a href="#GD">
									Grenada
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gp"> </span>
								<a href="#GP">
									Guadeloupe
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gu"> </span>
								<a href="#GU">
									Guam
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gt"> </span>
								<a href="#GT">
									Guatemala
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gn"> </span>
								<a href="#GN">
									Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gw"> </span>
								<a href="#GW">
									Guinea-Bissau
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gy"> </span>
								<a href="#GY">
									Guyana
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ht"> </span>
								<a href="#HT">
									Haiti
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hn"> </span>
								<a href="#HN">
									Honduras
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hk"> </span>
								<a href="#HK">
									Hong Kong SAR China
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-hu"> </span>
								<a href="#HU">
									Hungary
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-is"> </span>
								<a href="#IS">
									Iceland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-in"> </span>
								<a href="#IN">
									India
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-id"> </span>
								<a href="#ID">
									Indonesia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ir"> </span>
								<a href="#IR">
									Iran
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-iq"> </span>
								<a href="#IQ">
									Iraq
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ie"> </span>
								<a href="#IE">
									Ireland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-il"> </span>
								<a href="#IL">
									Israel
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-it"> </span>
								<a href="#IT">
									Italy
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jm"> </span>
								<a href="#JM">
									Jamaica
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jp"> </span>
								<a href="#JP">
									Japan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-jo"> </span>
								<a href="#JO">
									Jordan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kz"> </span>
								<a href="#KZ">
									Kazakhstan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ke"> </span>
								<a href="#KE">
									Kenya
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ki"> </span>
								<a href="#KI">
									Kiribati
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kw"> </span>
								<a href="#KW">
									Kuwait
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kg"> </span>
								<a href="#KG">
									Kyrgyzstan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-la"> </span>
								<a href="#LA">
									Laos
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-lv"> </span>
								<a href="#LV">
									Latvia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lb"> </span>
								<a href="#LB">
									Lebanon
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ls"> </span>
								<a href="#LS">
									Lesotho
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lr"> </span>
								<a href="#LR">
									Liberia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ly"> </span>
								<a href="#LY">
									Libya
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-li"> </span>
								<a href="#LI">
									Liechtenstein
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lt"> </span>
								<a href="#LT">
									Lithuania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lu"> </span>
								<a href="#LU">
									Luxembourg
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mk"> </span>
								<a href="#MK">
									Macedonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mg"> </span>
								<a href="#MG">
									Madagascar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mw"> </span>
								<a href="#MW">
									Malawi
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-my"> </span>
								<a href="#MY">
									Malaysia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mv"> </span>
								<a href="#MV">
									Maldives
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ml"> </span>
								<a href="#ML">
									Mali
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mt"> </span>
								<a href="#MT">
									Malta
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mq"> </span>
								<a href="#MQ">
									Martinique
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mr"> </span>
								<a href="#MR">
									Mauritania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mu"> </span>
								<a href="#MU">
									Mauritius
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-yt"> </span>
								<a href="#YT">
									Mayotte
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mx"> </span>
								<a href="#MX">
									Mexico
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-fm"> </span>
								<a href="#FM">
									Micronesia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-md"> </span>
								<a href="#MD">
									Moldova
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mc"> </span>
								<a href="#MC">
									Monaco
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mn"> </span>
								<a href="#MN">
									Mongolia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-me"> </span>
								<a href="#ME">
									Montenegro
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ma"> </span>
								<a href="#MA">
									Morocco
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mz"> </span>
								<a href="#MZ">
									Mozambique
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-mm"> </span>
								<a href="#MM">
									Myanmar [Burma]
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-na"> </span>
								<a href="#NA">
									Namibia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-np"> </span>
								<a href="#NP">
									Nepal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nl"> </span>
								<a href="#NL">
									Netherlands
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nc"> </span>
								<a href="#NC">
									New Caledonia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-nz"> </span>
								<a href="#NZ">
									New Zealand
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ni"> </span>
								<a href="#NI">
									Nicaragua
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ne"> </span>
								<a href="#NE">
									Niger
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ng"> </span>
								<a href="#NG">
									Nigeria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kp"> </span>
								<a href="#KP">
									North Korea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-no"> </span>
								<a href="#NO">
									Norway
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-om"> </span>
								<a href="#OM">
									Oman
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pk"> </span>
								<a href="#PK">
									Pakistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ps"> </span>
								<a href="#PS">
									Palestinian Territories
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pa"> </span>
								<a href="#PA">
									Panama
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pg"> </span>
								<a href="#PG">
									Papua New Guinea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-py"> </span>
								<a href="#PY">
									Paraguay
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pe"> </span>
								<a href="#PE">
									Peru
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ph"> </span>
								<a href="#PH">
									Philippines
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-pl"> </span>
								<a href="#PL">
									Poland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pt"> </span>
								<a href="#PT">
									Portugal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-pr"> </span>
								<a href="#PR">
									Puerto Rico
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-qa"> </span>
								<a href="#QA">
									Qatar
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ro"> </span>
								<a href="#RO">
									Romania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ru"> </span>
								<a href="#RU">
									Russia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-rw"> </span>
								<a href="#RW">
									Rwanda
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-re"> </span>
								<a href="#RE">
									Réunion
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ws"> </span>
								<a href="#WS">
									Samoa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sa"> </span>
								<a href="#SA">
									Saudi Arabia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sn"> </span>
								<a href="#SN">
									Senegal
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-rs"> </span>
								<a href="#RS">
									Serbia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sl"> </span>
								<a href="#SL">
									Sierra Leone
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sg"> </span>
								<a href="#SG">
									Singapore
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sk"> </span>
								<a href="#SK">
									Slovakia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-si"> </span>
								<a href="#SI">
									Slovenia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-so"> </span>
								<a href="#SO">
									Somalia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-za"> </span>
								<a href="#ZA">
									South Africa
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-kr"> </span>
								<a href="#KR">
									South Korea
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-es"> </span>
								<a href="#ES">
									Spain
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-lk"> </span>
								<a href="#LK">
									Sri Lanka
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sd"> </span>
								<a href="#SD">
									Sudan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sz"> </span>
								<a href="#SZ">
									Swaziland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-se"> </span>
								<a href="#SE">
									Sweden
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ch"> </span>
								<a href="#CH">
									Switzerland
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-sy"> </span>
								<a href="#SY">
									Syria
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tw"> </span>
								<a href="#TW">
									Taiwan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tj"> </span>
								<a href="#TJ">
									Tajikistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tz"> </span>
								<a href="#TZ">
									Tanzania
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-th"> </span>
								<a href="#TH">
									Thailand
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tl"> </span>
								<a href="#TL">
									Timor-Leste
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tg"> </span>
								<a href="#TG">
									Togo
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tn"> </span>
								<a href="#TN">
									Tunisia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tr"> </span>
								<a href="#TR">
									Turkey
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-tm"> </span>
								<a href="#TM">
									Turkmenistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ug"> </span>
								<a href="#UG">
									Uganda
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ua"> </span>
								<a href="#UA">
									Ukraine
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ae"> </span>
								<a href="#AE">
									United Arab Emirates
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-gb"> </span>
								<a href="#UK">
									United Kingdom
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-us"> </span>
								<a href="#US">
									United States
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-uy"> </span>
								<a href="#UY">
									Uruguay
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-uz"> </span>
								<a href="#UZ">
									Uzbekistan
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-vu"> </span>
								<a href="#VU">
									Vanuatu
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ve"> </span>
								<a href="#VE">
									Venezuela
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-vn"> </span>
								<a href="#VN">
									Vietnam
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-ye"> </span>
								<a href="#YE">
									Yemen
								</a>
							</li>
						</ul>
						<ul class="cat-list col-sm-3 col-xs-6 ">
							<li>
								<span  class="flag-icon flag-icon-zm"> </span>
								<a href="#ZM">
									Zambia
								</a>
							</li>
							<li>
								<span  class="flag-icon flag-icon-zw"> </span>
								<a href="#ZW">
									Zimbabwe
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- /.modal -->


<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="../../../../cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/jquery/jquery-3.3.1.min.js">\x3C/script>')</script>
<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/js/vendors.min.js"></script>

<!-- include custom script for site  -->
<script src="assets/js/main.min.js"></script>



<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="assets/plugins/autocomplete/jquery.mockjax.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="assets/plugins/autocomplete/usastates.js"></script>

<script type="text/javascript" src="assets/plugins/autocomplete/autocomplete-demo.js"></script>


</body>

<!-- Mirrored from templatecycle.com/demo/bootclassified-5.1/dist/event-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Mar 2021 09:13:27 GMT -->
</html>
